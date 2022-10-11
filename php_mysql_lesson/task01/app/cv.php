<?php 
  $profession = 'Designer';
  $location = 'Moscow, Russia';
  $name = 'Alex';
  $email = 'mail@example.com';
  $phone = '+7 987 654 32 10';
  $age = 20;
?>

<?php
  $experience = [ // Title, Start Date, End Date, Description
  '1' => ['Front End Developer',
          'Jan 2015',
          'Current',
          'Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'],
  '2' => ['Web Developer / something.com',
          'Mar 2012',
          'Dec 2014',
          'Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'],
  '3' => ['Graphic Designer / designsomething.com',
          'Jun 2010',
          'Mar 2012',
          'Lorem ipsum dolor sit amet, consectetur adipisicing elit.']
  ];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p>
            <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $profession; ?>
          </p>
          <p>
            <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $location; ?>
          </p>
          <p>
            <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $email; ?>
          </p>
          <p>
            <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $phone; ?>
          </p>
          <p>
            <i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $age; ?> лет (<?php echo $age * 365; ?> дней)
          </p>
          <hr>

          <p class="w3-large">
            <b>
              <i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>
              Навыки
            </b>
          </p>

          <?php
            $skills = [
              'Adobe Photoshop' => 40,
              'Photography' => 30,
              'Illustrator' => 100,
              'Media' => 80,
            ];
          ?>

          <br>
          <br>
          <br>

          <?php foreach ($skills as $skillName => $skillValue): ?>
            <p><?php echo $skillName; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" 
                   style="width:<?php echo $skillValue; ?>%">
                   <?php echo $skillValue; ?>
                   %
                  </div>
            </div>
          <?php endforeach; ?>

          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        
        
        <?php foreach ($experience as $experienceItem => $experienceValue): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $experienceValue[0]?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experienceValue[1]?> - <span class="w3-tag w3-teal w3-round"><?php echo $experienceValue[2]?></span></h6>
            <p><?php echo $experienceValue[3]?></p>
            <hr>
            </div>
          <?php endforeach; ?>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  <div class="mapWrap">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1a92edceee28a9793538e134510446af17dbad18cba2c2ba368fb61783379759&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
  </div>
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

 <script src="scripts/app.js"></script>
</body>
</html>
