document.addEventListener('DOMContentLoaded', function() {
    async function fetchScores() {
        const myHeaders = new Headers();
        myHeaders.append("x-api-key", "aMFouLkMjcxGopFBPmzjWGMKQCkVKPDMsghukTvPHaPWzsqALZZFfGRtpBgvEKVVLGDJjDBavveHcoVKhuqjovsRWhkgGEQiyRmX");
        myHeaders.append("x-app-version", "1.0.0");
        myHeaders.append("x-apihub-key", "Fah5dolYNheyOs-ZDAsKUjyBABCCOhW-crm2pl4sXnHKr9iqRb");
        myHeaders.append("x-apihub-host", "International-Football-Results-API.allthingsdev.co");
        myHeaders.append("x-apihub-endpoint", "1d95bcf2-6779-4128-a7d3-111d58313901");

        const requestOptions = {
            method: "GET",
            headers: myHeaders,
            redirect: "follow"
        };

        try {
            const response = await fetch("https://International-Football-Results-API.proxy-production.allthingsdev.co/api/v1/soccer/matches?year=2023&skip=0&limit=10", requestOptions);
            
            if (response.ok && response.headers.get('Content-Type').includes('application/json')) {
                const result = await response.json();
                displayScores(result.matches || []);
            } else {
                const errorText = await response.text();
                throw new Error(`Unexpected response format: ${errorText}`);
            }
        } catch (error) {
            console.error("Error fetching live scores:", error);
            displayError(error.message);
        }
    }

    function displayScores(scores) {
        const scoresList = document.getElementById('scores-list');
        scoresList.innerHTML = '';
        scores.forEach(score => {
            const li = document.createElement('li');
            li.textContent = `${score.home_team} vs ${score.away_team}`;
            scoresList.appendChild(li);
        });
    }

    function displayError(message) {
        const scoresContainer = document.getElementById('scores-container');
        scoresContainer.innerHTML = `<p>Error: ${message}</p>`;
    }

    fetchScores();

    // Refresh scores every 30 seconds
    setInterval(fetchScores, 30000);
});
