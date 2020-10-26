@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <form action="">
                @livewire('form.dropdown')
            </form>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
