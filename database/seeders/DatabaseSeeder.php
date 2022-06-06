<?php

namespace Database\Seeders;

use App\Models\Krw;
use App\Models\Pelayan;
use App\Models\Warga;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Krw::create([
            'nama_krw' => 'bwi kota',
            'ketua_krw' => 'bambang',
        ]);

        Warga::create([
            'nik' => '1234566789',
            'nama' => 'saut',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'banyuwangi',
            'tanggal_lahir' => '2000-01-01',
            'hub_dalam_kk' => 'anak',
            'alamat_domisili' => 'banyuwangi',
            'kota_domisili' => 'banywuangi',
            'no_telp' => '089883878273',
            'tempat_baptis' => 'banyuwangi',
            'tanggal_baptis' => '2000-01-01',
            'tempat_sidi' => 'banyuwangi',
            'tanggal_sidi' => '2017-01-01',
            'tanggal_nikah' => null,
            'profesi' => 'freelancer',
            'asal_gereja' => 'banywuangi',
            'keterangan' => 'jemaat',
            'status' => 'aktif',
            'krw_id' => 1
        ]);

        Pelayan::create([
            'nama' => 'Santos',
            'jabatan' => 'Pendeta',
        ]);
    }
}
