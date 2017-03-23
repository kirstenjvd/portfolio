<script>
  WebFontConfig = {
   google: {
          families: ['Roboto Condensed:400,300,700', 'Oswald:400,700,300' , 'Montserrat:400,700', 'Noto Serif:400,700,400italic,700italic']
        }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>


    <link rel="stylesheet" href="styles/main.css">
    <?php include_once("inc/analyticstracking.php") ?>
    <script src="scripts/modernizr.js"></script>
    <script src="scripts/jquery.js"></script>
        <!-- build:js({app,.tmp}) scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
</body>
</html>