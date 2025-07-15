<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingredient Update</h1>

    <label for="quantity">Flour:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <label for="quantity">Egg:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <label for="quantity">Butter:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <label for="quantity">Yeast:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <label for="quantity">Glutten:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <label for="quantity">Salt:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <label for="quantity">Sugar:</label>
    <input type="number" id="quantity"  max="10000" value="0" class="option"><br><br>

    <button class="btn1"> <a href="analyst1.php" class="btn">back</button>
        <input type="submit" class="btn1" >

      <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: wheat;
        }

        label{
            margin-right: 20px;
        }

        .option{
            width: 140px;
            height: 30px;
            border-radius: 5px;
            text-align: center;
            border: none;
        }
        .btn1{
            width: 100px;
            height: 40px;
            background:rgb(248, 84, 84);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin: -5px;
        }

        .btn{
            width: 100px;
            height: 40px;
            background:rgb(248, 84, 84);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin: 20px;

        }
    </style>
</body>
</html>