<div>

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
                        <form action="#">
                            @csrf
                            
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    {{-- title --}}
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="title"
                                                    class="block text-sm font-medium text-gray-700">Product
                                                    Name</label>
                                                <input wire:model="title" type="text" name="title" id="title"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    {{ $title }}
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
                                            <input wire:model="price" type="text" name="price" id="price"
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
                                        <label for="description" class="block text-sm font-medium text-gray-700">
                                            Description </label>
                                        <div class="mt-1">
                                            <textarea wire:model="descriptions" id="description" name="description" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="write a description here"></textarea>
                                        </div>
                                        
                                    </div>

                                    {{-- stock --}}
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="title"
                                                    class="block text-sm font-medium text-gray-700">stock</label>
                                                <input wire:model="title" type="number" name="stock" id="stock"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- image --}}
                                    {{-- <div>
                                        <label class="block text-sm font-medium text-gray-700"> Product Image </label>
                                        <div
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                    </div> --}}
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

</div>
