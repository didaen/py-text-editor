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

    <div class="tooltip">
        <i id="add-input-light" data-feather="plus-circle" stroke-width="1" onclick="addInput()"></i>
        <span class="tooltip-text">
            <div>
                <a href="https://physicsyourself.com" class="tooltip-text-options" onclick="addText()">Text </a>|
                <a href="https://journal.physicsyourself.com" class="tooltip-text-options" onclick="addPicture()"> Picture</a>
            </div>
        </span>
    </div>

    <script>
        feather.replace();
    </script>
    <script src="script.js"></script>
</body>
</html>