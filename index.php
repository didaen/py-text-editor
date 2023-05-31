<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MY STYLE -->
    <link rel="stylesheet" href="style.css">
    
    <!-- FEATHER ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <title>Input Text</title>
</head>
<body>
    <i id="add-input-bold" data-feather="plus-circle"></i>

    <h2>Top Tooltip w/ Bottom Arrow</h2>

    <div class="tooltip" onclick="addInput()">
        <a><i id="add-input-light" data-feather="plus-circle" stroke-width="1"></i></a>
        <span class="tooltiptext">
            <div>
                <a>Text |</a>
                <a> Gambar</a>
            </div>
        </span>
    </div>

    <script>
        feather.replace();
    </script>
    <script src="script.js"></script>
</body>
</html>