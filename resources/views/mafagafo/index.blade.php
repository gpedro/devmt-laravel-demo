@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="col-md-12">

            <table class="table table-bordered table-striped">
                <thead>
                 <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
                </thead>

                <tbody>
                    @forelse($mafagafos as $mafagafo)
                        <tr>
                            <td>{{ $mafagafo->id }}</td>
                            <td>{{ $mafagafo->nome }}</td>
                            <td>
                                <a href="{{ route('mafagafo.show', $mafagafo->id) }}" class="btn btn-success">Ver</a>
                                <a href="{{ route('mafagafo.edit', $mafagafo->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('mafagafo.destroy', $mafagafo->id) }}" method="post">
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="3">Nenhum mafagafo encontrado.</td></tr>
                    @endforelse
                </tbody>
            </table>

            {{ $mafagafos->links() }}
        </div>
    </div>
@endsection