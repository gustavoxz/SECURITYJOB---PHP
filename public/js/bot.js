
                document.getElementById('mensagem').onkeypress = function(e){
                    if (!e) e = window.event;
                    var keyCode = e.keyCode || e.which;
                    if (keyCode == '13'){
                        enviarMensagem();
                    return false;
                    }
                }
    
                    function enviarMensagem(nelson) {

                        console.log(nelson);

                        mensagem = document.getElementById("mensagem").value;
                        document.getElementById("mensagem").value = '';
                        appendNelson(1, mensagem);
    
                        var xhttp = new XMLHttpRequest();
                        xhttp.open('GET', "http://localhost:8888/bot?mensagem=" + mensagem, true);

                        if(nelson) {
                            console.log('sim');
                            mensagem = nelson;
                        }

                        xhttp.onreadystatechange = function() {
                            if(xhttp.readyState === 4 && xhttp.status === 200) {
                                console.log(xhttp.responseText);
                                appendNelson(0, 'Assistente virtual: ' + xhttp.responseText);
                            }
                        }
                        xhttp.send();
                    }
    
                    function appendNelson(pessoa, mensagem) {
                        var node = document.createElement("p");                 // Create a <li> node
                        if(pessoa) {
                            node.style.textAlign = 'right';
                            node.style.color = '#ccc';
                            
                        }else{
                            node.style.textAlign = 'left';                        
                        }
                        mensagem = mensagem.replace('"', '').replace('"', '');
                        var textnode = document.createTextNode(mensagem);        // Create a text node
                        node.appendChild(textnode);                              // Append the text to <li>
                        document.getElementById("myList").appendChild(node);
                    }
                     