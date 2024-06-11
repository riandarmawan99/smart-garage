<?php

namespace Database\Seeders;

use App\Models\Garasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GarasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 001";
        $garasi->lokasi = "Jakarta | Area A";
        $garasi->harga_sewa = 50000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "tersedia";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 002";
        $garasi->lokasi = "Jakarta | Area A";
        $garasi->harga_sewa = 50000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "booked";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 001";
        $garasi->lokasi = "Jakarta | Area B";
        $garasi->harga_sewa = 55000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "tersedia";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 001";
        $garasi->lokasi = "Jakarta | Area C";
        $garasi->harga_sewa = 60000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "tersedia";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 003";
        $garasi->lokasi = "Jakarta | Area A";
        $garasi->harga_sewa = 50000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "booked";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 002";
        $garasi->lokasi = "Jakarta | Area B";
        $garasi->harga_sewa = 55000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "rented";
        $garasi->save();
    }
}
