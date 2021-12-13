<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Corona</title>
    
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <div class="container-fluid d-flex justify-content-end">
    <a class="navbar-brand" href="#">Corona Tracker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Updates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="india.php">India corona live</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="daywise.php">India Daywise report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section id="indiaupdate">
      <div class="my-3">
        <h3 class="text-center p-1 text-danger">COVID-19 Live Day to Day Updates.</h3>
      </div>
      <div class="container">
      <div class="table table-responsive">
        <?php
         $data=file_get_contents('https://data.covid19india.org/data.json');
         $daywise=json_decode($data,true);
         $totalcount=count($daywise['cases_time_series']);
          $i=0;
          while($i<$totalcount){
            ?>
            <table class="container table-bordered table-striped text-center" id="table">
            <tr>
                <th class="text-left" colspan="6">date and time</th>
            </tr>
             <tr>
            <td colspan="6" class="text-left"> <?php echo $daywise['cases_time_series'][$i]['date']; ?></td>
            </tr>

            <tr class="text-capitalize">
            <th style="color:#064663; background:#84DFFF;">totalconfirmed</th>
            <th  style="color:#781D42; background:#D3E4CD;">dailyconfirmed</th>
            <th  style="color:#040303; background:#FFEBCC;">dailydeceased</th>
            <th  style="color:#064635; background:#D3E4CD;">dailyrecovered</th>
            <th  style="color:#161853; background:#FF87CA;">totaldeceased</th>
            <th  style="color:#000957; background:#B4FE98;">totalrecovered</th>
          </tr>
            <tr>
            <td style="color:#160040; background:#98BAE7;"> <?php echo $daywise['cases_time_series'][$i]['totalconfirmed'];  ?></td>
              <td style="color:#160040; background:#F4BEEE;"> <?php echo $daywise['cases_time_series'][$i]['dailyconfirmed'];  ?></td>
              <td style="color:#160040; background:#A8ECE7;"> <?php echo $daywise['cases_time_series'][$i]['dailydeceased'];  ?></td>
              <td style="color:#160040; background:#F999B7;"> <?php echo $daywise['cases_time_series'][$i]['dailyrecovered'];  ?></td>
              <td style="color:#160040; background:#EDD2F3;"> <?php echo $daywise['cases_time_series'][$i]['totaldeceased'];  ?></td>
              <td style="color:#160040; background:#DADDFC;"> <?php echo $daywise['cases_time_series'][$i]['totalrecovered'];  ?></td>
            </tr>
           
         
          <?php
            $i++;
          }
          ?>
        </table>
      </div>
      </div>
    </section>

    <footer class="text-center my-3 bg-primary text-light">
      <p>© Copyright 2021. All rights reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  </body>
</html>