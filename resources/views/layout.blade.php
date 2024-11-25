<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Работа курьером в свободное время" /> <!-- website name -->
        <meta property="og:locale" content="ru">
        <meta property="og:site" content="https://super-kuper.ru" /> <!-- website link -->
        <meta property="og:title" content="Работа курьером в свободное время" /> <!-- title shown in the actual shared post -->
        <meta name="keywords" content="поиск работы, работа курьером, вакансия курьера, пеший курьер, доставка, Яндекс.Еда, Яндекс.Доставка, Яндекс.Такси, Пеший курьер, курьер на авто">
        <meta property="og:description" content="Мы официальный партнер Сбермаркет предоставляем работу курьером на авто или пешком" /> <!-- description shown in the actual shared post -->
        <meta property="og:type" content="website" /> <!-- title shown in the actual shared post -->
        <meta property="og:image" content="{{ url('images/uni(4).png')}}" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="https://super-kuper.ru" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="{{ url('images/uni(4).png')}}" /> <!-- to have large image post format in Twitter -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link rel="shortcut icon" href="Kuper_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!--<script src="{{ url('js/scrips.js') }}"></script>-->

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body data-spy="scroll" data-target=".fixed-top">
<!-- Модальное окно -->
<div id="callbackModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md gradient2 hover:shadow-gazprom hover:shadow-md relative">
        <!-- Крестик для закрытия -->
        <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-900 focus:outline-none text-2xl font-bold">
            &times;
        </button>
        <div class="relative flex justify-center items-center mb-8">
            <hr class="absolute w-full h-1 fon-gradient border-0 dark:bg-gray-700">
            <span class="relative px-3 text-xl md:text-3xl font-bold tracking-tight text-gray-900 bg-white dark:text-white dark:bg-gray-900">
                Обратный звонок
            </span>
        </div>
        <form action="{{ route('callback.submit') }}" method="POST" id="callbackForm">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Имя</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Введите ваше имя" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Номер телефона</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                            <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                        </svg>
                    </div>
                    <input type="text" name="phone" id="phone" class="pl-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Введите ваш номер телефона"     pattern="(\+7|8)[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}" required>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 focus:ring-2 focus:ring-orange-400">Отправить</button>
            </div>
        </form>
    </div>
</div>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b md:border-gray-100 dark:border-gray-600 shadow-md border border-gray-200 rounded-lg md:rounded-none" >
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">
        <a href="#" class="flex items-center space-x-5 rtl:space-x-reverse">
            <img src="{{ url('svg/sb logo color 3.svg')}}" class="h-6 md:h-8"  alt="Сбермаркет">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <span class="object-center	">

            <a class="no-underline " target="_blank" href="https://api.whatsapp.com/send?phone=79283080424">

              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:w-8 md:h-8 mt-3 md:mt-1" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0fb84a" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
              </a>

            </span>
        <span class="md:px-2 object-center	">
          <a class="no-underline " target="_blank" href="https://t.me/+79283080424">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:w-8 md:h-8 mt-3 md:mt-1" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/></svg>
          </a>
          </span>

            <a href="{{ route('reg') }}" class="text-white bg-gazprom hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 hidden md:block">Начать работать!</a>
            <span class="md:px-2 object-center	">

            <button id="openModalButton" class="text-white bg-green-600 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 hidden md:block">
                Заказать звонок
            </button>
                </span>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-12 h-12 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Открыть меню</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-sticky">

          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium  bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="{{ route('main') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gazprom md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Главная</a>
            </li>
            <li>
              <a href="{{ url('/main#vacancy') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gazprom md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Вакансии</a>
            </li>
            <li>
              <a href="{{ url('/main#info') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gazprom md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Условия</a>
            </li>
            <li>
              <a href="{{ url('/main#faq') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gazprom md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Вопросы и ответы</a>
            </li>
            <li>
              <a href="tel:79283080424" class="block py-2 px-3 text-gray-900  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gazprom md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">+79283080424</a>
            </li>
            <li class="md:hidden">
              <a href="{{ route('reg') }}" class="block py-2 px-3 text-white bg-gazprom rounded md:bg-transparent md:text-gazprom md:p-0 md:dark:text-green-500" aria-current="page">Начать работать</a>
            </li>
          </ul>

        </div>
        </div>
      </nav>
      <div class="my-16">
        @yield('content')
      </div>
<script>
    // Элементы
    const modal = document.getElementById('callbackModal');
    const openModalButton = document.getElementById('openModalButton');
    const closeModalBtn = document.getElementById('closeModal');

    // Функция для открытия модального окна
    function openModal() {
        modal.classList.remove('hidden');
    }

    // Функция для закрытия модального окна
    function closeModal() {
        modal.classList.add('hidden');
    }

    // Обработчик для открытия модального окна
    openModalButton.addEventListener('click', openModal);

    // Закрытие модального окна при клике по крестику
    closeModalBtn.addEventListener('click', closeModal);

    window.onload = function () {
        setTimeout(openModal, 10000); // 10 секунд = 10000 мс
    };
    // Закрытие модального окна при клике вне его
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }

    });
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>

<footer class="bg-white rounded-lg shadow m-4 mt-8 dark:bg-gray-800">
  <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">


      <li class="text-center lg:text-sm text-xs">
Партнёры, имеющие статус «самозанятого» (плательщика налога на профессиональный доход) и ИП, не являются работниками СберМаркета. На таких партнёров не распространяются положения об обязательном социальном страховании, установленные трудовым законодательством. Партнёры могут воспользоваться предложениями по добровольному страхованию от СберСтрахования: Программа «Защита от травм», Пенсионное страхование, Страхование ответственности перед заказчиком
</br>
*Ориентировочный доход курьеров и сборщиков. Условия и результаты индивидуальны и могут отличаться от указанных.

</li>
      <li class="text-center  lg:text-sm text-xs">

</li>
  </ul>
  </div>
</footer>
</html>
