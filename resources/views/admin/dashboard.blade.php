<x-dashboard-layout>
<div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">General Statistics</h3>

    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
          <div class="absolute bg-indigo-500 rounded-md p-3">
            <!-- Heroicon name: outline/users -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total films</p>
        </dt>
        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
          <p class="text-2xl font-semibold text-gray-900">{{ $filmsCout }}</p>
          <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
              <a href="{{ route("films.index") }}" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Total Subscribers stats</span></a>
            </div>
          </div>
        </dd>
      </div>

      <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
          <div class="absolute bg-indigo-500 rounded-md p-3">
            <!-- Heroicon name: outline/mail-open -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
            </svg>
          </div>
          <p class="ml-16 text-sm font-medium text-gray-500 truncate">Rooms</p>
        </dt>
        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
          <p class="text-2xl font-semibold text-gray-900">{{ $roomsCount }}</p>
          <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
          <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
              <a href="{{ route("rooms.index") }}" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Avg. Open Rate stats</span></a>
            </div>
          </div>
        </dd>
      </div>

      <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
          <div class="absolute bg-indigo-500 rounded-md p-3">
            <!-- Heroicon name: outline/cursor-click -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
            </svg>
          </div>
          <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Schedules</p>
        </dt>
        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
          <p class="text-2xl font-semibold text-gray-900">{{ $schedulesCount }}</p>
          <p class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
          <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
              <a href="{{ route("schedules.index") }}" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Avg. Click Rate stats</span></a>
            </div>
          </div>
        </dd>
      </div>
    </dl>
  </div>

  <div class="mb-4 ">
    <div
        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
        <div
            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
            <div>
                <h6
                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                    The users</h6>
                <p
                    class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                         stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                        </path>
                    </svg>
                    <strong>{{ count($users) }}</strong> Users
                </p>
            </div>

        </div>
        <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
            <table class="w-full min-w-[640px] table-auto">
                <thead>
                <tr>
                    <x-elements.th>Id</x-elements.th>
                    <x-elements.th>Image</x-elements.th>
                    <x-elements.th>Name</x-elements.th>
                    <x-elements.th>Email</x-elements.th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <x-elements.td>{{ $user->id }}</x-elements.td>
                        <td class="py-3 px-5 border-b border-blue-gray-50">
                            <div class="flex items-center gap-4">
                                <img class="w-24 h-24" src="{{ asset("storage/" . false/* $user->image->path */) }}"
                                     alt="">
                            </div>
                        </td>
                        <x-elements.td class="leading-normal text-blue-red-900 font-bold">{{ $user->name }}</x-elements.td>
                        <x-elements.td>{{ $user->email }}</x-elements.td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>

</x-dashboard-layout>
