<h1>Lista de categorias utilizando archivos externos de duiferentes vistas osea, utilizando el metodo INCLUDE()</h1>
<h4>Esta parte es un archivo externo que muestra otra vista en una vista que muestra las categorias de la basse de datosd</h4>

{{-- Si estamos enviando y recvibiendo uinformacion, necesitamos saber si de verdad estamos enviando la informacion, y eso se verifica con un @if (lo equivalente a un ngIf en Angular) --}}

{{-- Aqui se sabe si realmente hay informacion en la tabla, esto es mas para seguridad de informacion para nosotros y el cliente --}}
{{-- Inicio - @if --}}
@if (
    //aqui pondremos nuestro nombre de la tabla
    $categorias->isEmpty()
)
{{-- aqui nos mostrara el mensaje --}}
    <p>No hay categorias</p>
@else
<div>
        <ul>
                <h4>Categorias</h4>
                @foreach ($categorias as $categoria)
                {{-- de esta m,anera se lista ordenadamente y automaticamente se enumera --}}
                <li>
                    {{$categoria->nombre}}
                </li>
                @endforeach
            </ul>
        
</div>

@endif

