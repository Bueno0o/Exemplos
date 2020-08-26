<!DOCTYPE html>
<html>
    <script src="jquery-3.5.1.min.js" ></script>
    <script>
        $.get("texto.txt", function(m){
            $("#div_receptora").html(m);
        })
    </script>
</html>