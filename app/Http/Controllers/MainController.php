<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function add(Request $request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $phone = $request['phone'];
        $dateb = $request['dateb'];
        $vacancy_id = $request['type'];
        $city_id = $request['city'];
        $city_name = $request['city_name'];
        $request_id = $request['_token'];
        if ($request->hasFile('file')) {
        $file = $request['file'];
        $extension = $file->getClientOriginalExtension();
        $newFilename = $first_name.$last_name . '.' . $extension;
        $file->move(public_path('uploads'), $newFilename);
        $file = "https://super-kuper.ru/uploads/'.$newFilename)";
        } else {
            $file = "";
        }
        $response = "";
        //$amo = new AmoController($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$city_name,$request_id,$file);
        //$response = $amo -> send();
        $sb = new SberController($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$request_id);
        $sbresp = $sb -> send();
        return json_encode($sbresp);
       
        }

    }
