@extends('layouts.app')

@section('title', 'Lista Viaggi')

@section('content')
    <div class="row">
        @forelse ($travels as $travel)
        <div class="col-1"></div>
    </div>
    @empty
    <h2 class="text-center">Crea il tuo diario</h2>
    <span>
        <a href="{{route('admin.travel.create')}}">
            <i class="fas-fa-plus"></i>
        </a>
    </span>
    @endforelse

@endsection