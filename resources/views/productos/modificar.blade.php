<form method="post" action="{{url('/productos'.$datos->id)}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
<label for="Producto">{{'Producto'}}</label>
<input type="text" name="Producto" value="{{$datos->Producto}}" id="Producto">

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" value="{{$datos->Descripcion}}" id="Descripcion">


<label for="precio">{{'precio'}}</label>
<input type="text" name="precio" value="{{$datos->precio}}" id="precio">


<label for="imagen">{{'imagen'}}</label>
<img class="img-fluid" src="{{ asset('storage').'/'.$item ?? ''->imagen}}" alt="foto">
<input type="file" name="imagen" value="{{$item ?? ''->imagen}}" id="imagen">

<input type="submit" value="editar">
</form>
