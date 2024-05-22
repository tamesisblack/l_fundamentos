@extends('layouts.landing')
@section('title', 'Services')
@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title')
            Service 1
        @endslot
        @slot('content')
            This is the content for service 1.
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title')
            Service 2
        @endslot
        @slot('content')
            This is the content for service 2.
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title')
            Service 3
        @endslot
        @slot('content')
            This is the content for service 3.
        @endslot
    @endcomponent
@endsection