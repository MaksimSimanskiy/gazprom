
        const typeInput = document.getElementById('remember');
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


  
$(document).ready(function(){
    $('#form').submit(function(e){
        e.preventDefault();
        
        var formData = new FormData(this);
        var image = $("#verification")[0].files[0];
        formData.append('fieldImg', image);
        $("#modal2").click();
        $.ajax({
            type: 'POST',
            url: '/form',
            data: formData,
            processData: false, // Не обрабатывать данные
            contentType: false, // Не устанавливать тип контента
            cache: false,
            success: function(response){
                $("#modal").click();
                $('form[name=myForm]').trigger('reset');
            },
            error: function(data) {
                $('#response').text("Извините, произошла ошибка. Повторите позже или обратитесь к менеджеру по телефону");
                $("#modal").click();
                $('form[name=myForm]').trigger('reset');
            },
            complete: function() {
                $("#modal3").click();
                $("#myForm :input").prop('disabled', false);
            }
        });
    });
});

    
    document.getElementById('city').addEventListener('change', function() {
  var selectedCity = this.options[this.selectedIndex].text;
  document.getElementById('city_name').value = selectedCity;
});
    // Функция для загрузки и обработки данных из файла city.json
    function loadCities() {
        fetch("{{ url('city.json') }}")
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
