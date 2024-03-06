
<x-layout>
    <style>
        .movie-container {
  margin: 20px 0;
}
html,body{
      overflow-x: hidden;

}
header{
    position: static !important;
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
    </style>
    <section class="w-screen h-auto p-4 flex  justify-center items-center z-10">
         <div class=" bg-slate-800 rounded-2xl p-8 w-3/4  m-auto container ">
            <form action="/reservation" method="post" class="flex flex-col items-center justify-center gap-x-6">
                    @csrf
              
              <div class="screen"></div>
              <div class="p-4 flex justify-between items-center">
                
                @foreach ($filmRoom->room->zones as $zone)
                 <div  class="grid grid-cols-6 md:grid-cols-25 gap-4 w-1/5 ">
                    @for ($i = 0; $i < $filmRoom->zone->number_of_seats; $i++)
                        <input type="checkbox" name="seats[]" id="" value="{{ $i }}" >
                  @endfor
                      
                          
                      
                    </div>
                    
                @endforeach

              </div>
              <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reserver</button>

              
                      
            </form>

        </div>

        
    </section>
    {{-- @foreach ($availableSchedules as $schedule)
        @php $date = Carbon\Carbon::parse($schedule->screening_date)->format('M d Y'); @endphp

    @endforeach --}}
</x-layout>
