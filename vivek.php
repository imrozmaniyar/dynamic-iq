<!DOCTYPE html>
<html>

<head>
    <title>clickcount</title>
    <script>
        var counter = 0;
        window.onload =
            function myFunction() {
                var inputtext = document.getElementById("myform").querySelectorAll("input[type=text]");
                for (var cnt = 0; cnt < inputtext.length; cnt++) {
                    inputtext[cnt].addEventListener("click", showalert);

                }
            }

        function showalert() {
            if (localStorage.clickcount >= 3) {
                alert("clicked 3 times");
                return;
            }
            counter++;
        }

        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (localStorage.clickcount) {
                    localStorage.clickcount = Number(localStorage.clickcount) + 1;
                } else {
                    localStorage.clickcount = 1;
                }

            }
        }
    </script>
</head>

<body>
    <p><button onclick="clickCounter();showalert();" type="button">Click me!</button></p>
</body>

</html>
