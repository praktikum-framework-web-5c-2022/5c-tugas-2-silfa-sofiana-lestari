<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function insert(){

        $mhs = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170032', 'Silfa sofiana lestari','perempuan','kp_kalioyod','karawang','2002-03-06','silfa',now(),now())");
        dump($mhs);

        $mhs_1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '2010631170032',
                'nama' => 'silfa sofiana lestari',
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'kp_kalioyod',
                'tempat_lahir' => 'karawang',
                'tanggal_lahir' => '2002-03-06',
                'photo' => 'silfa',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($mhs_1);

        $mhs_2 = Mahasiswa::create(
            [
                'npm' => '2010631170032',
                'nama' => 'silfa sofiana lestari',
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'kp_kalioyod',
                'tempat_lahir' => 'karawang',
                'tanggal_lahir' => '2002-03-06',
                'photo' => 'silfa',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($mhs_2);
    }

    public function select(){
        $mhs = DB::select("SELECT * FROM mahasiswas");
        dd($mhs);

        $mhs_1 = DB::table('mahasiswas')->get();
        dd($mhs_1);

        $mhs_2 = Mahasiswa::all();
        dd($mhs2);
    }

    public function update(){
        $mhs = DB::update("UPDATE mahasiswas SET nama='silfa cantik sekali', updated_at=now() WHERE id=?",[1]);
        dd($mhs);

        $mhs_1 = DB::table('mahasiswas')
        ->where('id','1')
        ->update(
            [
                'nama' => 'silfa cantik sekali',
                'updated_at' => now(),
            ]
            );
        dd($mhs_1);

        $mhs_2 = Mahasiswa::where('id','1')->first()->update([
            'nama' => 'silfa cantik sekali',
            'updated_at' => now(),
        ]);
        dd($mhs_2);


    }

    public function delete(){
        $mhs = DB::delete("DELETE FROM mahasiswas WHERE id=?",[1]);
        dd($mhs);

        $mhs_1 = DB::table('mahasiswas')
        ->where('id','1')
        ->delete();
        dd($mhs_1);

        $mhs_2 = Mahasiswa::where('id','1')->delete();
        dd($mhs_2);
    }
}
