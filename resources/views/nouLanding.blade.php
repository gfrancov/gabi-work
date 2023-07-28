@include('includes.nouHead')
<body class="max-w-screen-2xl mx-auto">
    
    @include('includes.nouNav')


    <div class="mx-5 lg:mx-10 grid sm:grid-cols-1 sm:grid-rows-6 lg:grid-cols-10 lg:grid-rows-[70vh_auto_auto_auto]">

        <!-- Introduction -->
        <div class="lg:col-span-6">
            <div class="lg:mr-2 mb-4 lg:mb-2 min-h-[70vh] rounded-3xl p-10 bg-gradient-to-l flex flex-col justify-between from-[#3160994d] to-zinc-100">
                <div class="md:w-4/5">
                    <h1 class="font-inter font-medium text-3xl lg:text-5xl">Hello there! I'm Gabi, a student of computer engineering</h1>
                    <p class="mt-7 font-inter font-light text-xl">Focused on the digital transformation of society, up-to-date for providing the best possible support to society on its journey towards a more digital world.</p>
                </div>
                <div class="mt-5">
                    <a class="bg-black hover:bg-zinc-700 text-white font-inter text-lg px-7 py-4 rounded-full mr-2 leading-[4rem]" href="mailto:jo@gabrielfranco.me">Contact me</a>
                    <a class="bg-white hover:bg-zinc-200 text-black font-inter text-2xl px-4 py-3 rounded-full mx-1 leading-[4rem]" target="_blank" href="https://linkedin.com/in/gfrancov"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a class="bg-white hover:bg-zinc-200 text-black font-inter text-2xl px-4 py-3 rounded-full mx-1 leading-[4rem]" target="_blank" href="https://twitter.com/gabifrancov"><i class="fa-brands fa-twitter"></i></a>
                    <a class="bg-white hover:bg-zinc-200 text-black font-inter text-2xl px-4 py-3 rounded-full mx-1 leading-[4rem]" target="_blank" href="https://github.com/gfrancov"><i class="fa-brands fa-github"></i></a>
                    <a class="bg-white hover:bg-zinc-200 text-black font-inter text-2xl px-4 py-3 rounded-full mx-1 leading-[4rem]" target="_blank" href="https://open.spotify.com/user/gr8f6fo32tfely5vt3xg62pzd?si=8bb3ed3cc7274423"><i class="fa-brands fa-spotify"></i></a>

                </div>
            </div>
        </div>
        <div class="lg:col-span-4">
            <div class="lg:ml-2 mb-4 lg:mb-2 h-[50vh] lg:h-[70vh] rounded-3xl p-4 bg-[url('/img/panoramica.jpg')] bg-cover bg-bottom text-white font-inter font-extrabold"></div>
        </div>

        <!-- Redirect to experience and formation -->
        <div class="lg:col-span-5 mt-3">
            <div class="lg:mr-2 mb-2 rounded-3xl bg-cyan-600 text-white transition ease-in-out delay-100 hover:scale-95">
                <div class="p-10 flex flex-row justify-between h-[15vh]">
                    <div>
                        <h2 class="font-inter font-medium text-3xl">Experience</h2>
                        <p class="font-inter font-light text-m lg:text-xl">All the companies I've been working.</p>    
                    </div>
                    <div class="mt-4">
                        <a class="bg-white hover:bg-zinc-200 text-black font-inter text-2xl px-5 py-4 rounded-full mx-2 mt-4" href="{{route('experience')}}"><i class="fa-solid fa-location-arrow"></i></a>
                    </div>
                </div>

                <div class="bg-[url('/img/experience.png')] rounded-b-3xl bg-[length:220%_auto] lg:bg-[length:170%_auto] bg-[center_top_2.5rem] lg:bg-top bg-no-repeat h-[35vh]"></div>

            </div>
        </div>

        <div class="lg:col-span-5 mt-3">
            <div class="lg:ml-2 mb-2 rounded-3xl bg-sky-800 text-white transition ease-in-out delay-100 hover:scale-95">
                <div class="p-10 flex flex-row justify-between h-[15vh]">
                    <div>
                        <h2 class="font-inter font-medium text-3xl">Formation</h2>
                        <p class="font-inter font-light text-m md:text-xl">My current professional formation.</p>    
                    </div>
                    <div class="mt-4">
                        <a class="bg-white hover:bg-zinc-200 text-black font-inter text-2xl px-5 py-4 rounded-full mx-2 mt-4" href="{{route('formation')}}"><i class="fa-solid fa-location-arrow"></i></a>
                    </div>
                </div>

                <div class="bg-[url('/img/formation.png')] rounded-b-3xl bg-[length:150%_auto] lg:bg-[length:100%_auto] bg-[center_top_2.5rem] lg:bg-top bg-no-repeat h-[35vh]"></div>

            </div>
        </div>

        <!-- Companies section --> 
        <div class="lg:col-span-10 my-6">
            <div class="my-2 rounded-3xl font-inter font-extrabold">
                <section class="bg-white">
                    <div class="mx-auto">
                        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                            <a href="https://interior.gencat.cat/ca/inici" class="flex justify-center items-center" target="_blank">
                                <img src="{{asset('/img/logos/interior.png')}}" alt="Departament d'Interior" class="opacity-50 grayscale hover:grayscale-0 hover:opacity-100">
                            </a>
                            <a href="https://www.caixabankfacilities.com/" class="flex justify-center items-center" target="_blank">
                                <img src="{{asset('/img/logos/caixabank.png')}}" alt="CaixaBank Facilities Management" class="opacity-50 grayscale hover:grayscale-0 hover:opacity-100">
                            </a>
                            <a href="https://www.vodafone.es/ca/c/conocenos/es/vodafone-espana/" class="flex justify-center items-center" target="_blank">
                                <img src="{{asset('/img/logos/vodafone.png')}}" alt="Vodafone" class="opacity-50 grayscale hover:grayscale-0 hover:opacity-100">
                            </a>
                            <a href="http://ajuntament.badalona.cat/" class="flex justify-center items-center" target="_blank">
                                <img src="{{asset('/img/logos/ajuntament-badalona.png')}}" alt="Ajuntament de Badalona" class="opacity-50 grayscale hover:grayscale-0 hover:opacity-100">                                                                                 
                            </a>
                            <a href="https://bitgenoma.com/" class="flex justify-center items-center" target="_blank">
                                <img src="{{asset('/img/logos/bitgenoma.png')}}" alt="Bitgenoma" class="opacity-50 grayscale hover:grayscale-0 hover:opacity-100">                                                                                 
                            </a>
                            <a href="https://www.aralos.com/" class="flex justify-center items-center" target="_blank">
                                <img src="{{asset('/img/logos/aralos.png')}}" alt="Áralos" class="opacity-50 grayscale hover:grayscale-0 hover:opacity-100">                                                                                 
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <div class="lg:col-span-10 text-center py-8">
            <p class="font-inter font-light text-sm text-zinc-400">2023 &copy; Gabriel Franco</p>
        </div>

    </div>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>