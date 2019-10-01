<!DOCTYPE html>
    <html lang="en">
    <head>
        <metanombre charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Categorias</title>
    </head>
    <body>
        <div class="container">

             

            <div class="row">
                <h4>No olvidar descomentar para que funcione algunas variables</h4>
            </div>
            <div class="row">    --- ENVIO DE INFORMACION SIN U    --- ENVIO DE INFORMACION SIN UTILIZAR SECCION  --}}TILIZAR SECCION  --}}
                <!-- Se puede enviar datos del cntrolador hacia aqui(la vista) -->
            <div> Inicio - 1era forma - Enviando datos desde el controlador hacia la vista con interpolacion</div>
            <p>Hola <strong>{{--$nombre--}}</strong></p>
            <div> Fin - 1era forma - Enviando datos desde el controlador hacia la vista con interpolacion</div>
            </div>
            <br>
            <div class="row">
                    <!-- Se puede enviar datos del cntrolador hacia aqui(la vista) -->
                <div> Inicio - 2da forma - Enviando datos desde el controlador hacia la vista con interpolacion</div>
                <p>Hola <strong> {{--$variablenombre--}} {{--$variableapellido--}}                </strong></p>
                <div> Fin - 2da forma - Enviando datos desde el controlador hacia la vista con interpolacion</div>
                </div>
                <br>
                <div class="row">
                        <!-- Se puede enviar datos del cntrolador hacia aqui(la vista) -->
                    <div> Inicio - 3ra forma - Enviando datos desde el controlador hacia la vista con interpolacion</div>
                <p>Hola <strong> {{--$nombredeusuario--}}</strong></p>
                    <div> Fin - 3ra forma - Enviando datos desde el controlador hacia la vista con interpolacion</div>
                    </div>
            <div class="row">
                <h3>Ciclos parciales y Ciclos Foreach // Lo equivalente que seria en angular a ngFor</h3>
                {{--Inicio -  Esta es la interpretacion de ngFor para darproductos // Trabaja con ek controlador llamado CategoriasController en la funcion index--}}
                {{-- para obtener una lista ordenada utiklizamos etiqueta <ol> --}}
                @include('categorias.partes.lista')
                {{--Fin -  Esta es la interpretacion de ngFor para darproductos--}}
            </div>



        </div>
    </body>
    </html>