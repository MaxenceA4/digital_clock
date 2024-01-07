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
        grid-template-columns: 0.33fr 1fr 0.2fr 1fr 0.2fr 1fr;
        grid-template-rows: 1fr;
        grid-column-gap: 0;
        grid-row-gap: 0;
        justify-items: center;
        align-items: center;
        height: 90vh;
        flex-direction: row;
        color: dimgrey;
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
        padding: 60px;
    }

    .separator1, .separator2 {
        font-size: 60px;
        width: 40px;
    }



    .segmented-display {
        display: grid;
        grid-template-columns: 0.25fr 1fr 0.25fr;
        grid-template-rows: 0.25fr 1fr 0.25fr 1fr 0.25fr;
        grid-column-gap: 0;
        grid-row-gap: 0;
        justify-items: center;
        align-items: center;
        margin: auto;
    }

    .div1 { grid-area: 2 / 1 / 3 / 2; }
    .div2 { grid-area: 1 / 2 / 2 / 3; }
    .div3 { grid-area: 2 / 3 / 3 / 4; }
    .div4 { grid-area: 3 / 2 / 4 / 3; }
    .div5 { grid-area: 4 / 1 / 5 / 2; }
    .div6 { grid-area: 5 / 2 / 6 / 3; }
    .div7 { grid-area: 4 / 3 / 5 / 4; }

    .div1, .div3, .div5, .div7, .div2, .div4, .div6 {
        border-radius: 18%;
        background-color: dimgrey;
    }

    .div2, .div4, .div6 {
        height: 30px;
        width: 90px
    }

    .div1, .div3, .div5, .div7 {
        height: 90px;
        width: 30px
    }

    .no-1 {
        .div1, .div5 , .div2 , .div4 , .div6 {
            opacity: 0.1;
        }
    }

    .no-2 {
        .div1,  .div7 {
            opacity: 0.1;
        }
    }

    .no-3 {
        .div1, .div5 {
            opacity: 0.1;
        }
    }
    .no-4 {
        .div2, .div6, .div5 {
            opacity: 0.1;
        }
    }
    .no-5 {
        .div3, .div5{
            opacity: 0.1;
        }
    }
    .no-6 {
        .div3 {
            opacity: 0.1;
        }
    }
    .no-7 {
        .div1, .div5, .div4, .div6 {
            opacity: 0.1;
        }
    }

    .no-9 {
        .div5 {
            opacity: 0.1;
        }
    }
    .no-0 {
    .div4 {
            opacity: 0.1;
        }
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


    <div class="hours">
        <div class="segmented-display no-7" id="FirstHour">
            <div class="div1"> </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
        </div>
        <div class="segmented-display no-8" id="SecondHour">
            <div class="div1"> </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
        </div>
    </div>

    <div class="separator1">:

    </div>
    <div class="minutes">
        <div class="segmented-display no-9" id="FirstMinute">
            <div class="div1"> </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
        </div>
        <div class="segmented-display no-0" id="SecondMinute">
            <div class="div1"> </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
        </div>
    </div>

    <div class="separator2">
        :
    </div>


    <div class="seconds">
        <div class="segmented-display no-5" id="FirstSecond">
            <div class="div1"> </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
        </div>
        <div class="segmented-display no-6" id="SecondSecond">
            <div class="div1"> </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
        </div>
    </div>
</div>


</body>
<script>
    <!--    When the DOM is charged-->
    document.addEventListener('DOMContentLoaded', function () {
        function blinkingSeparators() {
            let separator1 = document.getElementsByClassName('separator1');
            let separator2 = document.getElementsByClassName('separator2');
            setInterval(function () {
                separator1[0].style.opacity = separator1[0].style.opacity === '0' ? '1' : '0';
                separator2[0].style.opacity = separator2[0].style.opacity === '0' ? '1' : '0';
            }, 1000);
        }

        function correctTime(i){
            if (i < 10) {
                i = "0" + i;
            }
        //     add zero in front of numbers < 10
            return i;
        }

        function updateTime(){
            let d = new Date();

            let seconds = d.getSeconds()
            seconds = correctTime(seconds);
            let firstSecond = seconds.toString().charAt(0)
            let secondSecond = seconds.toString().charAt(1)
            let minutes = d.getMinutes()
            minutes = correctTime(minutes);
            let firstMinute = minutes.toString().charAt(0)
            let secondMinute = minutes.toString().charAt(1)
            let hours = d.getHours()
            hours = correctTime(hours);
            let firstHour = hours.toString().charAt(0)
            let secondHour = hours.toString().charAt(1)
            let day = d.getDay()

            var firstSecondDiv = document.getElementById('FirstSecond');
            var secondSecondDiv = document.getElementById('SecondSecond');
            var firstMinuteDiv = document.getElementById('FirstMinute');
            var secondMinuteDiv = document.getElementById('SecondMinute');
            var firstHourDiv = document.getElementById('FirstHour');
            var secondHourDiv = document.getElementById('SecondHour');

            var baseClass = 'segmented-display no-';
            firstSecondDiv.className = baseClass + firstSecond;
            secondSecondDiv.className = baseClass + secondSecond;
            firstMinuteDiv.className = baseClass + firstMinute;
            secondMinuteDiv.className = baseClass + secondMinute;
            firstHourDiv.className = baseClass + firstHour;
            secondHourDiv.className = baseClass + secondHour;







            let dayArray = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            let dayName = dayArray[day];
            let dayDiv = document.getElementById(dayName);
            dayDiv.style.color = 'red';
        }

        setInterval(updateTime, 1000);
        updateTime();
        blinkingSeparators();



    });


</script>
</html>
