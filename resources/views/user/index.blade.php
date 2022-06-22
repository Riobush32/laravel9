@extends('layouts.main')

@section('content2')

<div class="container" style="margin-top:200px;">
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" id="pay-button"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pay</button>
    </div>
</div>

{{-- midtrans --}}
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

<script type="text/javascript">
    document.getElementById('pay-button').onclick = function () {
        // SnapToken acquired from previous step
        snap.pay('{{ $snapToken }}', {
            // Optional
            onSuccess: function (result) {
                /* You may add your own js here, this is just example */
                window.location.href = "/clear/{{ $cart }}/{{ $user }}/{{ $sisa }}/{{ $product }}";
            },
            // Optional
            onPending: function (result) {
                /* You may add your own js here, this is just example */
                location.reload();
            },
            // Optional
            onError: function (result) {
                /* You may add your own js here, this is just example */
                location.reload();;
            }
        });
    };

</script>

@endsection
