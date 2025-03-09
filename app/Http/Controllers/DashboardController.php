<?php

namespace App\Http\Controllers;

use App\Models\KIA;
use App\Models\Ektp;
use Illuminate\Http\Request;
use App\Models\AktaKelahiran;
use App\Models\KartuKeluarga;

class DashboardController extends Controller
{
    public function index(Request $request){
        $data = AktaKelahiran::getDataAktaKelahiran();
        $kk=KartuKeluarga::getDataKk();
        $kia=KIA::getDataKia();
        $ktp=Ektp::getDataEktp();
        $success1 = $data['success'];
        $message1 = $data['message'];
        $total1 = $success1 ? count($data['result']) : 0;
        $totalkk = $success1 ? count($kk['result']) : 0;
        $totalkia = $success1 ? count($kia['result']) : 0;
        $totalktp = $success1 ? count($ktp['result']) : 0;
        return view('admin.dashboard',[
            'page'=>"dashboard",
            'subpage'=>'dashboard',
            'status1' => $success1 ? 'success' : 'false',
            'title'=>'Dashboard',
            'data1'=>$total1,
            'kk'=>$totalkk,
            'kia'=>$totalkia,
            'ktp'=>$totalktp,
        ]);
    }
}
