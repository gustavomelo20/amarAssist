<?php

namespace App\Http\Controllers;

class Author extends Controller
{

    public function Index(){
       
   
        return view('index');

    }

    public function Author(){
        
         $name1 = '';
         $name2 = '';
         $author = $_POST['name'];
         $authors = explode(" " ,  $author);
         
         foreach($authors as $key => $link) 
         { 
           if($link == "da"  || $link == "de"  || 
              $link == "de"  || $link == "do"  || 
              $link == "das" || $link == "dos") 
               { 
                 unset($authors[$key]); 
               }
         
         }  


         if(count($authors)  === 1){
           
           $name1 = strtoupper(array_shift($authors));
      
         } 

         
         if(count($authors) >= 2){
          
            $ultimo = strtoupper(array_pop($authors));
            $penultimo = strtoupper(end($authors)) ;
            $primeiro = strtolower(array_shift($authors));
            
            if($ultimo  === "FILHO"     || 
               $ultimo  === "FILHA"     || 
               $ultimo  === "NETO"      || 
               $ultimo  === "NETA"      || 
               $ultimo  === "SOBRINHO"  || 
               $ultimo  === "SOBRINHA"  || 
               $ultimo  === "JUNIOR")
            {
              
              $name2 = $penultimo .' '. $ultimo . ' , '. ucfirst($primeiro); 
              
            }else{

              $name2 =  $ultimo . ' , '. ucfirst($primeiro); 
              
            }
            //dd($name2, $name1);
            
         }
                 
   
         //  dd($name2, $name1);
         $names = [$name1 , $name2 ,];         
         return view('index' , compact('names'));
              

    }




}