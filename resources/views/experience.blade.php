@include('includes.nouHead')
<body class="max-w-screen-2xl mx-auto">
    
    @include('includes.nouNav')


    <div class="mx-5 lg:mx-10 grid grid-cols-1 grid-rows-[auto_100px]">

        <div class="mt-10">
            
            <div id="accordion-collapse" data-accordion="collapse">


                <!-- 1: Departament d'Interior -->
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-red-700 text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/generalitat-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Departament d'Interior</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-8 rounded-3xl border-t-2 border-white bg-red-700 flex justify-center align-middle flex-col md:flex-row">
                        <div>
                            <p class="mb-2 text-zinc-300 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;06/2022 - actually</p>
                            <p class="mb-8 text-white text-xl font-inter">Technician specialized in telecommunications at the Area of Organization and Digital Administration of the Interior Affairs Departament of the Government of Catalonia.</p>
                            <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Digital administration projects</h4>
                            <ul class="text-white text-xl font-inter list-disc pl-5 mb-8">
                                <li>Digital transformation of the Department.</li>
                                <li>Forms creation for online administrative process (HTML, JavaScript, TypeScript...).</li>
                                <li>Management of specific parameters and interoperability queries.</li>
                                <li>Legal knowledge of the administrative procedure (Law 39/2015 and 40/2015) and Data Protection Regulation.</li>
                            </ul>
                            <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Technical analysis, statistical preparation and data exploitation</h4>
                            <ul class="text-white text-xl font-inter list-disc pl-5">
                                <li>Analysis of Department processes.</li>
                                <li>Processing volumes to analyze the number of files in each procedure or process.</li>
                                <li>Reformulation and documentation of the Guide to the Startup Circuit a digital procedure.</li>
                                <li>Treatment and manipulation of data to make statistics, analyses and studies.</li>
                            </ul>
                        </div>
                        <!-- <div class="w-full mt-10 md:mt-0 md:w-3/4 md:ml-10">
                            <img class="rounded-3xl" src="{{asset('/img/events/smartcityexpo.jpg')}}" alt="Digital Catalonia stand at SmartCityExpo">
                        </div> -->
                    </div>
                </div>


                <!-- 2: Bitgenoma digital solutions -->
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-yellow-500 text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/bitgenoma-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">BitGenoma Digital Solutions</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-yellow-500">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;09/2021 - 12/2021</p>
                        <p class="mb-8 text-white text-xl font-inter">Web developer in internships at BitGenoma Digital Solutions, from the web development advanced-level course.</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Web developer</h4>
                        <ul class="text-white text-xl font-inter list-disc pl-5">
                            <li>Development of web applications with specific technologies (Node.js, stencil, MongoDB...).</li>
                            <li>Preparing Linux servers for launching web services.</li>
                            <li>Server migrations and different services.</li>
                        </ul>
                    </div>                    
                </div>

                <!-- 3: Caixabank facilities management -->
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#009ad8] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-3" aria-expanded="true" aria-controls="accordion-collapse-body-3 ">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/caixabank-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">CaixaBank Facilities Management</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#009ad8]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;08/2021 - 09/2021</p>
                        <p class="mb-8 text-white text-xl font-inter">Systems management technician in the Information Systems Area of CaixaBank Facilities Management.</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Systems management</h4>
                        <ul class="text-white text-xl font-inter list-disc pl-5">
                            <li>Resolution of computer incidents in the offices of the CaixaBank group in Spain.</li>
                            <li>Manage computer issues in CaixaBank's own applicability.</li>
                            <li>Administration and managing staff users: permissions, creation and deletion of employees users in the applications and services of the group CaixaBank.</li>
                            <li>Cerdanyola Data Processing Center (CPD) hardware management.</li>
                        </ul>
                    </div>
                </div>

                <!-- 4: Vodafone -->
                <h2 id="accordion-collapse-heading-4">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#e60000] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-4" aria-expanded="true" aria-controls="accordion-collapse-body-4">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/vodafone-sm.png')}}" alt="Generalitat de Catalunya">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Vodafone</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#e60000]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;06/2021 - 07/2021</p>
                        <p class="mb-8 text-white text-xl font-inter">Replacement of the Computer Systems Technician in the offices of Vodafone Barcelona at @22 District in Poblenou.</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Systems management</h4>
                        <ul class="text-white text-xl font-inter list-disc pl-5">
                            <li>Resolution of computer incidents onsite.</li>
                            <li>Hardware store management: changes and renovation of equipment in facilities.</li>
                        </ul>
                    </div>
                </div>

                <!-- 5: Áralos -->
                <h2 id="accordion-collapse-heading-5">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#f18e00] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-5" aria-expanded="true" aria-controls="accordion-collapse-body-5">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/aralos-sm.png')}}" alt="Àralos">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Serveis Informàtics Áralos</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#f18e00]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;01/2021 - 06/2021</p>
                        <p class="mb-8 text-white text-xl font-inter">Systems Administrator in internships at Serveis Informàtics Áralos, from the Network Computer System Management advanced-level course.</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Systems management</h4>
                        <ul class="text-white text-xl font-inter list-disc pl-5">
                            <li>Resolution of computer incidents onsite.</li>
                            <li>Computer device management in offices.</li>
                            <li>Creation and development of the server monitoring plan with alerts (Grafana and prometheus)</li>
                        </ul>
                    </div>
                </div>

                <!-- 6: Institut Pompeu fabra -->
                <h2 id="accordion-collapse-heading-6">
                    <button type="button" class="mt-5 flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-none rounded-3xl bg-[#1a26fb] text-white dark:text-white" style="color: white !important;" data-accordion-target="#accordion-collapse-body-6" aria-expanded="true" aria-controls="accordion-collapse-body-6">
                        <div class="align-middle flex items-center justify-center">
                            <img class="w-12 align-middle bg-white p-2 rounded-xl inline" src="{{asset('/img/logos/small/pompeufabra-sm.png')}}" alt="Àralos">
                            <h3 class="ml-4 inline text-lg lg:text-4xl font-inter font-semibold">Institut Pompeu Fabra</h3>
                        </div>
                    </button>
                </h2>
                <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                    <div class="p-5 rounded-3xl border-t-2 border-white bg-[#1a26fb]">
                        <p class="mb-2 text-zinc-100 text-lg font-inter font-light"><i class="text-sm fa fa-calendar" aria-hidden="true"></i>&nbsp;09/2018 - 03/2019</p>
                        <p class="mb-8 text-white text-xl font-inter">IT Technician in internships at Pompeu Fabra Institute, from the Network Microinformatics Systems mid-level course.</p>
                        <h4 class="mb-1 text-white text-2xl font-inter font-semibold">Systems management</h4>
                        <ul class="text-white text-xl font-inter list-disc pl-5">
                            <li>Resolution of computer incidents onsite.</li>
                            <li>Development of a web portal for communicating computer issues.</li>
                            <li>Creation and management of a new computer classroom with more than 40 devices.</li>
                        </ul>
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