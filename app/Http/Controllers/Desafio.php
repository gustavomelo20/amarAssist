<?php

namespace App\Http\Controllers;

use PhpParser\Node\Expr\FuncCall;

class Desafio extends Controller
{

    public function Index(){
        
   
         return view('index');
         

    }

    public function Author(){
        
         $name = '';
         $familyname = '';
         $author = $_POST['nome'];
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

              $strNames = implode(" " , $names );
              return view('author', compact('strNames'));
                    

    }


          public function FindPhone(){
        
                $strs = strtoupper($_POST['phone']);
                $str = str_split ($strs);
                $phone = [];

                for($i = 0 ; $i < count($str); $i++){
                    
                    if($str[$i] == '1')
                            $phone[] = "1" ;
                            if($str[$i] == '0')
                            $phone[] ="0";
                            if($str[$i] == '-')
                            $phone[] = "-";
                            if($str[$i] == 'A'||$str[$i] == 'B' ||$str[$i] =='C')
                            $phone[] = "2";
                            if($str[$i] == 'D'||$str[$i] == 'E'||$str[$i] == 'F')
                            $phone[] = "3";
                            if($str[$i] == 'G'||$str[$i] == 'H'||$str[$i] == 'I')
                            $phone[] = "4";
                            if($str[$i] == 'J'||$str[$i] == 'K'||$str[$i] == 'L')
                            $phone[] = "5";
                            if($str[$i] == 'M'||$str[$i] == 'N'||$str[$i] == 'O')
                            $phone[] = "6";
                            if($str[$i] == 'P'||$str[$i] == 'Q'||$str[$i] == 'R'||$str[$i] == 'S')
                            $phone[] =  "7";
                            if($str[$i] == 'V'||$str[$i] == 'T'||$str[$i] == 'U')
                            $phone[] = "8";
                            if($str[$i] == 'W'||$str[$i] == 'X'||$str[$i] == 'Y'||$str[$i]== 'Z')
                            $phone[] = "9";
                               
                            
                            
                }

                //print_r($phone);
                $strPhone = implode(" " , $phone);

                return view('phone', compact('strPhone'));
          }
              public function phone(){
                $strPhone  = '';
                return view('phone', compact('strPhone'));
              }
              public function AuthorIndex(){
                $strNames = '';
                return view('author', compact('strNames'));
              }




}