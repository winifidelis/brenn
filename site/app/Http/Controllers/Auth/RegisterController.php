<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //ADICIONANDO DADOS APENAS PARA PASSAR PELO VALIDATOR
        if ($data['tipoPessoaSelecionada'] == 'fisica') {
            $data['cnpj'] = '21.582.693/0001-48';
        } else {
            $data['cpf'] = '631.044.663-00';
        }
        //dd($data);
        //*CPF ou CNPJ
        //*WhatsApp
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf' => ['required', 'string', 'max:14', 'unique:users', 'cpf'],
            'cnpj' => ['required', 'string', 'max:18', 'unique:users', 'cnpj'],
            //'whatsapp' => ['required', 'string', 'max:15', 'unique:users', 'celular_com_ddd'],
            'checkboxregulamento' => ['accepted'],
        ], [
            'required' => 'O campo :attribute é obrigatório.',
        ], [
            'checkboxregulamento' => "Li e concordo com a política de privacidade",
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['tipoPessoaSelecionada'] == 'fisica') {
            $data['cnpj'] = $data['cpf'];
            $data['tipoPessoaSelecionada'] = 'f';
        } else {
            $data['cpf'] = $data['cnpj'];
            $data['tipoPessoaSelecionada'] = 'j';
        }

        if (isset($data['checkboxemail']) && $data['checkboxemail'] == "on") {
            $data['checkboxemail'] = 1;
        } else {
            $data['checkboxemail'] = 0;
        }

        if (isset($data['checkboxwhatsapp']) && $data['checkboxwhatsapp'] == "on") {
            $data['checkboxwhatsapp'] = 1;
        } else {
            $data['checkboxwhatsapp'] = 0;
        }

        if (isset($data['checkboxregulamento']) && $data['checkboxregulamento'] == "on") {
            $data['checkboxregulamento'] = 1;
        } else {
            $data['checkboxregulamento'] = 0;
        }
        
        //dd($data);
        if(!isset($data['estado'])){
            $data['estado'] = null;
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => 'default.png',

            'tipopessoa' => $data['tipoPessoaSelecionada'],
            'cpf' => $data['cpf'],
            'cnpj' => $data['cnpj'],
            'telefone' => $data['telefone'],
            'whatsapp' => $data['whatsapp'],
            'cep' => $data['cep'],
            'endereco' => $data['endereco'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'bairro' => $data['bairro'],
            'rua' => $data['rua'],
            'complemento' => $data['complemento'],
            'checkboxemail' => $data['checkboxemail'],
            'checkboxwhatsapp' => $data['checkboxwhatsapp'],
            'checkboxregulamento' => $data['checkboxregulamento'],

            'programador' => false,
            'telabackend' => false,
            'enviarxml' => false,
            'enviarimagens' => false,
            'popupprincipal' => false,
            'promocoes' => false,
            'sliderprincipal' => false,
            'userdashboard' => false,
            'nomesdepartamentos' => false,
            'administrador' => false,
        ]);

        return $user;
    }

    //isso aqui me levará para o carrinho caso eu faça um login com o carrinho cheio
    protected function registered(Request $request, $user)
    {
        //$carrinho = $request->session()->get('carrinho');
        if(session()->get('carrinho')){
            return redirect()->route('showCarrinho');
        }
        return null;
    }
}
