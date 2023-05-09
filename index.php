<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Global Forecast</h2>
        <p>Check the weather by city:</p>
        <input type="text" name="city" id="input" />
        <button id="btn">Search</button>

        <div id="container" class="container">

        </div>

        <script src="script.js"></script>
</body>

</html>