@extends('layouts.app')
@section('content')



<form role="form" method="post"action="{{url('/productos')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table class="table table-dark">
    <div class="form-group">

<label class="table table-dark" for="Producto">{{'Producto'}}</label>
<input class="form-control" type="text" name="Producto" id="Producto">
    </div>
    <div class="form-group">
<label class="table table-dark" for="Descripcion">{{'Descripcion'}}</label>
<input class="form-control" type="text" name="Descripcion" id="Descripcion">
    </div>
    <div class="form-group">
<label class="table table-dark" for="precio">{{'precio'}}</label>
<input class="form-control" type="text" name="precio" id="precio">
    </div>

    <div class="form-group">
<label class="table table-dark" for="imagen">{{'imagen'}}</label>
<input class="form-control" type="file" name="imagen" id="imagen">
    </div>

<input class="btn btn-primary" type="submit" value="Agregar">

</form>
@endsection
