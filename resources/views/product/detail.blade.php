{{-- @extends('adminComponens.navComponen') --}}

@extends('layouts.main')

@section('content2')

<div class="h-full">
    <div class="w-full h-full absolute z-50 opacity-80 flex items-center justify-center right-0 top-0" style="background-color:rgba(139, 127, 133, 0.19)">
        <div class="w-[70%] h-[70%]  p-4 flex rounded bg-white items-center justify-center relative">
            <div class="w-1/2">
                <img src="{{ asset('storage/'.$data->image) }}" alt="" width="300px">
            </div>
            <div class="w-1/2 bg-cyan-400 w-full h-full">
                <div class="p-5" style="margin-bottom:20px">
                    <span class="font-bold text-lg text-black">
                        {{ $data->title }}
                    </span>
                </div>
                <div class="mx-2" style="margin-bottom:20px">
                    <p class="font-base text-md text-black">
                        {{ $data->descriptions }}
                    </p>
                </div>
                <div class="mx-2" style="margin-bottom:20px">
                    <span class="font-bold text-md text-black">
                        Rp {{ $data->price }}
                    </span>
                </div>
                <div class="grid grid-rows-4 grid-flow-col gap-4" style="margin-bottom:20px">

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="title"
                                    class="block text-sm font-medium text-gray-700">jumlah beli</label>
                                <input type="number" name="stock" id="stock"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="tersedia {{ $data->stock }}">
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">cart</button>
                    </div>


                </div>
            </div>
            <a href="{{ url('/shop') }}" class="font-bold text-md text-white px-2 py-1 border rounded absolute hover:bg-red-500" style="background-color:red; top:10px; right:10px;">
                x
            </a>
        </div>
    </div>
</div>
@endsection
