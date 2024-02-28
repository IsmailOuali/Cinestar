<x-layout>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap");


body{
    /* display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; */
}

.movie-container {
  margin: 20px 0;
}

.movie-container select {
  background-color: #fff;
  border: 0;
  border-radius: 5px;
  font-size: 14px;
  margin-left: 10px;
  padding: 5px 15px 5px 15px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.container {
  -webkit-perspective: 1000px;
          perspective: 1000px;
  margin-bottom: 30px;
}

.seat {
  background-color: #444451;
  height: 12px;
  width: 15px;
  margin: 3px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.seat.selected {
  background-color: #6feaf6;
}

.seat.occupied {
  background-color: #fff;
}


.seat:not(.occupied) {
  -webkit-transition: all .1s;
  transition: all .1s;
}

.seat:not(.occupied):hover {
  cursor: pointer;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.showcase .seat:not(.occupied):hover {
  cursor: default;
  -webkit-transform: scale(1);
          transform: scale(1);
}

.showcase {
  background-color: rgba(0, 0, 0, 0.1);
  padding: 5px 10px;
  border-radius: 5px;
  color: #777;
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.showcase li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 0 10px;
}

.showcase li small {
  margin-left: 2px;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.screen {
  background-color: #fff;
  height: 10rem;

  width: 50%;
  margin: auto;

  -webkit-transform: rotateX(-45deg);
          transform: rotateX(-45deg);
  -webkit-box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
          box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
}

p.text {
  margin: 5px 0;
}

p.text span {
  color: #6feaf6;
}
    </style>


    <section class="bg-black my-36 text-white">
        

    <ul class="flex justify-center items-center text-center gap-10">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>

    <div class="container">
        <div class="screen"></div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
    </div>
    <p class="text">You have selected <span id="count">0</span> seats for a price of $<span id="total">0</span></p>


    <div class=" bg-slate-800 rounded-2xl p-8 w-3/4 m-auto container">
        <div class="screen"></div>
        <div class=" p-4 flex justify-between items-center">
          <div class="grid grid-cols-6 md:grid-cols-25 gap-4 w-1/5	">
            @for ($i = 0; $i < 42; $i++)
            <div id="{{ $i }}" class="seat"></div>

                
            @endfor
        </div>

        <div class="grid grid-cols-12 md:grid-cols-25 gap-4 w-2/5		">
            @for ($i = 0; $i < 84; $i++)
            <div class="seat"></div>

                
            @endfor
        </div>
          <div class="grid grid-cols-6 md:grid-cols-25 gap-4 w-1/5	">
            @for ($i = 0; $i < 42; $i++)
            <div class="seat"></div>

                
            @endfor
        </div>
    </div>
    </div>
    {{-- <script>
    console.log('rrr');
    const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

populateUI();

let ticketPrice = +movieSelect.value;

// save selected movie index and price
const setMovieData = (movieIndex, MoviePrice) => {
    localStorage.setItem('selectedMovieIndex', movieIndex);
    localStorage.setItem('selectedMovieprice', MoviePrice);
}

// updated total and count
const updateSelectedCount = () => {
    const selectedSeats = document.querySelectorAll('.row .seat.selected');

    const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

    localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex))

    const selectedSeatsCount = selectedSeats.length;
    count.innerText = selectedSeatsCount;
    total.innerText = selectedSeatsCount * ticketPrice;
}

// get data from local store and populate ui
function populateUI() {
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if(selectedSeats !== null && selectedSeats.length > 0){
        seats.forEach((seat, index) => {
            if(selectedSeats.indexOf(index) > -1) {
                seat.classList.add('selected');
            }
        })
    }

    const selectedMovieIndex = localStorage.getItem('selectedMovieIndex')

    if(selectedMovieIndex !== null){
        movieSelect.selectedIndex = selectedMovieIndex
    }
}

// movie select event
movieSelect.addEventListener('change', e=> {
    ticketPrice = +e.target.value;
    setMovieData(e.target.selectedIndex, e.target.value);
    updateSelectedCount();
})


// seat click event
container.addEventListener('click', (e) => {
    if(e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');

        updateSelectedCount();
    }
});

// initial count in total
updateSelectedCount();

</script> --}}
    </section>
</x-layout>
