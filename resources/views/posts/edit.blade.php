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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="mb-3">
                Image
                <div class="card" style="height:300px; width:340px;">
                    <img id="output" style="width: 100%;height: 100%" alt="">
                </div>

                <div style="cursor: pointer" id="custom-selectimagen">
                    <div style="cursor: pointer;text-align:center">
                        <span style="position:relative; top:28px;"><b>Seleecione Archivo</b></span>
                    </div>
                    <div style="cursor: pointer;border-radius: 23px; border: 2px solid #4caf50;content: 'Joes Task';">
                        <input name="photo" type="file" style="opacity: 0; width:100%;" 
                        accept="image/*" onchange="setImgage(this)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <i>Creador : {{$post->user->name}}</i> 
                        </div>
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{$post->title}}" class="form-control" 
                             id="title" aria-describedby="titlehelp" name="title">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="dexclabel" class="form-label">Description</label> <br>
                            <textarea class="form-control" name="body" id="dexclabel" rows="10" >{{$post->body}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="dexclabel" class="form-label">Iframe</label> <br>
                            <textarea class="form-control" name="iframe" id="dexclabel" rows="2" >{{$post->iframe}}</textarea>
                        </div>
                      
                        <b style="border-radius: 25px; border:1px solid black;" class="p-1">
                            Last Modification {{$post->updated_at->format('d M Y')}}</b> 
                        <button type="submit" class=" float-right btn btn-primary">Edit</button>
                    </form>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    const setImgage = (context) => {
        document.getElementById('output').src = window.URL.createObjectURL(context.files[0])
        console.log(context.files[0]);
    }
</script>