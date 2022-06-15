<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snack Id</title>

    {{-- alpines js  --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- tailwindcss  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
</head>

<body>

    {{-- header strart  --}}
    <header class="pl-[4%] bg-transparent w-full absolute top-0 left-0 flex intems-center z-10">
        <div class="container">
            <div class="flex justify-between items-center relative">
                <div class="px-4 flex">
                    <div class="width-{70px} pt-4">
                        <img src="{{ asset('img/Group_1-removebg-preview.png') }}" alt="" width="70">
                    </div>

                    <a href="#home" class="font-bold text-lg text-dark block py-6">Snack.Id</a>
                </div>
                <div class="flex items-center px-4 mr-2">
                    <button id="humberger" name="humberger" class="block absolute right-4:button lg:hidden">
                        <span class="hamberger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamberger-line transition duration-300 ease-in-out"></span>
                        <span class="hamberger-line transition duration-300 ease-in-out origin-top-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[500px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="blok lg:flex">
                            <li class="group">
                                <a href="{{ url('/') }}"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="{{ url('/shop') }}"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Shop</a>
                            </li>

                            @if (Route::has('login'))
                            @auth
                            <li class="group">
                                <div x-data="{open: false}">
                                    <button x-on:click="open = !open"
                                        class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">
                                        {{ Auth::user()->name }}
                            </button>


                            
                            <div x-show="open">

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}"
                                    class="bg-red-700 rounded text-white hover:text-slate-900 hover:bg-primary">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>


                            </div>
                </div>

                </li>

                <li class="group">
                    
                    <a href="{{ url('/dashboard') }}"
                        class="w-10 h-10 p-[5px] bg-amber-400 items-center justify-center rounded-md block">
                        <svg role="img" width="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Shopify</title>
                            <path
                                d="M15.337 23.979l7.216-1.561s-2.604-17.613-2.625-17.73c-.018-.116-.114-.192-.211-.192s-1.929-.136-1.929-.136-1.275-1.274-1.439-1.411c-.045-.037-.075-.057-.121-.074l-.914 21.104h.023zM11.71 11.305s-.81-.424-1.774-.424c-1.447 0-1.504.906-1.504 1.141 0 1.232 3.24 1.715 3.24 4.629 0 2.295-1.44 3.76-3.406 3.76-2.354 0-3.54-1.465-3.54-1.465l.646-2.086s1.245 1.066 2.28 1.066c.675 0 .975-.545.975-.932 0-1.619-2.654-1.694-2.654-4.359-.034-2.237 1.571-4.416 4.827-4.416 1.257 0 1.875.361 1.875.361l-.945 2.715-.02.01zM11.17.83c.136 0 .271.038.405.135-.984.465-2.064 1.639-2.508 3.992-.656.213-1.293.405-1.889.578C7.697 3.75 8.951.84 11.17.84V.83zm1.235 2.949v.135c-.754.232-1.583.484-2.394.736.466-1.777 1.333-2.645 2.085-2.971.193.501.309 1.176.309 2.1zm.539-2.234c.694.074 1.141.867 1.429 1.755-.349.114-.735.231-1.158.366v-.252c0-.752-.096-1.371-.271-1.871v.002zm2.992 1.289c-.02 0-.06.021-.078.021s-.289.075-.714.21c-.423-1.233-1.176-2.37-2.508-2.37h-.115C12.135.209 11.669 0 11.265 0 8.159 0 6.675 3.877 6.21 5.846c-1.194.365-2.063.636-2.16.674-.675.213-.694.232-.772.87-.075.462-1.83 14.063-1.83 14.063L15.009 24l.927-21.166z" />
                        </svg>
                    </a>
                </li>

                @else
                <li class="group">
                    <a href="{{ route('login') }}"
                        class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Log in</a>
                </li>
                @if (Route::has('register'))
                <li class="group">
                    <a href="{{ route('register') }}"
                        class="ml-4 text-base flex text-dark py-2 mx-8 group-hover:text-primary">Register</a>
                    @endif
                    @endauth
                </li>
                @endif

            


                </ul>
                </nav>
            </div>







        </div>
    </header>
    {{-- header end --}}

    @yield('content2')

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
