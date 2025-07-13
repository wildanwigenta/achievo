@extends('layouts.app')

@section('content')
    @livewire('task-form')
    
    <hr class="my-6">

    @livewire('task-list')
@endsection
