@extends('layouts.basic')

@section('title', 'Contact Page')

@section('content')

        @component('layouts._components.menu_app')
        @endcomponent

        @component('layouts._components.form_contact')
        @endcomponent

@endsection