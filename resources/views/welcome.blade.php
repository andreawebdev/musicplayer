<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music Player</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
    />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <div class="player-container">
      <!-- Song -->
      <div class="img-container">
        <img src="img/jacinto-1.jpg" alt="Album Art" />
      </div>
      <h2 id="title">Electric Chill Machine</h2>
      <h3 id="artist">Jacinto</h3>

      <audio src="music/jacinto-1.mp3"></audio>
      <!-- Progress -->
      <div class="progress-container" id="progress-container">
        <div class="progress" id="progress"></div>
        <div class="duration-wrapper">
          <span id="current-time">0:00</span>
          <span id="duration">2:06</span>
        </div>
      </div>
      <!-- Controls -->
      <div class="player-controls">
        <i class="fas fa-backward" id="prev" title="Previous"></i>
        <i class="fas fa-play main-button" id="play" title="Play"></i>
        <i class="fas fa-forward" id="next" title="Next"></i>
      </div>
    </div>
    <!-- Script -->
    <script src="/javascript/script.js"></script>
  </body>
</html>
