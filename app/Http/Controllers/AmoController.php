<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class AmoController extends Controller
{
    public string $first_name;
    public string $last_name;
    public string $dateb;
    public  string $phone;
    public string $vacancy_id;
    public string $city_id;
    public  string $request_id;
    public  string $file;
    public  string $city_name;
    public  string $candy;
    public   $med;
    private string $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM4NGU3MmNiODkxOTRkY2UwZGFjOWUzOTFmZWNkNmMwMzllOThlYjM0ZjBmZjBkMTI3YjQxNThiNjMyNTAxOGI5NmNlMjA5MjA5YWZkNzhhIn0.eyJhdWQiOiIxMWQ2N2RiMy1iNjg1LTQwOWEtOTViNS1mNzdiZWE3ZTczOTkiLCJqdGkiOiJjODRlNzJjYjg5MTk0ZGNlMGRhYzllMzkxZmVjZDZjMDM5ZTk4ZWIzNGYwZmYwZDEyN2I0MTU4YjYzMjUwMThiOTZjZTIwOTIwOWFmZDc4YSIsImlhdCI6MTcyMDE5OTI0MywibmJmIjoxNzIwMTk5MjQzLCJleHAiOjE4NjQzMzkyMDAsInN1YiI6IjEwNzMzODU0IiwiZ3JhbnRfdHlwZSI6IiIsImFjY291bnRfaWQiOjMxNjMyMjk0LCJiYXNlX2RvbWFpbiI6ImFtb2NybS5ydSIsInZlcnNpb24iOjIsInNjb3BlcyI6WyJjcm0iLCJmaWxlcyIsImZpbGVzX2RlbGV0ZSIsIm5vdGlmaWNhdGlvbnMiLCJwdXNoX25vdGlmaWNhdGlvbnMiXSwiaGFzaF91dWlkIjoiNTI5ZDI3OTQtZGIxNS00YTI1LWIyZGYtNDgzZjEwOTM1NjgzIn0.mnaHQHKsCHPVGMpfk7mo-daJYLwC-61htayxk22Kexwom3jQ7_HkaGqRB_5dZcZPWnRJC_Xe1ooSfgId8JVHtJwl3esPJt15S_VI_6bGpXyJSzyctWlHMfYe8uIYqokAvvlFlj1w4TJFsUUOktRUSFiDido8lH8O7i3YionQjwypTRCjAWsbA0j0Ik4cXx7jQAPv2qoDPhAg6Q_Vy6z0DtgHKTfNFqv-bKy6lMox8ujdiVHeuUWQ6mLClVTCrIVNLwI8bQGJuBFq8phMjBbkTyY3ODBGvXs2lDfWufWYIeOLFlanGG2lP2ehJUKOxhpH1kfc4bzPclnE--wLmk3EXA';
    private string $url = "https://proektz.amocrm.ru/api/v4/leads/complex";
    public  int $pipeline_id = 7923362;
    public  int $user_amo = 10733854;
    public int $status_id = 65101890;
    public string $utm_source   = 'Gazprom';
    public string $utm_medium;
    public  $citizenship;
    public $patent;

    function __construct($first_name,$last_name,$phone,$dateb,$vacancy_id,$city_id,$city_name,$request_id, $citizenship = "",$patent = "",$med = "",$candy = " ",$file = "")
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->dateb = $dateb;
        $this->citizenship = $citizenship;
        $this->patent = $patent;
        $this->med = $med;
        $this->candy = "https://crm.sbermarket.ru/candidates?candidate_id=".$candy;
        $this->file = $file;
        if($vacancy_id == 3){
            $this->vacancy_id = "Водитель-курьер(Плановая доставка)";
        }
        if($vacancy_id == 3_1){
            $this->vacancy_id = "Водитель-универсал(Быстрая доставка)";
        }
        if($vacancy_id == 13){
            $this->vacancy_id = "Пеший курьер";
        }
        if($vacancy_id == 15){
            $this->vacancy_id = "Велокурьер";
        }
        if($vacancy_id == 2){
            $this->vacancy_id = "Сборщик";
        }
        $this->city_id = $city_id;
        $this->city_name = $city_name;
        $this->request_id = $request_id;
    }
    function send(){
        $name = $this->first_name .' '. $this->last_name;
        $request = new Request();
        $headers = [
    'Content-Type' => 'application/json',
    'User-Agent' => 'amoCRM-API-client/1.0',
    'Authorization' =>'Bearer ' . $this -> access_token,
    ];
        $data = [
    [
        "name" => $name,
        "status_id"=> $this -> status_id,
        "responsible_user_id" => (int) $this -> user_amo,
        "created_at" => strtotime(date("Y-m-d H:i:s")),
        "pipeline_id" => $this -> pipeline_id,
        "_embedded" => [
            "contacts" => [
                [
                    "first_name" => $name,
                    "custom_fields_values" => [
                        [
                            "field_code" => "PHONE",
                            "values" => [
                                [
                                    "enum_code" => "WORK",
                                    "value" => $this -> phone
                                ]
                            ]
                        ],                                           
                        [
                            "field_id" => 1241767,
                            "values" => [
                                [
                                    "value" => $this -> vacancy_id
                                ]
                            ]
                        ],
                        [
                            "field_id" => 1592059,
                            "values" => [
                                [
                                    "value" => $this -> candy
                                ]
                            ]
                        ],
                        [
                            "field_id" => 1591519,
                            "values" => [
                                [
                                    "value" => $this -> city_name
                                ]
                            ]
                        ],
                        [
                            "field_id" => 1608155,
                            "values" => [
                                [
                                    "value" => $this -> citizenship
                                ]
                            ]
                        ],
                        [
                            "field_id" => 1608157,
                            "values" => [
                                [
                                    "value" => $this -> patent
                                ]
                            ]
                        ],
                                                [
                            "field_id" => 1591523,
                            "values" => [
                                [
                                    "value" => $this -> dateb
                                    ]
                                    ]
                                ],
                                [
                                    "field_id" => 1591533,
                                    "values" => [
                                        [
                                            "value" => $this -> file
                                            ]
                                            ]
                                        ],
                                        [
                                            "field_id" => 1608159,
                                            "values" => [
                                                [
                                                    "value" => $this -> med
                                                    ]
                                                    ]
                                                ],
                            ]
                        ]    
                    ],
            "companies" => [
                [
                    "name" => "gazprom"
                ]
            ]
        ],
        "custom_fields_values" => [
            [
                "field_code" => 'UTM_SOURCE',
                "values" => [
                    [
                        "value" => $this -> utm_source
                        ]
                        ]
                    ],
                    [
                        "field_code" => 'UTM_TERM',
                        "values" => [
                            [
                                "value" => $this -> citizenship
                                ]
                    ]
                    ],
                                        [
                        "field_code" => 'UTM_CAMPAIGN',
                        "values" => [
                            [
                                "value" => $this -> candy
                                ]
                    ]
                    ],
                ],
            ]
            ];
            $response = Http::withHeaders($headers) -> withOptions([
                'verify' => false, // Отключение проверки SSL-сертификата
            ])->post($this->url, $data);
            $request->all();
            $responseData = $response->json();
            $this->saveResponseData($responseData);
     return json_encode($responseData);
    }
        private function saveResponseData($responseData)
    {
        $filePath = 'amo.json'; // Путь к файлу JSON
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