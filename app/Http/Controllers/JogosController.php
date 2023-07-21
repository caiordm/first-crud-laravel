<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class JogosController extends Controller
{
    public function index()
    {
        // dd('Ola, mundo');

        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();

        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];

        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy($id)
    {
        Jogo::where('id', $id)->delete();
        return redirect()->route('jogos-index');
    }

    public function search(Request $request)
    {
        // dd($request);

        $jogos = Jogo::where('nome', 'LIKE', '%' . $request->text . '%')
            ->orWhere('categoria', 'LIKE', '%' . $request->text . '%')
            ->orWhere('id', 'LIKE', '%' . $request->text . '%')
            ->orWhere('ano_criacao', 'LIKE', '%' . $request->text . '%')
            ->paginate(10);

            return view('jogos.index', ['jogos' => $jogos]);
    }
}
