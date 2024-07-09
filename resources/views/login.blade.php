@extends('layout')
@section('title')Вход в систему@endsection
@section('content')

<div class="flex justify-center items-center my-16">
    
<div class="grid gap-5 m-4 mt-8 md:grid-cols-1 p-5 border border-gray-300  shadow-md rounded-lg">
<span class=" px-3 md:text-3xl text-xl font-bold tracking-tight text-gray-900   bg-white  dark:text-white dark:bg-gray-900">Настройка
</span>
        <form method="POST" action="{{ route('login') }}" class="px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="login">
                    Логин
                </label>
                <input name="login" id="login" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Пароль
                </label>
                <input name="password" id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-gazprom hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Вход
                </button>
            </div>
        </form>

    </div>
</body>


@endsection