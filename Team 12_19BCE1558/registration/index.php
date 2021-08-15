<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./resources/css/style.css" />
    <title>COVID-19 TRACKER</title>
  </head>
  <body>
    <center>
    </center>
    <header>
      <div class="logo">
        <img src="./resources/img/logo.png" alt="" />
        <p>COVID-19<br />STATS</p>
      </div>
    </header>

    <main>
      <div class="stats">
        <div class="latest-report">
          <div class="country">
            <div class="name">Loading...</div>
            <div class="change-country">change</div>
            <div class="search-country hide">
              <div class="search-box">
                <input
                  type="text"
                  id="search-input"
                  placeholder="Search Country..."
                />
                <img class="close" src="./resources/img/close.svg" alt="" />
              </div>
              <div class="country-list"></div>
            </div>
          </div>
          <div class="total-cases">
            <div class="title">Total Cases</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
          <div class="recovered">
            <div class="title">Recovered</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
          <div class="deaths">
            <div class="title">Deaths</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
        </div>
        <div class="chart">
          <canvas id="axes_line_chart"></canvas>
        </div>
      </div>
    </main>

    <footer>
      <div class="footer-container">
        <div class="copyright">
		  <p>IWP © </p>
      <div id = "menu" align = "middle" >
		   <a href="feedbackform.php">Your Valuable<b>Feedback</b></a>
  		</div>

		  <strong><a href="index.php?logout='1'" style="color:red;">LOGOUT</a></strong>
        </div>
      </div>
	</footer>
	<script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script
      language="JavaScript"
      src="http://www.geoplugin.net/javascript.gp"
      type="text/javascript"
    ></script>
    <script src="resources/js/countries.js"></script>
    <script src="resources/js/app.js"></script>
</div>
		
</body>
</html>