@extends('layouts.main')

@section('content2')

<div class="p-5 h-screen bg-gray-100 p-20">
    <div class="grid grid-flow-col auto-cols-max gap-4 mb-4">
        <div class="">
            <h1 class="text-xl mb-2">Pesanan:  </h1>
        </div>


        



    </div>


    <div class="overflow-auto rounded-lg shadow hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">No. </th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Nama Barang</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Jumlah</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Harga</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Status</th>

                    <th></th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                <?php
                    $no = 1;
                ?>
                @foreach($data as $item)
                <tr class="bg-white">
                    <?php
                        
                        $productid = $item->productid;
                        $product = DB::table('products')->find($productid);

                        $barang = $product->title;
                        $harga = $product->price;
                        $jumlah = $item->jumlah;
                        $totalharga = $jumlah*$harga;

                        $stat = $item->status;
                        $status = '';

                        if($stat == 1)
                        {
                            $status = 'Menunggu';
                            $color1 = '#fed7aa';
                            $color2 = '#854d0e';
                        }else if($stat == 2)
                        {
                            $status = 'Diproses';
                            $color1 = '#a5f3fc';
                            $color2 = '#155e75';
                        }else if($stat == 3)
                        {
                            $status = 'Dikirim';
                            $color1 = '#e2e8f0';
                            $color2 = '#1e293b';
                        }else if($stat == 4)
                        {
                            $status = 'Sampai';
                            $color1 = '#a7f3d0';
                            $color2 = '#065f46';
                        }
                        else if($stat == 5)
                        {
                            $status = 'Diterima';
                            $color1 = '#f5d0fe';
                            $color2 = '#86198f';
                        }
                    ?>
                    <td class="whitespace-nowrap w-20 p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">{{ $no }}</a>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $barang }}
                    </td>
                    <td class="whitespace-nowrap w-24 p-3 text-sm text-gray-700">
                        <p class="p-1.5 text-xs font-medium uppercase">
                            {{ $jumlah }}
                        </p>
                    </td>

                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        Rp {{ $totalharga }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        <span 
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500" style="background-color:{{ $color1 }};color:{{ $color2 }}">
                            {{ $status }}
                        </span>
                        

                        @if ($stat == '4')
                        <a href="{{ url('/status/'.$item->id.'/user') }}"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500" style="background-color:{{ $color1 }};color:{{ $color2 }}; margin-left:5px">
                            Terima
                        </a>
                        @endif

                </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>

    </div>

    {{-- the second  --}}

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
        <?php $n=1; ?>

        @foreach ($data as $item)
        <div class="bg-white space-y-2 p-4 rounded-lg shadow">
            <?php
                        
            $productid = $item->productid;
            $product = DB::table('products')->find($productid);

            $barang = $product->title;
            $harga = $product->price;
            $jumlah = $item->jumlah;
            $totalharga = $jumlah*$harga;

            $stat = $item->status;
            $status = '';
            $color1 = '';
            $color2 = '';

            if($stat == '1')
            {
                $status = 'Menunggu';
                $color1 = '#fed7aa';
                $color2 = '#854d0e';
            }else if($stat == '2')
            {
                $status = 'Diproses';
                $color1 = '#a5f3fc';
                $color2 = '#155e75';
            }else if($stat == '3')
            {
                $status = 'Dikirim';
                $color1 = '#e2e8f0';
                $color2 = '#1e293b';
            }else if($stat == '4')
            {
                $status = 'Sampai';
                $color1 = '#a7f3d0';
                $color2 = '#065f46';
            }
            else if($stat == '5')
            {
                $status = 'Diterima';
                $color1 = '#f5d0fe';
                $color2 = '#86198f';
            }
        ?>
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <a href="#" class="text-blue-500 font-bold hover:underline">{{ $n }}</a>
                </div>
                <div class="text-gray-400">{{ $barang }}</div>
                <div>
                    <span
                        class="p-1.5 text-xs font-medium uppercase tracking-wider rounded-lg bg-opacity-50" style="background-color:{{ $color1 }}; color:{{ $color2 }}">
                        {{ $status }}
                    </span>
                </div>
            </div>
            <div class="text-sm text-gray-800">{{ $jumlah }}.</div>
            <div class="text-sm font-bold text-black">Rp {{ $totalharga }} </div>
            <div class="">
                @if ($stat == '4')
                <a href="{{ url('/status/'.$item->id.'/user') }}"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500" style="background-color:{{ $color1 }};color:{{ $color2 }}">
                    Terima
                </a>
                @endif
            </div>
        </div>
        <?php $n++; ?>

        @endforeach

    </div>


</div>


@endsection
