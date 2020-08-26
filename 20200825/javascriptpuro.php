<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1.min.js" ></script>
        <script>
            function loadDoc(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    document.getElementById("demo").innerHTML = this.reponseText;
                }
                xhttp.open("GET","ajax_info.txt", true);
                xhttp.send();
            }
        </script>
    </head>
</html>