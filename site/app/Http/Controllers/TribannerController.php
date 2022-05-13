<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Tribanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TribannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tribanners = Tribanner::all();
        return view('administracao.tribannerEdit', compact('tribanners'));
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
        //dd($data);
        $id = $data['id_tribanner'];

        try {
            $nomeParaGravar = "";
            if ($request->hasfile('imagem' . $id)) {
                $file = $request->file('imagem' . $id);
                $nomeParaGravar = strtolower($file->getClientOriginalName());
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
                        'tribanner/',
                        $file,
                        $nomeParaGravar
                    );
                    Log::gravarLog('Enviou imagem tribanner: ' . $nomeParaGravar, 'TribannerController', 'update(Request $request, $id)');
                }
            }

            $tribanner = Tribanner::find($id);
            $tribanner['link'] = $data['link' . $id];
            $tribanner['linkexterno'] = $data['linkexterno'.$id];
            //Storage::disk('disk_makro')->delete('tribanner/' . $tribanner['imagem']);
            $tribanner['imagem'] = $nomeParaGravar;
            $tribanner->update();



            Log::gravarLog('Modificou tribanner: ' . $nomeParaGravar, 'TribannerController', 'update(Request $request, $id)');
            return redirect()->route('tribanner.index')->with('toastSuccess', 'Slider cadastrado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao enviar imagem tribanner: ', 'TribannerController', 'update(Request $request, $id)');
            return redirect()->route('tribanner.index')->with('toastErro', 'Erro ao cadastrar tribanner!');
        }

        dd($data, $id, $tribanner);
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
