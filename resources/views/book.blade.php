<x-app-layout>
    <x-slot name="title">
        Book
    </x-slot>

    <div class="flex flex-col justify-center items-center py-12 container">

        {{-- card --}}
        <div class="flex flex-row justify-between">
            <div class="flex items-center mt-16 font-sans">
                <div class="flex flex-col bg-white rounded-md items-center text bg-center mr-8 shadow-md">
                    <img class="w-64 rounded-t-md" src={{ asset('img/cover.jpg') }} alt="">
                    <h2 class="w-64 px-4 pt-4 font-bold">Kecak Dance for Ubud</h2>
                    <div class="flex flex-row items-center px-4 w-64">
                        <h2 class=" text-gray-500 font-semibold">For</h2>
                        <div class=" ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill=""
                                class="w-4 h-4 fill-gray-500">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class=" text-gray-500 text-sm ml-2">1 person</h4>
                    </div>

                    <div class="flex pt-4 pb-4 border-t-2 border-gray-200 w-full justify-between px-4 mt-4">
                        <div class="font-bold">Rp 300.000</div>
                        <div class="font-semibold bg-blue-500 py-1 px-4 rounded-md text-white">Add</div>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-md items-center text bg-center mr-8 shadow-md"">
                    <img class="w-64 rounded-t-md" src={{ asset('img/cover.jpg') }} alt="">
                    <h2 class="w-64 px-4 pt-4 font-bold">Kecak Dance for Ubud</h2>
                    <div class="flex flex-row items-center px-4 w-64">
                        <h2 class=" text-gray-500 font-semibold">For</h2>
                        <div class=" ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill=""
                                class="w-4 h-4 fill-gray-500">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class=" text-gray-500 text-sm ml-2">1 person</h4>
                    </div>

                    <div class="flex pt-4 pb-4 border-t-2 border-gray-200 w-full justify-between px-4 mt-4">
                        <div class="font-bold">Rp 300.000</div>
                        <div class="font-semibold bg-blue-500 py-1 px-4 rounded-md text-white">Add</div>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-md items-center text bg-center mr-8 shadow-md"">
                    <img class="w-64 rounded-t-md" src={{ asset('img/cover.jpg') }} alt="">
                    <h2 class="w-64 px-4 pt-4 font-bold">Kecak Dance for Ubud</h2>
                    <div class="flex flex-row items-center px-4 w-64">
                        <h2 class=" text-gray-500 font-semibold">For</h2>
                        <div class=" ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill=""
                                class="w-4 h-4 fill-gray-500">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class=" text-gray-500 text-sm ml-2">1 person</h4>
                    </div>

                    <div class="flex pt-4 pb-4 border-t-2 border-gray-200 w-full justify-between px-4 mt-4">
                        <div class="font-bold">Rp 300.000</div>
                        <div class="font-semibold bg-blue-500 py-1 px-4 rounded-md text-white">Add</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-white w-full mt-8 rounded-md shadow-md">
            {{-- header --}}
            <div class="flex justify-between px-6 pt-3 mb-3">
                <div class="flex flex-col">
                    <div class="">Shoping Chart</div>
                    <div class="">Kecak Fire Dance</div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            {{-- content --}}
            <div class="flex border-t-2 px-6">
                <table class="table-auto w-full mt-3">
                    <thead class="bg-gray-200 rounded-md">
                        <tr>
                            <td class="text-gray-400 py-2 px-2">Show</td>
                            <td class="text-gray-400 py-2 px-2">Day</td>
                            <td class="text-gray-400 py-2 px-2">Date</td>
                            <td class="text-gray-400 py-2 px-2">Time</td>
                            <td class="text-gray-400 py-2 px-2">Price</td>
                            <td class="text-gray-400 py-2 px-2">Action</td>
                        </tr>
                    </thead>
                    <tbody class="bg-scroll">
                        <tr class="border-b border-gray-200 lg:text-sm text-xs">
                            <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                            <td class="px-2 pb-4 pt-4">Wednesday</td>
                            <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                            <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                            <td class="px-2 pb-4 pt-4">Rp 300.000</td>
                            <td class="px-2 pb-4 pt-4">
                                <p class="flex items-center justify-center bg-red-500 py-2 text-white rounded-md font-semibold font-sans text-center"
                                    href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                      </svg>                                      
                                </p>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 lg:text-sm text-xs">
                            <td class="px-2 pb-4 pt-4">Kecak Ubud</td>
                            <td class="px-2 pb-4 pt-4">Wednesday</td>
                            <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                            <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                            <td class="px-2 pb-4 pt-4">Rp 300.000</td>
                            <td class="px-2 pb-4 pt-4">
                                <p class="flex items-center justify-center bg-red-500 py-2 text-white rounded-md font-semibold font-sans text-center"
                                    href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                      </svg>                                      
                                </p>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 lg:text-sm text-xs">
                            <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                            <td class="px-2 pb-4 pt-4">Wednesday</td>
                            <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                            <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                            <td class="px-2 pb-4 pt-4">Rp 300.000</td>
                            <td class="px-2 pb-4 pt-4">
                                <p class="flex items-center justify-center bg-red-500 py-2 text-white rounded-md font-semibold font-sans text-center"
                                    href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                      </svg>                                      
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between px-8 pt-3 mb-3">
                <div class="flex flex-col">
                    <div class="font-bold">Total Cost</div>
                    <div class="">Rp 900.000</div>
                </div>
                <div class="flex flex-col items-center justify-center bg-green-600 px-5 py-3 rounded-md text-white">
                    Checkout
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
