<?php
if(!function_exists("page_title")) {
    # cette function recevra un string en parametre et se string peux etre null ou non le ? est mis pour dire que cest optionel que le string peux etre null
    function page_title(?string $title=null):string{
         if($title===null){
              return config('app.name');
         }
         else{
            return $title . ' | ' . config('app.name');
         }
         /*or use directly
         if(!function_exists("page_title")) {
              function page_title(?string $title=null):string{
               //utilisation de ternaire 
                si title nest pas null // return $title ? 
                retourne le titre plus le pipe  plus le nom de lappli  $title . ' | '. config(app.name) 
                sinon retourne le nom de appli
                : config('app.name');
              }
         
         */


    }
}
