var seconds = 5;

function updateCountdown() {
    var countdownElement = document.getElementById('countdown');
    countdownElement.textContent = seconds;

    if (seconds === 0) {
        window.location.href = 'index2.html'; // keď hodnota premennej "seconds" bude 0 >> redirect
    } else {
        seconds--;
        setTimeout(updateCountdown, 1000); // updatne hodnotu každú sekundu
    }
}


updateCountdown();