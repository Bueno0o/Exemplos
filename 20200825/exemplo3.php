<!DOCTYPE html>
<html>
    <head>
        <style>div{width:200px;height:200px;border:1px solid;}</style>
        <script src="jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                    valor1 = $("input[name='x']").val();
                    valor2 = $("input[name='y']").val();
                    $.get("teste2.php",{"v1":valor1,"v2":valor2},function(m){
                        $("#div_receptora").html(m);
                    });
                });
            });
        </script>
    </head>
    <body>
        <input type="text" name="x" placeholder="x...."/>
        <input type="text" name="y" placeholder="y...."/>
        <button id="btn">Qual string é maior x ou y??</button>
        <hr />
        <div id="div_receptora"></div>
    </body>
</html>