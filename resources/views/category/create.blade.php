Formulario de creacion de categoria

<form action="{{ url('/category') }}" method="post" enctype="multipart/form-data">
@csrf
@include('category.form',['modo'=>'Crear']);


</form>