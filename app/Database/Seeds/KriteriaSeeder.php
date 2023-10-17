<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_kriteria'  => 'K1',
                'kriteria' => 'Biaya'
            ],
             [
                'kode_kriteria'  => 'K2',
                'kriteria' => 'Kualitas'
            ],
            [
                'kode_kriteria'  => 'K3',
                'kriteria' => 'Ketepatan Pengiriman'
            ],
            [
                'kode_kriteria'  => 'K4',
                'kriteria' => 'Ketepatan Jumlah'
            ],
             [
                'kode_kriteria'  => 'K5',
                'kriteria' => 'Ketepatan Respon'
            ],
        ];
        $this->db->table('kriteria')->insertBatch($data);
    }
}