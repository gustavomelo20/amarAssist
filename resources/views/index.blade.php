@extends('layouts.app')

@section('title', 'Desafio')


@section('content')
             
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                  <a href="{{ route('author-index')}}">
                    <h1 class="display-4">Dojo 1</h1>
                    </a>
                    <p class="lead">
                            
                  Quando se lista o nome de autores de livros, artigos e outras publicações é comum que se apresente o nome do autor ou dos autores da seguinte forma: sobrenome do autor em letras maiúsculas, seguido de uma vírgula e da primeira parte do nome apenas com as iniciais maiúsculas.<br>

                Por exemplo:<br>

                SILVA, Joao<br>
                COELHO, Paulo<br>
                ARAUJO, Celso de<br>
                Seu desafio é fazer um programa que leia um número inteiro correspondendo ao número de nomes que será fornecido, e, a seguir, leia estes nomes (que podem estar em qualquer tipo de letra) e imprima a versão formatada no estilo exemplificado acima.<br>

                As seguintes regras devem ser seguidas nesta formatação:<br>
                o sobrenome será igual a última parte do nome e deve ser apresentado em letras maiúsculas;<br>
                se houver apenas uma parte no nome, ela deve ser apresentada em letras maiúsculas (sem vírgula): se a entrada for “ Guimaraes” , a saída deve ser “ GUIMARAES”;<br>
                se a última parte do nome for igual a "FILHO", "FILHA", "NETO", "NETA", "SOBRINHO", "SOBRINHA" ou "JUNIOR" e houver duas ou mais partes antes, a penúltima parte fará parte do sobrenome. Assim: se a entrada for "Joao Silva Neto", a saída deve ser "SILVA NETO, Joao" ; se a entrada for "Joao Neto" , a saída deve ser "NETO, Joao";<br>
                as partes do nome que não fazem parte do sobrenome devem ser impressas com a inicial maiúscula e com as demais letras minúsculas;<br>
                "da", "de", "do", "das", "dos" não fazem parte do sobrenome e não iniciam por letra maiúscula.<br>
                            

                    </p>
                     <a class="btn btn-primary btn-lg" href="{{ route('author-index')}}" role="button">IR para o Desafio</a>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                  <a href="{{ route('phone-index')}}">
                    <h1 class="display-4">Dojo 2</h1>
                  </a>
                    <p class="lead">
                            
                Em alguns lugares é comum lembrar um número do telefone associando seus dígitos a letras. Dessa maneira a expressão MY LOVE significa 69 5683. Claro que existem alguns  problemas, uma vez que alguns números de telefone não formam uma palavra ou uma frase e os dígitos 1 e 0 não estão associados a nenhuma letra. Sua tarefa é ler uma expressão e encontrar o número de telefone correspondente baseado na tabela abaixo. Uma expressão é composta por letras maiúsculas (A­Z), hífens (­) e os números 1 e 0.<br>

                  A, B, C -> 2<br>

                  D, E, F -> 3<br>

                  G, H, I -> 4<br>

                  J, K, L -> 2<br>

                  M, N, O -> 6<br>

                  P, Q, R, S -> 7<br>

                  T, U, V -> 8<br>

                  W, X, Y, Z -> 9<br>

                  Entrada: A entrada consiste de um conjunto de expressões. Cada expressão está sozinha em uma linha e possui C caracteres, onde 1 ≤ C ≤ 30. A entrada é terminada por fim de arquivo (EOF).<br>

                  Saída: Para cada expressão você deve imprimir o número de telefone correspondente.<br>

                  Exemplo:<br>

                  1-HOME-SWEET-HOME<br>

                  1-4663-79338-4663<br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                    </p>
                     <a class="btn btn-primary btn-lg" href="{{ route('phone-index') }}" role="button">IR para o Desafio</a>
                  </div>
                </div>
            </div>
          
        </div>
      </div>


   
 @endsection