@extends('layouts.basic')

@section('title', 'Recover Page')

@section('content')

    @component('layouts._components.menu_site')
    @endcomponent

    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="col-4">
            <form class="form">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="pos_btn">
                    <button type="submit" class="btn btn-light">Recuperar</button>
                </div>
            </form>
        </div>
    </div>

@endsection