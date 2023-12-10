<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos - Travian</title>
    <style>

        .resource-container {
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .resource {
            flex: 1;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .resource img {
            max-width: 50px;
            max-height: 50px;
            margin-bottom: 10px;
        }
    </style>
    <script src="https://kit.fontawesome.com/6af50ab3e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="resource-container">
        <div class="resource">
            <img src="https://example.com/wood-icon.png" alt="Wood Icon">
            <h3>Wood</h3>
            <p>1000 units</p>
            <p>
            <span id="recursos_ouro"><i class="fa-solid fa-coins"></i><?php echo $aldeia['recursos_ouro']; ?></span>
            </p>
        </div>

        <div class="resource">
            <img src="https://example.com/clay-icon.png" alt="Clay Icon">
            <h3>Clay</h3>
            <p>750 units</p>
            <span id="recursos_madeira"><i class="fa-solid fa-tree"></i><?php echo $aldeia['recursos_madeira']; ?> 
        </div>

        <div class="resource">
            <img src="https://example.com/iron-icon.png" alt="Iron Icon">
            <h3>Iron</h3>
            <p>500 units</p>
            <span id="recursos_pedra"><i class="fa-solid fa-hill-rockslide"></i><?php echo $aldeia['recursos_pedra']; ?> 
        </div>

        <div class="resource">
            <img src="https://example.com/crop-icon.png" alt="Crop Icon">
            <h3>Crop</h3>
            <p>250 units</p>
            <span id="recursos_comida"><i class="fa-solid fa-wheat-awn"></i><?php echo $aldeia['recursos_comida']; ?>
        </div>
    </div>
</body>
</html>
