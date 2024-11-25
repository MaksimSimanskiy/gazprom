<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CallbackController extends Controller
{
    public function submit(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Данные для amoCRM
        $name = $validated['name'];
        $num = $validated['phone'];

        $pipeline_id = 7923362;
        $user_amo = 10733854;
        $company = "Обратная связь";
        $utm_source = 'Обратная связь';

        $data = [
            [
                "name" => $name,
                "status_id" => 72014742,
                "responsible_user_id" => (int)$user_amo,
                "created_at" => strtotime(now()),
                "pipeline_id" => (int)$pipeline_id,
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
                                            "value" => $num
                                        ]
                                    ]
                                ],
                            ]
                        ]
                    ],
                    "companies" => [
                        [
                            "name" => $company
                        ]
                    ]
                ],
                "custom_fields_values" => [
                    [
                        "field_code" => 'UTM_SOURCE',
                        "values" => [
                            [
                                "value" => $utm_source
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM4NGU3MmNiODkxOTRkY2UwZGFjOWUzOTFmZWNkNmMwMzllOThlYjM0ZjBmZjBkMTI3YjQxNThiNjMyNTAxOGI5NmNlMjA5MjA5YWZkNzhhIn0'; // Укажите ваш токен доступа
        $subdomain = 'proektz'; // Укажите ваш субдомен

        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $access_token,
        ];

        $method = "/api/v4/leads/complex";
        $url = "https://{$subdomain}.amocrm.ru{$method}";

        // Отправка запроса
        $response = Http::withHeaders($headers)->post($url, $data);

        // Проверка ответа
        if ($response->successful()) {
            return back()->with('success', 'Мы свяжемся с вами в ближайшее время!');
        } else {
            $error_code = $response->status();
            return back()->withErrors(['error' => "Ошибка: {$error_code}. Пожалуйста, попробуйте позже."]);
        }
    }

}

