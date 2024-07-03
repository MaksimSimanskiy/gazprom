@extends('layout')
@section('title')Форма регистрации@endsection
@section('content')
<form class="flex justify-center items-center m-16">
    <div class="grid gap-5 m-6 md:grid-cols-1 p-5 border border-gray-300 rounded-lg">
    <div>
            <div class="inline-flex items-center justify-center w-full">
                <hr class="md:w-2/3 w-64 h-0.5 md:h-1 my-8 bg-gazprom border-0 dark:bg-gray-700">
                <span class="absolute px-3 text-xl font-bold tracking-tight text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">Форма регистрации
            </span>
            </div>
        </div>
        <div>
            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Имя</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Иван" required />
        </div>
        <div>
            <label for="last_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Фамилия</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Иванов" required />
        </div>
        <div>
            <label for="middle_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Отчество</label>
            <input type="text" id="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Иванович" />
        </div>
    <div>
        <label for="phone-input" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Номер телефона:</label>
    <div class="relative ">
        <div class="absolute pl-2  inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4  text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
            </svg>
        </div>
        <input type="phone" id="phone-input" aria-describedby="helper-text-explanation" class="pl-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full ps-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" pattern="7[0-9]{10}" placeholder="+79199293332" required />
    </div>
</div>
<div>
    <label for="dateb" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Дата рождения</label>
    <input type="date" id="dateb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="09.09.1999" />
</div>
    <div>
  <select id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
    <option selected>Выберите тип работы</option>
    <option value="US">Пеший курьер</option>
    <option value="CA">Водитель-курьер</option>
    <option value="FR">Сборщик</option>
    <option value="DE">Велокурьер</option>
  </select>
    </div>
    <div>
  <select id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
    <option selected>Выберите город</option>
    <option value="US">United States</option>
    <option value="CA">Canada</option>
    <option value="FR">France</option>
    <option value="DE">Germany</option>
  </select>
    </div>
    <div>
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Загрузите фото согласия от законных представителей</label>
<input class="block w-full  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help"><a download href="{{url('docs/ФормаСогласия.pdf')}}" class="text-orange-400 hover:underline dark:text-orange-500">Шаблон согласия</a>. После проверки вы сможете начать работать</p>

</div>
        <div class="flex items-start mb-2">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="text-gazprom appearance-none w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-orange-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-600 dark:ring-offset-gray-800" required />
        </div>
        <label for="remember" class="pl-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Я согласен <a href="#" class="text-orange-400 hover:underline dark:text-orange-500">условиями обработки персональных данных</a>.</label>
    </div>
    <button type="submit" class="text-white bg-gazprom hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Отправить</button>
    </div>
    
</form>

@endsection