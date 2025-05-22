<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        Guru::create([
            'nama' => 'Ibu Siti',
            'nip' => '198912343',
            'mata_pelajaran' => 'Bahasa Indonesia',
        ]);

        Guru::create([
            'nama' => 'Pak Andi',
            'nip' => '198803212',
            'mata_pelajaran' => 'Matematika',
        ]);

        Guru::create([
            'nama' => 'Bu Rina',
            'nip' => '198745672',
            'mata_pelajaran' => 'IPA',
        ]);
    }
}
