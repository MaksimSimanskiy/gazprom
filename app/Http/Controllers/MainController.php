<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Exists;

class MainController extends Controller
{

    public function add(Request $request)
    {
        $sbresp = " ";
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $phone = $request['phone'];
        $dateb = $request['dateb'];
        $vacancy_id = $request['type'];
        $city_id = $request['city'];
        $city_name = $request['city_name'];
        $request_id = $request['_token'];
        $citizenship = $request['citizenship'];
        $patent = $request['patent'];
        $med = $request['med'];
        $fileName = 'более 18 лет';
        $db = pg_connect("host=pg3.sweb.ru dbname=maksimsima user=maksimsima password=Maks1999");
        $query = "INSERT INTO sber (first_name, last_name, phone, dateb,vacancy_id ,city_name) VALUES ('$first_name', '$last_name', '$phone', '$dateb','$vacancy_id','$city_name')";
        $result = pg_query($db, $query);
            $to = 'shvedova.yana20@yandex.ru';
    $subject = 'Новая заявка';
    $message = "Имя: $first_name\n" .
               "Фамилия: $last_name\n" .
               "Телефон: $phone\n" .
               "Дата рождения: $dateb\n" .
               "ID вакансии: $vacancy_id\n" .
               "ID города: $city_id\n" .
               "Название города: $city_name\n" .
               "ID запроса: $request_id\n" .
               "Гражданство: $citizenship\n" .
               "Патент: $patent\n" .
               "Медицинская справка: $med\n";

    // Заголовки
    $headers = "From: kabanchik@napodskoke.ru";

    // Отправка письма
    mail($to, $subject, $message, $headers);

        if ($request->hasFile('fieldImg')) {
            $image = $request->file('fieldImg');
            $name_image = $image->getClientOriginalName();
            $extension = pathinfo($name_image, PATHINFO_EXTENSION);
            $name_image = $first_name.$last_name.'.'.$extension;
            $image->move(public_path().'/uploads', $name_image);
            $fileName = "https://super-kuper.ru/uploads/$name_image";

        }
        $sb = new SberController($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$request_id);
        $sbresp = $sb -> send();
        $amo = new AmoController($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$city_name,$request_id,$citizenship,$patent,$med,$sbresp,$fileName);
        $response = $amo -> send();

        return $sbresp;

       
        }

    }