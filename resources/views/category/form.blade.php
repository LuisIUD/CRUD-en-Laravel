<h1>{{ $modo }} categoria</h1>
<label for="Name"> Nombre </label>
<input type="string" name="Name" value="{{ isset($category->Name)?$category->Name:'' }}" id="Name">
<br>

<label for="Description"> Descripcion </label>
<input type="text" name="Description" value="{{ isset($category->Description)?$category->Description:'' }}" id="Description">
<br>
<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('category/') }}">Regresar</a>

<br>