@extends('layouts.main')

@section('content2')


    {{-- banner start  --}}
    <div class="realtive container-[100%]  md:flex md:flex-row-reverse">
        <div class="w-full bg-amber-50 md:w-1/2">

            <div class="mt-36 flex justify-center md:justify-start">
                <img src="{{ asset('img/banner3.png') }}" alt="banner" width="350px">
            </div>

        </div>
        <div class="container w-full mt-10 px-10 md:px-0 md:w-1/2 md:mt-36 md:pl-24">
            <h1 class="font-bold text-5xl text-dark max-w-md">Lestarikan Snack Khas Indonesia</h1>
            <div class="flex mt-3">
                <div class="flex flex-wrap h-[100px] w-1/2 items-center ">
                    <div class="w-full">
                        <hr class="h-4 border-5 border-slate-500 block w-[70%] ">
                    </div>

                    <h3 class="font-semibold text-xl block text-dark">#1</h3>
                </div>
                <div class="w-1/2">
                    <p class="font-base text-sm text-secondary mb-10 mt-[15px] md:max-w-xs">Beragam jajanan Khas Indonesia Tersedia DiSini </p>

                    <a href="#"
                        class="text-base font-semibold mt-5 text-white bg-primary py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Mulai
                        Belanja</a>
                </div>
            </div>
            <div class="container flex mt-16">
                <div class="container flex items-center">
                    <div class="w-10 h-10 rounded-full bg-orange-300 overflow-hidden border border-white -ml-2">
                        <img src="{{ asset('img/gambar2.png') }}" alt="">
                    </div>
                    <div class="w-10 h-10 rounded-full bg-lime-300 overflow-hidden border border-white -ml-2">
                        <img src="{{ asset('img/gambar2.png') }}" alt="">
                    </div>
                    <div class="w-10 h-10 rounded-full bg-amber-300 overflow-hidden border border-white -ml-2">
                        <img src="{{ asset('img/gambar2.png') }}" alt="">
                    </div>

                    <p class="font-semibold text-sm text-slate-700 max-w-[100px] mx-3">Para Developer</p>
                </div>
                <div class="ml-30 mr-10">
                    <h2 class="font-semibold text-2xl text-dark">100%</h2>
                    <p class="fond-base text-xs text-secondary">Bebas Pengawet</p>
                </div>

            </div>

            


        </div>
    </div>
    {{-- banner end  --}}

    {{-- store start  --}}
    <div class="w-full bg-emerald-800 md:flex md:py-10">
        <div class="container w-1/2 flex md:py-10 md:justify-start md:ml-10">
            
{{-- 
            @foreach($data as $item)
            <a href="{{ url('pesan')}}/{{ $item->id }}"class="w-1/2 container md:w-52 md:h-[270px] flex flex-col md:mx-10 md:rounded-md bg-smoot md:px-6 items-center hover:animate-pulse">
                <img src="{{ asset('img/' . $item->image) }}" alt="product-1" width="250px">
                <h2 class="font-semibold text-emerald-800">Rp {{ $item->price }}</h2>
                <h4 class="font-semibold text-md text-dark inline-block mx-auto">{{ $item->title }}</h4>
            </a>
            @endforeach --}}
            
            
        </div>
        <div class="md:w-1/2 md:mx-5 md:pt-10">
            <h1 class="font-semibold text-4xl text-white md:text-5xl max-w-md">Ayo Beli Sekarang!</h1>
            <p class="font-base text-sm text-white mt-5 max-w-md">Snack id menjamin cemilannya bebas pengawet dan pastinya akan mengobati rasa kangen teman-teman dengan cita rasa khas Indonesia</p>
        </div>
    </div>
    {{-- store end  --}}

@endsection

