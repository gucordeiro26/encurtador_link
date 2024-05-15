@extends('layouts.basic')

@section('title', 'Contact Page')

@section('content')

        @component('layouts._components.menu_site')
        @endcomponent

        @component('layouts._components.form_contact', ['dark' => 'bg-light'])
        @endcomponent

@endsection