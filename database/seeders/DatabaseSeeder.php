<?php

namespace Database\Seeders;

use App\Models\Krw;
use App\Models\User;
use App\Models\Warga;
use App\Models\Pelayan;
use App\Models\Periode;
use App\Models\Quisioner;
use App\Models\WartaJemaat;
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

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff123'),
            'role' => 'staff'
        ]);

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
            'status' => 1,
            'krw_id' => 1
        ]);

        Pelayan::create([
            'nama' => 'Santos',
            'jabatan' => 'Pendeta',
        ]);

        Pelayan::create([
            'nama' => 'Paul',
            'jabatan' => 'Pendeta',
        ]);

        WartaJemaat::create([
            'minggu' => '2022-W26',
            'halaman' => '1',
        ]);

        WartaJemaat::create([
            'minggu' => '2022-W26',
            'halaman' => '2',
        ]);

        WartaJemaat::create([
            'minggu' => '2022-W26',
            'halaman' => '3',
        ]);

        WartaJemaat::create([
            'minggu' => '2022-W27',
            'halaman' => '1',
        ]);

        WartaJemaat::create([
            'minggu' => '2022-W27',
            'halaman' => '2',
        ]);

        Periode::create([
            'tanggal_mulai' => '2021-01-01',
            'tanggal_selesai' => '2021-12-31',
            'deskripsi' => 'Periode tahun 2021',
            'status' => 0
        ]);

        Periode::create([
            'tanggal_mulai' => '2022-01-01',
            'tanggal_selesai' => '2022-12-31',
            'deskripsi' => 'Periode tahun 2022',
            'status' => 1
        ]);

        Quisioner::create([
            'pertanyaan' => 'Apa yang anda harapkan disini?',
            'tipe_jawaban' => 'teks',
            'periode_id' => 1
        ]);

        Quisioner::create([
            'pertanyaan' => 'Sudah berapa lama anda bergabung?',
            'tipe_jawaban' => 'teks',
            'periode_id' => 2
        ]);

        Quisioner::create([
            'pertanyaan' => 'Apakah Pelayanan disini sudah memuaskan?',
            'tipe_jawaban' => 'teks',
            'periode_id' => 2
        ]);

        Quisioner::create([
            'pertanyaan' => 'Apakah kebersihan disini sudah terjaga dengan baik?',
            'tipe_jawaban' => 'teks',
            'periode_id' => 2
        ]);

        Quisioner::create([
            'pertanyaan' => 'Kritik dan Saran bagi kami',
            'tipe_jawaban' => 'teks',
            'periode_id' => 2
        ]);
    }
}
