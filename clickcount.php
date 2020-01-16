<!DOCTYPE html>

<html>

 

<head>

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
            if (localStorage.clickcount > 2) {
                alert("clicked 3 times");
            return;
            }else{
                clickCounter()
            }
            counter++;
        }
        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (localStorage.clickcount < 3) {
                    localStorage.clickcount = Number(localStorage.clickcount) + 1;
                } else {
                    localStorage.clickcount = 1;
                }
                // document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
            } else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
            }
        }
        showalert();
    </script>

</head>

 

<body>

    <p onclick="showalert();">Click me!</p>

    <div id="result"></div>

</body>

 

</html>