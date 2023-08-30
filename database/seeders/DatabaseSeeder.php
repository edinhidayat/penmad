<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gol;
use App\Models\User;
use App\Models\Akses;
use App\Models\Madrasah;
use App\Models\Jeniskelamin;
use App\Models\Jenislaporan;
use App\Models\Kategori;
use App\Models\Tahunajaran;
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
        // User::create([
        //     'madrasah_id' => 1,
        //     'username' => 'admin',
        //     'password' => bcrypt('Administrator'),
        //     'akses_id' => 1,
        //     'aktif' => 1
        // ]);
        // User::create([
        //     'madrasah_id' => 2,
        //     'username' => 'asdf',
        //     'password' => bcrypt('123456'),
        //     'akses_id' => 2,
        //     'aktif' => 1
        // ]);
        // User::create([
        //     'madrasah_id' => 3,
        //     'username' => 'qwer',
        //     'password' => bcrypt('123456'),
        //     'akses_id' => 2,
        //     'aktif' => 1
        // ]);
        // User::create([
        //     'madrasah_id' => 4,
        //     'username' => '1234',
        //     'password' => bcrypt('123456'),
        //     'akses_id' => 2,
        //     'aktif' => 0
        // ]);

        Jeniskelamin::create([
            'kelamin' => 'L',
            'jeniskelamin' => 'Laki-Laki'
        ]);
        Jeniskelamin::create([
            'kelamin' => 'P',
            'jeniskelamin' => 'Perempuan'
        ]);

        Tahunajaran::create([
            'tahunajaran' => '2022/2023'
        ]);
        // Tahunajaran::create([
        //     'tahunajaran' => '2023/2024'
        // ]);
        // Tahunajaran::create([
        //     'tahunajaran' => '2024/2025'
        // ]);

        Akses::create([
            'akses' => 'Admin'
        ]);
        Akses::create([
            'akses' => 'User'
        ]);

        // Madrasah::create([
        //     'nsm' => '-',
        //     'npsn' => '-',
        //     'kodesatker' => '-',
        //     'jenjang' => '-',
        //     'status' => '-',
        //     'namamadrasah' => 'Administrator',
        //     'alamat' => 'Jalan KH Abd. Halim No.1',
        //     'desa' => 'Majalengkakulon',
        //     'kecamatan' => 'Majalengka',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232100001',
        //     'npsn' => '69736952',
        //     'kodesatker' => '-',
        //     'jenjang' => 'RA',
        //     'status' => 'Swasta',
        //     'namamadrasah' => 'RA FITRIYAH',
        //     'alamat' => 'Jalan KH Abd. Halim',
        //     'desa' => 'Majalengkakulon',
        //     'kecamatan' => 'Majalengka',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232100002',
        //     'npsn' => '69736953',
        //     'kodesatker' => '307787',
        //     'jenjang' => 'MI',
        //     'status' => 'Negeri',
        //     'namamadrasah' => 'MIN 2 Majalengka',
        //     'alamat' => 'Jalan Sukasari',
        //     'desa' => 'Sukasari',
        //     'kecamatan' => 'Kertajati',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232100121',
        //     'npsn' => '69736066',
        //     'kodesatker' => '307495',
        //     'jenjang' => 'MTs',
        //     'status' => 'Negeri',
        //     'namamadrasah' => 'MTsN 3 Majalengka',
        //     'alamat' => 'Jalan Sumberkulon',
        //     'desa' => 'Sumberkulon',
        //     'kecamatan' => 'Jatitujuh',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232103201',
        //     'npsn' => '69733932',
        //     'kodesatker' => '322132',
        //     'jenjang' => 'MA',
        //     'status' => 'Negeri',
        //     'namamadrasah' => 'MAN 1 Majalengka',
        //     'alamat' => 'Jalan Rajagaluh-Sumberjaya',
        //     'desa' => 'Leuwimunding',
        //     'kecamatan' => 'Leuwimunding',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232123322',
        //     'npsn' => '69736944',
        //     'kodesatker' => '-',
        //     'jenjang' => 'MTs',
        //     'status' => 'Swasta',
        //     'namamadrasah' => 'MTs Payakumbuh',
        //     'alamat' => 'Jalan Sukaraja',
        //     'desa' => 'Sukaraja',
        //     'kecamatan' => 'Jatiwangi',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232100017',
        //     'npsn' => '69736999',
        //     'kodesatker' => '-',
        //     'jenjang' => 'MA',
        //     'status' => 'Swasta',
        //     'namamadrasah' => 'MA Jayakarta',
        //     'alamat' => 'Jalan Ligung',
        //     'desa' => 'Bantarwaru',
        //     'kecamatan' => 'Ligung',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232100221',
        //     'npsn' => '69736212',
        //     'kodesatker' => '-',
        //     'jenjang' => 'MI',
        //     'status' => 'Swasta',
        //     'namamadrasah' => 'MI Jannah',
        //     'alamat' => 'Jalan Talaga',
        //     'desa' => 'Talaga',
        //     'kecamatan' => 'Talaga',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232132201',
        //     'npsn' => '69736777',
        //     'kodesatker' => '-',
        //     'jenjang' => 'MA',
        //     'status' => 'Swasta',
        //     'namamadrasah' => 'MA Cipinang',
        //     'alamat' => 'Jalan Cipinang',
        //     'desa' => 'Cipinang',
        //     'kecamatan' => 'Rajagaluh',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);
        // Madrasah::create([
        //     'nsm' => '101232111001',
        //     'npsn' => '69736748',
        //     'kodesatker' => '202122',
        //     'jenjang' => 'MA',
        //     'status' => 'Negeri',
        //     'namamadrasah' => 'MAN 3 Majalengka',
        //     'alamat' => 'Jalan Surawangi',
        //     'desa' => 'Surawangi',
        //     'kecamatan' => 'Jatiwangi',
        //     'namakepala' => '-',
        //     'nipkepala' => '-'
        // ]);

        Gol::create([
            'gol' => '-',
            'pangkat' => '-'
        ]);
        Gol::create([
            'gol' => 'III/a',
            'pangkat' => 'Penata Muda'
        ]);
        Gol::create([
            'gol' => 'III/b',
            'pangkat' => 'Penata Muda Tk.I'
        ]);
        Gol::create([
            'gol' => 'III/c',
            'pangkat' => 'Penata'
        ]);
        Gol::create([
            'gol' => 'III/d',
            'pangkat' => 'Penata Tk.I'
        ]);
        Gol::create([
            'gol' => 'IV/a',
            'pangkat' => 'Pembina'
        ]);
        Gol::create([
            'gol' => 'IV/b',
            'pangkat' => 'Pembina Tk.I'
        ]);
        Gol::create([
            'gol' => 'IV/c',
            'pangkat' => 'Pembina Utama Muda'
        ]);
        Gol::create([
            'gol' => 'IV/d',
            'pangkat' => 'Pembina Utama Madya'
        ]);
        Gol::create([
            'gol' => 'IV/e',
            'pangkat' => 'Pembina Utama'
        ]);

        Jenislaporan::create([
            'jenislaporan' => 'Laporan Data Guru'
        ]);
        Jenislaporan::create([
            'jenislaporan' => 'Laporan Data Siswa'
        ]);
        Jenislaporan::create([
            'jenislaporan' => 'Laporan Dana BOS'
        ]);

        Kategori::create([
            'kategori' => 'Berita'
        ]);
        Kategori::create([
            'kategori' => 'Kegiatan'
        ]);
    }
}
