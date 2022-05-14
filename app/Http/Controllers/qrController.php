<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class qrController extends Controller
{
    //..
    public function index(){
        return view('qrcode.qr_builder');
    }

    public function qrbuilder(Request $request){
        //
        $validator = Validator::make($request->all(), [
            'name ' => 'required',
            'body' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return $request->all();
    }
}
