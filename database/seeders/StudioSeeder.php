<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studio;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Studio::create([
            'studio_name' => 'Tarsier Studios',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/7/75/Tarsier_Studios.svg',
            'description' => 'Swedish indie studio known for Little Nightmares.',
        ]);

        Studio::create([
            'studio_name' => 'FromSoftware',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Fromsoftware_logo.svg/2560px-Fromsoftware_logo.svg.png',
            'description' => 'Japanese studio behind Dark Souls, Elden Ring.',
        ]);

        Studio::create([
            'studio_name' => 'Team Cherry',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Team_cherry_Logo_Red.png',
            'description' => 'Australian indie studio known for Hollow Knight.',
        ]);

        Studio::create([
            'studio_name' => 'Nintendo',
            'logo' => 'https://cdn.freebiesupply.com/logos/large/2x/nintendo-2-logo-png-transparent.png',
            'description' => 'Japanese gaming giant, creators of Mario, Zelda, and more.',
        ]);

        Studio::create([
            'studio_name' => 'Square Enix',
            'logo' => 'https://download.logo.wine/logo/Square_Enix/Square_Enix-Logo.wine.png',
            'description' => 'Japanese developer known for Final Fantasy, Dragon Quest.',
        ]);

        Studio::create([
            'studio_name' => 'Atlus',
            'logo' => 'https://download.logo.wine/logo/Atlus/Atlus-Logo.wine.png',
            'description' => 'Japanese studio famous for the Persona series.',
        ]);

        Studio::create([
            'studio_name' => 'Rockstar',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/9/97/Rockstar_logo_for_tweets.png',
            'description' => 'American studio behind Grand Theft Auto, Red Dead Redemption.',
        ]);
    }
}
