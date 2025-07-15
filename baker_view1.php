<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>WELCOME BAKER1</h1>
    </center>
      <style>
        *,
*:before,
*:after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background:rgb(254, 105, 105);
}
h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 40px;
}

.container {
    background-color: #fff;
    width: 40%;
    min-width: 500px;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    padding: 20px 0;
    padding-bottom: 50px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.338);
}

.timer-display {
    position: relative;
    width: 92%;
    background: #fff;
    left: 4%;
    font-family: 'Roboto mono', monospace;
    color:rgb(6, 6, 6);
    font-size: 30px;
    padding: 40px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(65, 5, 145, 0.25);
}

.buttons {
    width: 90%;
    margin: 60px auto 0 auto;
    display: flex;
    justify-content: space-around;
    text-decoration: none;
    
}

.buttons button {
    width: 120px;
    height: 45px;
    background-color:rgb(83, 250, 108);
    color: #fff;
    border: none;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    
}

.buttons button:nth-last-child(2) {
    background-color:rgb(227, 9, 9);
     
}

.out {
    text-decoration: none;
    color: white;
}

.buttons button:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
}
    </style>


    <div class="container">
        <div class="timer-display">
            00 : 00 : 00 : 000
        </div>
        <div class="buttons">
            <button id="start-timer">Clock In</button>
            <button id="pause-timer"><a href="baker_view2.php" class="out">Clock Out</button>
           
        </div>
    </div>

    <script>
        let [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
let timeRef = document.querySelector(".timer-display");
let int = null;

document.getElementById("start-timer").addEventListener("click", () => {
    if(int !== null) {
        clearInterval(int);
    }
    int = setInterval(displayTimer, 10);
});

document.getElementById("pause-timer").addEventListener("click", () => {
    clearInterval(int);
});

document.getElementById("reset-timer").addEventListener("click", () => {
    clearInterval(int);
    [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
    timeRef.innerHTML = "00 : 00 : 00 : 000 ";
}); 

function displayTimer() {
    milliseconds += 10;
    if(milliseconds == 1000) {
        milliseconds = 0;
        seconds++;
        if(seconds == 60) {
            seconds = 0;
            minutes++;
            if(minutes == 60) {
                minutes = 0;
                hours++;
            }
        }
    }

    let h = hours < 10 ? "0" + hours : hours;
    let m = minutes < 10 ? "0" + minutes : minutes;
    let s = seconds < 10 ? "0" + seconds : seconds;
    let ms = 
        milliseconds < 10
        ? "00" + milliseconds
        : milliseconds < 100
        ? "0" + milliseconds
        : milliseconds;

    timeRef.innerHTML = `${h} : ${m} : ${s} : ${ms}`;

}
    </script>
</body>
</html>