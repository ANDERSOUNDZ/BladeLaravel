<h1>Lista de categorias utilizando archivos externos de duiferentes vistas osea, utilizando el metodo INCLUDE()</h1>
<h4>Esta parte es un archivo externo que muestra otra vista en una vista que muestra las categorias de la basse de datosd</h4>
<ul>
        <h4>Categorias</h4>
        @foreach ($categorias as $categoria)
        {{-- de esta m,anera se lista ordenadamente y automaticamente se enumera --}}
        <li>
            {{$categoria->nombre}}
        </li>
        @endforeach
    </ul>