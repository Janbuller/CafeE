<?php
$page_name = "Café E";
$img_name = "img/cafe-bg.webp";
?>
<html>

<head>
    <title>Café E</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="libs/flickity/flickity.min.css">
    <script src="libs/flickity/flickity.pkgd.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
</head>

<body>
    <div id="page-container">
        <?php include 'header.php'; ?>
        <div class="bestil-her-div">
            <a class="big-button" href='bestil.php'> Bestil her </a>
        </div>
        <div id="åbningstider">
          <h2>Åbningstider</h2>
          <ul>
            <li>
              <div>
                <h3>Mandag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li>
              <div>
                <h3>Tirsdag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li>
              <div>
                <h3>Onsdag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li>
              <div>
                <h3>Torsdag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li>
              <div>
                <h3>Fredag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li>
              <div>
                <h3>Lørdag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li>
              <div>
                <h3>Søndag:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
            <li id="åbning-helligdage">
              <div>
                <h3>Helligdage:</h3>
                <p>10:00 - 16:00</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="menu-div">
            <?php include 'menu.php'; ?>
        </div>
        <div class="ideen-bag-div" id="om" style="z.index:2">
            <h2 id="ide-title"> Idéen bag Café E </h2>
            <img src="img/bestil-bg.webp" id="frontimg" style="z.index:1">
            <div class="ideen-bag-text-div">
             <h3> Information om Kafeén </h3>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                 vulputate efficitur sagittis. Proin felis tellus, congue ac
                 porttitor vel, iaculis ac nunc. Praesent aliquet eros at diam
                 sollicitudin, quis aliquam erat vehicula. In nisl lorem, congue
                 sit amet enim a, pretium euismod sem. Sed leo ligula, ultricies
                 eu magna vel, tristique bibendum est. Sed cursus ornare
                 imperdiet. Morbi urna ipsum, porta sit amet mattis vitae,
                 euismod a felis. Mauris sit amet diam in ipsum commodo accumsan
                 nec non urna.
             </p>
             <p>
                 In ultrices massa in tincidunt pretium. Ut sit amet arcu eu
                 tortor lobortis hendrerit. Maecenas quis quam enim. Nunc at
                 augue scelerisque, lobortis lectus vitae, pharetra lacus. Nunc
                 accumsan magna vitae sem volutpat, vel sagittis lorem finibus.
                 Sed egestas imperdiet dolor non tincidunt. Donec volutpat sem
                 in libero lacinia mollis. Sed imperdiet euismod porttitor.
                 Vestibulum condimentum purus eget turpis iaculis, et volutpat
                 neque scelerisque. Nulla vitae malesuada felis. Quisque
                 ultricies in enim eget aliquet. Pellentesque ut fringilla nunc,
                 quis pellentesque nisl. Mauris eleifend luctus ante sit amet
                 consequat. Mauris quis sem sit amet orci sagittis egestas.
             </p>
             <p>
                 Proin a maximus ex. Nam laoreet iaculis quam. Maecenas euismod
                 massa vitae ante finibus, in ullamcorper eros tristique. Nunc
                 fringilla faucibus elit vitae finibus. Proin elementum diam
                 sapien. Class aptent taciti sociosqu ad litora torquent per
                 conubia nostra, per inceptos himenaeos. Ut eu diam tempus,
                 malesuada arcu nec, maximus massa. Nulla sed convallis nisl, ac
                 tristique tortor. Donec quis porta justo. Donec ut ornare
                 ligula. Vestibulum at egestas lacus. Ut at ante sit amet orci
                 condimentum tristique eu vitae mi. Sed commodo velit bibendum
                 nisl egestas malesuada. Duis interdum bibendum convallis.
             </p>
             </p>
            </div>
        </div>
          
      <div class="ideen-bag-div" style="z.index:2">
            <h2 id="ide-title"> Grønt mad </h2>
            <!--<img src="img/food-bg.jpg" id="frontimg" style="z.index:1">-->
            <?php include 'Slideshow.php'; ?>
            <div class="ideen-bag-text-div">
             <h3> Information om Maden </h3>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                 vulputate efficitur sagittis. Proin felis tellus, congue ac
                 porttitor vel, iaculis ac nunc. Praesent aliquet eros at diam
                 sollicitudin, quis aliquam erat vehicula. In nisl lorem, congue
                 sit amet enim a, pretium euismod sem. Sed leo ligula, ultricies
                 eu magna vel, tristique bibendum est. Sed cursus ornare
                 imperdiet. Morbi urna ipsum, porta sit amet mattis vitae,
                 euismod a felis. Mauris sit amet diam in ipsum commodo accumsan
                 nec non urna.
             </p>
             <p>
                 In ultrices massa in tincidunt pretium. Ut sit amet arcu eu
                 tortor lobortis hendrerit. Maecenas quis quam enim. Nunc at
                 augue scelerisque, lobortis lectus vitae, pharetra lacus. Nunc
                 accumsan magna vitae sem volutpat, vel sagittis lorem finibus.
                 Sed egestas imperdiet dolor non tincidunt. Donec volutpat sem
                 in libero lacinia mollis. Sed imperdiet euismod porttitor.
                 Vestibulum condimentum purus eget turpis iaculis, et volutpat
                 neque scelerisque. Nulla vitae malesuada felis. Quisque
                 ultricies in enim eget aliquet. Pellentesque ut fringilla nunc,
                 quis pellentesque nisl. Mauris eleifend luctus ante sit amet
                 consequat. Mauris quis sem sit amet orci sagittis egestas.
             </p>
            </div>
            
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
