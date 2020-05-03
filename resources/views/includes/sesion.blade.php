@if (session('msg'))
    <div class="alert alert-{{ session('class') }}">
        {{ session('msg') }}
    </div>
@endif
