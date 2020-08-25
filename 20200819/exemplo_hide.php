<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $("p").hide()
                })
            })
        </script>
    </head>
    <body>
        <h2 id="teste">Cabeçalho (Não vai ser alterado)</h2>
            <p>Parágrafo 1 (vai sumir)</p>
            <p id="teste">Parágrafo 2 (vai sumir também)</p>
            <button>Clique aqui para esconder os parágrafos</button> 
    </body>
</html>