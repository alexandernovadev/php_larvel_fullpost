@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-danger" href="{{ route('homeposts') }}">Volver</a>
            <div class="card">
                <div class="card-header">Articulos
                    <a class="btn btn-success float-right btn-sm" 
                    href="{{ route('posts.create') }}">Crear</a>
                </div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <script>    
                                            var x = {!! json_encode($post->title) !!};
                                           
                                        </script>
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Desea Eliminar '+ x)"/>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
