<html style="background:black;color:white;">
  <head>
    <title>redirecting...</title>
  </head>
  <body>
    <!-- yes I did this all with fronted... -->
    <script>
      var redir = true;
      document.write/* oh yes I did */('<p>redirecting to <a style="color:skyblue;" href="https://ruralanemone.tech' + window.location.pathname + '">ruralanemone.tech' + window.location.pathname + '</a> in 5 seconds...<br>press space to redirect immediately</p><br><br><a href="https://school.ruralanemone.tech' + window.location.pathname + '" style="color:skyblue;">on school wifi? click here!</a> (or press enter)')

      
      setTimeout(function(){
      if(redir){window.location="https://ruralanemone.tech" + window.location.pathname;
      }
      },5000);

      
      window.onload = function() {
   document.getElementsByTagName('body')[0].onkeyup = function(e) { 
      var ev = e || event;
      if(ev.keyCode == 32) { // space key
        redir = false;
        window.location = "https://ruralanemone.tech" + window.location.pathname;
      } else if (ev.keyCode == 13) { // enter key
        redir = false;
        window.location = "https://school.ruralanemone.tech" + window.location.pathname;
      }
   }
};
    </script>
  </body>
</html>