<DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){

                $("#btnShow").click(function(){
                    $("#mensagem").show();
                });

                $("#btnHide").click(function(){
                    $("#mensagem").hide();
                });

            });
        </script>
    </head>
    <body>
        <div id="mensagem">Mensagem que será olcultada / mostrada ao clicar nos botões abaixo</div>
        <hr >

        <button id="btnShow">Show</button>
        <button id="btnHide">Hide</button>
    </body>
</html>