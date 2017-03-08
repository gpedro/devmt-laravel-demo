@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="col-md-12">

            <form action="{{ route('mafagafo.update', $mafagafo->id) }}" method="post">

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" value="{{ $mafagafo->nome }}" name="nome">
                    <p class="text-danger">{{ $errors->has('nome') ? $errors->get('nome')[0] : ''}}</p>
                </div>

                <button type="submit" class="btn btn-block btn-success">Criar</button>
                {{ method_field('PUT') }}
                {{ csrf_field() }}
            </form>

        </div>
    </div>
@endsection