<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Studio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource associated to the id.
     */
    public function indexByStudio(Studio $studio)
    {
        $games = $studio->games()->orderByDesc('released_date')->paginate(10);
        return view('games.index', compact('studio', 'games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Studio $studio)
    {
        $data = $request->validate([
            'game_name' => 'required|string|max:255',
            'released_date' => 'nullable|date',
            'genre' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'image' => 'nullable|url',
        ]);

        $studio->games()->create($data);

        return redirect()->route('studios.games.index', $studio)->with('success', 'Game created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $studio = $game->studio; 
        return view('games.edit', compact('game', 'studio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $data = $request->validate([
            'game_name'     => ['required','string','max:255'],
            'released_date' => ['nullable','date'],
            'genre'         => ['nullable','string','max:100'],
            'description'   => ['nullable','string','max:1000'],
            'image'         => ['nullable','string'], 
        ]);

        $game->update($data);

        return redirect()->route('studios.games.index', $game->studio)->with('success', 'Game successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('studios.games.index', $game->studio_id)->with('success', 'Game successfully deleted!');

    }

    /**
     * import a csv file to add multiple games / if a game already exists on db, it won't add it again
     */
    public function importCsv(Request $request, Studio $studio) 
    {
        // validates if it's a csv
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        // open file
        $file = $request->file('csv_file');
        $handle = fopen($file->getPathname(), 'r');

        // detect delimiter: if the first line has ';', use it, otherwise ','
        $firstLine = fgets($handle);
        $delimiter = (strpos($firstLine, ';') !== false) ? ';' : ',';
        rewind($handle);

        // get header row
        $header = fgetcsv($handle, 1000, $delimiter);

        $imported = 0;

        // read row by row
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            $data = array_combine($header, $row);

            // skip if game_name is empty
            if (empty($data['game_name'])) {
                continue;
            }

            // skip if game already exists (dentro do estúdio)
            if ($studio->games()->where('game_name', $data['game_name'])->exists()) {
                continue;
            }

            // game already attached to a studio, fills studio_id
            $studio->games()->create([
                'game_name'     => $data['game_name'],
                'released_date' => $data['released_date'] ?: now()->format('Y-m-d'),
                'genre'         => $data['genre'] ?? null,
                'description'   => $data['description'] ?? null,
                'image'         => $data['image'] ?? null,
            ]);

            $imported++;
        }

        fclose($handle);

        return back()->with('success', "$imported games imported successfully!");
    }

    /**
     * export games for the related studio
     */
    public function exportGamesCsv(Studio $studio)
    {
        $games = $studio->games()->get();

        $response = new StreamedResponse(function() use ($games) {
            $handle = fopen('php://output', 'w');

            // Cabeçalho
            fputcsv($handle, ['ID', 'Name', 'Description', 'Image', 'Genre', 'Released Date']);

            // Dados
            foreach ($games as $game) {
                fputcsv($handle, [
                    $game->id,
                    $game->game_name,
                    $game->description,
                    $game->image,
                    $game->genre,
                    $game->released_date
                ]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="games.csv"');

        return $response;
    }

}
