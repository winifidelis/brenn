<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Sliderprincipal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderprincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administracao.sliderLista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracao.sliderCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $validacao = Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'imagem' => ['required'],
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ], [
            'nome' => "Nome",
            'imagem' => "Imagem",
        ]);
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $slider = new Sliderprincipal();
        $arquivoNome = date('dmyhisu');

        try {
            if ($request->hasfile('imagem')) {
                $file = $request->file('imagem');
                $nomeParaGravar = $arquivoNome.strtolower($file->getClientOriginalName());
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
                        'slider/',
                        $file,
                        $nomeParaGravar
                    );
                    Log::gravarLog('Enviou uma imagem: ' . $nomeParaGravar, 'SliderprincipalController', '$path = Storage::putFileAs();');
                }
            }

            $sliders = Sliderprincipal::all();

            $slider['nome'] = $data['nome'];
            $slider['imagem'] = $nomeParaGravar;
            $slider['ordem'] = count($sliders) + 1;
            $slider->save();

            Log::gravarLog('Cadastrou slider: ' . $slider['nome'] . ', id: ' . $slider->id, 'SliderprincipalController', '$slider->save();');
            return redirect()->route('slider.index')->with('toastSuccess', 'Slider cadastrado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO cadastrar slider: ' . $th->getMessage(), 'SliderprincipalController', '$promocao->save();');
            return redirect()->route('slider.index')->with('toastErro', 'Erro ao cadastrar slider!');
        }
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
    public function excluirSlider($id)
    {
        $slider = Sliderprincipal::find($id);
        Storage::disk('disk_makro')->delete('slider/' . strtolower($slider->imagem));
        Log::gravarLog('Storage::delete - ' . strtolower($slider->imagem), 'SliderprincipalController', '$path = Storage::delete();');

        $slider->delete();
        Log::gravarLog('Excluiu slider: ' . $id, 'SliderprincipalController', '$slider->delete();');
        

        //refazer os numeros dos sliders
        $sliders = Sliderprincipal::orderBy('ordem')->get();
        for ($i=0; $i < sizeof($sliders); $i++) { 
            $slider = $sliders[$i];
            $slider['ordem'] = $i+1;
            $slider->update();
        }

        return redirect()->route('slider.index')->with('toastSuccess', 'Slider excluído com sucesso!');
    }

    public function ordemUP($id)
    {
        $slider = Sliderprincipal::find($id);

        //verifico se é o primeiro
        if ($slider->ordem == 1) {
            return redirect()->route('slider.index')->with('toastSuccess', 'Não é possível modificar o slider');
        }


        $sliderProximo = Sliderprincipal::select()->where('ordem', '=', $slider['ordem'] - 1)->first();
        $n = $slider['ordem'];
        $slider['ordem'] = $sliderProximo['ordem'];
        $sliderProximo['ordem'] = $n;
        $sliderProximo->update();
        $slider->update();
        return redirect()->route('slider.index')->with('toastSuccess', 'Ordem modificada');
    }
    public function ordemDOWN($id)
    {
        $slider = Sliderprincipal::find($id);
        $sliders = Sliderprincipal::all();

        //verifico se é o último
        if ($slider->ordem == count($sliders)) {
            return redirect()->route('slider.index')->with('toastSuccess', 'Não é possível modificar o slider');
        }


        $sliderProximo = Sliderprincipal::select()->where('ordem', '=', $slider['ordem'] + 1)->first();
        $n = $slider['ordem'];
        $slider['ordem'] = $sliderProximo['ordem'];
        $sliderProximo['ordem'] = $n;
        $sliderProximo->update();
        $slider->update();
        return redirect()->route('slider.index')->with('toastSuccess', 'Ordem modificada');
    }

    public function listasecoes_modal(Request $request)
    {
        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        $user = Auth::user();

        // Total records
        $totalRecords = Sliderprincipal::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = Sliderprincipal::select('count(*) as allcount')
            ->where('sliderprincipals.nome', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = Sliderprincipal::select('*')
            ->where('sliderprincipals.nome', 'like', '%' . $searchValue . '%')
            //->orderBy($columnName, $columnSortOrder)
            ->orderBy('ordem')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $nome = $record->nome;
            $imagem = $record->imagem;
            $ordem = $record->ordem;
            $imagem64 = base64_encode(Storage::disk('disk_makro')->get("slider/" . $record->imagem));

            $btnUp = "";
            $btnDown = "";
            if ($ordem != 1) {
                $btnUp = "<a href='" . route('slider.ordemUP', $id) . "' type='button' class='btn bg-info'><i class='nav-icon fas fa-arrow-up'></i></a>";
            }
            if (count($records) != $ordem) {
                $btnDown = "<a href='" . route('slider.ordemDOWN', $id) . "' type='button' class='btn bg-success'><i class='nav-icon fas fa-arrow-down'></i></a>";
            }

            //<a href='" . route('slider.ordemUP', $id) . "' type='button' class='btn bg-info'><i class='nav-icon fas fa-arrow-up'></i></a>
            //<a href='" . route('slider.ordemDOWN', $id) . "' type='button' class='btn bg-success'><i class='nav-icon fas fa-arrow-down'></i></a>


            $data_arr[] = array(

                "nome" => $nome,
                //"imagem" => $imagem,
                "imagem" => "<img src='data:image/jpg;base64, " . $imagem64 . "' style='width: 600px; height: 100px;'>",
                "acoes" => "
                " . "
                <center>
                <a href='" . route('slider.excluirSlider', $id) . "' type='button' class='btn bg-danger'>Excluir Slider</a>" .
                    $btnUp .
                    $btnDown .
                    "</center>
                "
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }
}
