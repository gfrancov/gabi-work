@include('includes.nouHead')
<body class="max-w-screen-2xl mx-auto">
    
    @include('includes.nouNav')


    <div class="mx-5 lg:mx-10 grid grid-cols-1 grid-rows-[auto_100px]">

        <div class="mt-10">
            
            <div id="accordion-collapse" data-accordion="collapse">


                <!-- 1: GRAU -->
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#001b88] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/uoc-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Computer Engineering Degree</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-8 rounded-3xl border-t-2 border-white bg-[#001b88] flex justify-start align-middle flex-col md:flex-row">
                        <div>
                            <p class="mb-2 text-zinc-300 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;03/2023 - actually</p>
                            <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Computer Engineering Degree at the Open University of Catalonia.</h4>
                            <p class="mb-2 text-white text-xl font-inter">Theoretical foundations and practical knowledge of programming, system management, networks and security.</p>
                        </div>
                    </div>
                </div>


                <!-- 2: CFGS -->
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#009fd0] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/lapineda-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Web Application Development</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#009fd0]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;09/2021 - 06/2022</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Advanced-level formation course of Web Application Development at La Pineda Institute.</h4>
                        <p class="mb-2 text-white text-xl font-inter">Development and implementation of applications and web environments with specific technologies.</p>
                </div>                    
                </div>

                <!-- 3: CFGS -->
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#009fd0] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-3" aria-expanded="true" aria-controls="accordion-collapse-body-3 ">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/lapineda-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Network Computer System Management</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#009fd0]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;09/2019 - 06/2021</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Advanced-level formation course of Network Computer System Management at La Pineda Institute.</h4>
                        <p class="mb-2 text-white text-xl font-inter">Specialization in networks and servers with Linux and Windows operating systems.</p>
                    </div>
                </div>

                <!-- 4: CFGM -->
                <h2 id="accordion-collapse-heading-4">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#009fd0] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-4" aria-expanded="true" aria-controls="accordion-collapse-body-4">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/lapineda-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Network Microinformatics Systems</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#009fd0]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;06/2021 - 07/2021</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Mid-level formation course of Network Microinformatics Systems at La Pineda Institute.</h4>
                        <p class="mb-2 text-white text-xl font-inter">Introductory course in computer science with basic notions in networks, systems and office.</p>
                    </div>
                </div>



            </div>

        </div>




        <!-- Footer -->
        <div class="text-center py-8">
            <p class="font-inter font-light text-sm text-zinc-400">2023 &copy; Gabriel Franco</p>
        </div>

    </div>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>