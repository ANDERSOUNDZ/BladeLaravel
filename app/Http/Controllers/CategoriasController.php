<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //inicio - retornar vista desde contorlador
            /*
            //retornar desde el controlador un archivo de vista , llamado blade con la funcion " view() "
            return view(
                //para poder ingresar se concatena con la carpeta que contiene el aecghivo
                'categorias.index'
            );
            */
        //Fin - retornar vista desde contorlador

        //inicio - 1era Forma - enviar datos a la vista con variable
        /*
            //creo una variable 
            $nombre = 'Anderson';
            //Asocio la variable a la ruta
            return  view('categorias.index',['nombre'=>$nombre]);
        */
        //Fin - 1era Forma  - enviar datos a la vista con variable

        //Inicio - 2da Forma - Enviar datos desde el controlador hacia la vista
        /*
        //Creo la variable
        $variablenombre = 'Miguel';
        //Creando Segunda variable
        $variableapellido = 'Chanchay';

        //retorno
        return view('categorias.index', 
            //utilizo el metodo "compact()"
            compact(
                //aqui podemos decirle que variable enviar
                'variablenombre','variableapellido'//este es el nombre de la variable/s que queremos enviar
            )
        );
        */
        //Fin - 2da Forma - Enviar datos desde el controlador hacia la vista

        //Inicio - 3ra forma de enviar datos desde el controlador hacia la vista
        /*
        //Creo la variable
        $nombre = 'Anderson';

        return view('categorias.index')->
        //con el metodo whit nosotros podemos enviar tambien variables e informacion a la s vistas, 
        with(
            //podemos poner cualquier nombre a la variable que se va a enviar a la vista:
            'nombredeusuario',$nombre);

        //Fin - 3ra forma de enviar datos desde el controlador hacia la vista
        */


        //Inicio - retornar informacion de la base de datos
            $categorias = Categoria::orderBy('nombre','asc')->get();
            return view('categorias.index', compact('categorias'));
        //Fin - retornar informacion de la base de datos

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
