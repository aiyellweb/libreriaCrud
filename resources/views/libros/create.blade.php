@extends('layouts.master')

@section('title','Libro Nuevo')

@section('content')

<ol class="breadcrumb">
     <li><a href="">Listado</a></li>
     <li class="active">Nuevo Libro</li>
   </ol>
 

   <div class="page-header">
     <h1>Libro Nuevo </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Libro
           </div>
          <div class="panel-body">



            {!!Form::open(['route'=>'libro.store','method'=>'POST'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Precio</label>
                  {!!form::label('Precio')!!}
                  {!!form::text('price',null,['id'=>'price','class'=>'form-control','placeholder'=>'Digite el Precio'])!!}
             </div>
             <div class="form-group">
                 <select name="categoria">
                 <label>Categoria</label>
                 @foreach($categoria as $cate)
                   <option value="{{$cate->id}}">{{$cate->name_categoria}}</option>

                  @endforeach 

                 </select> 
             </div>

                <div class="form-group">
                <label>Autores</label>
                 <select name="categoria">
                 @foreach($autor as $aut)
                   <option value="{{$aut->id}}">{{$aut->name_autor}}</option>

                  @endforeach 

                 </select> 
             </div>


                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}

              <button type="button" id='cancelar'  name='cancelar' class="btn btn-info btn-sm m-t-10" >Cancelar</button>             
          {!!Form::close()!!}




           </div>
        </div>


     </div>
   </div>

<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('libro.index')}}";
  });

</script>
  

@endsection




