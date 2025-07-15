<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Packng</h1>
    <label for="quantity">Bread Packed:</label>
    <input type="number" id="quantity" min="0" max="10000" value="0" class="option"><br><br><br>

    <label for="type">Type:</label>
    <select id="bread_type" class="option">
        <option value="small">WHOLE</option>
        <option value="regular">SLICED</option>

    </select> <br><br>
<hr>
     <label for="quantity">Bread Packed:</label>
    <input type="number" id="quantity" min="0" max="10000" value="0" class="option"><br><br><br>

    <label for="type">Type:</label>
    <select id="bread_type" class="option">
        <option value="small">WHOLE</option>
        <option value="regular">SLICED</option>

    </select> 
    <br><br>
    <hr>
     <label for="quantity">Spoiled Bread:</label>
    <input type="number" id="quantity" min="0" max="10000" value="0" class="option"><br><br><br>

   <button class="btn1"> <a href="packaging1.php" class="btn">back</button>
    <button class="btn1"> <a href="packaging3.php" class="btn">Next</button>
 

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
            margin: 5px;
        }

        .btn{
            width: 100px;
            height: 40px;
            background:rgb(248, 84, 84);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }
    </style>
</body>
</html>