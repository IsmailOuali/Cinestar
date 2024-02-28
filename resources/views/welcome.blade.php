
<x-layout>
   {{-- @include('includes.navbar') --}}
   <header class=" bg-[url('./assets/home.jpg')] h-screen bg-cover	bg-no-repeat	bg-center	">
        <div class=" bg-black h-screen w-screen opacity-80">
                    @include('includes.navbar') 
                <div class="my-4 h-2/3 flex justify-center items-center">
                    <div class="flex flex-col justify-center items-center ">
                        
                        <h1 class="mb-4 text-2xl font-extrabold text-gray-100 dark:text-white md:text-4xl lg:text-5xl text-center">Bienvenue au <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">CINESTAR</span> <br>Votre Destination de Divertissement</h1>
                        <p class="w-3/4 m-auto text-center text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">votre destination ultime pour explorer le vaste monde du cinéma. Plongez dans une expérience cinématographique immersive où chaque clic vous transporte vers de nouveaux horizons remplis de films captivants.</p>
                        <button type="button" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Je reserve maintenant</button>


                    </div>
                </div>

                <div class="icon flex justify-center">
                            <svg width="40px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                        <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"/>
                        <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:20px;"/>
                    </svg>

                </div>

         </div>
           
   </header>
   <section class="bg-slate-950 py-5 ">
    <h1 class="text-center mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-100 md:text-4xl lg:text-5xl dark:text-white">We invest in the world’s potential</h1>
<p class="text-center mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-300">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-4/5 m-auto ">
    @for ($i = 0; $i < 6; $i++)
    <div class="py-3 sm:max-w-xl sm:mx-auto">
    <div class="bg-white shadow-lg border-gray-100 max-h-80	 border sm:rounded-3xl p-8 flex space-x-8">
      <div class="h-48 overflow-visible w-1/2">
          <img class="rounded-3xl h-80 shadow-lg" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1LRLLWGvs5sZdTzuMqLEahb88Pc.jpg" alt="">
      </div>
      <div class="flex flex-col w-1/2 space-y-4">
        <div class="flex justify-between items-start">
          <h2 class="text-3xl font-bold">Sweet Tooth: El niño ciervo</h2>
          <div class="bg-yellow-400 font-bold rounded-xl p-2">7.2</div>
        </div>
        <div>
          <div class="text-sm text-gray-400">Series</div>
          <div class="text-lg text-gray-800">2019</div>
        </div>
          <p class=" text-black max-h-40 ">Lorem ipsum dolor sit amet, .</p>
        <div class="flex text-2xl font-bold text-a items-center justify-between">
            <p>$83.90</p>
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Reserver</button>

        </div>
      </div>

    </div>
  </div>
  

        
    @endfor

  
  


    </div>
   </section>
</x-layout>
