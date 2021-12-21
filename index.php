<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Curso de introducción al desarrollo web de Leonidas Esteban" />
  <meta name="author" content="Simon Montaño" />  
  <title>Video Player | Curso de introducción al desarrollo web | Leonidas Esteban</title>
  
  <link rel="stylesheet" href="./assets/css/video_player.css">
</head>
<body>
  <div class="wrapper">
    <div class="player">
      <video id="video" poster="./assets/images/poster.png" muted src="https://media.w3.org/2010/05/sintel/trailer.mp4" width="400"></video>
      <div class="player-overlay">
        <h2 class="player-title">Curso de introducción al desarrollo web | Leonidas Esteban</h2>
        <div class="player-actions">
          <button class="button" id="backward" aria-label="Retroceder 10 segundos" title="Retroceder 10 segundos"></button>
          <button class="button" id="play" aria-label="Reproducir" title="Reproducir"></button>
          <button class="button" hidden id="pause" aria-label="Pausar" title="Pausar"></button>
          <button class="button" id="forward" aria-label="Adelantar 10 segundos" title="Adelantar 10 segundos"></button>
        </div>
        <div class="player-progress">
          <input id="progress" type="range" min="0" value="0" step="1">
        </div>
      </div>
    </div>
  </div>
  
  <center> <br />  <br />  &copy; 2021  <a href="https://leonidasesteban.com/" target="_blank">Leonidas Esteban</a> </center>

  <script type="text/javascript" src="./assets/js/video_player.js"></script>
</body>
</html>