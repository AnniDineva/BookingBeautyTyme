<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PageController extends Controller
{
    //
    public function store($page){
        if(isset($page)){
            if($page=='about'){
                return view('about');

            }elseif ($page=='contact') {
                return view('contact');

            }elseif ($page=='pricing') {
               return view('pricing');

            }elseif ($page=='service') {
                return view('service');

            }elseif ($page=='barbers') {
                return view('barbers');
            }else{
                return(view('main'));
            }
        }else{
           
            return(view('main'));
        }

    }
}
