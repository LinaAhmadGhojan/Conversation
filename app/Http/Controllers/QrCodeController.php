<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        $data = User::findOrFail(1);
        return view('qrcode');
    }

    public function generate ($id)
    {
        $data = Seat::where('id',$id)->get()->first();
        $qrcode = QrCode::size(400)->generate($data);
        return view('qrcode',compact('qrcode'));
    }
}