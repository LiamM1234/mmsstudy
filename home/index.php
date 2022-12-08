<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Study+ | Dashboard</title>
      <link rel="stylesheet" href="studyplus.css">
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
               <li><a href="/chat"><i class="fas fa-comments"></i>Chat</a></li>
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
       <div class="homebanner">
         <h1>Welcome to Study+</h1>
       </div>
       <br>
       <h2>Your Feed</h2>
       <br>
       <center>
         <a href="https://memes.liammurphy6.repl.co" target="__blank"><div class="studyguide">
         <div class="lineone"><span class="guidetitle">New Memes/Jokes Website</span></div>
         <div class="linetwo">Check out another cool website designed by us!</div>
       </div></a>
         <br>
       <a href="/techtips/calendar"><div class="studyguide">
         <div class="lineone"><span class="techtip"><i class="fas fa-cog"></i> Tech Tip</span> <span class="guidetitle">Use a Calendar for Scheduling</span></div>
         <div class="linetwo">Learn how to use Google Calendar to help you plan!</div>
       </div></a>
         <br>
        <a href="/quiz/americanrevolution"><div class="studyguide">
           <div class="lineone"><span class="educatormade"><i class="fas fa-user-graduate"></i> Official</span> <span class="guidetitle">USA Revolution Study Guide</span></div>
           <div class="linetwo"><i class="fas fa-clock"></i> 1-3 min <span style="margin-right: 50px;"></span>
           <i class="fas fa-list"></i> 10 questions</div>
         </div></a>
       </center>
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

    <script src="todo.js"></script>
   </body>
</html>