@extends('master')
@section('title')
    Adicionar Movimento
@endsection
@section('content')
<div class="border rounded bg-light">
    <h3 class="ml-2 mt-2">Adicionar Movimento</h3>
    <div class="p-4">
        @include('messages.flash')
        @include('messages.errors')
        <form method="post" action="{{ url('movimentos') }}">
            @csrf
            @include('movimentos.form')
        </form>
    </div>
</div>
@stop
