<html style="background:black;color:white;">
  <head>
    <title>redirecting...</title>
  </head>
  <body>
    <!-- yes I did this all with fronted... -->
    <!-- tbh I'm just using backend for rural.cf/* -->
    <!-- it's basically a "404" page for everything that redirects to site.tld/path/to/page.html -->
    <script>
      let redir = true;
      document.write/* oh yes I did */('<html>redirecting to <a href="https://ruralanemone.tech' + window.location.pathname + '">ruralanemone.tech' + window.location.pathname + '</a> in 5 seconds...<br>(press space to redirect immediately)<br><br><br><a href="https://school.ruralanemone.tech' + window.location.pathname + '">on school wifi? click here!</a> (or press enter)<br><br><a href="https://site.rural.cf' + window.location.pathname + '">is *.ruralanemone.tech blocked by your district...?</a> man they\'re getting good (also I don\'t have a keycode for this eh)</html><style>a{color:skyblue;}</style>')

      
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