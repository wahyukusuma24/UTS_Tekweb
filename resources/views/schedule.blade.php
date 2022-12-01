<x-app-layout>
    <x-slot name="title">
        Schedule
    </x-slot>

    {{-- banner --}}
    <div class="min-h-screen">
        <div class="p-12 text-center bg-no-repeat bg-cover font-mono"
            style="
      background-image: url({{ asset('img/schedule2.jpg') }});
      height: 560px;">
            <div class="absolute right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
                <div class="flex container justify-center items-center h-full">
                    <div class="text-white">
                        <h2 class="font-bold text-4xl mb-32">Schedule Kecak Dance</h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- content --}}
        <div class="flex flex-col justify-center items-center mt-5 text-center mb-16">
            <div
                class="flex flex-col w-full lg:w-3/4 lg:-mt-32 mb-52 bg-white border border-gray-200 shadow-md  lg:rounded-2xl ">
                <div class="sticky top-16">
                    <div
                        class="flex bg-white justify-between  px-2 lg:px-4 py-4 border-b border-gray-200  lg:rounded-2xl ">
                        <div class="flex flex-row items-center p-2 text-sm lg:text-lg text-black font-semibold">
                            November
                            <svg class="w-4 lg:w-5 ml-2" viewBox="0 0 44 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1111 10.8889V2M30.8889 10.8889V2M10.8889 19.7778H33.1111M6.44444 42H37.5556C38.7343 42 39.8648 41.5317 40.6983 40.6983C41.5317 39.8648 42 38.7343 42 37.5556V10.8889C42 9.71015 41.5317 8.57969 40.6983 7.74619C39.8648 6.9127 38.7343 6.44444 37.5556 6.44444H6.44444C5.2657 6.44444 4.13524 6.9127 3.30175 7.74619C2.46825 8.57969 2 9.71015 2 10.8889V37.5556C2 38.7343 2.46825 39.8648 3.30175 40.6983C4.13524 41.5317 2.2657 42 6.44444 42Z"
                                    stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg class="w-2 lg:w-3 ml-2" viewBox="0 0 26 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.760327 0.812467C1.24731 0.313549 1.90771 0.0332712 2.59631 0.0332712C3.2849 0.0332712 3.94531 0.313549 4.43229 0.812467L12.9838 9.57616L21.5352 0.812467C21.7748 0.558285 22.0613 0.35554 22.3782 0.216063C22.695 0.0765868 23.0358 0.00317115 23.3806 0.000100483C23.7254 -0.00297018 24.0673 0.064365 24.3865 0.198178C24.7056 0.331991 24.9956 0.529602 25.2394 0.779479C25.4832 1.02936 25.676 1.3265 25.8066 1.65356C25.9372 1.98063 26.0029 2.33107 25.9999 2.68444C25.9969 3.0378 25.9253 3.38702 25.7892 3.71171C25.6531 4.0364 25.4552 4.33006 25.2072 4.57556L14.8197 15.2208C14.3328 15.7197 13.6724 16 12.9838 16C12.2952 16 11.6348 15.7197 11.1478 15.2208L0.760327 4.57556C0.27349 4.07649 0 3.3997 0 2.69401C0 1.98833 0.27349 1.31154 0.760327 0.812467Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col px-6 py-4 overflow-auto">
                    <div class="flex flex-col text-gray-500 font-Roboto text-xs lg:text-sm ">
                        <table class="table-auto">
                            <thead class="bg-gray-200">
                                <tr>
                                    <td class="text-gray-400 py-2 px-2 rounded-l-md">Group</td>
                                    <td class="text-gray-400 py-2 px-2">Day</td>
                                    <td class="text-gray-400 py-2 px-2">Date</td>
                                    <td class="text-gray-400 py-2 px-2">Time</td>
                                    <td class="text-gray-400 py-2 px-2 rounded-r-md">Status</td>
                                </tr>
                            </thead>
                            <tbody class="bg-scroll">
                                @foreach ($schedules as $schedule)
                                    <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                        <td class="px-2 pb-4 pt-4">{{ $schedule->group }}</td>
                                        <td class="px-2 pb-4 pt-4">{{ $schedule->day }}</td>
                                        <td class="px-2 pb-4 pt-4">{{ $schedule->date }}</td>
                                        <td class="px-2 pb-4 pt-4">{{ $schedule->time }}</td>
                                        <td class="px-2 pb-4 pt-4">
                                            <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                                href="">{{ $schedule->status }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- content 2 --}}
    </div>
</x-app-layout>
