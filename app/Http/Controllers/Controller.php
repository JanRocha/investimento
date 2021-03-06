<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        $variavel ="HomePage do sistema de grupo de investimento";
       return view("welcome",['title'=>$variavel]);
    }
    public function cadastrar(){
        echo "cadastrando";
     }
    /*
        Metodo para fazer do usuario
    */
     public function fazerLogin(){
        return view('user.login');     
     }
}
