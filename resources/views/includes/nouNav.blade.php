<nav>
    <div class="mx-5 lg:mx-10 flex flex-wrap items-center justify-between py-4">
        <a href="/" class="flex items-center">
            <img src="{{asset('img/icons/waving-hand.png')}}" class="h-8 mr-3" alt="Emoji informàtic" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-black font-inter">gabi.work</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 text-zinc-400 bg-white focus:ring-zinc-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-inter flex flex-col p-4 md:p-0 mt-4 border rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{route('nouLanding')}}" class="block py-2 pl-3 pr-4 text-xl font-semibold rounded md:border-0 md:p-0 hover:text-black md:hover:bg-transparent @if($title == 'Home') text-black @else text-zinc-400 @endif" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{route('nouAbout')}}" class="block py-2 pl-3 pr-4 text-xl font-semibold rounded md:border-0 md:p-0 hover:text-black md:hover:bg-transparent @if($title == 'About') text-black @else text-zinc-400 @endif">About</a>
                </li>
                <li>
                    <a href="{{route('experience')}}" class="block py-2 pl-3 pr-4 text-xl font-semibold rounded md:border-0 md:p-0 hover:text-black md:hover:bg-transparent @if($title == 'Experience') text-black @else text-zinc-400 @endif">Experience</a>
                </li>
                <li>
                    <a href="{{route('formation')}}" class="block py-2 pl-3 pr-4 text-xl font-semibold rounded md:border-0 md:p-0 hover:text-black md:hover:bg-transparent @if($title == 'Formation') text-black @else text-zinc-400 @endif">Formation</a>
                </li>
                <li>
                    <a href="https://cableando.net/" class="block py-2 pl-3 pr-4 text-xl font-semibold text-zinc-400 rounded md:border-0 md:p-0 hover:text-black md:hover:bg-transparent">Blog</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
