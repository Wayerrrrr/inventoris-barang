<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a seeder for barang
        Barang::create([
            'nama_barang' => 'Nasi Goreng',
            'stok' => 10,
            'kode_barang' => 12345,
            'expired_date' => '2024-12-31',
            'satuan' => 'porsi',
            'harga_beli' => 15000,
            'harga_jual' => 25000,
            'kategori' => 'Makanan',
        ]);
        Barang::create([
            'nama_barang' => 'Mie Goreng',
            'stok' => 20,
            'kode_barang' => 12346,
            'expired_date' => '2024-12-31',
            'satuan' => 'porsi',
            'harga_beli' => 12000,
            'harga_jual' => 22000,
            'kategori' => 'Makanan',

        ]);
        Barang::create([
            'nama_barang' => 'Ayam Goreng',
            'stok' => 15,
            'kode_barang' => 12347,
            'expired_date' => '2024-12-31',
            'satuan' => 'porsi',
            'harga_beli' => 20000,
            'harga_jual' => 30000,
            'kategori' => 'Makanan',
        ]);
    }
}
