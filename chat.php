<?php
 
session_start();
 
if(isset($_GET['logout'])){    
     
    $logout_message = "<div class='msgln'><span class='left-info'><b class='user-name-left'>". $_SESSION['name'] ."</b> left the chat.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: index.php");
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<center><button class="error">Please type in a name</button></center>';
    }
}
 
function loginForm(){
    echo
    '<div id="loginform">
    <p>Please enter your name to continue!</p>
    <form action="chat.php" method="post">
      <label for="name"></label>
      <input type="text" name="name" id="name" />
      <button name="enter" type="submit" id="enter"><i class="fas fa-sign-in"></i></button>
    </form>
  </div>';
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Chat</title>
    <link href="chat.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/icons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="manifest" href="/icons/site.webmanifest">
<script src="https://kit.fontawesome.com/bca6c0dd52.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    if(!isset($_SESSION['name'])){
        loginForm();
    }
    else {
    ?>
        <div id="wrapper">
            <div id="menu">
                <button class="welcome">Welcome to the Chat</button>
                <button class="info-button"><i class="fas fa-info-circle"></i></button>
      <button onclick="toggleHulk()" class="toggle"><i class="fas fa-cake-candles"></i></button>
                <button onclick="toggleSecret()" class="toggle"><i class="fas fa-user-secret"></i></button>
                <button class="profile-button" id="profilebutton" onclick="profilePage()"><i class="fas fa-user-circle" style="margin-right: 10px"></i> <?php echo $_SESSION['name']; ?> <i class="fas fa-chevron-down" style="margin-left: 10px"></i></button>
                <button class="profile-button-close" id="profilebuttonclose" onclick="profilePageClose()"><i class="fas fa-user-circle" style="margin-right: 10px"></i> <?php echo $_SESSION['name']; ?> <i class="fas fa-chevron-up" style="margin-left: 10px"></i></button>
                <div class="dropdown" id="dropdown">
                  <form action="index.php" method="post">
                  <label for="name"></label>
                  <input type="text" name="name" id="name" placeholder="Enter new username"/>
                  <button name="enter" type="submit" id="enter"><i class="fas fa-check"></i></button>
                </form>
                </div>
                <button class="logout"><a id="exit" href="/home"><i class="fas fa-sign-out-alt"></i>  Exit Chat</a></button>
            </div>

            <div class="menu">
                <button class="profile-button" id="profilebutton" onclick="profilePage()"><i class="fas fa-user-circle" style="margin-right: 10px"></i> <?php echo $_SESSION['name']; ?> <i class="fas fa-chevron-down" style="margin-left: 10px"></i></button>
                          <button class="profile-button-close" id="profilebuttonclose" onclick="profilePageClose()"><i class="fas fa-user-circle" style="margin-right: 10px"></i> <?php echo $_SESSION['name']; ?> <i class="fas fa-chevron-up" style="margin-left: 10px"></i></button>
      <center>
                <button class="welcome">Welcome to the Chat</button>
                <button class="logout"><a id="exit" href="#"><i class="fas fa-sign-out-alt" style="margin-right: 0"></i></a></button>
      </center>
      <button onclick="toggleHulk()" class="toggle"><i class="fas fa-cake-candles"></i></button>
                <button onclick="toggleSecret()" class="toggle"><i class="fas fa-user-secret"></i></button>
                <div class="dropdown" id="dropdown">
                  <form action="index.php" method="post">
                  <label for="name"></label>
                  <input type="text" name="name" id="name" placeholder="Enter new username"/>
                  <button name="enter" type="submit" id="enter"><i class="fas fa-check"></i></button>
                </form>
                </div>
            </div>

      <h1 class="errormessage">Please use a larger screen to view Study+</h1>
            <div id="chatbox">
            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $contents = file_get_contents("log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <center><form name="message" action="" id="messagebox">
                <input name="usermsg" type="text" id="usermsg" />
                <button name="submitmsg" type="submit" id="submitmsg"><i class="fas fa-paper-plane"></i></button>
            </form></center>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                });
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20;
 
                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function (html) {
                            $("#chatbox").html(html);
       
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20;
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal');
                            }   
                        }
                    });
                }
 
                setInterval (loadLog, 2500);
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to leave the conversation?");
                    if (exit == true) {
                    window.location = "index.php?logout=true";
                    }
                });
            });
          function toggleSecret() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
          function toggleHulk() {
   var element = document.body;
   element.classList.toggle("hulk-mode");
}

function profilePage() {
  document.getElementById("dropdown").style.display = "block";
  document.getElementById("chatbox").style.display = "none";
  document.getElementById("messagebox").style.display = "none";
  document.getElementById("profilebutton").style.display = "none";
  document.getElementById("profilebuttonclose").style.display = "inline-block";
}

function profilePageClose() {
  document.getElementById("dropdown").style.display = "none";
  document.getElementById("chatbox").style.display = "block";
  document.getElementById("messagebox").style.display = "flex";
  document.getElementById("profilebutton").style.display = "inline-block";
  document.getElementById("profilebuttonclose").style.display = "none";
}
        </script>
    </body>
  </center>
</body>
</html>
<?php
}
?>