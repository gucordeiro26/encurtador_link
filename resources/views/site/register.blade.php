@extends('layouts.basic')

@section('title', 'Register Page')

@section('content')
    
    <div class="row height">
        <div class="col-12">
            <div class="row h-100 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <form class="form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password_confirm">
                        </div>
                        <div class="pos_btn">
                            <button type="submit" class="btn btn-light">Registrar-se</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection