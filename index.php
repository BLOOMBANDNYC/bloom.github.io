<!--

  gdocs-cms by mikey ray-von

  mexico city 2015

  https://github.com/mikeyrayvon/gdocs-cms

-->

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Example</title><!-- replace Example with your title -->

    <meta name="description" content="Example"><!-- replace Example with your description -->

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- open graph for facebook and stuff -->

    <meta property="og:title" content="Example" /><!-- replace Example with your title -->

    <meta property="og:url" content="http://example.com" /><!-- replace http://example.com with your url -->

    <meta property="og:description" content="Example" /><!-- replace Example with your description -->

    <meta property="og:type" content="website" />

    <meta property="og:image" content="http://example.com/image.jpg" /><!-- replace http://example.com/image.jpg with a link to an image-->



    <style type="text/css"> html, body {margin: 0; padding: 0; width: 100%;height: 100%;} #contents {width: 1000px;margin: 50px auto;} img {max-width: 100%} @media screen and (max-width: 1000px) { #contents {width: 90%;margin: 5%;} } @media screen and (max-width: 700px) { span, img, iframe { max-width: 100% !important;width: auto !important;height: auto !important;}} </style>

  </head>

  <body>

    <!-- the important part -->

<?php

      /* 

      replace https://docs.google.com/document/d/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/pub 

      with the link to yr published google doc 

      */

      $publishedDocUrl = "https://docs.google.com/document/d/e/2PACX-1vTw-P4kGsBeIUUu72-v114fEnREFB610x1kUb9SyUUwqUBbw7oePkPdSEcjgmQIBpEdZKxvVcEKx6Jx/pub";



      $ch = curl_init();

      $timeout = 5;

      curl_setopt($ch, CURLOPT_URL, $publishedDocUrl);

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

      $html = curl_exec($ch);

      curl_close($ch);

      $dom = new DOMDocument();

      $dom->encoding = 'utf-8';

      $dom->loadHTML(utf8_decode( $html ));

      $dom->preserveWhiteSpace = false;

      $dom->validateOnParse = true;

      $contents = $dom->saveHTML($dom->getElementById('contents'));

      echo $contents;

?>

    <!-- Google Analytics: change UA-XXXXX-X to be yr site's ID. -->

    <script>

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



      ga('create', 'UA-XXXXXXXX-X', 'auto');

      ga('send', 'pageview');

    </script>

  </body>

</html>
