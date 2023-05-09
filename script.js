var input = document.getElementById("input");
var btn = document.getElementById("btn");
var weatherData = document.getElementById("container");

btn.addEventListener("click", function () {
  var city = input.value;
  fetch(`api/catchData.php?city=${city}`).then((response) => response.json);
});
