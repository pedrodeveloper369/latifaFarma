<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ConfProdutoController;
use App\Http\Controllers\ConfiguracaoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(!Auth::check() == true) {
        return view('auth.login');
    }
    return redirect()->route('home');
});


Route::middleware('auth','verified')->group(function () {
    // rotas home
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    // rotas venda
    Route::get('/nova-venda', [VendaController::class, 'nova_venda'])->name('nova_venda');
    Route::get('/vendas-realizadas', [VendaController::class, 'vendas'])->name('vendas');
    Route::get('/historico-de-venda', [VendaController::class, 'historico'])->name('historico_venda');
    Route::post('/salvar-venda', [VendaController::class, 'salvar_venda'])->name('salvar_venda');
    Route::post('/editar-venda', [VendaController::class, 'editar_venda'])->name('editar_venda');

    // rotas relatorio
    Route::get('/relatorio-de-vendas', [RelatorioController::class, 'relatorio_vendas'])->name('rel_venda');
    Route::get('/relatorio-financeiro', [RelatorioController::class, 'relatorio_financeiro'])->name('rel_financeiro');
    Route::get('/relatorio-de-stock', [RelatorioController::class, 'relatorio_stock'])->name('rel_stock');

    // rotas produto
    Route::get('/novo-produto', [ProdutoController::class, 'novo_produto'])->name('novo_produto');
    Route::get('/listagem-de-produtos', [ProdutoController::class, 'listagem'])->name('listagem_produto');
    Route::get('/produtos-exgotados', [ProdutoController::class, 'exgotados'])->name('exgotado');
    Route::get('/produtos-expirados', [ProdutoController::class, 'expirados'])->name('expirado');
    Route::get('/validade-dos-produtos', [ProdutoController::class, 'validade'])->name('validade');
    Route::get('/movimentacao-de-stock', [ProdutoController::class, 'movimentacao'])->name('movimentacao_stock');
    Route::post('/salvar-produto', [ProdutoController::class, 'salvar_produto'])->name('salvar_produto');
    Route::post('/editar-produto', [ProdutoController::class, 'editar_produto'])->name('editar_produto');
    Route::get('/eliminar-produto/{$produto}', [ProdutoController::class, 'eliminar_produto'])->name('eliminar_produto');

    // rotas configuracao produto
    Route::get('/categoria', [ConfProdutoController::class, 'categoria'])->name('categoria');
    Route::get('/modo-de-pagamento', [ConfProdutoController::class, 'modo_pagamento'])->name('modo_pagamento');
    Route::post('/salvar-categoria', [ConfProdutoController::class, 'salvar_categoria'])->name('salvar_categoria');
    Route::post('/editar-categoria', [ConfProdutoController::class, 'editar_categoria'])->name('editar_categoria');
    Route::get('/eliminar-categoria/{$categoria}', [ConfProdutoController::class, 'eliminar_categoria'])->name('eliminar_categoria');
    Route::post('/salvar-modo-de-pagamento', [ConfProdutoController::class, 'salvar_modo_pagamento'])->name('salvar_modo_pagamento');
    Route::post('/editar-modo-de-pagamento', [ConfProdutoController::class, 'editar_modo_pagamento'])->name('editar_modo_pagamento');
    Route::get('/eliminar-modo-de-pagamento/{$modo}', [ConfProdutoController::class, 'eliminar_modo_pagamento'])->name('eliminar_modo_pagamento');

    // rotas configuracao
    Route::get('/utilizadores', [ConfiguracaoController::class, 'utilizadores'])->name('users');
    Route::get('/dados-da-empresa', [ConfiguracaoController::class, 'dados_empresa'])->name('empresa');
    Route::post('/salvar-utilizador', [ConfiguracaoController::class, 'salvar_utilizador'])->name('salvar_utilizador');
    Route::post('/editar-utilizador', [ConfiguracaoController::class, 'editar_utilizador'])->name('editar_utilizador');
    Route::get('/eliminar-utilizador/{$utilizador}', [ConfiguracaoController::class, 'eliminar_utilizador'])->name('eliminar_utilizador');
    Route::post('/salvar-empresa', [ConfiguracaoController::class, 'salvar_empresa'])->name('salvar_empresa');
    Route::post('/editar-empresa', [ConfiguracaoController::class, 'editar_empresa'])->name('editar_empresa');
    Route::get('/perfil', [ConfiguracaoController::class, 'meu_perfil'])->name('perfil');
    Route::get('/configuracao', [ConfiguracaoController::class, 'minha_configuracao'])->name('configuracao');
    Route::post('/editar-perfil', [ConfiguracaoController::class, 'editar_meu_perfil'])->name('editar_perfil');
    Route::post('/editar-configuracao', [ConfiguracaoController::class, 'editar_minha_configuracao'])->name('editar_configuracao');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
