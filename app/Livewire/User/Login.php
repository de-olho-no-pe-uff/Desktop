<?php

namespace App\Livewire\User;


use Firebase\JWT\JWT;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Livewire\Component;


class Login extends Component
{

    public $email;
    public $password;


    public function login(Request $request)
    {

        try {
            // Inicio da autenticação
            $auth = app('firebase.auth');

            // Realiza o login com email e senha passados pela view
            $signInResult = $auth->signInWithEmailAndPassword($this->email, $this->password);

            // Obtém o token
            $idToken = $signInResult->idToken();

            // Verifica o token com o método do Firebase
            $verifiedIdToken = $auth->verifyIdToken($idToken, false, 180);

            // Identifica o usuário
            $uid = $verifiedIdToken->claims()->get('sub');

            // Coleta informações do usuário no firebase
            $user = $auth->getUser($uid);

            // Salva informações do usuário na sessão
            session(['user' => $user]);

            // Redireciona para a dashboard
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            session()->flash('error', 'Erro ao fazer login: ' . $e->getMessage());
            return back();
        }
    }

    public function render()
    {
        return view('livewire.user.login');
    }
}
