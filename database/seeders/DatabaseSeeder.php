<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        //seed data untuk pegawai
        DB::table('user')->insert([
            'username' => 'pegawai',
            'password' => Hash::make('12345'),
            'role' => 'pegawai'
        ]);
        // DB::table('pemasukan')->insert({
        //     'harga' => 
        //     'deskripsi'
        //     'tanggal'
        // })
        
    }
}