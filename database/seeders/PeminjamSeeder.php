<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjams')->insert([
            'nama' => 'Indria Dwiyanti',
            'Prodi' => 'IFSI-S1',
            'nim' => '20110151'
        ]);
    }
}
