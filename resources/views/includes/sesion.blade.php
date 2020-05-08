@if (session()->has('flash'))
    <div class="alert alert-{{ session('class') }}">
        {{ session('flash') }}
    </div>
@endif
