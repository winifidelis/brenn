<?php

use Illuminate\Support\Facades\Route;

/*
Verb	    URI	                  Action	Route Name
GET  	    /artigos	              index	    artigos.index
GET	        /artigos/create	      create	artigos.create
POST	    /artigos	              store	    artigos.store
GET	        /artigos/{photo}	      show	    artigos.show
GET	        /artigos/{photo}/edit  edit	    artigos.edit
PUT/PATCH	/artigos/{photo}	      update	artigos.update
DELETE	    /artigos/{photo}	      destroy	admin.destroy
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\SiteLinksController::class, 'inicio'])->name('inicio');
Route::get('/produto', [App\Http\Controllers\SiteLinksController::class, 'produto'])->name('produto');
//Route::get('/inicio', [App\Http\Controllers\SiteLinksController::class, 'inicio'])->name('inicio');
//Route::get('/inicio', [App\Http\Controllers\SiteLinksController::class, 'inicio'])->name('inicio');

//Route::get('/quemsomos', [App\Http\Controllers\SiteLinksController::class, 'quemsomos'])->name('quemsomos');
//Route::get('/nossosservicos', [App\Http\Controllers\SiteLinksController::class, 'nossosservicos'])->name('nossosservicos');
//Route::get('/formardepagamento', [App\Http\Controllers\SiteLinksController::class, 'formardepagamento'])->name('formardepagamento');
//Route::get('/trocaedevolucao', [App\Http\Controllers\SiteLinksController::class, 'trocaedevolucao'])->name('trocaedevolucao');
//Route::get('/contato', [App\Http\Controllers\SiteLinksController::class, 'contato'])->name('contato');
//Route::get('/trabalheconosco', [App\Http\Controllers\SiteLinksController::class, 'trabalheconosco'])->name('trabalheconosco');
//Route::get('/engenharia', [App\Http\Controllers\SiteLinksController::class, 'engenharia'])->name('engenharia');
//Route::get('/projetos', [App\Http\Controllers\SiteLinksController::class, 'projetos'])->name('projetos');

//Route::get('verpartamento/{id}', [App\Http\Controllers\SiteLinksController::class, 'verpartamento'])->name('verpartamento');
//Route::get('showdepartamento/{id}', [App\Http\Controllers\SiteLinksController::class, 'showdepartamento'])->name('showdepartamento');
//Route::get('/produtosDepartamentoPagiando', [App\Http\Controllers\SiteLinksController::class, 'produtosDepartamentoPagiando'])->name('produtosDepartamentoPagiando');
//Route::get('/modificarlistagemproduto', [App\Http\Controllers\SiteLinksController::class, 'modificarlistagemproduto'])->name('modificarlistagemproduto');
//Route::get('setbuscaprodutos', [App\Http\Controllers\SiteLinksController::class, 'setbuscaprodutos'])->name('setbuscaprodutos');
//Route::get('buscaproduto', [App\Http\Controllers\SiteLinksController::class, 'buscaproduto'])->name('buscaproduto');
//Route::get('showproduto/{id}', [App\Http\Controllers\SiteLinksController::class, 'showproduto'])->name('showproduto');
//Route::get('showprodutoquick/{id}', [App\Http\Controllers\SiteLinksController::class, 'showprodutoquick'])->name('showprodutoquick');

//Route::get('showCarrinho', [App\Http\Controllers\SiteLinksController::class, 'showCarrinho'])->name('showCarrinho');
//Route::get('limparCarrinho', [App\Http\Controllers\SiteLinksController::class, 'limparCarrinho'])->name('limparCarrinho');
//Route::post('addItemNocarrinho', [App\Http\Controllers\SiteLinksController::class, 'addItemNocarrinho'])->name('addItemNocarrinho');
//Route::get('removerItemCarrinho/{id}', [App\Http\Controllers\SiteLinksController::class, 'removerItemCarrinho'])->name('removerItemCarrinho');
//Route::get('atualizaItensCarrinho', [App\Http\Controllers\SiteLinksController::class, 'atualizaItensCarrinho'])->name('atualizaItensCarrinho');
//Route::get('addItemNocarrinhoAjax', [App\Http\Controllers\SiteLinksController::class, 'addItemNocarrinhoAjax'])->name('addItemNocarrinhoAjax');
//Route::post('aceitarTermos', [App\Http\Controllers\SiteLinksController::class, 'aceitarTermos'])->name('aceitarTermos');

//Route::get('checkOut', [App\Http\Controllers\ComprausuarioController::class, 'checkOut'])->name('checkOut');

//as funções abaixo fazem modificações com ajax mesmo o user não logado
//Route::post('whatsappvendedores.mudarPosicao', [App\Http\Controllers\WhatsappvendedoresController::class, 'mudarPosicao'])->name('whatsappvendedores.mudarPosicao');
//Route::post('addEmailSubscribe', [App\Http\Controllers\EmailsubscribeController::class, 'addEmailSubscribe'])->name('addEmailSubscribe');

//Route::post('emailContatoSite', [App\Http\Controllers\EmailController::class, 'emailContatoSite'])->name('emailContatoSite');
//Route::post('emailTrabalheConosco', [App\Http\Controllers\EmailController::class, 'emailTrabalheConosco'])->name('emailTrabalheConosco');
//Route::post('emailProjetos', [App\Http\Controllers\EmailController::class, 'emailProjetos'])->name('emailProjetos');


Auth::routes();

Route::middleware(['auth'])->group(function () {

    //Route::get('user.dashuser', [App\Http\Controllers\SiteLinksController::class, 'dashuser'])->name('user.dashuser');
    //Route::get('user.dashuserpedidos', [App\Http\Controllers\SiteLinksController::class, 'dashuserpedidos'])->name('user.dashuserpedidos');
    //Route::get('user.dashusertrocarsenha', [App\Http\Controllers\SiteLinksController::class, 'dashusertrocarsenha'])->name('user.dashusertrocarsenha');
    //Route::get('user.dashusertrocardados', [App\Http\Controllers\SiteLinksController::class, 'dashusertrocardados'])->name('user.dashusertrocardados');


    //Route::put('atualizaSenha', [App\Http\Controllers\UserController::class, 'atualizaSenha'])->name('atualizaSenha');
    //Route::put('atualizarDados', [App\Http\Controllers\UserController::class, 'atualizarDados'])->name('atualizarDados');

    //Route::get('/dashbackend', [App\Http\Controllers\HomeController::class, 'dashbackend'])->name('dashbackend');

    //Route::resource('produto', App\Http\Controllers\ProdutoController::class);
    //Route::get('produto.enviarxmlprodutos', [App\Http\Controllers\ProdutoController::class, 'enviarxmlprodutos'])->name('produto.enviarxmlprodutos');
    //Route::post('produto.processarArquivoXML', [App\Http\Controllers\ProdutoController::class, 'processarArquivoXML'])->name('produto.processarArquivoXML');
    //Route::get('produto.enviarImagensProdutos', [App\Http\Controllers\ProdutoController::class, 'enviarImagensProdutos'])->name('produto.enviarImagensProdutos');
    //Route::post('produto.gravarImagens', [App\Http\Controllers\ProdutoController::class, 'gravarImagens'])->name('produto.gravarImagens');
    //Route::get('produto.produtosGetPorCodigo_modal', [App\Http\Controllers\ProdutoController::class, 'produtosGetPorCodigo_modal'])->name('produto.produtosGetPorCodigo_modal');

    //Route::resource('whatsappvendedores', App\Http\Controllers\WhatsappvendedoresController::class);
    //Route::get('whatsappvendedores.listawhatsappvendedoeres_modal', [App\Http\Controllers\WhatsappvendedoresController::class, 'listawhatsappvendedoeres_modal'])->name('whatsappvendedores.listawhatsappvendedoeres_modal');
    //Route::put('whatsappvendedores.bloquear', [App\Http\Controllers\WhatsappvendedoresController::class, 'bloquear'])->name('whatsappvendedores.bloquear');
    //Route::put('whatsappvendedores.desbloquear', [App\Http\Controllers\WhatsappvendedoresController::class, 'desbloquear'])->name('whatsappvendedores.desbloquear');

    //Route::resource('departamentoproduto', App\Http\Controllers\ProdutoDepartamentoController::class);
    //Route::get('departamentoproduto.listadepartamentos_modal', [App\Http\Controllers\ProdutoDepartamentoController::class, 'listadepartamentos_modal'])->name('departamentoproduto.listadepartamentos_modal');

    //Route::resource('promocoes', App\Http\Controllers\PromocoesController::class);
    //Route::get('promocoes.promocoes_modal', [App\Http\Controllers\PromocoesController::class, 'promocoes_modal'])->name('promocoes.promocoes_modal');

    //Route::resource('slider', App\Http\Controllers\SliderprincipalController::class);
    //Route::get('slider.listasecoes_modal', [App\Http\Controllers\SliderprincipalController::class, 'listasecoes_modal'])->name('slider.listasecoes_modal');
    //Route::get('slider.excluirSlider/{id}', [App\Http\Controllers\SliderprincipalController::class, 'excluirSlider'])->name('slider.excluirSlider');
    //Route::get('slider.ordemUP/{id}', [App\Http\Controllers\SliderprincipalController::class, 'ordemUP'])->name('slider.ordemUP');
    //Route::get('slider.ordemDOWN/{id}', [App\Http\Controllers\SliderprincipalController::class, 'ordemDOWN'])->name('slider.ordemDOWN');

    //Route::resource('maisvendidos', App\Http\Controllers\MaisvendidosController::class);
    //Route::put('maisvendidos.criarProdutoMaisVendido', [App\Http\Controllers\MaisvendidosController::class, 'criarProdutoMaisVendido'])->name('maisvendidos.criarProdutoMaisVendido');

    //Route::resource('popupprincipal', App\Http\Controllers\PopupPrincipalController::class);

    //Route::resource('tribanner', App\Http\Controllers\TribannerController::class);

    //Route::resource('aliasbusca', App\Http\Controllers\AliasbuscaController::class);
    //Route::get('aliasbusca.listaaliasBusca_modal', [App\Http\Controllers\AliasbuscaController::class, 'listaaliasBusca_modal'])->name('aliasbusca.listaaliasBusca_modal');

    //Route::resource('usuarios', App\Http\Controllers\UserController::class);
    //Route::get('usuarios.listausuarios_modal', [App\Http\Controllers\UserController::class, 'listausuarios_modal'])->name('usuarios.listausuarios_modal');
    //Route::get('usuarios.emailsinscritos', [App\Http\Controllers\UserController::class, 'emailsinscritos'])->name('usuarios.emailsinscritos');
    //Route::get('usuarios.listausuariosemail_modal', [App\Http\Controllers\UserController::class, 'listausuariosemail_modal'])->name('usuarios.listausuariosemail_modal');
    //Route::put('usuarios.atualizarDadosDeAcesso/{id}', [App\Http\Controllers\UserController::class, 'atualizarDadosDeAcesso'])->name('usuarios.atualizarDadosDeAcesso');
});
