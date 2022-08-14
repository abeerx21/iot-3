
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Temperature & Humidity</title>
</head>

    <div class="container">

        <div class="sensor_container">

            <h1>Temperature (C&#176;)</h1>
            <div class="sensor_value">
                <h1 id="temperature"></h1>
            </div>
        </div>

        <div class="sensor_container">

            <h1>Humidity %</h1>
            <div class="sensor_value">
                <h1 id="humidity"></h1>
            </div>
        </div>


    </div>

    <h3 class="updated">Last updated on <span id="updatedDate">2022/7/7 12:22:55</span></h3>

    <script>
        //http://localhost/sensors/getSensorValues.php
        //  var intervalID = window.setInterval(updateValues, 2000);

        var obj, xmlhttp;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "http://127.0.0.1/sensors/getSensorValues.php", true);
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                myObj = JSON.parse(this.responseText);
                document.getElementById("temperature").innerHTML = myObj[0].Temperature;
                document.getElementById("humidity").innerHTML = myObj[0].Humidity;
                document.getElementById("updatedDate").innerHTML = myObj[0].AddedOnData;
                console.log(myObj[0].Temperature);
            }


        };
        xmlhttp.send();



    </script>

</body>

</html>
