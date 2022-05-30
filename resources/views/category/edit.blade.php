Formulario de edicion de categoria

<form action="{{ url('/category/'.$category->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('category.form',['modo'=>'Editar']);
</form>

