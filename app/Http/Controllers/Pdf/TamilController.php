<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class TamilController extends Controller
{
    public function generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'azx-tamil',
        ]);
        $mpdf->WriteHTML($this->PdfHTML());
        $mpdf->Output();
	}

    public function PdfHTML()
    {
        $output = "ਪகோவிட் பிரச்சினையில் தேசத்தில் உரையாற்றிய பிரதமர் நரேந்திர மோடி, மிகக் கடினமான காலங்களில் கூட நாங்கள் தைரியமாக இருக்க வேண்டும் என்று கூறினார். எந்தவொரு சூழ்நிலையையும் சமாளிக்க நாம் சரியான முடிவை எடுத்து சரியான திசையில் செயல்பட வேண்டும், இதனால் நாம் வெற்றி பெற முடியும். இந்த மந்திரத்தை மனதில் வைத்து, இன்று நாடு இரவும் பகலும் உழைத்து வருகிறது.";
        return $output;
    }
}