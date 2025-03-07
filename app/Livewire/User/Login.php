<?php

namespace App\Livewire\User;


use Firebase\JWT\JWT;
use GuzzleHttp\Client;
use Kreait\Firebase\Auth;
use Livewire\Component;


class Login extends Component
{

    public $email;
    public $password;


    public function login()
    {
        // Inicio da autenticação
        $auth = app('firebase.auth');

        // Realiza o login com email e senha passados pela view
        $signInResult = $auth->signInWithEmailAndPassword($this->email, $this->password);


        // Obtém o token
        $idToken = $signInResult->idToken();


        // Verifica o token com o método do Firebase
        $verifiedIdToken = $auth->verifyIdToken($idToken,false,180);

        $uid = $verifiedIdToken->claims()->get('sub');

        
        $user = $auth->getUser($uid);
        
        dd($user);
        

    }




    public function render()
    {
        return view('livewire.user.login');
    }
}
