<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;


class usersController extends Controller
{
    protected $users;
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->obtenerLibros();
        return view('components.listar', ['users' => $users]);
    }

    public function admin()
    {
        $users = $this->users->obtenerUsuarios();
        return view('components.admin-users', ['users' => $users]);
    }

    public function create()
    {
        return view('components.crear-libro');
    }
    public function store(Request $request)
    {
        $libro = new User();
        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->idioma = $request->idioma;
        $libro->publicacion = $request->publicacion;
        $libro->editorial = $request->editorial;

        $libro->save();
        return redirect("/libros");
    }

    public function show($id)
    {
        $libro = $this->libros->obtenerLibro($id);
        return view('components.ver-uno', ['libro' => $libro]);
    }

    public function edit($id)
    {
        $libro = $this->libros->obtenerLibro($id);
        return view('components.editar', ['libro' => $libro]);
    }
    public function update(Request $request, $id)
    {
        $libro = $this->libros->obtenerLibro($id);
        $libro->fill($request->all());
        $libro->save();
        return redirect("/libros");
    }

    public function destroy($id)
    {
        $libro = User::find($id);
        $libro->delete();
        return redirect("/libros");
    }

    // public function librosPDF(){
    //     $datos =[
    //         "libros"=>User::all()
    //     ];
    //     $pdf = PDF::loadView('components.librosPDF', $datos);

    //     return $pdf->download('libros.pdf');
    // }

    // public function libroPDF($id){
    //     $libro =[
    //         "libro"=>User::find($id)
    //     ];
    //     $pdf = PDF::loadView('components.libroPDF', $libro);

    //     return $pdf->download('libro.pdf');
    // }

}
