<?php

namespace App\Http\Controllers;

class Author extends Controller
{

    public function Index(){
        
         $names = []; 
         return view('index', ['names' => $names]);
         
         /*
          Estou pasando  $names dentro dessa rota:get , para evitar undefined, 
          request & response são feitos dentro da mesma view.
        */

       
    }

    public function Author(){
        
         $name = '';
         $familyname = '';
         $author = $_POST['name'];
         $authors = explode(" " ,  $author);
         
         /*
         unset "da", "de", "do", "das", "dos"
         */
         foreach($authors as $key => $link) 
         { 
           if($link == "da"  || $link == "de"  || 
              $link == "de"  || $link == "do"  || 
              $link == "das" || $link == "dos") 
               { 
                 unset($authors[$key]); 
               }
         
         }  

        /*
         input Guimaraes output GUIMARAES
        */
         if(count($authors)  === 1)
         {  
           $name = strtoupper(array_shift($authors));
         } 

         /*
         input Joao Neto output NETO, Joao
        */
         if(count($authors)  === 2)
         {
          $firstname = strtolower(array_shift($authors));
          $lastname = strtoupper(array_pop($authors));
          $name =  $lastname . ' , '. ucfirst($firstname); 
     
         } 

         /*
         input Joao Silva Neto output SILVA NETO, Joao
         */
         if(count($authors) >= 3)
          {
          
            $lastname = strtoupper(array_pop($authors));
            $middlename  = strtoupper(end($authors)) ;
            $firstname = strtolower(array_shift($authors));
            
            if($lastname  === "FILHO"      || 
               $lastname  === "FILHA"      || 
               $lastname  === "NETO"       || 
               $lastname  === "NETA"       || 
               $lastname  === "SOBRINHO"   || 
               $lastname  === "SOBRINHA"   || 
               $lastname  === "JUNIOR")
            {
              
              $familyname = $middlename  .' '. $lastname . ' , '. ucfirst($firstname); 
              
            }else{
              //dd($name, $familyname);
               /*
                input Gustavo goncalves melo output MELO , Gustavo
               */
              $name =  $lastname . ' , '. ucfirst($firstname); 
              
            }
            
            
         }
                 
         //dd($name, $familyname);
 
         $names = [$name , $familyname];   
              
         return view('index', compact('names'));
              

    }




}