<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use Barryvdh\DomPDF\Facade as PDF;

class issueController extends Controller
{
    protected $issues;
    public function __construct(Issue $issues)
    {
        $this->issues = $issues;
    }

    public function index()
    {
        $issues = $this->issues->obtenerIncidencias();
        return view('components.issues', ['issues' => $issues]);
    }

    public function admin()
    {
        $issues = $this->issues->obtenerIncidencias();
        return view('components.admin-issue', ['issues' => $issues]);
    }

    public function create()
    {
        return view('components.issue-create');
    }
    public function store(Request $request)
    {
        $issue = new Issue();
        $issue->title = $request->isbn;
        $issue->description = $request->titulo;
        $issue->author = $request->autor;
        $issue->classroom = $request->idioma;

        $issue->save();
        return redirect("/incidencias");
    }

    public function show($id)
    {
        $issue = $this->issues->obtenerIncidencia($id);
        return view('components.issue', ['issue' => $issue]);
    }

    public function edit($id)
    {
        $issue = $this->issues->obtenerIncidencia($id);
        return view('components.editar', ['issue' => $issue]);
    }
    public function update(Request $request, $id)
    {
        $issue = $this->issues->obtenerIncidencia($id);
        $issue->fill($request->all());
        $issue->save();
        return redirect("/incidencias");
    }

    public function destroy($id)
    {
        $issue = Issue::find($id);
        $issue->delete();
        return redirect("/incidencias");
    }

    //     public function librosPDF(){
    //         $datos =[
    //             "libros"=>Issue::all()
    //         ];
    //         $pdf = PDF::loadView('components.librosPDF', $datos);

    //         return $pdf->download('libros.pdf');
    //     }

    //     public function libroPDF($id){
    //         $libro =[
    //             "libro"=>Issue::find($id)
    //         ];
    //         $pdf = PDF::loadView('components.libroPDF', $libro);

    //         return $pdf->download('libro.pdf');
    //     }
}
