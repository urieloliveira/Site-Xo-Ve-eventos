<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/criar-conta.css"></link>
    <title>Menu popup customizado</title>
    
    <script>        
    function mostrarMenu() {
        var X = event.clientX;
        var Y = event.clientY;

        var menu = document.getElementById("divMenu");
            
        menu.style.top = Y.toString() + "px";
        menu.style.left = X.toString() + "px";
        menu.style.visibility = "visible";

        var lis = document.querySelectorAll("#divMenu > ul > li");
        for (var i = 0; i < lis.length; i++) {
            lis.item(i).addEventListener("click", function () {
                menu.style.visibility = "hidden";
            });
        }
    }
        
    window.onload = function () {
        document.addEventListener("click",
            function () {
                document.getElementById("divMenu").style.visibility = "hidden";
            }
        );

        document.querySelector("#divMenu > ul > li:nth-child(1)").addEventListener("click",
            function () {
                alert("copiar...");
            }
        );

        document.querySelector("#divMenu > ul > li:nth-child(2)").addEventListener("click",
            function () {
                alert("recortar...");
            }
        );

        document.querySelector("#divMenu > ul > li:nth-child(3)").addEventListener("click",
            function () {
                alert("colar...");
            }
        );
    }        
</script>
    
    
</head>
    
<body>

    <div>
        <h1 id="hh1"  oncontextmenu="mostrarMenu(); return false;">H1</h1>
        <h2 id="hh2">H2</h2>
        <h3 id="hh3">H3</h3>
    </div>

    <div id="divMenu">
        <ul>
            <li>COPIAR</li>
            <li>RECORTAR</li>
            <li>COLAR</li>
        </ul>
    </div>
</body>
</html>

