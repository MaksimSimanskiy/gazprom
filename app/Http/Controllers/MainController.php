<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

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
        $fileName = 'более 18 лет';
        if ($request->hasFile('fieldImg')) {
            $image = $request->file('fieldImg');
            $name_image = $image->getClientOriginalName();
            $extension = pathinfo($name_image, PATHINFO_EXTENSION);
            $name_image = $first_name.$last_name.'.'.$extension;
            $image->move(public_path().'/uploads', $name_image);
            $fileName = "https://super-kuper.ru/uploads/$name_image";

        }
        $amo = new AmoController($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$city_name,$request_id,$fileName);
        $response = $amo -> send();
        $sb = new SberController($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$request_id);
        $sbresp = $sb -> send();
        return $response;

       
        }

    }
