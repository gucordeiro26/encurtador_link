@extends('layouts.basic')

@section('title', 'List Page')

@section('content')
    
    @component('layouts._components.menu_app')
    @endcomponent

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

@endsection