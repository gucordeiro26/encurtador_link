@extends('layouts.basic')

@section('title', 'Generate Page')

@section('content')
    
    <div class="row height">
        <div class="col-12">

            <header>
                <div class="row">
                    <div class="col-12 nav_bar">
                        <div class="col-4">
                            <ul class="navbar justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('site.index') }}">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('app.list') }}">Seus Links</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

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

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection