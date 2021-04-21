<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PunjabiController extends Controller
{
    public function generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'azx-punjabi',
        ]);
        $mpdf->WriteHTML($this->PdfHTML());
        $mpdf->Output();
	}

    public function PdfHTML()
    {
        $output = "ਪ੍ਰਧਾਨ ਮੰਤਰੀ ਨਰਿੰਦਰ ਮੋਦੀ ਨੇ ਕੋਵਿਡ ਦੀ ਸਥਿਤੀ ਨੂੰ ਲੈ ਕੇ ਰਾਸ਼ਟਰ ਦੇ ਨਾਮ ਸੰਬੋਧਨ ਦੌਰਾਨ ਕਿਹਾ ਕਿ ਸਾਨੂੰ ਸਭ ਤੋਂ ਮੁਸ਼ਕਲ ਇਸ ਸਮੇਂ ਵਿੱਚ ਵੀ ਹੌਸਲੇ ਬੁਲੰਦ ਰੱਖਣੇ ਚਾਹੀਦੇ ਹਨ। ਕਿਸੇ ਵੀ ਸਥਿਤੀ ਨਾਲ ਨਜਿੱਠਣ ਲਈ ਸਾਨੂੰ ਸਹੀ ਫੈਸਲਾ ਲੈਣਾ ਚਾਹੀਦਾ ਹੈ ਅਤੇ ਸਹੀ ਦਿਸ਼ਾ ਵਿਚ ਕੋਸ਼ਿਸ਼ ਕਰਨੀ ਚਾਹੀਦੀ ਹੈ ਤਾਂ ਹੀ ਅਸੀਂ ਜਿੱਤ ਪ੍ਰਾਪਤ ਕਰ ਸਕਦੇ ਹਾਂ। ਇਸ ਮੰਤਰ ਨੂੰ ਸਾਹਮਣੇ ਰੱਖਦਿਆਂ ਅੱਜ ਦੇਸ਼ ਦਿਨ ਰਾਤ ਕੰਮ ਕਰ ਰਿਹਾ ਹੈ।";
        return $output;
    }
}