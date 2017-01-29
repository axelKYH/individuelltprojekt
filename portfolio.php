
<html>
<head>
    <title>Axel Aronsson - Front End Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="(max-width:500px)" href="smartphone.css">
    <link rel="stylesheet" media="(min-width:501px) and (max-width:780px)" href="tablet.css">
    <link rel="stylesheet" media="(min-width:781px)" href="desktop.css">
    <script src="scripts/hangman.js" type="text/javascript"></script>
    <script async src="https://use.fontawesome.com/986342ab7c.js"></script>
    <style>
    .letters {
      height: 80px;
      width: 80px;
      font-size: 50px;
      display: inline-block;
      border-bottom: 1px solid;
    }
    </style>
</head>
<body>

    <article id="case">
        <div id="caseinfo">
          <h4>Case</h4>
          <p>
              Projekt som jag jobbar med just nu
          </p>
          <a href='https://github.com/krokben/_agileboardgame'>KYH teamprojekt</a>
          <a href='https://github.com/krokben/_agileboardgame'>KYH individuellt projekt</a>
        </div>
    </article>

    <div id="game" style="height: 100px; width: 300px; display:none">
        <div class="letters" id="letter1"></div>
        <div class="letters" id="letter2"></div>
        <div class="letters" id="letter3"></div>
    </div>
    <div id="gameBtn" style="display:none">
      <button id="go">Go</button>
      <input type="text" id="userInput"/>
    </div>

</body>
</html>
