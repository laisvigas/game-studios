<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Studio;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tarsier Studios
        if ($tarsier = Studio::where('studio_name', 'Tarsier Studios')->first()) {
            $tarsier->games()->createMany([
                [
                    'game_name'     => 'Little Nightmares',
                    'image'         => 'https://example.com/ln1.jpg',
                    'released_date' => '2017-04-28',
                    'genre'         => 'Puzzle-platform, horror',
                    'description'   => 'A suspense-adventure game where you help Six escape from a mysterious vessel.',
                ],
                [
                    'game_name'     => 'Little Nightmares II',
                    'image'         => 'https://example.com/ln2.jpg',
                    'released_date' => '2021-02-11',
                    'genre'         => 'Puzzle-platform, horror',
                    'description'   => 'A boy named Mono explores a distorted world, joined by Six, from the first game.',
                ],
            ]);
        }

        // FromSoftware
        if ($from = Studio::where('studio_name', 'FromSoftware')->first()) {
            $from->games()->createMany([
                [
                    'game_name'     => 'Dark Souls',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/pt/7/7c/Dark_Souls_1_capa.png',
                    'released_date' => '2011-09-22',
                    'genre'         => 'Action RPG',
                    'description'   => 'A dark fantasy RPG known for its challenging combat and deep lore.',
                ],
                [
                    'game_name'     => 'Bloodborne',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/68/Bloodborne_Cover_Wallpaper.jpg/250px-Bloodborne_Cover_Wallpaper.jpg',
                    'released_date' => '2015-03-24',
                    'genre'         => 'Action RPG',
                    'description'   => 'A gothic action RPG set in the cursed city of Yharnam, plagued by beasts.',
                ],
                [
                    'game_name'     => 'Sekiro: Shadows Die Twice',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6e/Sekiro_art.jpg/250px-Sekiro_art.jpg',
                    'released_date' => '2019-03-22',
                    'genre'         => 'Action-adventure',
                    'description'   => 'Play as a shinobi on a quest to rescue his lord in Sengoku-era Japan.',
                ],
                [
                    'game_name'     => 'Elden Ring',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/pt/0/0d/Elden_Ring_capa.jpg',
                    'released_date' => '2022-02-25',
                    'genre'         => 'Action RPG, Open world',
                    'description'   => 'Explore the Lands Between in a vast open world crafted by FromSoftware and George R. R. Martin.',
                ],
            ]);
        }

        // Team Cherry
        if ($cherry = Studio::where('studio_name', 'Team Cherry')->first()) {
            $cherry->games()->createMany([
                [
                    'game_name'     => 'Hollow Knight',
                    'image'         => 'https://example.com/hollowknight.jpg',
                    'released_date' => '2017-02-24',
                    'genre'         => 'Metroidvania, action-adventure',
                    'description'   => 'A mysterious knight explores the vast, ruined kingdom of Hallownest.',
                ],
            ]);
        }

        // Nintendo
        if ($nintendo = Studio::where('studio_name', 'Nintendo')->first()) {
            $nintendo->games()->createMany([
                [
                    'game_name'     => 'The Legend of Zelda: Breath of the Wild',
                    'image'         => 'https://example.com/botw.jpg',
                    'released_date' => '2017-03-03',
                    'genre'         => 'Action-adventure, Open world',
                    'description'   => 'An open-world Zelda adventure redefining exploration and freedom.',
                ],
                [
                    'game_name'     => 'Super Mario Odyssey',
                    'image'         => 'https://example.com/odyssey.jpg',
                    'released_date' => '2017-10-27',
                    'genre'         => 'Platformer',
                    'description'   => 'Mario embarks on a globe-trotting adventure with his new friend Cappy.',
                ],
                [
                    'game_name'     => 'Metroid Dread',
                    'image'         => 'https://example.com/metroiddread.jpg',
                    'released_date' => '2021-10-08',
                    'genre'         => 'Action-adventure, Metroidvania',
                    'description'   => 'Samus faces new mechanical threats on the planet ZDR.',
                ],
            ]);
        }

        // Square Enix
        if ($se = Studio::where('studio_name', 'Square Enix')->first()) {
            $se->games()->createMany([
                [
                    'game_name'     => 'Final Fantasy VII Remake',
                    'image'         => 'https://example.com/ff7remake.jpg',
                    'released_date' => '2020-04-10',
                    'genre'         => 'JRPG',
                    'description'   => 'A modern reimagining of the legendary Final Fantasy VII.',
                ],
                [
                    'game_name'     => 'Final Fantasy XVI',
                    'image'         => 'https://example.com/ffxvi.jpg',
                    'released_date' => '2023-06-22',
                    'genre'         => 'Action RPG',
                    'description'   => 'A dark fantasy tale of dominance and Eikons in Valisthea.',
                ],
                [
                    'game_name'     => 'Dragon Quest XI',
                    'image'         => 'https://example.com/dqxi.jpg',
                    'released_date' => '2018-09-04',
                    'genre'         => 'JRPG',
                    'description'   => 'Follow the Luminary in this classic turn-based Dragon Quest adventure.',
                ],
            ]);
        }

        // Atlus
        if ($atlus = Studio::where('studio_name', 'Atlus')->first()) {
            $atlus->games()->createMany([
                [
                    'game_name'     => 'Persona 5',
                    'image'         => 'https://example.com/p5.jpg',
                    'released_date' => '2017-04-04',
                    'genre'         => 'JRPG, social simulation',
                    'description'   => 'Join the Phantom Thieves of Hearts to change corrupt minds.',
                ],
                [
                    'game_name'     => 'Persona 5 Royal',
                    'image'         => 'https://example.com/p5r.jpg',
                    'released_date' => '2020-03-31',
                    'genre'         => 'JRPG, social simulation',
                    'description'   => 'An expanded version of Persona 5 with new characters and storylines.',
                ],
            ]);
        }

        // Rockstar
        if ($rockstar = Studio::where('studio_name', 'Rockstar')->first()) {
            $rockstar->games()->createMany([
                [
                    'game_name'     => 'Grand Theft Auto V',
                    'image'         => 'https://example.com/gtav.jpg',
                    'released_date' => '2013-09-17',
                    'genre'         => 'Action-adventure, Open world',
                    'description'   => 'Switch between three characters in the vast city of Los Santos.',
                ],
                [
                    'game_name'     => 'Red Dead Redemption 2',
                    'image'         => 'https://example.com/rdr2.jpg',
                    'released_date' => '2018-10-26',
                    'genre'         => 'Action-adventure, Open world',
                    'description'   => 'An epic tale of life in America’s unforgiving heartland.',
                ],
            ]);
        }
    }
}
