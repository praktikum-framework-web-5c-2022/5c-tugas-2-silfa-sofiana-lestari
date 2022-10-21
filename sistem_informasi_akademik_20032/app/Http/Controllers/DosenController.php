<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function insert(){

        $dsn = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('230777', 'Silfa sofiana lestari','perempuan','kp_kalioyod','karawang','2002-03-06','silfa',now(),now())");
        dump($dsn);

        $dsn_1 = DB::table('dosens')->insert(
            [
                'nidn' => '230777',
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
        dump($dsn_1);

        $dsn_2 = Dosen::create(
            [
                'nidn' => '230777',
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
            dump($dsn_2);
    }

    public function select(){
        $dsn = DB::select("SELECT * FROM dosens");
        dd($dsn);

        $dsn_1 = DB::table('dosens')->get();
        dd($dsn_1);

        $dsn_2 = Dosen::all();
        dd($dsn2);
    }

    public function update(){
        $dsn = DB::update("UPDATE dosens SET nama='silfa cantik', updated_at=now() WHERE id=?",[1]);
        dd($dsn);

        $dsn_1 = DB::table('dosens')
        ->where('id','1')
        ->update(
            [
                'nama' => 'silfa cantik',
                'updated_at' => now(),
            ]
            );
        dd($dsn_1);

        $dsn_2 = Dosen::where('id','1')->first()->update([
            'nama' => 'silfa cantik',
            'updated_at' => now(),
        ]);
        dd($dsn_2);


    }

    public function delete(){
        $dsn = DB::delete("DELETE FROM dosens WHERE id=?",[1]);
        dd($dsn);

        $dsn_1 = DB::table('dosens')
        ->where('id','1')
        ->delete();
        dd($dsn_1);

        $dsn_2 = Dosen::where('id','1')->delete();
        dd($dsn_2);
    }
}
