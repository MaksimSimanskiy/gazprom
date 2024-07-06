@extends('layout')
@section('title')Форма регистрации@endsection
@section('content')
<form method="post" name="myForm" class="flex justify-center items-center my-16" action="" id="form">
    @csrf
    @method('POST')
    <div class="grid gap-5 m-4 mt-8 md:grid-cols-1 p-5 border border-gray-300 rounded-lg">
    <div id="vacancy" class="inline-flex items-center justify-center w-full ">
    <hr class="md:w-full w-full h-0.5 md:h-1 my-8 bg-gazprom border-0 dark:bg-gray-700">
    <span class="absolute px-3 md:text-3xl text-xl font-bold tracking-tight text-gray-900   bg-white  dark:text-white dark:bg-gray-900">Форма регистрации
</span>
</div>
        <div>
            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Имя</label>
            <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Иван" required />
        </div>
        <div>
            <label for="last_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Фамилия</label>
            <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Иванов" required />
        </div>

    <div>
        <label for="phone-input" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Номер телефона</label>
    <div class="relative ">
        <div class="absolute pl-2  inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4  text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
            </svg>
        </div>
        <input type="phone" name="phone" id="phone-input" aria-describedby="helper-text-explanation" class="pl-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" pattern="(\+7|8)[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}" placeholder="+79199293332" required />
    </div>
</div>
<div>
    
    <label for="dateb" min="1910-01-01" max="2020-01-01" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Дата рождения</label>

    <input type="date" name="dateb" id="dateb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="09.09.1999" />
</div>
    <div>
  <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
    <option selected>Выберите тип работы</option>
    <option value="13">Пеший курьер</option>
    <option value="3">Водитель-курьер(Плановая доставка)</option>
    <option value="3_1">Водитель-универсал(Быстрая доставка)</option>
    <option value="15">Велокурьер</option>
  </select>
    </div>
    <div>
  <select id="city" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
    <option selected>Выберите город</option>
 
  </select>
  <input id="city_name" name="city_name" type="hidden">
    </div>
    <div class="hidden" id="sixteen">
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Загрузите фото согласия от законных представителей</label>
<input id ="verification" name="file "class="block w-full  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help"><a download href="{{url('docs/ФормаСогласия.pdf')}}" class="text-orange-400 hover:underline dark:text-orange-500">Шаблон согласия</a>. После проверки вы сможете начать работать</p>

</div>
        <div class="flex items-start mb-2">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="text-gazprom appearance-none w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-orange-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-600 dark:ring-offset-gray-800" required />
        </div>
        <label for="remember" class="pl-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Я согласен <a href="#" class="text-orange-400 hover:underline dark:text-orange-500">условиями обработки персональных данных</a>.</label>
    </div>
    <button id="sub" type="submit" class="text-white bg-gazprom hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Отправить</button>
    </div>
    
</form>
<button data-modal-target="default-modal" data-modal-toggle="default-modal"  id="modal" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button>
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Спасибо за регистрацию!
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
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400" id="response">
                    Вы успешно зарегистрировались! Мы скоро с вами свяжемся и сообщим что делать дальше
                </p>

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
<script>
        const typeInput = document.getElementById('sub');
        const dobInput = document.getElementById('dateb');
        const underageDiv = document.getElementById('sixteen');
        const verificationInput = document.getElementById('verification');
        typeInput.addEventListener('click', function() {
            const today = new Date();
            const birthDate = new Date(dobInput.value);
            let age = today.getFullYear() - birthDate.getFullYear();

            if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                underageDiv.style.display = 'block';
                verificationInput.setAttribute('required', true);
            } else {
                underageDiv.style.display = 'none';
                verificationInput.removeAttribute('required');
            }
        });
    </script>
    <script>

  
    $("#form").submit(function(e){
e.preventDefault();
$("#myForm :input").prop('disabled', true);
$.ajax({
type: 'POST',
url: '/form',
data: $(this).serialize(),
dataType: 'json',
cache: false,
success: function(response){
    $("#modal").click();
    $('form[name=myForm]').trigger('reset');
},
error: function(data) {
    $('#response').text = "Извините произошла какая то ошибка, повторите позже или обратитесь к менеджеру по телефону"
    $("#modal").click();
    $('form[name=myForm]').trigger('reset');
    $('response').text = "Извините произошла какая то ошибка, повторите позже или обратитесь к менеджеру по телефону"
            // Во время загрузки файла произошла ошибка
        },
complete: function() {
    $("#myForm :input").prop('disabled', false);
 // Разблокировка полей ввода
        }
});
});
</script>
<script>
    document.getElementById('city').addEventListener('change', function() {
  var selectedCity = this.options[this.selectedIndex].text;
  document.getElementById('city_name').value = selectedCity;
});
    // Функция для загрузки и обработки данных из файла city.json
    function loadCities() {
        fetch('city.json')
        .then(response => response.json())
        .then(data => {
            const cities = data.cities;

            // Фильтрация городов по полю 'show'
            const filteredCities = cities.filter(city => city.show === true);

            // Добавление отфильтрованных городов в выпадающий список
            const selectElement = document.getElementById('city');
            filteredCities.forEach(city => {
                const option = document.createElement('option');
                option.text = city.name;
                option.value = city.id;
                selectElement.add(option);
            });
        })
        .catch(error => console.error('Ошибка при загрузке файла city.json:', error));
    }

    // Вызов функции loadCities при загрузке страницы
    document.addEventListener('DOMContentLoaded', loadCities);
</script>
<script>
    function checkParams() {
    var first = $('#first_name').val();
    var last = $('#last_name').val();
    var phone = $('#phone').val();
    var dateb = $('#dateb').val();
    var type = $('#type').val();
    var city = $('#city').val();
    var vacancy = $('#vacancy_id').val();
    if(first.length != 0 && last.length != 0 && phone.length != 0 && dateb.length != 0 && type.length != 0 && city.length != 0) {
        $('#sub').removeAttr('disabled');
    } else {
        $('#sub').attr('disabled', 'disabled');
    }
}
</script>
@endsection