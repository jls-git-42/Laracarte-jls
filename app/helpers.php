<?php

use Illuminate\Support\Facades\Route;

/**
 * fonction qui gere le titre des pages
 */
if(!function_exists('Page_Title')){

    function Page_Title(?string $Title=null):string{

        if($Title === null){
            return config('app.name');
        }else{
            return $Title . ' | ' .config('app.name');
        }    
    }
 }

 /**
 * fonction qui alloue dynamiquement la classe Bootstrap 'Active' a l'element du menu Actif
 */
if(!function_exists('Set_Active_Route')){

    function Set_Active_Route($route){
            return Route::is($route) ? "active" : "";
        }    
}
