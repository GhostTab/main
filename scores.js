import React, { useState, useEffect } from 'react';

const LiveScores = () => {
  const [scores, setScores] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchScores = async () => {
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
          setScores(result.matches || []);
        } else {
          const errorText = await response.text();
          throw new Error(`Unexpected response format: ${errorText}`);
        }
      } catch (error) {
        console.error("Error fetching live scores:", error);
        setError(error.message);
      }
    };

    fetchScores();

    const intervalId = setInterval(fetchScores, 30000);
    return () => clearInterval(intervalId);
  }, []);

  return (
    <div>
      <h2>Live Scores</h2>
      {error && <p>Error: {error}</p>}
      <ul>
        {scores.map((score, index) => (
          <li key={index}>{score.match}: {score.currentScore}</li>
        ))}
      </ul>
    </div>
  );
};

export default LiveScores;
