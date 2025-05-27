<!DOCTYPE html>
<!-- ICS2O-Unit 5-08-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Divide Two Numbers, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Divide Two Numbers, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Divide Two Numbers, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/division.png" alt="Image a long division equation." />
      </div>
      <div class="page-content">Please enter two positive integers you want to divide with.</div>
      <br />
      <form action="answer.php" method="GET">
        <h6>Integer 1:</h6>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="number" min="1" id="integer-one" name="integer-one" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="integer-one">Enter first integer here (dividend)
          </label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a valid integer.</span>
        </div>
        <br />
        <form>
          <h6>Integer 2:</h6>
          <div class="mdl-textfield mdl-js-textfield">
            <!-- input pattern attribute -->
            <input class="mdl-textfield__input" type="number" min="1" id="integer-two" name="integer-two" />
            <!-- mdl-textfield__label -->
            <label class="mdl-textfield__label" for="integer-two">Enter second integer here (divisor)
            </label>
            <!-- class "mdl-textfield__error" -->
            <span class="mdl-textfield__error">Input is not a valid integer.</span>
          </div>
          <br />
          <div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
              type="check-button">
              Find Quotient!
            </button>
          </div>
        </form>
        <br />
        <div class="page-content-answer">
        </div>
    </main>
  </div>
</body>

</html>