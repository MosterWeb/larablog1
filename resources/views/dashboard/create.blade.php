@extends('templates.index')

@section('title')
Crear nuevo Post
@endsection



@section('content')
<h2 class="display-6 text-center">Crear Post</h2>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="text-center text-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

<div class="container-fluid">
    <div class="row">
        
            <div class="col-12 col-md-3 m-auto">
                 

                <x-formulario action="{{ route('post.store') }}" method="POST" btnClass="btn btn-primary" btnValue="Agregar post" :slot="'asi'" >
                    <x-input name="title" placeholder="Ingresa título"  id="floatingInput" title="Nombre" type="text"/> 
                    <x-input name="slug" placeholder="Ingresa slug"  id="floatingInput" title="Slug" type="text"/>  

                    <x-select name="category_id" message="Categorias" :slot="'category'">
                        @foreach ($categories as $title => $id)
                        <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                         
                    </x-select>  

                    <x-select name="posted" message="¿Posteado?" :slot="'yes'">
                        <option value="yes">Yes</option>
                        <option value="no" >No</option>
                    </x-select>  
                    <x-textarea id="description" name="description" title="Ingresa la descripción " />
                                                                       
                    <button type="submit" class="btn btn-secondary w-100">Enviar</button>
                               
                </x-formulario>
              
                
            </div>
         
    </div>
</div> 
@endsection