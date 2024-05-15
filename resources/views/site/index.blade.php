@extends('layouts.basic')

@section('title', 'Index Page')

@section('content')
    
    @component('layouts._components.menu_site')
    @endcomponent

    @component('layouts._components.form_contact', ['dark' => 'bg-light'])
    @endcomponent
    
@endsection