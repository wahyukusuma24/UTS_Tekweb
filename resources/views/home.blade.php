<x-app-layout>
    <x-slot name="title">
        Home
    </x-slot>

    {{-- banner --}}
    <div class="min-h-screen">
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover"
            style="
      background-image: url({{ asset('img/homepage.jpg') }});
      height: 560px;">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="flex container justify-center items-center h-full">
                    <div class="text-white ">
                        <h2 class="font-bold text-4xl mb-6 font-mono">KECAK DANCE</h2>
                        <h4 class="font-semibold text-xl mb-6 font-sans">The kecak dance is typically performed by about fifty to
                            one hundred men wearing only loincloths; their upper bodies are left bare. They form
                            concentric circles, in the middle of which is a traditional Balinese coconut oil lamp. First
                            they move their bodies rhythmically to the left and to the right, chanting the words "chak
                            ke-chak ke-chak ke-chak" continuously in coordinated harmony and beat, in slow rhythm.</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- content --}}
        <div class="flex flex-col justify-center items-center mt-16 px-44 text-center mb-16">
            <div class="flex flex-col justify-center items-center text-gray-700 mb-11">
                <h2 class="font-bold mb-3">FIND A GOOD SHOW FOR YOU</h2>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni odit reprehenderit aliquam ullam
                    neque iste modi excepturi maiores, commodi dolorem, numquam quibusdam qui labore. Fugit suscipit
                    distinctio laboriosam mollitia amet.</h4>
            </div>
            <div class="flex justify-center items-center ">
                <div class="flex flex-col items-center p-4 text bg-center mr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-28 h-28 stroke-gray-500 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h4 class="w-64 text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                        soluta
                        commodi, quidem fugiat quas, excepturi totam distin lo</h4>
                </div>
                <div class="flex flex-col items-center p-4 text bg-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-28 h-28 stroke-gray-500 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    <h4 class="w-64 text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                        soluta
                        commodi, quidem fugiat quas, excepturi totam distin lo</h4>
                </div>
                <div class="flex flex-col items-center  p-4 text bg-center ml-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-28 h-28 stroke-gray-500 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                    <h4 class="w-64 text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                        soluta
                        commodi, quidem fugiat quas, excepturi totam distin lo</h4>
                </div>
            </div>
            <button class=" bg-slate-600 p-3 text-white font-semibold w-64 mt-6 rounded-md hover:bg-slate-900" >Let's find time</button>
        </div>
        {{-- content 2 --}}
    </div>
</x-app-layout>
