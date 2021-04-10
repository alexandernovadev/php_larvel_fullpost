@extends('layouts.app')

@section('content')
{{-- id
user_id
title
body
image
iframe
created_at
updated_at --}}


@if ( session('status') )
<div class="alert alert-success text-center" role="alert">
    {{ session('status') }}
</div>
@endif
<form action="{{ route('posts.update',$post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="container">
    <div class="row justify-content-center">
      
        <div class="col-md-4">
            <a class="btn btn-danger" href="{{ route('homeposts') }}">Volver</a>
            <div class="mb-3">
                Image
                <div class="card" style="height:300px; width:340px;">
                    <img id="output" src="{{$post->get_image}}" style="width: 100%;height: 100%" alt="">
                    {{$post->image}}
                    {{$post->get_image}}
                </div>

                <div style="cursor: pointer" id="custom-selectimagen">
                    <div style="cursor: pointer;text-align:center">
                        <span style="position:relative; top:28px;"><b>Seleecione Archivo</b></span>
                    </div>
                    <div style="cursor: pointer;border-radius: 23px; border: 2px solid #4caf50;content: 'Joes Task';">
                        <input type="file" name="file" style="opacity: 0; width:100%;" 
                        accept="image/*" onchange="setImgage(this)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>
                <div class="card-body">
                        <div class="mb-3">
                            <i>Creador : {{$post->user->name}}</i> 
                        </div>
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{old('title',$post->title)}}"
                             class="form-control {{ $errors->first('title') ? 'border border-danger' : '' }}" 
                             id="title" aria-describedby="titlehelp" name="title">
                             @if ($errors->first('title'))
                             <div class="text-danger">
                                Field Title is required
                              </div>
                             @endif
                        </div>
                        
                        <div class="mb-3">
                            <label for="dexclabel" class="form-label">Description</label> <br>
                            <textarea class="form-control {{ $errors->first('body') ? 'border border-danger' : '' }}" 
                                name="body" id="dexclabel" rows="10" >{{old('body',$post->body)}}</textarea>
                            @if ($errors->first('body'))
                             <div class="text-danger">
                                Field Body is required
                              </div>
                             @endif
                        </div>
                        <div class="mb-3">
                            <label for="dexclabel" class="form-label">Iframe</label> <br>
                            <textarea class="form-control" name="iframe" id="dexclabel" rows="2" >{{old('body',$post->iframe)}}</textarea>
                        </div>
                        Last Modification {{$post->updated_at->format('d M Y')}}</b> 
                        <button type="submit" class=" float-right btn btn-primary">Editar</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
<script>
    const setImgage = (context) => {
        document.getElementById('output').src = window.URL.createObjectURL(context.files[0])
        console.log(context.files[0]);
    }
</script>