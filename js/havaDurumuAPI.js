//api çekme işlemlerini yapar

const url = "https://api.openweathermap.org/data/2.5/";
const key = "645b444409b1a4fb20acef702334fd67";

const setQuery = (e) => {
  if (e.keyCode == "13") {
    getResult(aramaKutusu.value);
  }
};

const getResult = (cityName) => {
  let query = `${url}weather?q=${cityName}&appid=${key}&units=metric&lang=tr`;
  fetch(query)
    .then((weather) => {
      return weather.json();
    })
    .then(displayResult);
};

const displayResult = (result) => {
  let sehir = document.querySelector(".sehir");
  sehir.innerText = `${result.name},${result.sys.country}`;

  let derece = document.querySelector(".derece");
  derece.innerText = `${Math.round(result.main.temp)}°C`;

  let aciklama = document.querySelector(".aciklama");
  aciklama.innerText = result.weather[0].description;

  let minmax = document.querySelector(".minmax");
  minmax.innerText = `${Math.round(result.main.temp_min)}°C - 
    ${Math.round(result.main.temp_max)}°C `;
};

const aramaKutusu = document.getElementById("aramaKutusu");
aramaKutusu.addEventListener("keypress", setQuery);
