<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function insert(){

        $mk = DB::insert("INSERT INTO matkuls (kode_mk,nama_mk,created_at,updated_at) VALUES ('DM01', 'Data Mining',now(),now())");
        dump($mk);

        $mk_1 = DB::table('matkuls')->insert(
            [
                'kode_mk' => 'DM01',
                'nama_mk' => 'Data Mining',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($mk_1);

        $mk_2 = Matkul::create(
            [
                'kode_mk' => 'DM01',
                'nama_mk' => 'Data Mining',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($mk_2);
    }

    public function select(){

        $mk = DB::select("SELECT * FROM matkuls");
        dd($mk);

        $mk_1 = DB::table('matkuls')->get();
        dd($mk_1);

        $mk_2 = Matkul::all();
        dd($mk_2);
    }

    public function update(){

        $mk = DB::update("UPDATE matkuls SET nama_mk='MENAMBANG DATA',updated_at=now() WHERE id=?",[1]);
        dd($mk);

        $mk_1 = DB::table('matkuls')
        ->where('id','1')
        ->update(
            [
                'nama_mk' => 'MENAMBANG DATA',
                'updated_at' => now()
            ]
            );
        dd($mk_1);

        $mk_2 = Matkul::where('id','1')->first()->update([
            'nama_mk' => 'MENAMBANG DATA',
            'updated_at' => now()
        ]);
        dd($mk_2);

    }

    public function delete(){

        $mk = DB::delete("DELETE FROM matkuls WHERE id=?",[1]);
        dd($mk);

        $mk_1 = DB::table('matkuls')
        ->where('id','1')
        ->delete();
        dd($mk_1);

        $mk_2 = Matkul::where('id','1')->delete();
        dd($mk_2);
    }
}
