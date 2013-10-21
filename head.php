<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Atare</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="css/atare.css">
    <!--<script src="js/jquery-1.8.3.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/joverlay.min.js"></script>
    <script src="js/scripts-ck.js"></script> 
    
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="./index_files/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="./index_files/jquery.fancybox.css" media="screen">
    
    
    <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox({
          padding: 5,
          type: 'iframe',
          scrolling : 'false',
          autoSize: false,
                    autoDimensions: false,
                    width: 960,
                    height: 500,
                    fitToView: false,
          
        
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        
        });

    });
  </script>
 
 </head>

<body>