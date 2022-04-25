<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Issue extends Model
{
    protected $table = 'issues';
    protected $fillable=['title','description','author','classroom'];
    use HasFactory;

    public function obtenerIncidencias()
    {
        return Issue::all();
    }


    public function obtenerIncidencia($id)
    {
        return Issue::find($id);
    }
}
