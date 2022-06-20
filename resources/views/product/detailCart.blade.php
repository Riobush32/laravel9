@extends('layouts.main')

@section('content2')

<div class="p-5 h-screen bg-gray-100 p-20">
    <div class="grid grid-flow-col auto-cols-max gap-4 mb-4">
        <?php 
            $t = 0; 
            
            foreach ($data as $i){
                $t++;
            }
        ?>
        <div class="">
            <h1 class="text-xl mb-2">Cart: {{ $t }}</h1>
        </div>


       



    </div>


    <div class="overflow-auto rounded-lg shadow hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">No. </th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Title</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Harga</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Jumlah</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Total</th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                <?php $no = 1; ?>
                @foreach($data as $item)
                <tr class="bg-white">

                    <td class="whitespace-nowrap w-20 p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">
                            {{ $no }}
                        </a>
                    </td>
                    <td>
                        <?php 
                            $idpro = $item->productid;

                            $product = DB::table('products')->find($idpro);
                            $harga = $product->price;
                            $jml = $item->jumlah;
                            $tot = $harga*$jml;

                        ?>
                            {{ $product->title }}
                    </td>
                    <td>
                        {{ $harga }}
                    </td>
                    <td>
                        {{ $jml }}
                    </td>
                    <td>
                        {{ $tot }}
                    </td>
                    <td>
                        <form action="{{ url('/cart/'.$item->id) }}" method="POST">
                            @csrf @method('DELETE')

                            <a href="{{ url('/cart/'.$item->id.'/'.$idpro) }}"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                                Beli
                            </a>

                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                                Hapus
                            </button>
                        </form>
                    </td>
                    <?php $no++; ?>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- the second  --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
        <?php $no = 1; ?>
        @foreach($data as $item)
        <div class="bg-white space-y-2 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <a href="#" class="text-blue-500 font-bold hover:underline">{{ $no }}</a>
                </div>
                <div class="text-gray-400">
                    <?php 
                    $idpro = $item->productid;

                    $product = DB::table('products')->find($idpro);

                    $harga = $product->price;
                    $jml = $item->jumlah;
                    $tot = $harga*$jml;


                ?>
                    {{ $product->title }}
                </div>
                <div>
                    <span
                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">
                        {{ $jml }}
                    </span>
                </div>
            </div>
            <div class="text-sm text-gray-800">Rp {{ $harga }}</div>
            <div class="text-sm font-bold text-black">Total : Rp {{ $tot }}</div>
            <div class="">

                <a href="{{ url('/product/$item->id/edit') }}"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                    Beli
                </a>
                <a type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                    Hapus
                </a>
            </div>
            <?php $no++; ?>
        </div>
        @endforeach
    </div>


</div>


@endsection
