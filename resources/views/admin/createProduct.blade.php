@extends('adminComponens.navComponen')

@section('content3')

<div class="flex justify-center items-center">
    <div class="container-[90%] p-10">
        <div class="">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Product</h3>

                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ url('/product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                {{-- title --}}
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">Product
                                                Name</label>
                                            <input type="text" name="title" id="title" autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                    </div>
                                </div>

                                {{-- price --}}
                                <div>
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm"> Rp </span>
                                        </div>
                                        <input type="text" name="price" id="price"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
                                            placeholder="0.00">
                                        <div class="absolute inset-y-0 right-0 flex items-center">
                                            <label for="currency" class="sr-only">Currency</label>
                                            <select id="currency" name="currency"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                <option>Rp</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- description --}}
                                <div>
                                    <label for="descriptions" class="block text-sm font-medium text-gray-700">
                                        Description </label>
                                    <div class="mt-1">
                                        <textarea id="descriptions" name="descriptions" rows="3"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                            placeholder="write a description here"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are
                                        hyperlinked.</p>
                                </div>


                                {{-- stock --}}
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="title"
                                                class="block text-sm font-medium text-gray-700">stock</label>
                                            <input type="number" name="stock" id="stock"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>

                                {{-- image --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700"> Product Image </label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="image"
                                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="image" name="image" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                    </div>
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

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>



    </div>
</div>

<hr>

{{-- <livewire:product-index></livewire:product-index> --}}

<div class="p-5 h-screen bg-gray-100">
    {{-- <h1 class="text-xl mb-2">Your Order</h1>

    <div class="overflow-auto rounded-lg shadow hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">No. </th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Details</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Status</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Date</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Total</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">

                <tr class="bg-white">
                    <td class="whitespace-nowrap w-20 p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">1002</a>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Lorem, ipsum dolor.
                    </td>
                    <td class="whitespace-nowrap w-24 p-3 text-sm text-gray-700">
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">
                            Lorem, ipsum dolor.
                        </span>
                    </td>
                    <td class="whitespace-nowrap w-24 p-3 text-sm text-gray-700">
                        delivery
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Rp 100.000,00
                    </td>
                </tr>
                <tr class='bg-gray-50'>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">1002</a>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Lorem, ipsum dolor.
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">
                            Lorem, ipsum dolor.
                        </span>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        delivery
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Rp 100.000,00
                    </td>
                </tr>
                <tr class="bg-white">
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">1002</a>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Lorem, ipsum dolor.
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg bg-opacity-50">
                            Lorem, ipsum dolor.
                        </span>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        delivery
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Rp 100.000,00
                    </td>
                </tr>
            </tbody>
        </table>
    </div> --}}

    {{-- the second 
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
        <div class="bg-white space-y-2 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <a href="#" class="text-blue-500 font-bold hover:underline">order number</a>
                </div>
                <div class="text-gray-400">12/12/2022</div>
                <div>
                    <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">
                            Lorem, 
                        </span>
                </div>
            </div>
            <div class="text-sm text-gray-800">Lorem ipsum dolor sit amet.</div>
            <div class="text-sm font-bold text-black">Rp 200.000,00</div>
        </div>

        <div class="bg-white space-y-2 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <a href="#" class="text-blue-500 font-bold hover:underline">order number</a>
                </div>
                <div class="text-gray-400">12/12/2022</div>
                <div>
                    <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">
                            Lorem, 
                        </span>
                </div>
            </div>
            <div class="text-sm text-gray-800">Lorem ipsum dolor sit amet.</div>
            <div class="text-sm font-bold text-black">Rp 200.000,00</div>
        </div>

        <div class="bg-white space-y-2 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <a href="#" class="text-blue-500 font-bold hover:underline">order number</a>
                </div>
                <div class="text-gray-400">12/12/2022</div>
                <div>
                    <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">
                            Lorem, 
                        </span>
                </div>
            </div>
            <div class="text-sm text-gray-800">Lorem ipsum dolor sit amet.</div>
            <div class="text-sm font-bold text-black">Rp 200.000,00</div>
        </div>
    </div> --}}

    
</div>

@endsection
