<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Twilio\Rest\Client;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create($id)
    {
        $kritik = Kritik::with(['user'])->findOrFail($id);

        return view('pages.admin.kritik.sms', [
            'kritik' => $kritik
        ]);
    }

    public function store(Request $request)
    {
        try {
            $account_sid = env('TWILIO_SID');
            $account_token = env('TWILIO_TOKEN');
            $number = env('TWILIO_FROM');

            $client = new Client($account_sid, $account_token);
            $client->messages->create('+62'.$request->number, [
                'from' => $number,
                'body' => $request->pesan
            ]);

            return redirect()->route('pengaduan.index');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
