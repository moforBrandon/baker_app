<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delivery Sales</h1>

     <label for="type">Name & Adress:</label>
    <select id="bread_type" class="option">
        <option value="customer">Customer1, 63rd Ave</option>
        <option value="regular">Customer2, 61rd Ave</option>
        <option value="regular">Customer3, 62rd Ave street</option>
        <option value="regular">Customer4, 64rd Ave</option>

    </select> <br>
     <h2>OR</h2>
    <label for="type"> New Name & Adress:</label>
     <input type="text" class="option"><br><br>

    <label for="quantity">Bread Sales:</label>
    <input type="number" id="quantity" min="10" max="10000" value="10" class="option"><br><br><br>

    <label for="type">Type:</label>
    <select id="bread_type" class="option">
        <option value="small">SMALL</option>
        <option value="regular">REGULAR</option>

    </select> <br><br>

    <input type="submit" class="btn1">
    <button class="btn1"> <a href="delivery_driver.php" class="btn">back</button> 
    <button class="btn1"> <a href="delivery_driver3.php" class="btn">Returns</button>

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