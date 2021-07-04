<?php

namespace App\Http\Controllers;

class Author extends Controller
{

    public function Index(){
       
   
        return view('index');

    }

    public function Author(){
        
         $name = '';
         $familyname = '';
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
           
           $name = strtoupper(array_shift($authors));
      
         } 
         if(count($authors)  === 2){
          $firstname = strtolower(array_shift($authors));
          $lastname = strtoupper(array_pop($authors));
          $name =  $lastname . ' , '. ucfirst($firstname); 
     
        } 

         
         if(count($authors) >= 3){
          
            $lastname = strtoupper(array_pop($authors));
            $middlename  = strtoupper(end($authors)) ;
            $firstname = strtolower(array_shift($authors));
            
            if($lastname === "FILHO"      || 
               $lastname  === "FILHA"     || 
               $lastname  === "NETO"      || 
               $lastname  === "NETA"      || 
               $lastname  === "SOBRINHO"  || 
               $lastname === "SOBRINHA"   || 
               $lastname  === "JUNIOR")
            {
              
              $familyname = $middlename  .' '. $lastname . ' , '. ucfirst($firstname); 
              
            }else{
              //dd($name, $familyname);
              $name =  $lastname . ' , '. ucfirst($firstname); 
              
            }
            
            
         }
                 
         //dd($name, $familyname);
 
         $names = [$name , $familyname ,];         
         return view('index' , compact('names'));
              

    }




}