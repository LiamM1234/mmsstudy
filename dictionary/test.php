<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Study+ | Dictionary</title>
      <link rel="stylesheet" href="/dictionary/test.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
      <link rel="icon" type="image/png" sizes="512x512" href="/icons/android-chrome-512x512.png">
      <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.png">
      <link rel="manifest" href="/icons/site.webmanifest">
   </head>
   <body>
      <div class="wrapperone">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-book"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
               Study+
            </div>
            <ul class="list-items">
               <li><a href="/home"><i class="fas fa-chalkboard"></i>Dashboard</a></li>
               <li><a href="/studyguides"><i class="fas fa-list"></i>Study Guides</a></li>
               <li><a href="/create"><i class="fas fa-plus-circle"></i>Create Study Guide</a></li>
               <li><a href="/techtips"><i class="fas fa-cog"></i>Tech Tips</a></li>
               <li><a href="chat.php"><i class="fas fa-comments"></i>Chat</a></li>
               <li><a href="/dictionary"><i class="fas fa-book"></i>Dictionary</a></li>
               <li><a href="/contact" target="__blank"><i class="fas fa-envelope"></i>Contact Us</a></li>
               <!--<div class="icons">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
               </div>-->
            </ul>
         </nav>
      </div>
     <div class="wrappertwo">
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
     <div class="wrapper">
       <h1>My Schedule</h1>
       <br>
      <div class="task-input">
        <i class="far fa-calendar-plus"></i>
        <input type="text" placeholder="Add a new task">
      </div>
      <div class="controls">
        <div class="filters">
          <span class="active" id="all">All</span>
          <span id="pending"><i class="far fa-square"></i> Not Done</span>
          <span id="completed"><i class="fas fa-check-square"></i> Done</span>
        </div>
        <button class="clear-btn"><i class="fas fa-trash-alt"></i> Delete All</button>
      </div>
      <ul class="task-box"></ul>
    </div>

    <script src="/todo.js"></script>
    <script src="/dictionary/dictionary.js"></script>
   </body>
</html>