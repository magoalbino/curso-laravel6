@extends('layouts.app')

@section('content')
    <a href="{{route('admin.categories.create')}}" class="btn btn-lg btn-success">Criar Categoria</a>
    @if($categories->count() == 0)
        <h3>Você ainda não possui nenhuma categoria criada!</h3>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td width="15%">
                        <div class="btn-group">
                            <a href="{{route('admin.categories.edit', ['category' => $category->id])}}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif

@endsection
