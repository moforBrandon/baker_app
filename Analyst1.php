<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
        <h1>WELCOME Analyst</h1> <br><br>

        <h2>Inventory Ingreadent</h2>
        <hr>
        <button class="btn1"> <img src="box_logo.png" alt="icon" /><a href="analyst_in1.php" class="btn">Delivery</button>
        <button class="btn1"><img src="available_logo.png" alt="icon" /><a href="analyst_in2.php" class="btn">Available</button> <br>
        <h2>Bread Stocks </h2>
        <hr>
        <button class="btn1"><img src="bread_logo.png" alt="icon" /><a href="analyst_st1.php" class="btn">Bread Stock</a></button>
        <h2>Sales</h2>
        <hr>
        <button class="btn1"><img src="chart_logo.png" alt="icon" /><a href="analyst.php" class="btn">Sales</a></button>

        <!-- Option 1: Inline SVG -->


     <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: wheat;
        }

        h2{
            margin-bottom: -5px;
        }
        button{
            margin: 15px;
        }

        label{
            margin-right: 20px;
        }

        .btn1{
            width: 190px;
            height: 100px;
            background:rgba(248, 84, 84, 0.93);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin: 5px;

          
            gap: 8px;
            padding: 10px 16px;
            cursor: pointer;
            font-size: 16px;
            
 backdrop-filter: blur(30px);
  -webkit-backdrop-filter: blur(30px);
  box-shadow: 0 4px 20px rgba(23, 23, 23, 0.31);

            
        }

        .btn{
            width: 100px;
            height: 40px;
            background:rgba(248, 84, 84, 0.93);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;

  
        }

.btn1 img {
  width: 70px;
  height: 70px;
  fill: white; /* Only applies to inline SVGs */
}
    </style>
</body>
</html>