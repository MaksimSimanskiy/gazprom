<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class SberController extends Controller
{
    public string $first_name;
    public  string $last_name;
    public  string $dateb;
    public  string $phone;
    public  int $vacancy_id;
    public  int $city_id;
    public  string $request_id;
    private string $url = "https://crm-gw.sbermarket.ru/partner-candidate/v1/leads/import";
    private string $login = "com_taxi_centr_krnd";
    private string $pass = "IYggiW1Jq**";


    function __construct($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$request_id)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $newStr = str_replace("+", "", $phone);
        $this->phone = $newStr;
        $this->dateb = $dateb;
        $this->vacancy_id = $vacancy_id;
        if($vacancy_id == 3_1){
            $this->vacancy_id = 3;
        }
        $this->city_id = $city_id;
        $this->request_id = $request_id;
    }
    function send(){
        $auth = base64_encode($this->login.':'.$this->pass);
        $request = new Request();
$response = Http::withHeaders([
    'Content-Type' => 'application/json',
    'Authorization'=>'Basic '.$auth 
])->timeout(40)->post($this-> url,[
    'candidates' => [
        [
            'phone' => $this->phone,
            'utm' => [
                'utm_source' => 'site',
                'utm_medium' => 'gazprom',
                'utm_campaign' => 'string',
                'utm_term' => 'string',
                'utm_content' => 'string'
            ],
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'vacancy_id' => $this->vacancy_id,
            'city_id' => $this->city_id,
            'request_id' => $this->request_id
        ]
    ]
],$request->all());
     $responseData = $response->json();
     $uuid = $responseData['details'][0]['uuid'];
     $this->saveResponseData($responseData);
     return $uuid;
    }
    private function saveResponseData($responseData)
    {
        $filePath = 'responses.json'; // Путь к файлу JSON
        $data = [];

        // Проверка, существует ли файл
        if (Storage::exists($filePath)) {
            // Загрузка текущего содержимого файла
            $json = Storage::get($filePath);
            $data = json_decode($json, true);
        }

        // Добавление новых данных
        $data[] = [
            'responseData' => $responseData,
            'timestamp' => Carbon::now()->toDateTimeString()
        ];

        // Сохранение данных обратно в файл
        Storage::put($filePath, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
