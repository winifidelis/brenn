<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\PopupPrincipal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PopupPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popupPrincipal = Popupprincipal::first();
        return view('administracao.popupPrincipalEdit', compact('popupPrincipal'));
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
        $data = $request->all();
        $popup = PopupPrincipal::find($id);

        try {
            if ($request->hasfile('imagem')) {
                $file = $request->file('imagem');
                $nomeParaGravar = $file->getClientOriginalName();
                $extension = $file->extension();
                if (
                    $extension == "gif" ||
                    $extension == "png" ||
                    $extension == "bmp" ||
                    $extension == "tiff" ||
                    $extension == "sgv" ||
                    $extension == "jpg" ||
                    $extension == "jpeg"
                ) {
                    $path = Storage::disk('disk_makro')->putFileAs(
                        'imagempopup/',
                        $file,
                        $nomeParaGravar
                    );
                    $popup['imagem'] = $nomeParaGravar;
                    Log::gravarLog('Enviou uma imagem: ' . $nomeParaGravar, 'PopupPrincipalController', 'update(Request $request, $id)');
                }
            }
            
            $popup['ativo'] = $data['ativo'];
            $popup->update();

            Log::gravarLog('Atualizou o popup. ativo: ' . $popup->ativo . ', id: ' . $popup->id, 'PopupPrincipalController', '$popup->update();');
            return redirect()->route('popupprincipal.index')->with('toastSuccess', 'Popup atualizado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao atualizar o popup ativo: ' . $popup->ativo . ', id: ' . $popup->id . '. Motivo: ' . $th, 'PopupPrincipalController', '$popup->update();');
            return redirect()->route('popupprincipal.index')->with('toastErro', 'Erro ao atualizar o popup!');
        }
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
