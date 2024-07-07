<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function changheList(Request $request){

    
    $data = $request['data'];

if ($data) {
    // Загружаем текущее содержимое файла city.json
    $file = 'city.json';
    $current_data = json_decode(file_get_contents($file), true);

    // Обновляем значения show для каждого города
    foreach ($current_data['cities'] as &$city) {
        $city_name = $city['name'];
        if (isset($data['cities'][$city_name])) {
            $city['show'] = $data['cities'][$city_name]['show'];
        }
    }

    // Записываем обновленные данные обратно в файл city.json
    file_put_contents($file, json_encode($current_data, JSON_PRETTY_PRINT));

    // Отправляем ответ об успешном сохранении
    http_response_code(200);
    echo json_encode(['message' => 'Изменения сохранены успешно.']);
} else {
    // Отправляем ответ об ошибке
    http_response_code(400);
    echo json_encode(['error' => 'Произошла ошибка при сохранении изменений.']);
}
    }
}
