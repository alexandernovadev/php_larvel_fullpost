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
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
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
                        <input name="photo" type="file" name="file" style="opacity: 0; width:100%;" 
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
                            <i>Creador : {{Auth::user()->name}}</i> 
                        </div>
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="" class="form-control" 
                             id="title" aria-describedby="titlehelp" name="title">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="dexclabel" class="form-label">Description</label> <br>
                            <textarea class="form-control" name="body" id="dexclabel" rows="10" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="dexclabel" class="form-label">Iframe</label> <br>
                            <textarea class="form-control" name="iframe" id="dexclabel" rows="2" ></textarea>
                        </div>
                      
                        <button type="submit" class=" float-right btn btn-primary">Agregar</button>
                        
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