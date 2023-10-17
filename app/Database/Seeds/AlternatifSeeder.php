<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlternatifSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_alternatif'  => 'A01',
                'alternatif' => 'Suplier 1'
            ],
             [
                'kode_alternatif'  => 'A02',
                'alternatif' => 'Suplier 2'
            ],
            [
                'kode_alternatif'  => 'A03',
                'alternatif' => 'Suplier 3'
            ],
            [
                'kode_alternatif'  => 'A04',
                'alternatif' => 'Suplier 4'
            ],
             [
                'kode_alternatif'  => 'A05',
                'alternatif' => 'Suplier 5'
            ],
        ];
        $this->db->table('alternatif')->insertBatch($data);
    }
}