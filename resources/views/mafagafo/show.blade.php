@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="col-md-6">
            <div class="form-group">
                <label>ID</label>
                <p class="form-control-static">{{ $mafagafo->id }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Nome</label>
                <p class="form-control-static">{{ $mafagafo->nome }}</p>
            </div>
        </div>
    </div>
@endsection