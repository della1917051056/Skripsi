<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubKriteriaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_kriteria'  => 1,
                'kode_subkriteria' => 'S11',
                'subkriteria' => 'Harga'
            ],
             [
                'id_kriteria'  => 1,
                'kode_subkriteria' => 'S12',
                'subkriteria' => 'Diskon'
            ],
             [
                'id_kriteria'  => 2,
                'kode_subkriteria' => 'S21',
                'subkriteria' => 'Kesesuaian Barang'
            ],
            [
                'id_kriteria'  => 2,
                'kode_subkriteria' => 'S22',
                'subkriteria' => 'Mutu Produk'
            ],
              [
                'id_kriteria'  => 3,
                'kode_subkriteria' => 'S31',
                'subkriteria' => 'Tepat Waktu'
            ],
            [
                'id_kriteria'  => 3,
                'kode_subkriteria' => 'S32',
                'subkriteria' => 'Status Pengiriman'
            ],
             [
                'id_kriteria'  => 4,
                'kode_subkriteria' => 'S41',
                'subkriteria' => 'Stok Barang'
            ],
             [
                'id_kriteria'  => 4,
                'kode_subkriteria' => 'S42',
                'subkriteria' => 'Barang Terjual'
            ],
            [
                'id_kriteria'  => 5,
                'kode_subkriteria' => 'S51',
                'subkriteria' => 'Enak'
            ],
            [
                'id_kriteria'  => 5,
                'kode_subkriteria' => 'S52',
                'subkriteria' => 'Murah'
            ],
        ];
        $this->db->table('subkriteria')->insertBatch($data);
    }
}