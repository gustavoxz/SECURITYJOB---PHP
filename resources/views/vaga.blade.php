<html>
<head>
    <title>

    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/index.css">
</head>

<body>  
    <div class="logo">
        <img src="imagens/logo.png" />
    </div>
    @if($vaga)

    <div class="container">
        <div class="row">  
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo">
                            <h1>Vaga - {{$vaga['tipo']}}</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="conteudo3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <table>
                                            <tr>
                                                <td>
                                                    Salário:
                                                    R$ {{$vaga['remuneracao']}}
                                                </td>
                                            </tr>

                                            <tr>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Local:
                                                    {{$vaga['local']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Descrição:</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                   <p>
                                                        Descrição:
                                                        {{$vaga['descricao']}}
                                                   </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                        Contato:
                                                        {{$vaga['contato']}}
                                                </td>
                                            </tr>

                                            

                                            <tr>
                                                <td>
                                                    <a href="/ofertas" class="btn btn-info">Voltar</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-4">
                                                    
                                                    <p class="termometro">
                                                        @if(intval($vaga['nota']) > 5)
                                                        <a class="btn btn-success">Confiável</a>

                                                        @elseif($vaga['nota'] > 4)
                                                        <a class="btn btn-warning">Arriscado</a>

                                                        @else()
                                                        <a class="btn btn-danger">Perigo</a>
                                                        @endif
                                                        
                                                            {{$vaga['nota']}}/10
                                                        </p>

                                                    <div class="avaliacao">
                                                        <h2>Avaliação</h2>
                                                        <ul class="list-group" style="width:80%;">
                                                            <li class="list-group-item list-group-item-danger">
                                                                Salario fora do normal
                                                            </li>

                                                            <li class="list-group-item list-group-item-danger">
                                                                Lugar desconhecido
                                                            </li>

                                                            <li class="list-group-item list-group-item-danger">
                                                                Empresa desconhecida
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>

                                                    <div class="curso">
                                                        <h2>Curso</h2>
                                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cursos para a vaga</button>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
    </div>



    @endif

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Cursos                @if($vaga)
                    @if($vaga['tipo'] == 'pedreiro')  para {{$vaga['tipo']}} @endif @endif</h4>
            </div>
            <div class="modal-body">
                @if($vaga)
                    @if($vaga['tipo'] == 'pedreiro')
                    <p>Separamos alguns cursos para você se preparar ou aprender as qualificações para a vaga de {{$vaga['tipo']}}!</p>
                    <div class="cursos">
                            <div class="item">
                                  <img src="imagens/pedreiro1.png">
                            </div>
          
                            <div class="item">
                                  <img src="imagens/pedreiro2.png">
                            </div>
          
                            <div class="item">
                                  <img src="imagens/pedreiro3.png">
                            </div>
          
                            <div class="item">
                                  <img src="imagens/pedreiro4.png">
                            </div>
                        </div>
                    @elseif($vaga['tipo'] == 'manicure')

                    @else
                        <p>Não encontramos nenhum curso relacionado com  {{$vaga['tipo']}}, caso queira entrar em contato não hesite em mandar um e-mail para: contato@trabalhoseguro.com.br !</p>                    
                    @endif
                @endif
            </div>
              <div class="clear"></div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
          </div>
      
        </div>
      </div>

      <input type="text" placeholder="Ola!" id="mensagem"> <p class="nelsonn" onclick="enviarMensagem()">Enviar</p>

      <div class="bot" id="myList">
          @if(intval($vaga['nota']) > 5)
            <p >Assistente virtual: <span class="fraco">Ei amigo, esta vaga parece ser confiável !!! Mesmo assim fique sempre atento<span></p>            
            @else()
            <p >Assistente virtual: <span class="fraco">Ei amigo, essa vaga não é uma vaga muito confiável, fique atento aos detalhes mostrados para esse emprego !!!<span></p>
            @endif
            <script src="js/bot.js"></script>

            
</body>
</html>