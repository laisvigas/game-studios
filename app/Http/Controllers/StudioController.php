<?php

namespace App\Http\Controllers;
use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = trim((string) request('search', ''));
        $id     = request('id');

        $totalStudios = Studio::count(); // count the number of studios

        $studios = Studio::withCount('games')
            ->when($id, function ($q) use ($id) {
                return $q->where('id', (int) $id);
            })
            ->when($search, function ($q) use ($search) {
                return $q->where('studio_name', 'like', "%{$search}%");
            })
            ->paginate(12)
            ->appends(request()->only('search', 'id'));

        return view('studios.index', compact('studios', 'totalStudios', 'search'));
    }

    public function about()
    {
        return view('about.index');
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
    public function store(Request $request)
    {
        $request->validate([
            'studio_name' => 'required|string|max:255',
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Studio::create([
            'studio_name' => $request->studio_name,
            'logo' => $request->logo,
            'description' => $request->description,
        ]);

        return redirect()->route('studios.index')->with('success', 'Studio created successfully.');
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
    public function edit(Studio $studio)
    {
        return view('studios.edit', compact('studio'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Studio $studio)
    {
        $data = $request->validate([
            'studio_name' => ['required','string','max:255'],
            'logo'        => ['nullable','url','max:2048'],
            'description' => ['nullable','string','max:1000'],
        ]);

        $studio->update($data);

        return redirect()
            ->route('studios.index') 
            ->with('success', 'Studio successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect()->route('studios.index')->with('success', 'Studio dsuccessfully deleted!');
    }

    /**
     * import a csv file to add multiple studios / if a studio already exists on db, it won't add it again
     */
    public function importCsv(Request $request)
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

            // skip if studio_name is empty
            if (empty($data['studio_name'])) {
                continue;
            }

            // skip if studio already exists
            if (Studio::where('studio_name', $data['studio_name'])->exists()) {
                continue;
            }

            // create studio
            Studio::create([
                'studio_name' => $data['studio_name'],
                'logo' => $data['logo'] ?? null,
                'description' => $data['description'] ?? null,
            ]);

            $imported++;
        }

        fclose($handle);

        return back()->with('success', "$imported studios imported successfully!");
    }
}
