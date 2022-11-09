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
        <div class="flex flex-col justify-center items-center mt-5 text-center mb-16 mt-0">
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
                    <div class="flex flex-row items-center p-2">
                        <!-- <div class="bg-rose-600 p-1.5 lg:p-2 mx-2 rounded-full">
                            <svg class=" w-5 lg:w-6" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M37 25.6135C33.4154 27.2348 29.4219 27.7254 25.5515 27.0199C21.6811 26.3144 18.1176 24.4462 15.3357 21.6643C12.5538 18.8824 10.6856 15.3189 9.98012 11.4485C9.27458 7.57806 9.76518 3.58455 11.3865 0C8.53282 1.28965 6.03456 3.25236 4.10609 5.71974C2.17763 8.18712 0.876528 11.0855 0.314417 14.1663C-0.247695 17.247 -0.0540361 20.4181 0.878778 23.4076C1.81159 26.397 3.45571 29.1155 5.67009 31.3299C7.88447 33.5443 10.603 35.1884 13.5924 36.1212C16.5819 37.054 19.753 37.2477 22.8338 36.6856C25.9145 36.1235 28.8129 34.8224 31.2803 32.8939C33.7476 30.9654 35.7103 28.4672 37 25.6135Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="bg-rose-600 p-1.5 lg:p-2 mx-2 rounded-full">
                            <svg class=" w-5 lg:w-6" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.5 0C8.31344 0 0 8.31409 0 18.5C0 28.6866 8.31409 37 18.5 37C28.6866 37 37 28.6859 37 18.5C37 8.31344 28.6859 0 18.5 0ZM5.44153 8.70223C7.3187 11.2205 8.42935 14.2477 8.63625 17.416H2.20482C2.41924 14.1606 3.59088 11.1626 5.44153 8.70223ZM2.20482 19.584H8.63625C8.42957 22.7544 7.31913 25.7795 5.44146 28.2977C3.59088 25.8373 2.41924 22.8394 2.20482 19.584ZM17.416 34.7952C13.3097 34.5248 9.6135 32.7305 6.88872 29.9733C9.22182 27.0095 10.5884 23.3847 10.8075 19.584H17.416V34.7952ZM17.416 17.416H10.8075C10.5881 13.6179 9.22138 9.99014 6.88901 7.02646C9.61371 4.26938 13.3099 2.47524 17.416 2.20482V17.416ZM34.7952 17.416H28.3638C28.5704 14.2456 29.6809 11.2205 31.5585 8.7023C33.4091 11.1627 34.5808 14.1606 34.7952 17.416ZM19.584 2.20482C23.6903 2.47524 27.3865 4.26953 30.1113 7.02675C27.7782 9.99051 26.4116 13.6153 26.1925 17.416H19.584V2.20482ZM19.584 34.7952V19.584H26.1925C26.4121 23.3795 27.7793 27.0099 30.111 29.9735C27.3863 32.7306 23.6901 34.5248 19.584 34.7952ZM31.5581 28.2982C29.6814 25.7798 28.5708 22.7503 28.3637 19.584H34.7952C34.5808 22.8396 33.409 25.8378 31.5581 28.2982Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="bg-rose-600 p-1.5 lg:p-2 mx-2 rounded-full">
                            <svg class="w-5 lg:w-6" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36.0942 16.6714L29.5871 15.2145L28.8957 9.11896C28.8356 8.58247 28.4147 8.1593 27.8783 8.10149L21.8822 7.42394L21.1677 1.02774C21.1307 0.71094 20.9665 0.421885 20.7098 0.232265C20.4555 0.0403331 20.134 -0.0406022 19.8172 0.0195211L13.2778 1.17574C12.8592 1.24974 12.517 1.54342 12.3806 1.94578L5.92667 21.2616L2.84887 24.3395L2.03028 25.1581C0.721468 26.4669 0 28.2104 0 30.0627C0 31.915 0.721468 33.6585 2.0326 34.9674C3.34141 36.2785 5.08496 37 6.93719 37C8.78942 37 10.533 36.2785 11.8418 34.9674L12.6604 34.1488L15.7382 31.0709L35.0536 24.6169C35.4444 24.4851 35.7381 24.1544 35.8213 23.7497L36.9775 18.0288C37.1001 17.4137 36.7093 16.8101 36.0942 16.6714ZM21.3758 9.6902L26.7012 10.2937L27.3071 15.6216L12.7806 26.0969L10.9006 24.2169L21.3758 9.6902ZM14.3554 3.331L19.0056 2.51009L19.6346 8.15243L9.24496 22.5611L8.25988 21.576L14.3554 3.331ZM3.66746 33.3325C2.79338 32.4584 2.3124 31.2976 2.3124 30.0627C2.3124 28.8278 2.79338 27.667 3.66746 26.7929L10.2069 33.3325C8.45875 35.0807 5.41563 35.0807 3.66746 33.3325ZM11.8418 31.6976L5.30233 25.158L6.93719 23.5208L13.479 30.0627L11.8418 31.6976ZM33.6847 22.6375L15.4237 28.74L14.4386 27.7549L28.787 17.4067L34.4848 18.6809L33.6847 22.6375Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="bg-rose-600 p-1.5 lg:p-2 mx-2 rounded-full">
                            <svg class="w-5 lg:w-6" viewBox="0 0 36 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.879276 36.1667C0.316276 35.6329 0 34.9091 0 34.1544C0 33.3996 0.316276 32.6758 0.879276 32.1421L15.8949 17.9108C16.4581 17.3772 17.2218 17.0775 18.0181 17.0775C18.8145 17.0775 19.5782 17.3772 20.1413 17.9108L35.157 32.1421C35.704 32.6789 36.0067 33.3978 35.9999 34.1441C35.993 34.8904 35.6772 35.6043 35.1204 36.132C34.5636 36.6597 33.8104 36.959 33.023 36.9655C32.2356 36.972 31.477 36.6851 30.9106 36.1667L18.0181 23.9477L5.1257 36.1667C4.56253 36.7002 3.79881 37 3.00249 37C2.20617 37 1.44245 36.7002 0.879276 36.1667ZM0.879276 19.0892C0.316276 18.5554 0 17.8316 0 17.0769C0 16.3222 0.316276 15.5983 0.879276 15.0646L15.8949 0.833342C16.4581 0.299753 17.2218 0 18.0181 0C18.8145 0 19.5782 0.299753 20.1413 0.833342L35.157 15.0646C35.704 15.6014 36.0067 16.3204 35.9999 17.0666C35.993 17.8129 35.6772 18.5268 35.1204 19.0545C34.5636 19.5822 33.8104 19.8816 33.023 19.888C32.2356 19.8945 31.477 19.6076 30.9106 19.0892L18.0181 6.87023L5.1257 19.0892C4.56253 19.6228 3.79881 19.9225 3.00249 19.9225C2.20617 19.9225 1.44245 19.6228 0.879276 19.0892Z"
                                    fill="white" />
                            </svg>
                        </div> -->
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
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-red-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">Coming Soon</p>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 lg:text-sm text-xs">
                                <td class="px-2 pb-4 pt-4">Bali Nusa</td>
                                <td class="px-2 pb-4 pt-4">Wednesday</td>
                                <td class="px-2 pb-4 pt-4">Nov 3rd 2022</td>
                                <td class="px-2 pb-4 pt-4">9PM - 10PM</td>
                                <td class="px-2 pb-4 pt-4">
                                    <p class="bg-green-500 py-2 px-2 text-white rounded-md font-semibold font-sans text-center"
                                        href="">On Going</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        {{-- content 2 --}}
    </div>
</x-app-layout>
