<?php
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