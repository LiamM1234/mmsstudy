<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Study+ Dictionary</title>
    <link rel="stylesheet" href="dictionary/dictionary.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/icons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.png">
  </head>
  <body>
    <button class="float" onclick="history.back()"><i class="fas fa-arrow-left"></i> Go Back</button>
    <div class="wrapper">
      <header>English Dictionary</header>
      <div class="search">
        <input type="text" placeholder="Search a word" required spellcheck="false">
        <i class="fas fa-search"></i>
        <span class="material-icons">close</span>
      </div>
      <p class="info-text">Type any existing word and press enter to get meaning, example, synonyms, etc.</p>
      <ul>
        <li class="word">
          <div class="details">
            <p>__</p>
            <span>_ _</span>
          </div>
          <i class="fas fa-volume-up"></i>
        </li>
        <div class="content">
          <li class="meaning">
            <div class="details">
              <p>Meaning</p>
              <span>___</span>
            </div>
          </li>
          <li class="example">
            <div class="details">
              <p>Example</p>
              <span>___</span>
            </div>
          </li>
          <li class="synonyms">
            <div class="details">
              <p>Synonyms</p>
              <div class="list"></div>
            </div>
          </li>
        </div>
      </ul>
    </div>

    <script src="dictionary/dictionary.js"></script>

  </body>
</html>