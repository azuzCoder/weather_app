let city = 'Belfast';
let w = 'humidity';
let api_key = '4e9970c41e2b38d8da8689bef2c22926'

function get_weather(r=true) {
    if(r){
        city = document.getElementById('city').value
    }
    url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${api_key}`
    fetch(url)
        .then(response => response.json())
        .then(data => {
            let description = data['weather'][0]['description']
            let image_src = `icons/${data['weather'][0]['main']}.png`
            let temp = data['main']['temp']
            let humidity = data['main']['humidity']
            let wind_speed = `${data['wind']['speed']} km/h`

            window.location.href=`saveData.php?city=${city}&temp=${temp}&humidity=${humidity}&wind_speed=${wind_speed}&description=${description}&image_src=${image_src}`
            console.log('frebgf nb')
        })
}

function first_request() {
    console.log('ishlaaaaaa')
    url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${api_key}`
    fetch(url)
        .then(response => response.json())
        .then(data => {
            document.getElementById('description').innerHTML = data['weather'][0]['description']
            document.getElementById('main-image').src = `icons/${data['weather'][0]['main']}.png`
            document.getElementById('temp').innerHTML = `${data['main']['temp']}°C`
            document.getElementById('humidity').innerHTML = `${data['main']['humidity']}%`
            document.getElementById('wind-speed').innerHTML = `${data['wind']['speed']} km/h`
        })
}

// first_request()
// get_weather(false)