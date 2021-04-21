<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class GujaratController extends Controller
{
    public function generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'azx-gujarati',
        ]);
        $mpdf->WriteHTML($this->PdfHTML());
        $mpdf->Output();
	}

    public function PdfHTML(){
        $output = "હાય, એઝેક્સસ્ટર. પીડીએફ જનરેટર કોડ પર કામ કરે છે";
        return $output;
    }
}