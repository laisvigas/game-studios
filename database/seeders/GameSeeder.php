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
                    'image'         => 'https://m.media-amazon.com/images/I/91HQ+aAlwTL._UF1000,1000_QL80_.jpg',
                    'released_date' => '2017-04-28',
                    'genre'         => 'Puzzle-platform, horror',
                    'description'   => 'A suspense-adventure game where you help Six escape from a mysterious vessel.',
                ],
                [
                    'game_name'     => 'Little Nightmares II',
                    'image'         => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_-PLuMzlJznsp6zLkkcEMcI7ISfHf7iRH7A&s',
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
                    'image'         => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRto1RbusWG71j29hA6eCnhtf5sZwJFMYLT2g&s',
                    'released_date' => '2011-09-22',
                    'genre'         => 'Action RPG',
                    'description'   => 'A dark fantasy RPG known for its challenging combat and deep lore.',
                ],
                [
                    'game_name'     => 'Bloodborne',
                    'image'         => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdc9EbGYa7RtQrtkrxfbDjKLErr-R_HhwAfQ&s',
                    'released_date' => '2015-03-24',
                    'genre'         => 'Action RPG',
                    'description'   => 'A gothic action RPG set in the cursed city of Yharnam, plagued by beasts.',
                ],
                [
                    'game_name'     => 'Sekiro: Shadows Die Twice',
                    'image'         => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/814380/capsule_616x353.jpg?t=1754933982',
                    'released_date' => '2019-03-22',
                    'genre'         => 'Action-adventure',
                    'description'   => 'Play as a shinobi on a quest to rescue his lord in Sengoku-era Japan.',
                ],
                [
                    'game_name'     => 'Elden Ring',
                    'image'         => 'https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/M2IBVSWR2ao2oHizClzsUaYL.png',
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
                    'image'         => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Hollow_Knight_first_cover_art.webp/250px-Hollow_Knight_first_cover_art.webp.png',
                    'released_date' => '2017-02-24',
                    'genre'         => 'Metroidvania, action-adventure',
                    'description'   => 'A mysterious knight explores the vast, ruined kingdom of Hallownest.',
                ],
                [
                    'game_name'     => 'Silksong',
                    'image'         => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8UsX9y7SAirCr8-c5Y5OQO66Rh6JwX3-1Tw&s',
                    'released_date' => '2025-09-04',
                    'genre'         => 'Metroidvania, action-adventure',
                    'description'   => 'Explore, fight and survive.',
                ],
            ]);
        }

        // Nintendo
        if ($nintendo = Studio::where('studio_name', 'Nintendo')->first()) {
            $nintendo->games()->createMany([
                [
                    'game_name'     => 'The Legend of Zelda: Breath of the Wild',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg/250px-The_Legend_of_Zelda_Breath_of_the_Wild.jpg',
                    'released_date' => '2017-03-03',
                    'genre'         => 'Action-adventure, Open world',
                    'description'   => 'An open-world Zelda adventure redefining exploration and freedom.',
                ],
                [
                    'game_name'     => 'Super Mario Odyssey',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/pt/9/99/Super_Mario_Odyssey_Capa.png',
                    'released_date' => '2017-10-27',
                    'genre'         => 'Platformer',
                    'description'   => 'Mario embarks on a globe-trotting adventure with his new friend Cappy.',
                ],
                [
                    'game_name'     => 'Metroid Dread',
                    'image'         => 'https://www.nintendo.com/eu/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_MetroidDread_image1600w.jpg',
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
                    'image'         => 'https://external-preview.redd.it/final-fantasy-7-remake-part-3-development-is-going-v0-5j3ZMJxllEmNJVF4SI7pFuIHz_6q_Txt8v3A-q--Bj0.jpeg?auto=webp&s=87f4ce062e32db8c631efe87af747dae84d66e51',
                    'released_date' => '2020-04-10',
                    'genre'         => 'JRPG',
                    'description'   => 'A modern reimagining of the legendary Final Fantasy VII.',
                ],
                [
                    'game_name'     => 'Final Fantasy XVI',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/en/0/00/Final_Fantasy_XVI_cover_art.png',
                    'released_date' => '2023-06-22',
                    'genre'         => 'Action RPG',
                    'description'   => 'A dark fantasy tale of dominance and Eikons in Valisthea.',
                ],
                [
                    'game_name'     => 'Dragon Quest XI',
                    'image'         => 'https://image.api.playstation.com/vulcan/ap/rnd/202007/1607/7PxHVp3tCaQQkVeHalUtPcND.png',
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
                    'image'         => 'https://image.api.playstation.com/cdn/EP4062/CUSA06638_00/0fSaYhFhEVP183JLTwVec7qkzmaHNMS2.png?w=440',
                    'released_date' => '2017-04-04',
                    'genre'         => 'JRPG, social simulation',
                    'description'   => 'Join the Phantom Thieves of Hearts to change corrupt minds.',
                ],
                [
                    'game_name'     => 'Persona 4',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/en/1/10/Shin_Megami_Tensei_Persona_4.jpg',
                    'released_date' => '2020-06-10',
                    'genre'         => 'JRPG, social simulation',
                    'description'   => 'A mysterious string of murders is taking place.',
                ],
            ]);
        }

        // Rockstar
        if ($rockstar = Studio::where('studio_name', 'Rockstar')->first()) {
            $rockstar->games()->createMany([
                [
                    'game_name'     => 'Grand Theft Auto V',
                    'image'         => 'https://upload.wikimedia.org/wikipedia/pt/8/80/Grand_Theft_Auto_V_capa.png',
                    'released_date' => '2013-09-17',
                    'genre'         => 'Action-adventure, Open world',
                    'description'   => 'Switch between three characters in the vast city of Los Santos.',
                ],
                [
                    'game_name'     => 'Red Dead Redemption 2',
                    'image'         => 'https://image.api.playstation.com/gs2-sec/appkgo/prod/CUSA08519_00/12/i_3da1cf7c41dc7652f9b639e1680d96436773658668c7dc3930c441291095713b/i/icon0.png',
                    'released_date' => '2018-10-26',
                    'genre'         => 'Action-adventure, Open world',
                    'description'   => 'An epic tale of life in America’s unforgiving heartland.',
                ],
            ]);
        }
    }
}
