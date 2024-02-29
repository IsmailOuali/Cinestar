<x-layout>

    <section class=" text-white">

        <div class=" bg-slate-800 rounded-2xl p-8 w-3/4 m-auto container">
            <div>
                <p>Total of seats:  <b id="count">{{ $schedule->room->seats_total }}</b></p>
                <p>Total of zones:  <b id="count">{{ count($schedule->room->zones) }}</b></p>
                <p>You have selected:  <b id="count">0</b></p>
                <p> seats for a price of:  $<b id="total">0</b></p>
            </div>
            <ul class="flex justify-center items-center text-center gap-10">
                <li class="flex ">
                    <div class="seat"></div>
                    <small>N/A</small>
                </li>
                <li class="flex ">
                    <div class="seat selected"></div>
                    <small>Selected</small>
                </li>
                <li class="flex ">
                    <div class="seat occupied"></div>
                    <small>Occupied</small>
                </li>
            </ul>

            <div class="screen"></div>
            <div class=" p-4 flex justify-between items-center">
                <div class="grid grid-cols-6 md:grid-cols-25 gap-4 w-1/5">
                    @for ($i = 0; $i < 42; $i++)
                        <div id="{{ $i }}" class="seat"></div>
                    @endfor
                </div>

                <div class="grid grid-cols-12 md:grid-cols-25 gap-4 w-2/5">
                    @for ($i = 0; $i < 84; $i++)
                        <div class="seat"></div>
                    @endfor
                </div>
                <div class="grid grid-cols-6 md:grid-cols-25 gap-4 w-1/5">
                    @for ($i = 0; $i < 42; $i++)
                        <div class="seat"></div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
</x-layout>
