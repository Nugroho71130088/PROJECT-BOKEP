<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use PDF;

class ReportController extends Controller
{
    public function cetakLaporan(Request $request){
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('report::report', $data);
  
        return $pdf->download('itsolutionstuff.pdf');

    }

    public function LaporanView(Request $request){

        return view('report::laporan', $data);
    }
}
