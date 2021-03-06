@extends('layouts.main')

@section('content2')


<div class="flex items-center justify-center" style="margin-top:150px">
    <div class="w-[90%]">

        {{-- detail barang --}}

        <div class="w-full flex items-center justify-center" >
            <div class="w-[90%]">
                <div class="rounded border shadow-lg p-2 flex">
                    <div class="w-1/2 rounded overflow-hidden flex justify-center items-center">
                        <img src="{{ asset('storage/'.$product->image) }}" alt="" width="150px">
                    </div>
                    <div class="w-1/2 flex">
                        <div class="" style="width:300px;">
                            <div style="margin-top:20px">
                                <span class="font-semibold text-lg text-black">
                                    {{ $product->title }}
                                </span>
                            </div>
                            <div style="margin-top:20px">
                                <span>
                                    Rp {{ $product->price }}
                                </span>
                            </div>
                            <div style="margin-top:20px">
                                <p>Jumlah Pesanan: <span>
                                    {{ $cart->jumlah }}
                                </span></p>
                                
                            </div>

                            <div style="margin-top:20px">
                                <p>Total Harga: <span>
                                    Rp {{ $cart->jumlah*$product->price }}
                                </span></p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">Make sure your address is valid data</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ url('/orders') }}" method="POST">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <input type="text" name="last_name" id="last_name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                        <input type="text" name="phone" id="phone" placeholder="+62-812-3456-7890"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    

                                    <div class="col-span-6">
                                        <label for="street"
                                            class="block text-sm font-medium text-gray-700">Street
                                            address</label>
                                        <input type="text" name="street" id="street"
                                            
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                        <input type="text" name="city" id="city" autocomplete="address-level2"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="province" class="block text-sm font-medium text-gray-700">State /
                                            Province</label>
                                        <input type="text" name="province" id="province" autocomplete="address-level1"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP /
                                            Postal
                                            code</label>
                                        <input type="text" name="postal_code" id="postal_code"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                        
                                        <input type="hidden" value="{{ $cart->id }}" name="cartid" id="cartid">
                                        <input type="hidden" value="{{ $cart->userid }}" name="userid" id="userid">
                                        <input type="hidden" value="{{ $cart->productid }}" name="productid" id="productid">
                                        <input type="hidden" value="{{ $cart->jumlah }}" name="jumlah" id="jumlah">

                                        
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr>

        

    </div>
</div>



@endsection
