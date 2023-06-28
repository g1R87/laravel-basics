@if (session()->has('message'))
    <div id="alert" class="container position-fixed bottom-1 end-0 p-3" style="z-index: 100; max-width: 300px">
        <div class="alert alert-primary alert-dismissible fad show" role="alert">
            {{ session('message') }}
            {{-- <a href="" class="alert-link">an alert link</a> --}}
            <button class="btn-close" aria-label="close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif
