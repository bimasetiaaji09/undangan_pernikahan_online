<?php

namespace App\Http\Controllers;

use App\Models\barangModel;
use Illuminate\Http\Request;

class barangController extends Controller
{
    //
    function create(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'nama_barang'   => 'required',
            'harga'         => 'required',
        ]);

        try {
            $data_insert = array(
                "nama_barang"   => $request->post("nama_barang"),
                "harga"         => $request->post("harga"),
            );
            $create = barangModel::create($data_insert);
            $create->save();
            if(!empty($create->id_barang)){
                return "berhasil";
            }else{
                return "gagal";
            }
        } catch (\Throwable $th) {
            return "gagal".$th->getMessage().$th->getLine();
        }
    }
    function update(Request $request)
    {
        // validasi

        try {
            $data_update = array(
                "nama_barang"   => $request->post("nama_barang"),
                "harga"         => $request->post("harga"),
            );
            $where = array(
                "id_barang"   => $request->post("id_barang")
            );

            $update = barangModel::where($where)->update($data_update);
            if(!empty($update)){
                return "berhasil";
            }else{
                return "gagal";
            }
        } catch (\Throwable $th) {
            return "gagal".$th->getMessage().$th->getLine();
        }
    }
    function delete(Request $request)
    {
        // validasi

        try {
            $where = array(
                "id_barang"   => $request->post("id_barang")
            );

            $delete = barangModel::where($where)->delete();
            if(!empty($delete)){
                return "berhasil";
            }else{
                return "gagal";
            }
        } catch (\Throwable $th) {
            return "gagal".$th->getMessage().$th->getLine();
        }
    }
}
