<?php

namespace App\Http\Controllers;

use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();

        return view('listagem')->with(['enderecos' => $enderecos]);
    }

    public function adicionar()
    {
        return view('busca');
    }

    public function buscar(Request $request)
    {
        $cep = $request->input('cep');
        $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();

        return view('adicionar')->with([
            'cep' => $response['cep'],
            'bairro' => $response['bairro'],
            'cidade' => $response['localidade'],
            'estado' => $response['uf'],
            'logradouro' => $response['logradouro'],
        ]);
    }

    public function salvar(SalvarRequest $request)
    {
        $endereco = Endereco::where('cep', $request->input('cep'))->first();

        if (!$endereco) {

            Endereco::create([
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'bairro' => $request->input('bairro'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado'),
                'numero' => $request->input('numero'),
            ]);

            return redirect('/')->withSucesso('Endreço salvo com sucesso');


        };



        return redirect('/')->withErro('Já está cadastrado');
    }
}
