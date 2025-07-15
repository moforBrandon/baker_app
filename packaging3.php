<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Packng Review</h1>

<div class="inserts">

    <label for="quantity"> Baker Name:</label>
    <select id="bakers_name" class="option">
        <option value="customer">Baker1e</option>
        <option value="regular">Baker2</option>
        <option value="regular">Baker3</option>
        <option value="regular">Baker4</option>

    </select> <br><br>
      <label for="quantity"> Bad Bread:</label>
    <input type="number" id="quantity"  max="1000" value="0" class="option"><br><br>
    <hr>
    <label for="quantity"> Baker Name:</label>
    <select id="bakers_name" class="option">
        <option value="customer">Baker1e</option>
        <option value="regular">Baker2</option>
        <option value="regular">Baker3</option>
        <option value="regular">Baker4</option>

    </select> <br><br>
      <label for="quantity"> Bad Bread:</label>
    <input type="number" id="quantity"  max="1000" value="0" class="option"><br><br>
  </div>

<div >
  
    <button  class="btn1"> <a href="packaging2.php" class="btn">back</button>
     <input type="submit" class="btn1">
</div>

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
            width: 110px;
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
            margin: 15px;
        }
    </style>
</body>
</html>