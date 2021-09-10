<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvoiceController extends Controller
{
    public function invoice(Request $request)
    {
        $request->validate([
            'invoice_id' => "numeric"
        ]);

        $data = $request->all();
        $response = Http::withBasicAuth('Casey.Brown', 'nBV7j#6^')->get("https://fa-etaq-saasfademo1.ds-fa.oraclepdemos.com/fscmRestApi/resources/11.13.18.05/invoices/{$data['invoice_id']}");
        
        return view('invoice', [
            'invoice' => json_decode($response->getBody()->getContents())
        ]);
    }
}
