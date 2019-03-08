<!--
Copyright 2018, Chancellor Systems, All rights reserved

All images pertaining to the University are copyright University of Worcester
-->
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Chancellor Systems</title>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/modal.css"/>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../js/main.js"></script>
  </head>

  <body>

    <div class="page">

    <div id="modal_contact_box" class="modal">
      <div class="contents contact_contents">
        <img class="modal_logo" src="../images/logo_no_text.png" alt="logo">
        <span class="close_contact" title="Close">&times;</span>
        <form action="#">
        <div class="aligned modal_aligned modal_form">
          <label class="log_form" for="email"><strong>Your Email Address&nbsp;</strong></label>
          <input type="text" placeholder="joe.bloggs@yourmail.com" name="email" required/></br></br>
          <label class="log_form" for="query"><strong>Please type your query&nbsp;</strong></label>
          <textarea class="querybox" placeholder="type your query" name="query" required></textarea>
          <div id="contact_box_buttons">
            <button class="modal_buttons cancel_butt" type="button">Cancel</button>
            <button id="submit_butt" class="modal_buttons" type="submit">Submit</button>
          </div>
        </div>
        </form>
        </div>
    </div>

    <img class="background_image" src="../images/bground.png"/>

    <header id="header" class="fixed-header">
        <img class="logo" src="../images/logo.png"/>
        <h1 class="head_text">Accident and Near-Miss Reporting</h1>
        <button class="top_right_button" id="contact">Contact Administrator</button>
    </header>

    </div>
      
    <div id="info">
        
    </div>

    <footer id="foot_bar" class="fixed-footer">
        <p id="foot">&copy; 2018 Chancellor Systems</p>
        <div id="questions">
          <a href="../help/difference.html">What is the difference between recordable and reportable?</a></br>
          <a href="../help/reportable.html">What constitutes a reportable accident?</a></br>
          <a href="../help/nearmiss.html">What constitutes a near miss?</a></br>
          <a href="../help/dataprotection.html">How is my personal information used?</a>
        </div>
     </footer>

    </div>

  </body>

</html>
