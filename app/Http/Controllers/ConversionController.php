<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Web3\Web3;
    use App\Models\SampahDigital;
    use App\Models\TokenDigital;
    
    class ConversionController extends Controller
    {
        public function convert(Request $request)
        {
            // Ambil data sampah digital dari request
            $sampahDigital = $request->input('sampah_digital');
    
            // Konversi sampah digital menjadi hash
            $hash = hash('sha256', $sampahDigital);
    
            // Buat token digital baru
            $tokenDigital = new TokenDigital();
            $tokenDigital->hash = $hash;
            $tokenDigital->save();
    
            // Kembalikan token digital yang baru dibuat
            return response()->json(['token_digital' => $tokenDigital]);
        }
    }
