<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;
use App\Models\aluno;

class SiteController extends Controller
{
    private $cursos;
    private $alunos;
    public function __construct(aluno $aluno, curso $curso) {
        $this->alunos = $aluno;
        $this->cursos = $curso;
    }

    public function index()
    {
        $alunos = $this->alunos->all();
        $cursos = $this->cursos->all();
        return view('site.index', compact('cursos', 'alunos'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
