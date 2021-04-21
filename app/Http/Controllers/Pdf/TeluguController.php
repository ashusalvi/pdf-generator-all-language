<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class TeluguController extends Controller
{
    public function generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'azx-telugu',
        ]);
        $mpdf->WriteHTML($this->PdfHTML());
        $mpdf->Output();
	}

    public function PdfHTML()
    {
        $output = " కోవిడ్ సమస్యపై దేశాన్ని ఉద్దేశించి ప్రధాని నరేంద్ర మోడీ మాట్లాడుతూ, చాలా కష్ట సమయాల్లో కూడా మనం ధైర్యంగా ఉండాలని అన్నారు. మనం గెలవగలిగేలా సరైన పరిస్థితిని ఎదుర్కోవటానికి సరైన నిర్ణయం తీసుకోవాలి మరియు సరైన దిశలో పనిచేయాలి. ఈ మంత్రాన్ని దృష్టిలో ఉంచుకుని, ఈ రోజు దేశం పగలు, రాత్రి పనిచేస్తోంది.";
        return $output;
    }
}