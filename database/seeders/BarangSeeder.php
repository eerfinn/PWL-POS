<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2000, // Harga beli
                'harga_jual' => 2500, // Harga jual
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Sapu Lidi',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Pampers',
                'harga_beli' => 40000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Sabun Mandi',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Sikat Gigi',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Susu Bendera',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 1,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Kecap ABC',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Gula Pasir',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
