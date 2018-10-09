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

<body class="fundo">  
    <div class="logo">
        <img src="imagens/logo.png" />
    </div>

    <div class="pesquisa_link">
        <form method="POST" class="form-group">
            <input type="text" name="link" id="link" value="https://www.indeed.com.br/viewjob?jk=8d38097e6f54685c&from=recjobs&vjtk=1cpcb8ih6d4gv800" class="form-control" placeholder="Coloque aqui o link da vaga, Ex: http://www.catho.com.br"><span class="btn btn-success" onclick="rastreiaSite()">Analisar</span>
        </form>
    </div>

    <div class="descrever">
        <a href="/descrever_vaga" class="btn btn-info botao_inicio">
            Descrever vaga
        </a>
    </div>

    <div class="consultar_vagas">
        <a href="/ofertas" class="btn btn-info botao_inicio">
            Ver ofertas
        </a>
    </div>

    <input type="text" placeholder="Ola!" id="mensagem"> <p class="nelsonn" onclick="enviarMensagem()">Enviar</p>

    <div class="bot" id="myList">
    <p >Assistente virtual: <span class="fraco">Olá. Eu sou o Chatbot da TrabBEM e estou aqui para te ajudar a analisar vagas de emprego com maior confiança.
            Caso você tenha algum tipo de denúncia de vagas com suspeita de aliciamento, acolhimento de indivíduos, violência, persuasão de vagas tendenciosas, denuncie discando 100 ou 180. Isso nos ajuda muito a filtrar empregos tendenciosos.<span></p>
        <script src="js/bot.js"></script>
    </div>

    <script>
        function rastreiaSite() {
            url = document.getElementById('link').value;

            console.log(url);

            var xhttp = new XMLHttpRequest();
            xhttp.open('GET', "http://localhost:8888/verifica?link=" + url, true);


            xhttp.onreadystatechange = function() {
                if(xhttp.readyState === 4 && xhttp.status === 200) {
                    var resp = JSON.parse(xhttp.responseText);
                    window.location.href =  '/descrever_vaga_get?salario=' + resp.salario + '&descricao=' + resp.descricao + '&tipo=' + resp.tipo;
                }
            }
            xhttp.send();
        }
    </script>
</body>
</html>

