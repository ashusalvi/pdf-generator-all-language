<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class MalayalamController extends Controller
{
    public function generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'azx-malayalam',
        ]);
        $mpdf->WriteHTML($this->PdfHTML());
        $mpdf->Output();
	}

    public function PdfHTML()
    {
        $output = "ഹായ്, ഇവിടെ. പി‌ഡി‌എഫ് ജനറേറ്റർ കോഡിൽ പ്രവർത്തിക്കുന്നു";
        return $output;
    }
}