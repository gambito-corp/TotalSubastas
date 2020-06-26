@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col form-group">
            <div class="m-5">
                <div class="row rows-col-2">
                    <div class="col">
                        <label for="">auction name</label>
                        <input type="text" placeholder="" class="form-control rounded p-2">
                    </div>
                    <div class="col">
                        <label for="">model</label>
                        <input type="text" placeholder="" class="form-control rounded p-2">
                    </div>
                </div>
                <div class="mt-5">
                    <button class="btn-lg btn-primary btn-block rounded-pill">
                        save auction
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    @include('assets.footer')
</div>

@endsection