@extends('layout')
@section('title')Главная@endsection
@section('content')



<div id="main" class="object-cover object-center mt-6 mb-12 rounded-lg w-full bg-white ">
<img class="object-cover shadows-lg object-center w-full h-96  lg:h-screen blur-sm border-0  md:rounded-xl"  src="{{ url('images/fon.png')}}" alt="Купер - доставка супер">
<div class="md:rounded-xl border-0 shadows-lg absolute object-cover mt-16 object-top  opacity-95 top-0 w-full h-96 lg:h-screen gradient">             
</div>
<img class="absolute object-center md:top-0 md:right-0  md:w-1/2 w-1/3  md:rounded-none hidden lg:block" src="{{ url('images/team.png')}}" alt="">

<div class="absolute object-center top-40 lg:top-1/3 md:left-48 md:w-1/2 lg:w-1/3 w-full"> 
    

  
            <h2 class="mb-4 md:text-4xl text-2xl font-bold tracking-tight text-white mx-4">Стань курьером!</h2>
            <p class="md:mb-8 mb-2 text-white md:text-3xl text-xl font-medium tracking-tight mx-4">Огромное количество заказов через приложение ждет вас!</p>
            <p class="md:mb-8 mb-6 text-white  md:text-3xl text-xl font-medium  tracking-tight mx-4">Зарегистрируйся в два клика</p>
            <a href="{{ route('reg') }}" class="shadow-md text-white font-bold my-6 mx-4 hover:shadow-md bg-gazprom hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-green-300  rounded-lg md:text-3xl text-xl px-4 py-3 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Стать курьером!</a>

        

   
</div>

</div>

<div id="vacancy" class="inline-flex items-center justify-center w-full ">
    <hr class="md:w-2/3 w-full h-0.5 md:h-1 my-8 gradient border-0 dark:bg-gray-700">
    <span class="absolute px-3 md:text-4xl text-2xl font-bold tracking-tight text-gray-900   bg-white  dark:text-white dark:bg-gray-900">Вакансии
</span>
</div>



<div  class="flex justify-center items-center md:my-16 my-12 mx-2 ">

<div class="grid gap-6  md:grid-cols-1">

<a href="{{ route('reg') }}" class="mx-2  hover:border-orange-400 flex flex-col hower:shadows-lg items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
<img class="object-cover object-top w-full rounded-t-lg h-48 md:h-96 md:w-80 md:rounded-none md:rounded-s-lg" src="{{ url('images/uni(4).png')}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal" >
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Водитель-универсал (Быстрая доставка)</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Доставка заказа до двери клиента на собственном авто. Закрепление за конкретным районом и зоной доставки радиусом до 8 км. За одну поездку водитель-универсал доставляет один заказ.</p>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Условия</h5>
        <ul class="max-w-lg space-y-1 text-gray-500 list-inside dark:text-gray-400">
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Доход от 3000 р. до 6000 р.
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Оплата один раз в неделю

    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Смены от 4 часов - чем больше часов, тем выше заработок!
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Бесплатная брендированная одежда и термосумка
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Наличие личного авто
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Специальные скидки на обслуживание автомобиля и КАСКО
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Можно работать как на Android, так и на iOS
    </li>    </div>
</a>

<a href="{{ route('reg') }}" class="mx-2 flex flex-col items-center  hover:border-orange-400 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover object-top w-full rounded-t-lg h-48 md:h-96 md:w-80 md:rounded-none md:rounded-s-lg" src="{{ url('images/auto(2).png')}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Водитель-курьер (Плановая доставка)</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Закрепляется за определённым супермаркетом или рестораном. Курьеру за один рейс даётся сразу несколько адресов, по которым надо доставить товары. Радиус доставки до 15 км
</p>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Условия</h5>
<ul class="max-w-lg space-y-1 text-gray-500 list-inside dark:text-gray-400">
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         доход от 4000 р. до 7000 р.
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Оплата один раз в неделю
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Смены от 4 часов- чем больше часов, тем выше доход!
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Выдача бесплатной брендированной одежды и термосумки
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
        Наличие личного авто
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Специальные скидки на обслуживание автомобиля и КАСКО
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Можно работать только на Android
    </li>
</ul></p>
    </div>
</a>

<a href="{{ route('reg') }}" class="mx-2 flex flex-col items-center hover:border-orange-400 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover object-top w-full rounded-t-lg h-48 md:h-96 md:w-80 md:rounded-none md:rounded-s-lg" src="{{ url('images/walk(4).png')}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Пеший курьер</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Пеший курьер забирает заказ и доставляет до двери клиента. Заказы поступают из ближайших магазинов и ресторанов. Радиус до 3 км</p>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Условия</h5>
        <ul class="max-w-lg space-y-1 text-gray-500 list-inside dark:text-gray-400">
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Доход за смену от 1600₽ до 3500₽
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Оплата один раз в неделю
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Смены от 4 часов - чем больше часов, тем выше заработок!
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Бесплатная брендированная одежда и термосумка
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Специальные скидки на связь, питание, интернет и другие сервисы
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Можно работать как на Android, так и на iOS
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            Можно работать с 16 лет при наличии самозанятости и письменного разрешения от родителей
    </li>    </div>
</a>

<a href="{{ route('reg') }}" class="mx-2 flex flex-col items-center hover:border-orange-400 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover object-top w-full rounded-t-lg h-48 md:h-96 md:w-80 md:rounded-none md:rounded-s-lg" src="{{ url('images/velo.png')}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Велокурьер</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Велоуниверсал доставляет заказ до двери клиента на велосипеде. В территорию входит несколько магазинов.Радиус до 5 км</p>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Условия</h5>
        <ul class="max-w-lg space-y-1 text-gray-500 list-inside dark:text-gray-400">
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Доход за смену от 1600₽ до 3500₽
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Оплата один раз в неделю
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Смены от 4 часов - чем больше часов, тем выше заработок!
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Бесплатная брендированная одежда и термосумка
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Специальные скидки на связь, питание, интернет и другие сервисы
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         Можно работать как на Android, так и на iOS
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 me-2 text-gazprom dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            Можно работать с 16 лет при наличии самозанятости и письменного разрешения от родителей
    </li> 
   </div>
</a>
</div>
</div>
<div id="info" class="inline-flex items-center justify-center w-full">
    <hr class="md:w-2/3 w-full h-0.5 md:h-1 my-8 gradient border-0 dark:bg-gray-700">
    <span class="absolute px-3 md:text-4xl text-2xl font-bold tracking-tight text-gray-900   bg-white  dark:text-white dark:bg-gray-900">Вот еще что вы получите

</span>
</div>
<div  class="flex justify-center items-center my-16 mx-2 ">

<div class="grid gap-6  md:grid-cols-3">



<div class="max-w-sm bg-white border hover:shadow-gazprom border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center mt-4">
        <img class="h-14 w-14 rounded-t-lg" src="{{ url('svg/sber/record.svg')}}" alt="" />
</div>
    <div class="p-5">
            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Оплата вовремя</h5>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Получайте выплаты на карту каждую неделю</p>

    </div>
</div>

<div class="max-w-sm bg-white border hover:shadow-gazprom border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center mt-4">
        <img class="h-14 w-14 rounded-t-lg" src="{{ url('svg/sber/pic.svg')}}" alt="" />
</div>
    <div class="p-5">
            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Район на ваш выбор</h5>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Рядом с домом или в центре города</p>

    </div>
</div>   

<div class="max-w-sm bg-white border hover:shadow-gazprom border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center mt-4">
        <img class="h-14 w-14 rounded-t-lg" src="{{ url('svg/sber/calendar.svg')}}" alt="" />
</div>
    <div class="p-5">
            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Свободный график</h5>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Выходите на доставки, когда захотите</p>

    </div>
</div>  

<div class="max-w-sm bg-white border hover:shadow-gazprom border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center mt-4">
        <img class="h-14 w-14 rounded-t-lg" src="{{ url('svg/sber/pers.svg')}}" alt="" />
</div>
    <div class="p-5">
            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Без начальников</h5>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Сам себе босс, самостоятельно принимаете решения когда выходить на линию, сколько на ней быть онлайн, где осуществлять доставку</p>

    </div>
</div>   

<div class="max-w-sm bg-white border hover:shadow-gazprom border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center mt-4">
        <img class="h-14 w-14 rounded-t-lg" src="{{ url('svg/sber/cart.svg')}}" alt="" />
</div>
    <div class="p-5">
            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Свободный способ доставки</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Вы можете облегчить себе осуществление доставок в разы, совершая доставку на автомобиле, самокате/велосипеде или пешком</p>

    </div>
</div>   

<div class="max-w-sm bg-white border hover:shadow-gazprom border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center mt-4">
        <img class="h-14 w-14 rounded-t-lg" src="{{ url('svg/sber/shop.svg')}}" alt="" />
</div>
    <div class="p-5">
            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Экипировка</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Брендированная одежда на все времена года</p>

    </div>
</div>  

</div>
</div>
<div id="step" class="inline-flex items-center justify-center w-full">
    <hr class="md:w-2/3 w-full h-0.5 md:h-1 my-8 gradient border-0 dark:bg-gray-700">
    <span class="absolute px-3 md:text-4xl text-2xl font-bold tracking-tight text-gray-900  bg-white  dark:text-white dark:bg-gray-900">Как начать?
</span>
</div>
<div  class="flex justify-center items-center my-16 mx-2 ">

<ol class="items-center md:w-3/4 w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
    <li class="flex items-center text-gazprom dark:text-green-500 space-x-2.5 rtl:space-x-reverse">
        
        <span class="text-3xl flex items-center justify-center w-16 h-16 border border-gray-600 rounded-full shrink-0 dark:border-gray-500">
           1
        </span>
        <a href="{{ route('reg') }}">
        <h3 class="text-2xl font-medium leading-tight">Первый шаг</h3>
        <p class="text-xl">Заполните форму регистрации</p>
        </a>
    </li>
    <li class="flex items-center text-gray-700 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
        <span class="text-3xl flex items-center justify-center w-16 h-16 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
        <span>
            <h3 class="text-2xl font-medium leading-tight">Дождитесь звонка</h3>
            <p class="text-xl">Мы перезвоним и уточним детали</p>
        </span>
    </li>
    <li class="flex items-center text-gray-700 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
        <span class=" text-3xl flex items-center justify-center w-16 h-16 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        <span>
            <h3 class="text-2xl font-medium leading-tight">Получите форму</h3>
            <p class="text-xl">И можно начать работать</p>
        </span>
    </li>
</ol>


</div>


<div id="step" class="inline-flex items-center justify-center w-full">
    <hr class="md:w-2/3 w-full h-0.5 md:h-1 my-8 gradient border-0 dark:bg-gray-700">
    <span class="absolute px-3 md:text-4xl text-2xl font-bold tracking-tight text-gray-900   bg-white  dark:text-white dark:bg-gray-900">Вопросы и ответы
</span>
</div>

<div id="faq" class="flex justify-center items-center my-16 mx-2 ">

<div id="accordion-open" data-accordion="open" class="md:w-2/3 w-full border-1 border-gray-200 rounded-xl">
  <h2 id="accordion-open-heading-1">
    <button type="button" class="shadow  flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b-0 border-gray-200 rounded-t-xl focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Что нужно для начала работы?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <p class="mb-2 text-gray-600 dark:text-gray-400">1. От 4 часов свободного времени;
2. Желание сотрудничать с нами и получать высокий доход;
3. Телефон на базе Android (версия не ниже 7.0) или iOS (версия не ниже 12.0).</p>
    </div>
  </div>
  <h2 id="accordion-open-heading-2">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b-0 border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Какой радиус доставки?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">Пешие и вело-курьеры доставляют заказы в пределах 3-5 км. Авто-курьеры - в радиусе до 15 км.</p>
    </div>
  </div>

  </div>
  <h2 id="accordion-open-heading-4">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Как быстро можно устроиться?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">При наличии всех необходимых документов на смену можно выйти на следующий день</p>

    </div>
  </div>

  </div>
  <h2 id="accordion-open-heading-6">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-6" aria-expanded="false" aria-controls="accordion-open-body-5">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Можно ли выбрать ближайшую к дому точку?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-6" class="hidden" aria-labelledby="accordion-open-heading-6">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">Да, для этого в приложении перед выходом на смену Вам необходимо выбрать удобный район. </p>

    </div>
  </div>
  <h2 id="accordion-open-heading-7">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-7" aria-expanded="false" aria-controls="accordion-open-body-5">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Я могу сам выбрать своё расписание?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-7" class="hidden" aria-labelledby="accordion-open-heading-7">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">Да, Вы можете заранее  выбрать удобные дни и продолжительность Вашей смены.</p>

    </div>
  </div>
  <h2 id="accordion-open-heading-8">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-8" aria-expanded="false" aria-controls="accordion-open-body-5">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Можно ли работать с 16 лет?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-8" class="hidden" aria-labelledby="accordion-open-heading-8">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">Да, для этого необходимо наличие самозанятости и письменного разрешения на работу от родителей. <a download href="{{url('docs/ФормаСогласия.pdf')}}" class="text-orange-400 hover:underline dark:text-orange-500">Шаблон согласия</a>.</p>

    </div>
  </div>
  <h2 id="accordion-open-heading-9">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-9" aria-expanded="false" aria-controls="accordion-open-body-5">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Как можно получить статус самозанятого (для несовершеннолетних курьеров)</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-9" class="hidden" aria-labelledby="accordion-open-heading-9">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">1. Через сервис «Мой налог»

Перейдите на сайт <a href="https://npd.nalog.ru" class="text-orange-400 hover:underline dark:text-orange-500">«Мой налог»</a>. Для регистрации понадобится паспорт.</p>
<p class="mb-2 text-gray-600 dark:text-gray-400">
2. Через личный кабинет самозанятого на сайте ФНС

Перейдите на <a href="lknpd.nalog.ru" class="text-orange-400 hover:underline dark:text-orange-500"> сайт ФНС</a>. Понадобится ИНН и пароль, который выдают в отделении налоговой. Также доступна авторизация с помощью учетной записи  через портал Госуслуг.
</p>
<p class="mb-2 text-gray-600 dark:text-gray-400">
3. Через мобильное приложение банка

В личном кабинете есть раздел для самозанятых. Регистрация занимает несколько минут.
</p>
    </div>
  </div>
  <h2 id="accordion-open-heading-10">
    <button type="button" class="shadow flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-2 focus:ring-gazprom dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-10" aria-expanded="false" aria-controls="accordion-open-body-5">
      <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Какие требования к моему автомобилю?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-open-body-10" class="hidden" aria-labelledby="accordion-open-heading-10">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-600 dark:text-gray-400">Автомобиль может быть любой марки, модели и года выпуска.</p>

    </div>
  </div>
</div>


</div>
@endsection