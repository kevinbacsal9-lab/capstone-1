// script.js
const startBtn = document.getElementById('start-btn');
const stopBtn = document.getElementById('stop-btn');
const transcriptContainer = document.getElementById('transcript-container');
const statusBadge = document.getElementById('status');

// Check for Browser Support
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

if (!SpeechRecognition) {
    alert("Your browser does not support Speech Recognition. Use Chrome!");
} else {
    const recognition = new SpeechRecognition();
    recognition.continuous = true; // Keep listening
    recognition.interimResults = true; // Show text while speaking

    recognition.onstart = () => {
        statusBadge.innerText = "Recording...";
        statusBadge.style.background = "#ff4d4d";
        transcriptContainer.innerHTML = ""; // Clear instructions
    };

    recognition.onresult = (event) => {
        let interimTranscript = '';
        let finalTranscript = '';

        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalTranscript += event.results[i][0].transcript;
                appendTranscript(finalTranscript);
            }
        }
    };

    function appendTranscript(text) {
        const p = document.createElement('p');
        p.className = "transcript-entry";
        p.innerHTML = `<span class="speaker-name">Speaker 1:</span> ${text}`;
        transcriptContainer.appendChild(p);
        transcriptContainer.scrollTop = transcriptContainer.scrollHeight;
    }

    startBtn.onclick = () => {
        recognition.start();
        startBtn.disabled = true;
        stopBtn.disabled = false;
    };

    stopBtn.onclick = () => {
        recognition.stop();
        startBtn.disabled = false;
        stopBtn.disabled = true;
        statusBadge.innerText = "Idle";
        statusBadge.style.background = "#ccc";
    };
}