@if (session('message_success'))
    <div class="fixed top-5 right-5 bg-success text-white font-bold rounded-lg px-4 py-2 shadow-lg">
        {{ session('message_success') }}
    </div>
@endif

@if (session('message_error'))
    <div class="fixed top-5 right-5 bg-danger text-white font-bold rounded-lg px-4 py-2 shadow-lg">
        {{ session('message_error') }}
    </div>
@endif
