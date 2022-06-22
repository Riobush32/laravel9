@extends('layouts.main') 
@section('content2') 

<div class="w-full flex items-center justify-center" style="margin-top:100px">

<form action="{{ url('/status/'.$order->id.'/user') }}" method="POST" class="w-[90%]">
    @csrf @method('PATCH') 
    <div class="p-5 h-screen bg-gray-100 p-20">
        <label for="status">Pilih Status</label>
        <select name="status" id="status" class="rounded">
            <option value="1">Menunggu</option>
            {{-- <option value="2">Diproses</option>
            <option value="3">Dikirim</option>
            <option value="4">Sampai</option> --}}
            <option value="5">Diterima</option>

        </select>
        <div class="whitespace-nowrap p-3 text-sm text-gray-700">
            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">Ubah Status</button>
        </div>
    </div>
</form>
</div>
@endsection
