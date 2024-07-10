@extends('layout')
@section('title')Главная@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="cities-list" class="grid gap-1 m-2 mt-8 md:grid-cols-5 p-4 text-xs"></div>
    <div id="vacancy" class="inline-flex items-center justify-center w-full ">

    <button id="save-button" class="text-white flex transition-x-1/2 bg-blue-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Сохранить</button>
    </div>
    <button data-modal-target="default-modal" data-modal-toggle="default-modal"  id="modal" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button>
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-lg dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Данные успешно сохранены!
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Закрыть</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                <p class="flex items-center leading-relaxed text-orange-500 dark:text-gray-400" id="response">
                <button onclick="location.reload();" class="text-white flex transition-x-1/2 bg-blue-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Чудно!</button>
                </p>
            </div>
            <!-- Modal footer -->

        </div>
    </div>
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
                cityName.addClass('underline text-bold text-sm');
                cityBox.append(cityCheckbox, cityName);

                // Добавить чекбоксы для каждого типа работы
                ['walk', 'plan', 'uni', 'velo'].forEach(type => {
                    const job = city[type];
                    if (job) {
                        const jobBox = $('<div></div>').addClass('m-2 border-2 p-1 border-gray-300 rounded-lg');
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
    })
    .then(response => response.json())
    .then(responseData => {
        if (responseData.message === 'Data saved successfully') {
            // Показать модальное окно
            $("#modal").click();
            
            
        }
    })
    .catch(error => console.error('Error:', error));
}
            });
    </script>
</body>

@endsection