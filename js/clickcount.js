    <script>
        var counter = 0;
        function showalert() {
            if (localStorage.clickcount > 2) {
                alert("Login to read more news");
                window.location="<?php echo $domain?>login";
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