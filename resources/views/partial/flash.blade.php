@if (session('message'))
    <div class="alert alert-{{ session('alert-type') }} g alert-dismissible fade show" role="alert" id="alert-session">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
