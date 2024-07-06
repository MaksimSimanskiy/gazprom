<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Города</title>
</head>
<body>
    <div id="cities-list"></div>
    <button id="save-button">Сохранить</button>

    <script>
        fetch('city.json')
            .then(response => response.json())
            .then(data => {
                const citiesList = document.getElementById('cities-list');
                
                data.cities.forEach(city => {
                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.checked = city.show;
                    
                    const cityName = document.createTextNode(city.name);
                    citiesList.appendChild(checkbox);
                    citiesList.appendChild(cityName);
                    
                    checkbox.addEventListener('change', () => {
                        city.show = checkbox.checked;
                    });
                });

                const saveButton = document.getElementById('save-button');
                saveButton.addEventListener('click', () => {
                    saveData(data);
                });

                function saveData(data) {
                    fetch('city.json', {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });
                }
            });
    </script>
</body>
</html>
