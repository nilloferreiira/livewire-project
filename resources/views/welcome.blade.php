@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h3>Contador</h3>
            <livewire:contador />
        </div>
        <hr>
        <div>
            @livewire('main-modal')
        </div>
        <hr>
        @livewire('estoque')
    @endsection
