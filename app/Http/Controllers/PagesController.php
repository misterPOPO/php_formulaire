<?php
 
namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class PagesController extends Controller
{
    public function home()
    {
        
        echo "coucou ceci est un test";
        return view ('pages.home');
    }
}