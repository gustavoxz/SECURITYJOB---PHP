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

    <div class="container">
        <div class="row">  
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo">
                            <h1>Descrever vaga</h1>
                        </div>
                    </div>
                </div>

                <div class="row">




                    <div class="col-md-12">
                        <div class="conteudo">
                            <form method="POST" action="/descrever_vaga" class="form-group">
                                {{ csrf_field() }}

                                <table>
                                    <tr>
                                        <td>    
                                            <label for="cargo">
                                                    Cargo:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="tipo" id="tipo" class="form-control">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>    
                                            <label for="empresa">
                                                    Empresa:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="empresa" id="empresa" class="form-control">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>    
                                            <label for="contato">
                                                    Contato:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="contato" id="contato" class="form-control">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label for="remuneracao">
                                                Remuneração: R$
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="remuneracao" id="remuneracao" >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="endereco">
                                                Rua: 
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="endereco" id="endereco" class="form-control">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="local">
                                                Local: 
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="local" id="local" placeholder="Ex: Próximo da estação Saúde, nas redondezas de..." class="form-control">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="descricao">
                                                Descrição:
                                            </label>
                                        </td>
                                        <td>
                                            <textarea name="descricao" id="descricao" class="form-control"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="/" class="btn btn-info">Voltar</a>
                                        </td>
                                        <td class="nelson">
                                            <input type="submit" name="enviar" id="enviar" value="Analisar" class="btn btn-success">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<input type="text" placeholder="Ola!" id="mensagem"> <p class="nelsonn" onclick="enviarMensagem()">Enviar</p>

<div class="bot" id="myList">
        <p >Assistente virtual: <span class="fraco">Ei amigo, não esqueça de dar o máximo de detalhes possíveis para nos ajudar a coletar informações sobre esta vaga .<span></p>
            <script src="js/bot.js"></script>
            <script>enviarMensagem('12345')</script>
    </div>
</html>