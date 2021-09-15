@extends('layouts.app')
@section('content')

<div class="container">
<h2>Prova</h2>
<hr/>
<a href="{{ url('estoque/create') }}" class="btn btn-success">Novo Produto</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">produto</th>
                <th scope="col">quantidade</th>
                <th scope="col">Opcões</th>
            </tr>
        </thead>
        @foreach($estoque as $estoques)
        <tbody>
            <tr>
                <th>{{ $estoques->id }}</th>
                <td>{{ $estoques->produto }}</td>
                <td>{{ $estoques->quantidade }}</td>
                <td>
                    <a href=" {{ route('estoque.show',$estoques->id)}}" class="btn btn-dark btn-sm">Vizualizar</a>
                    <a href="{{ url('estoque/delete',['id'=>$estoques->id]) }}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
 </div>

@endsection
