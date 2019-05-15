<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produtos = Produtos::paginate(6);
        $maiscaro = Produtos::all()->max('preco');
        $maisbarato = Produtos::all()->min('preco');
        $media = Produtos::all()->avg('preco');

        return view('produtos.index', array('produtos' => $produtos, 
                                            'buscar' => null, 
                                            'ordem' => null,
                                            'maiscaro' => $maiscaro,
                                            'maisbarato' => $maisbarato,
                                            'media' => $media
                                            )
                                        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::check()){
            return view('produtos.create');
        }else{
            return redirect('login');
        }
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
        $this->validate($request,[
            'sku' => 'required|unique:produtos|min:3',
            'titulo' => 'required|min:3',
            'descricao' => 'required|min:10',
            'preco' => 'required|numeric'
        ]);

        $produto = new Produtos();
        $produto->sku = $request->input('sku');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if ($produto->save()){
            return redirect('produtos/create')->with('success','Produtos Cadastrado com Sucesso!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produtos)
    {
        //
        $produto = Produtos::with('mostrarComentarios')->find($id);
        return view('produtos.show', array('produto' => $produto));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        //
        if(Auth::check()){
            $produto = Produtos::find($id);
            return view('produtos.edit', compact('produto','id'));
        }else{
            return redirect('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produtos)
    {
        //
        $produto = Produtos::find($id);

        $this->validate($request,[
            'sku' => 'required|min:3',
            'titulo' => 'required|min:3',
            'descricao' => 'required|min:10',
            'preco' => 'required|numeric'
        ]);

        if($request->hasFile('imgproduto')){
            $imagem = $request->file('imgproduto');
            $nomearquivo = md5($id).".".$imagem->getClientOriginalExtension();
            $request->file('imgproduto')->move(public_path('img/produtos/'),
                $nomearquivo);
        }

        $produto->sku = $request->get('sku');
        $produto->titulo = $request->get('titulo');
        $produto->descricao = $request->get('descricao');
        $produto->preco = $request->get('preco');

        if ($produto->save()){
            return redirect('produtos/'.$id.'/edit')->with('success','Produtos Atualizado com Sucesso!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produtos)
    {
        //
        $produto = Produtos::find($id);
        $produto->delete();
        if (file_exists("./img/produtos/".md5($id)."jpg")){
            unlink("./img/produtos/".md5($id)."jpg");
        }
        return redirect()->back()->with('success','Produto Deletado com Sucesso!!!');
    }

    public function busca(request $request){
        $buscaInput = $request->input('busca');
        $produtos = Produtos::where('titulo','LIKE','%'.$buscaInput.'%')
                            ->orwhere('titulo','LIKE','%'.$buscaInput.'%')
                            ->paginate(2);
        return view('produtos.index', array('produtos' => $produtos, 'buscar' => $buscaInput, 'ordem' => null));                           
    }

    public function ordem(Request $request){
        $ordemInput = $request->input('ordem');
        if($ordemInput == 1){
            $campo = 'titulo';
            $tipo = 'asc'; 
        }Else If($ordemInput == 2){
            $campo = 'titulo';
            $tipo = 'desc';
        }Else If($ordemInput == 3){
            $campo = 'preco';
            $tipo = 'desc';
        }Else If($ordemInput == 4){
            $campo = 'preco';
            $tipo = 'asc';
        };
        $produtos = Produtos::orderBy($campo,$tipo)->paginate(2);
        return view('produtos.index', array('produtos' => $produtos, 'buscar' => null, 'ordem' => $ordemInput));                           
    }                        
}
