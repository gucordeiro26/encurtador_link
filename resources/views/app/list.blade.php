<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Generate</title>
</head>
<body>
    
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
                                    <a class="nav-link" href="{{ route('app.generate') }}">Gerar Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row mt-5">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12">
                            <div class="row p-3 border text-center">
                                <div class="col-10 d-flex">
                                    <div class="col-2">N° ID</div>
                                    <div class="col-5 border-start">URL Definida</div>
                                    <div class="col-5 border-start">URL Original</div>
                                </div>
                                <div class="col-2 border-start"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row p-3 border text-center">
                                <div class="col-10 d-flex align-items-center">
                                    <div class="col-2">1</div>
                                    <div class="col-5 border-start">https://bit.ly/etec-sales-gomes</div>
                                    <div class="col-5 border-start">https://dolomite-daisy-5e8.notion.site/Caderno-do-Estudante-00f4024354484e66ac479030a3100dc2</div>
                                </div>
                                <div class="col-2 border-start d-flex justify-content-between">
                                    <button class="btn btn-primary" type="submit">Editar</button>
                                    <button class="btn btn-primary" type="submit">Excluir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>