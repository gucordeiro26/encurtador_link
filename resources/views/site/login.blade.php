<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>
    
    <div class="row height">
        <div class="col-12">
            <div class="row h-100 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <form class="form d-flex justify-content-center align-items-center flex-column">
                        <div class="mb-3 col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                            <div class="row w-100">
                                <div class="col-6 d-flex justify-content-start">
                                    <button type="submit" class="btn btn-light">Registrar-se</button>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-light">Acessar</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>