<style type="text/css">
    canvas {
        display: block;
        max-width: 100%;
        max-height: 100%;
        width: 400px;
        height: 400px;
    }

    .timer {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2rem;
        font-weight: bold;
        color: #333;
    }

    #countdown-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 400px;
        overflow: hidden;
    }
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <h1 class="h-16 flex items-center justify-center font-bold normal-case text-lg sm:text-3xl max-w-[66vw] sm:max-w-full truncate">Online Alarm Clock</h1>
        <div class="w-full max-w-3xl mx-auto p-5">
            <div id="countdown-alarm" class="hidden">
                <div class="w-full" id="countdown-container">
                    <div class="timer">
                        <div id="timer"></div>
                        <div class="flex justify-center items-center mt-1">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 0.999992C10.9477 0.999992 10.5 1.44771 10.5 1.99999V2.99999H9.99998C7.23864 2.99999 4.99998 5.23824 4.99998 7.99975V11C4.99998 11.7377 4.76718 12.5722 4.39739 13.4148C4.03164 14.2482 3.55875 15.0294 3.14142 15.6439C2.38188 16.7624 2.85215 18.5301 4.40564 18.8103C5.42144 18.9935 6.85701 19.2115 8.54656 19.3527C8.54454 19.4015 8.54352 19.4506 8.54352 19.5C8.54352 21.433 10.1105 23 12.0435 23C13.9765 23 15.5435 21.433 15.5435 19.5C15.5435 19.4482 15.5424 19.3966 15.5402 19.3453C17.1921 19.204 18.596 18.9903 19.5943 18.8103C21.1478 18.5301 21.6181 16.7624 20.8586 15.6439C20.4412 15.0294 19.9683 14.2482 19.6026 13.4148C19.2328 12.5722 19 11.7377 19 11V7.99975C19 5.23824 16.7613 2.99999 14 2.99999H13.5V1.99999C13.5 1.44771 13.0523 0.999992 12.5 0.999992H11.5ZM12 19.5C12.5113 19.5 13.0122 19.4898 13.4997 19.4715C13.5076 20.2758 12.8541 20.9565 12.0435 20.9565C11.2347 20.9565 10.5803 20.2778 10.5872 19.4746C11.0473 19.491 11.5191 19.5 12 19.5ZM9.99998 4.99999C8.34305 4.99999 6.99998 6.34297 6.99998 7.99975V11C6.99998 12.1234 6.65547 13.2463 6.22878 14.2186C5.79804 15.2 5.25528 16.0911 4.79599 16.7675C4.78578 16.7825 4.78102 16.7969 4.77941 16.8113C4.77797 16.8242 4.77919 16.8362 4.78167 16.8458C6.3644 17.1303 9.00044 17.5 12 17.5C14.9995 17.5 17.6356 17.1303 19.2183 16.8458C19.2208 16.8362 19.222 16.8242 19.2206 16.8113C19.2189 16.7969 19.2142 16.7825 19.204 16.7675C18.7447 16.0911 18.2019 15.2 17.7712 14.2186C17.3445 13.2463 17 12.1234 17 11V7.99975C17 6.34297 15.6569 4.99999 14 4.99999H9.99998Z" fill="#0F0F0F"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0299 0.757457C16.1622 0.228068 16.7146 -0.102469 17.2437 0.0301341C17.3131 0.0476089 17.3789 0.0669732 17.4916 0.104886C17.6295 0.151258 17.8183 0.221479 18.0424 0.322098C18.4894 0.522794 19.0851 0.848127 19.6982 1.35306C20.9431 2.37831 22.2161 4.1113 22.495 6.9005C22.55 7.45005 22.149 7.94009 21.5995 7.99504C21.05 8.05 20.5599 7.64905 20.505 7.09951C20.2839 4.88869 19.3068 3.62168 18.4268 2.89692C17.9774 2.52686 17.5418 2.28969 17.2232 2.14664C17.0645 2.07538 16.9369 2.02841 16.8541 2.00057C16.8201 1.98913 16.7859 1.97833 16.7513 1.96858C16.2192 1.83203 15.8964 1.2912 16.0299 0.757457Z" fill="#0F0F0F"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.97014 0.757457C7.83619 0.221662 7.29326 -0.104099 6.75746 0.0298498C6.68765 0.0473468 6.62176 0.066766 6.5084 0.104885C6.37051 0.151257 6.1817 0.221478 5.9576 0.322097C5.51059 0.522793 4.91493 0.848125 4.30179 1.35306C3.05685 2.37831 1.78388 4.1113 1.50496 6.90049C1.45001 7.45003 1.85095 7.94008 2.40049 7.99503C2.95004 8.04998 3.44008 7.64904 3.49504 7.0995C3.71612 4.88869 4.69315 3.62168 5.57321 2.89692C6.02257 2.52686 6.45815 2.28969 6.77678 2.14664C6.93548 2.07538 7.06308 2.02841 7.14589 2.00057C7.17991 1.98913 7.21413 1.97833 7.24867 1.96858C7.78081 1.83203 8.10358 1.2912 7.97014 0.757457Z" fill="#0F0F0F"/>
                            </svg>
                            <div id="end-time" style="font-size: 1rem; text-align: center;"></div>
                        </div>
                    </div>
                    <canvas id="circleCanvas" width="400" height="400"></canvas>
                </div>
                <div class="mt-6 flex flex-wrap justify-center gap-4">
                    <button onclick="stopAlarm()" class="block w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Stop
                    </button>
                </div>
            </div>
            <div id="set-alarm">
                <div class="text-center">
                    <div class="text-2xl" id="date">
                    </div>
                    <div class="text-5xl sm:text-[7.5rem] mt-6" id="clock">
                    </div>
                </div>
                <div class="mt-6">
                    <h2 class="font-semibold text-xl">Set alarm time</h2>
                    <div class="flex justify-between">
                        <div id="hours-container" class="form-control w-full mr-4">
                            <label class="h-9 flex items-center text-sm">Hours</label>
                            <select id="hours" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <?php
                                    $hours = [
                                        "00" => "12 AM", "01" => "1 AM", "02" => "2 AM", "03" => "3 AM", "04" => "4 AM", "05" => "5 AM", "06" => "6 AM", "07" => "7 AM", 
                                        "08" => "8 AM", "09" => "9 AM", "10" => "10 AM", "11" => "11 AM", "12" => "12 PM", "13" => "1 PM", "14" => "2 PM", "15" => "3 PM",
                                        "16" => "4 PM", "17" => "5 PM", "18" => "6 PM", "19" => "7 PM", "20" => "8 PM", "21" => "9 PM", "22" => "10 PM", "23" => "11 PM"
                                    ];
                                    
                                    foreach ($hours as $value => $label) {
                                        echo "<option value=\"$value\">$label</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div id="minutes-container" class="form-control w-full ml-4">
                            <label class="h-9 flex items-center text-sm">Minutes</label>
                            <select id="minutes" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <?php
                                    for ($i = 0; $i <= 59; $i++) {
                                        $value = str_pad($i, 2, '0', STR_PAD_LEFT);
                                        echo "<option value=\"$value\">$value</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-6 gap-1">
                    <div class="flex mb-3">
                        <h2 class="font-semibold text-xl">
                            Alarm sound
                        </h2>
                    </div>
                    <div class="columns-1">
                        <div id="sound-container" class="form-control w-full">
                            <div class="flex items-center">
                                <select id="sound" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="alert">Alert</option>
                                    <option value="alert-in-hall">Alert in Hall</option>
                                    <option value="city-alert-siren">Siren</option>
                                    <option value="classic">Classic</option>
                                    <option value="digital-clock">Digital Clock</option>
                                    <option value="emergency-alert">Emergency</option>
                                    <option value="facility">Facility</option>
                                    <option value="retro-game-emergency">Retro Game</option>
                                    <option value="rooster-crowing">Rooster Crowing</option>
                                    <option value="street-public">Street Public</option>
                                    <option value="vintage-warning">Vintage Warning</option>
                                </select>
                                <button id="playPauseButton" class="flex items-center space-x-2 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-blue-500">
                                        <path id="playIcon" d="M4 3.5a1 1 0 011.5-.866l10 6a1 1 0 010 1.732l-10 6a1 1 0 01-1.5-.866V10a1 1 0 010-1.732V3.5z" />
                                        <path id="pauseIcon" d="M6 4a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h1zM14 4a1 1 0 011 1v10a1 1 0 01-1 1h-1a1 1 0 01-1-1V5a1 1 0 011-1h1z" class="hidden"/>
                                    </svg>
                                </button>
                                <audio id="audioPlayer" class="hidden">
                                </audio>
                                <audio id="loopAudioPlayer" class="hidden">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mt-6">
                    <h2 id="alarm-title-heading" class="font-semibold text-xl mb-3">Alarm name</h2>
                    <div class="columns-1">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"/>
                    </div>
                </div> -->
                <div class="mt-6 flex flex-wrap justify-center gap-4">
                    <button onclick="calculateTime()" class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Set an alarm
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>

<div id="quizModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-96 shadow-md">
        <h2 id="question" class="text-lg font-bold mb-4">Loading...</h2>

        <input id="answerInput" type="number" placeholder="Enter your answer" class="w-full p-2 border border-gray-300 rounded mb-4" />
        
        <div class="flex justify-end">
            <button id="submitAnswer" class="mr-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                Submit
            </button>
        </div>

        <p id="result" class="mt-4 text-center text-lg"></p>
    </div>
</div>

<script>
    function updateTime() {
        const now = new Date();

        const dateFormat = now.toLocaleDateString('en-US', {
            weekday: 'long',
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });

        const timeFormat = now.toLocaleTimeString('en-US', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        });

        document.getElementById('date').textContent = dateFormat;
        document.getElementById('clock').textContent = timeFormat;
    }

    setInterval(updateTime, 1000);
    updateTime();

    // Play and pause alarm
    const soundSelect = document.getElementById('sound');
    const playPauseButton = document.getElementById('playPauseButton');
    const audioPlayer = document.getElementById('audioPlayer');
    const loopAudioPlayer = document.getElementById('loopAudioPlayer');
    const playIcon = document.getElementById('playIcon');
    const pauseIcon = document.getElementById('pauseIcon');

    function loadAudio() {
      const selectedSound = soundSelect.value;
      audioPlayer.src = `assets/alarm/${selectedSound}.wav`;
      loopAudioPlayer.src = `assets/alarm/${selectedSound}.wav`;
    }

    playPauseButton.addEventListener('click', () => {
        if (audioPlayer.paused) {
            audioPlayer.play();
            playIcon.classList.add('hidden');
            pauseIcon.classList.remove('hidden');
        } else {
            audioPlayer.pause();
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
        }
    });

    audioPlayer.addEventListener('ended', () => {
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
    });

    soundSelect.addEventListener('change', () => {
        loadAudio();
        audioPlayer.pause();
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
    });

    loadAudio();

    // Countdown alarm
    const setAlarm = document.getElementById('set-alarm');
    const countdownAlarm = document.getElementById('countdown-alarm');

    let startTime;
    let endTime;
    let totalTime;
    let timeLeft;

    let canvas = document.getElementById('circleCanvas');
    let ctx = canvas.getContext('2d');
    let radius = canvas.width / 2.5;

    let countdownInterval;

    function calculateTime() {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();
        const getHours = document.getElementById('hours');
        const getMinutes = document.getElementById('minutes');

        startTime = `${strPad(hours)}:${strPad(minutes)}:${strPad(seconds)}`;
        endTime = `${getHours.value}:${getMinutes.value}:00`;

        let start = new Date();
        let end = new Date();

        let startParts = startTime.split(":");
        let endParts = endTime.split(":");

        start.setHours(parseInt(startParts[0]), parseInt(startParts[1]), parseInt(startParts[2]));
        end.setHours(parseInt(endParts[0]), parseInt(endParts[1]), parseInt(endParts[2]));

        if (end <= start) {
            end.setDate(end.getDate() + 1);
        }

        countdownInterval = setInterval(updateCountdown, 1000);
        totalTime = Math.floor((end - start) / 1000);
        timeLeft = totalTime;

        setAlarm.classList.add('hidden');
        countdownAlarm.classList.remove('hidden');
        
        document.getElementById('end-time').innerText = convertTo12HourFormat(endTime);

        drawCircle();
    }

    function convertTo12HourFormat(time24) {
        let [hours, minutes] = time24.split(":");

        hours = parseInt(hours);

        const period = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12;

        return `${strPad(hours)}:${minutes} ${period}`;
    }

    function strPad(num) {
        return num < 10 ? '0' + num : num;
    }

    function updateCountdown() {
        if (timeLeft > 0) {
            timeLeft--;

            let hours = Math.floor(timeLeft / 3600);
            let minutes = Math.floor((timeLeft % 3600) / 60);
            let seconds = timeLeft % 60;

            document.getElementById('timer').innerText =
                (hours < 10 ? "0" : "") + hours + ":" +
                (minutes < 10 ? "0" : "") + minutes + ":" +
                (seconds < 10 ? "0" : "") + seconds;

            drawCircle();
        } else {
            clearInterval(countdownInterval);
            loopAlarm();
        }
    }

    function drawCircle() {
        let angle = (timeLeft / totalTime) * 2 * Math.PI;

        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();
        ctx.arc(200, 200, radius, -Math.PI / 2, angle - Math.PI / 2, false);
        ctx.lineWidth = 10;
        ctx.strokeStyle = "blue";
        ctx.stroke();
    }

    function stopAlarm() {
        clearInterval(countdownInterval);

        setAlarm.classList.remove('hidden');
        countdownAlarm.classList.add('hidden');

        audioPlayer.pause();
        loopAudioPlayer.pause();
    }

    function loopAlarm() {
        showQuiz();
        loopAudioPlayer.play();

        loopAudioPlayer.addEventListener('ended', () => {
            loopAudioPlayer.play();
        });
    }

    function showQuiz() {
        const modal = document.getElementById("quizModal");
        modal.classList.remove("hidden");

        fetch('assets/questions.json')
        .then(response => response.json())
        .then(data => {
            const questions = data.questions;
            const randomQuestion = questions[Math.floor(Math.random() * questions.length)];

            document.getElementById('question').textContent = randomQuestion.question;

            document.getElementById('submitAnswer').addEventListener('click', () => {
                const userAnswer = parseInt(document.getElementById('answerInput').value);
                const resultElement = document.getElementById('result');

                if (userAnswer === randomQuestion.answer) {
                    modal.classList.add("hidden");
                    stopAlarm();
                } else {
                    resultElement.textContent = "Wrong answer. Try again!";
                    resultElement.classList.add("text-red-500");
                    resultElement.classList.remove("text-green-500");
                }
            });
        })
        .catch(error => console.error('Error loading JSON:', error));
    }
</script>