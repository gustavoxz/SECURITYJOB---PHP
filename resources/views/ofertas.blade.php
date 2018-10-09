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
                            <h1>Ofertas</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="conteudo2">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>Confiabilidade</td>
                                        <td>Cargo</td>
                                        <td>Remuneração</td>
                                        <td>Local</td>
                                        <td>Descrição</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                @foreach($vagas as $vaga)
                                    <tr>
                                        <td>
                                            @if(intval($vaga['nota']) > 7)
                                            <a class="btn btn-success">Confiável</a>

                                            @elseif($vaga['nota'] > 5)
                                            <a class="btn btn-warning">Arriscado</a>

                                            @else()
                                            <a class="btn btn-danger">Perigo</a>
                                            @endif
                                        </td>
                                        <td>
                                            {{$vaga['tipo']}}
                                        </td>
                                        <td>
                                            R${{$vaga['remuneracao']}}
                                        </td>
                                        <td>
                                            {{$vaga['endereco']}}
                                        </td>
                                        <td>
                                            {{substr($vaga['descricao'], 0, 30)}}...
                                        </td>
                                        <td>
                                            <a href="/{{$vaga['id']}}" class="btn btn-success">Ver mais...</a>
                                        </td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td>
                                        <a href="/" class="btn btn-info botao_voltar">
                                            Voltar
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <input type="text" placeholder="Ola!" id="mensagem"> <p class="nelsonn" onclick="enviarMensagem()">Enviar</p>

    <div class="bot" id="myList">
            <p >Assistente virtual: <span class="fraco">Ei amigo, você já ouviu falar de tráfico de pessoas? Apesar de não ser uma tema muito discutido, é de extrema importância você esteja antenado sobre tal assunto. Você já ouviu falar sobre as tais"vagas dos sonhos" ?
                    Caso a resposta seja não, se tratam de vagas que prometem uma boa remuneração e qualidade de trabalho , porém não cumprem como o prometido, e isso acarreta danos psicológicos e físicos as vítimas. Além disso podendo causar uma certa insegurança em querer trabalhar novamente .<span></p>
                <script src="js/bot.js"></script>
    </div>
</body>
</html>