var input = document.getElementById("input");
var btn = document.getElementById("btn");
var weatherData = document.getElementById("container");

btn.addEventListener("click", function () {
  var city = input.value;
  fetch(`api/catchData.php?city=${city}`)
    .then((response) => response.json())
    .then((data) => {
      if (data.error) {
        weatherData.innerHTML = `<p>Error: ${data.error}</p>`;
      } else
        weatherData.innerHTML = `<p>Current-time: ${data.date}</p>
            <p>Temperature in Celsius: ${data.temp}</p>
            <p>Weather: ${data.description}</p>`;
    })
    .catch((error) => {
      // console.error(error);
    });
});
