Mostrar la lista de categorias

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('category/create') }}" class="btn btn-success" >Registrar nueva categoria</a>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $categories as $category )
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->Name }}</td>
            <td>{{ $category->Description }}</td>
            <td>
                
            <a href="{{ url('/category/'.$category->id.'/edit') }}">
                    Editar
            </a>
            
                                        
            <form action="{{ url('/category/'.$category->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Seguro que desea borrar?')" value="Borrar">

            </form>


            </td>
        </tr>
        @endforeach
    </tbody>

</table>