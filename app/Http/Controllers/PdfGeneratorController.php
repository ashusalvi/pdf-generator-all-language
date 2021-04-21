<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfGeneratorController extends Controller
{
    public function bangla_generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'azx-bengali',
        ]);
        $mpdf->WriteHTML($this->banglaPdfHTML());
        $mpdf->Output();
		// $pdf = PDF::loadView('pdf', $data);
		// $pdf = PDF::loadView('pdf', $data);
		// return $pdf->stream('document.pdf');
	}

    public function banglaPdfHTML(){
        $output = "Bangla pdf here : লিখে দেখুন...";
        return $output;
    }
}