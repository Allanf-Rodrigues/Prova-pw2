@extends('layouts.app')
@section('content')

<div class="container">



        <form id="frmestoque" name="frmestoque" action="{{ route('estoque.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <label for="nome">produto</label>
                <input type="text" class="form-control {{ $errors->has('produto') ? 'is-invalid' : '' }}" id="produto" name="produto" placeholder="Informe o produto">
                @if ($errors->has('produto'))
                <div class="invalid-feedback">
                    {{$errors->first('produto', 'Atenção o campo produto é obrigatório!')}}
                </div>
                @endif
            </div>

            <div class="form-group col-6">
                <label for="sobrenome">quantidade</label>
                <input type="text" class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}" id="quantidade"  name="quantidade" placeholder="Informe a quantidade">
            @if ($errors->has('quantidade'))
            <div class="invalid-feedback">
                {{$errors->first('quantidade', 'Atenção o campo quantidade é obrigatório!')}}
            </div>
            @endif
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>

@endsection
