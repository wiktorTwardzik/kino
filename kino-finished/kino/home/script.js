const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');
const city =  document.getElementById('city')
const timeSelect = document.getElementById('time')
const selectedMovieDisplay = document.getElementById('selectedmovie')
const selectedDayDisplay = document.getElementById('selectedday')
const selectedTimeDisplay = document.getElementById('selectedhour')
const ticketPriceDisplay = document.getElementById('ticketprice')
const ticketNumberDisplay = document.getElementById('ticketnumber')
const SummaryButton = document.getElementById('SummaryButton')
const display1 = document.getElementById('display1')
const display2 = document.getElementById('display2')
const form = document.getElementById('form1')
let moviename
let realmoviename
let chosentime
let cityname
populateUI();
let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
}

// update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  //copy selected seats into arr
  // map through array
  //return new array of indexes

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
  selectedDayDisplay.innerHTML = cityname
  selectedMovieDisplay.innerHTML = moviename
  selectedTimeDisplay.innerHTML = chosentime
  ticketPriceDisplay.innerHTML = selectedSeatsCount * ticketPrice
  ticketNumberDisplay.innerHTML = selectedSeatsCount
}

// get data from localstorage and populate ui
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }
}

// Movie select event
movieSelect.addEventListener('change', (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener('click', (e) => {
  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');

    updateSelectedCount();
  }
});

// intial count and total
updateSelectedCount();

function upadateInfo(){
  cityname = city.value
  moviename = movieSelect.value
  chosentime = timeSelect.value
}
city.addEventListener('change', (e)=>{
  cityname = city.value
  upadateInfo()
})
movieSelect.addEventListener('change', (e)=>{
  moviename = movieSelect.value
  switch(moviename){
    case "10":
      realmoviename = "Spider-man: No way home"
      break
    case "9":
      realmoviename = "Aquaman"
      break
      case "11":
        realmoviename = "Uncharted"
        break
        case "12":
      realmoviename = "Dr.Strange"
      break
      case "13":
        realmoviename = "Black Panther"
        break
        case "8":
          realmoviename = "John Wick 2"
          break

  }
  
  upadateInfo()

})
timeSelect.addEventListener('change', e=>{
  chosentime = timeSelect.value
  upadateInfo()
})

SummaryButton.addEventListener('click', e=>{
  
  form.style.display = "none"
  display1.style.display = "block"
  display2.style.display = "block"
  selectedDayDisplay.innerHTML = cityname
  selectedMovieDisplay.innerHTML = realmoviename
  selectedTimeDisplay.innerHTML = chosentime
  ticketPriceDisplay.innerHTML = selectedSeatsCount * ticketPrice
  ticketNumberDisplay.innerHTML = selectedSeatsCount
  upadateInfo()
})