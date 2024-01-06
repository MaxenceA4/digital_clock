<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Digital Clock</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
</head>
<style>
    body {
        background-color: black;
    }



    .clock {
        display: grid;
        grid-template-columns: 0.33fr repeat(5, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        justify-items: center;
        align-items: center;
        height: 90vh;
        flex-direction: row;
        color: white;
        font-size: 40px;
        font-family: 'Orbitron', sans-serif;
    }

    .day { grid-area: 1 / 1 / 2 / 2; }
    .hours { grid-area: 1 / 2 / 2 / 3; }
    .separator1 { grid-area: 1 / 3 / 2 / 4; }
    .minutes { grid-area: 1 / 4 / 2 / 5; }
    .separator2 { grid-area: 1 / 5 / 2 / 6; }
    .seconds { grid-area: 1 / 6 / 2 / 7; }

    .hours, .minutes, .seconds {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .day {
        padding-left: 40px;
    }

</style>
<body>
<div class="clock">
    <div class="day">
        <p id="Monday">Mon</p>
        <p id="Tuesday">Tue</p>
        <p id="Wednesday">Wed</p>
        <p id="Thursday">Thu</p>
        <p id="Friday">Fri</p>
        <p id="Saturday">Sat</p>
        <p id="Sunday">Sun</p>
    </div>
    <div class="hours"></div>
    <div class="separator1">
        <div class="number" id="firstNumber">:</div>
    </div>
    <div class="minutes"></div>
    <div class="separator2">
        <div class="number" id="firstNumber">:</div>
    </div>
    <div class="seconds"></div>
</div>


</body>
<script>
    <!--    When the DOM is charged-->
    document.addEventListener('DOMContentLoaded', function () {

        function updateTime(){
            let d = new Date();

            let seconds = d.getSeconds()
            let firstSecond = seconds.toString().charAt(0)
            let secondSecond = seconds.toString().charAt(1)
            let minutes = d.getMinutes()
            let firstMinute = minutes.toString().charAt(0)
            let secondMinute = minutes.toString().charAt(1)
            let hours = d.getHours()
            let firstHour = hours.toString().charAt(0)
            let secondHour = hours.toString().charAt(1)
            let day = d.getDay()

            var secondsdiv = document.getElementsByClassName('seconds');
            var minutesdiv = document.getElementsByClassName('minutes');
            var hoursdiv = document.getElementsByClassName('hours');

            secondsdiv[0].innerHTML = '<div class="number" id="firstNumber">' + firstSecond + '</div>' + '<div class="number" id="secondNumber">' + secondSecond + '</div>';
            minutesdiv[0].innerHTML = '<div class="number" id="firstNumber">' + firstMinute + '</div>' + '<div class="number" id="secondNumber">' + secondMinute + '</div>';
            hoursdiv[0].innerHTML = '<div class="number" id="firstNumber">' + firstHour + '</div>' + '<div class="number" id="secondNumber">' + secondHour + '</div>';


            let dayArray = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            let dayName = dayArray[day];
            let dayDiv = document.getElementById(dayName);
            dayDiv.style.color = 'red';
        }

        setInterval(updateTime, 100);
        updateTime();



    });


</script>
</html>
