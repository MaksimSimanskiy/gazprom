@extends('layout')
@section('title')Главная@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="cities-list" class="grid gap-1 m-2 mt-8 md:grid-cols-5 p-4"></div>
    <div id="vacancy" class="inline-flex items-center justify-center w-full ">

    <button id="save-button" class="text-white flex transition-x-1/2 bg-blue-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Сохранить</button>
    </div>
    <script>
    $(document).ready(function() {
        $.getJSON('city.json', function(data) {
            const citiesList = $('#cities-list');

            data.cities.forEach(city => {
                const cityBox = $('<div></div>').addClass('bg-gazprom m-2 py-1 border-2 border-gray-300 rounded-lg');
                const cityCheckbox = $('<input>')
                    .attr('type', 'checkbox')
                    .prop('checked', city.show)
                    .addClass('m-2');
                const cityName = $('<span></span>').text(city.name);

                cityBox.append(cityCheckbox, cityName);

                // Добавить чекбоксы для каждого типа работы
                ['walk', 'plan', 'uni', 'velo'].forEach(type => {
                    const job = city[type];
                    if (job) {
                        const jobBox = $('<div></div>').addClass('m-2');
                        const jobCheckbox = $('<input>')
                            .attr('type', 'checkbox')
                            .prop('checked', job[0])
                            .addClass('m-2');
                        const jobLabel = $('<span></span>').text(job[2]);

                        jobBox.append(jobCheckbox, jobLabel);
                        cityBox.append(jobBox);

                        jobCheckbox.change(function() {
                            job[0] = $(this).prop('checked');
                        });
                    }
                });

                citiesList.append(cityBox);

                cityCheckbox.change(function() {
                    city.show = $(this).prop('checked');
                });
            });

            $('#save-button').click(function() {
                saveData(data);
            });
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