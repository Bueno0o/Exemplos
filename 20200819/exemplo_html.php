<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){

                $("#btn1").click(function(){
                    var texto = $("#mensagem").html();
                    alert(texto);
                });
                $("#btn2").click(function(){
                    var texto = "<b>mudando o texto da div e aplicando negrito</b>";
                    $("#mensagem").html(texto);
                });
            });
        </script>
    </head>
    <body>
        <div id="mensagem">Texto da Div</div>
        <hr />
        <button id="btn1">Acionar ação HTML sem Parâmetro</button>
        <hr />
        <button id="btn2">Acionar ação HTML com Parâmetro String</button>
        <hr />
    </body>
</html>