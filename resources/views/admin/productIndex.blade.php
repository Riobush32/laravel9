@extends('adminComponens.navComponen')

@section('content3')

<div class="p-5 h-screen bg-gray-100 p-20">
    <div class="grid grid-flow-col auto-cols-max gap-4 mb-4">
        <div class="">
            <h1 class="text-xl mb-2">Product: {{ $data->total() }} </h1>
        </div>


        <a href="{{ url('/product/create') }}"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
            Add
        </a>

        

    </div>


    <div class="overflow-auto rounded-lg shadow hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">No. </th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Title</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Description</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Price</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Stock</th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                <?php
                    $no = 1;
                ?>
                @foreach($data as $item)
                <tr class="bg-white">
                    <td class="whitespace-nowrap w-20 p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">{{ $no }}</a>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->title }}
                    </td>
                    <td class="whitespace-nowrap w-24 p-3 text-sm text-gray-700">
                        <p class="p-1.5 text-xs font-medium uppercase">
                            {{ $item->descriptions }}
                        </p>
                    </td>

                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Rp {{ $item->price }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->stock }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">

                        <a href="{{ url('/product/'.$item->id.'/edit') }}"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                            Edit
                        </a>

                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                            Delete
                        </button>
                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>

        {{ $data->links('') }}
    </div>

    {{-- the second  --}}
    <?php 
        $n = 1;
    ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
        {{ $data->links('') }}
        @foreach ($data as $item)
        <div class="bg-white space-y-2 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <a href="#" class="text-blue-500 font-bold hover:underline">{{ $n }}</a>
                </div>
                <div class="text-gray-400">{{ $item->title }}</div>
                <div>
                    <span
                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">
                        {{ $item->stock }}
                    </span>
                </div>
            </div>
            <div class="text-sm text-gray-800">{{ $item->descriptions }}.</div>
            <div class="text-sm font-bold text-black">Rp {{ $item->id }} </div>
            <div class="">
                
                <a href="{{ url('/product/$item->id/edit') }}"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                    edit
                </a>
                <a type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                    delete
                </a>
            </div>
        </div>
        <?php $n++; ?>

        @endforeach

    </div>


</div>

@endsection
