@extends('layout')
@section('title')Главная@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="cities-list" class="grid gap-1 m-2 mt-8 md:grid-cols-8 p-4"></div>
    <button id="save-button" class="text-white left-1/2 bg-gazprom hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Сохранить</button>

    <script>
        fetch('city.json')
            .then(response => response.json())
            .then(data => {
                const citiesList = document.getElementById('cities-list');
                
                data.cities.forEach(city => {
                    const checkbox = document.createElement('input');
                    const box = document.createElement('div');
                    checkbox.type = 'checkbox';
                    checkbox.checked = city.show;
                    checkbox.className = 'm-2';
                    const cityName = document.createTextNode(city.name);
                    box.appendChild(checkbox);
                    box.appendChild(cityName);
                    box.className = ' bg-gazprom m-2 py-1 border-2 border-gray-300 rounded-lg'; // Обратите внимание на пробел перед новым классом

                    citiesList.appendChild(box);

                    checkbox.addEventListener('change', () => {
                        city.show = checkbox.checked;
                    });
                });
                const saveButton = document.getElementById('save-button');
                saveButton.addEventListener('click', () => {
                    saveData(data);
                });

                function saveData(data) {
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    fetch('/admin', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify(data)
                    });
                }
            });
    </script>
</body>

@endsection