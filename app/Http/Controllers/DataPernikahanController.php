<?php
namespace App\Http\Controllers;
use App\Models\DataPernikahanModel;
use Illuminate\Http\Request;

class DataPernikahanController extends Controller
    {
        public function DataPernikahan(){
            if(session('menu_aktif')){
                $data_pernikahan = DataPernikahanModel::all();
                if($data_pernikahan){
                    return view('data_pernikahan.data_pernikahan',['data_pernikahan' => $data_pernikahan]);
                }
                    return "error";
            }else{
                return redirect(route('Login'));
            }
        }

        public function ViewTambahDataPernikahan(){
            if(session('menu_aktif')){
                return view('data_pernikahan.tambah_data_pernikahan');
            }
            else{
                return redirect(route('Login'));
            }
        }

        public function TambahDataPernikahan(){
            $request->validate([
                "mempelai_pria" =>
                "mempelai_wanita" =>
                "ayah_mempelai_pria" =>
                "ayah_mempelai_wanita" =>
                "ibu_mempelai_pria" =>
                "ibu_mempelai_wanita" =>
                "hari_resepsi" =>
                "tanggal_resepsi" =>
                "pukul_resepsi" =>
                "tempat_resepsi" =>
                "link_map_resepsi" =>
                "alamat_resepsi" =>
                "hari_akad_nikah" =>
                "tanggal_akad_nikah" =>
                "pukul_akad_nikah" =>
                "tempat_akad_nikah" =>
                "link_map_akad_nikah" =>
                "alamat_akad_nikah"
            ]);
        }
    }
?>
