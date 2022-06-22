
@extends('layouts.main')

@section('content2')

<div class="p-5 h-screen bg-gray-100 p-20">
    <div class="grid grid-flow-col auto-cols-max gap-4 mb-4">
        <div class="">
            <h1 class="text-xl mb-2">Pesanan: {{ $data->total() }} </h1>
        </div>


        



    </div>


    <div class="overflow-auto rounded-lg shadow hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">No. </th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Nama </th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Email</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Phone</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Provinsi</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Kota</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Alamat</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Kode Pos</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Nama Barang</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Jumlah</th>
                    <th class="p-3 text-sm font-bold tracking-wide text-left">Total Harga</th>
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

                        $userid = $item->userid;
                        $user = DB::table('users')->find($userid);
                        $email = $user->email;

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
            }else if($stat == '3'){
                $status = 'Dikirim';
                $color1 = '#e2e8f0';
                $color2 = '#1e293b';
            }else if($stat == '4'){
                $status = 'Sampai';
                $color1 = '#a7f3d0';
                $color2 = '#065f46';
            }
            else if($stat == '5'){
                $status = 'Diterima';
                $color1 = '#f5d0fe';
                $color2 = '#86198f';
            }
                    ?>
                    <td class="whitespace-nowrap w-20 p-3 text-sm text-gray-700">
                        <a href="#" class="font-bold text-blue-500 hover:underline">{{ $no }}</a>
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->first_name }} {{ $item->last_name }}
                    </td>
                    <td class="whitespace-nowrap w-24 p-3 text-sm text-gray-700">
                        <p class="p-1.5 text-xs font-medium">
                            {{ $email}}
                        </p>
                    </td>

                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->phone }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->province }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->city }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->street }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $item->postal_code }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $barang }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $jumlah }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">
                        {{ $totalharga }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-gray-700">

                        


                            <a href="{{ url('/status/'.$item->id) }}"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500" style="background-color:{{ $color1 }};color:{{ $color2 }}">
                                {{ $status }}
                            </a>

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>
        {{ $data->links('') }}
    </div>

    


</div>


@endsection


