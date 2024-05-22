@extends('layouts.basic')

@section('title', 'Generate Page')

@section('content')
    
    @component('layouts._components.menu_app')
    @endcomponent

    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="col-4">
            <form class="form d-flex justify-content-center align-items-center flex-column">
                <div class="mb-3 col-12 d-flex justify-content-center">
                    <div class="col-4 text-justify">
                        <label for="" class="form-label">Coloque o Link:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="mb-3 col-12 d-flex">
                    <div class="col-4 text-justify">
                        <label for="" class="form-label label">Sua nova URL:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-6 d-flex justify-content-center">
                        <button type="submit" class="btn btn-light">Gerar Link Encurtado</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection