<!--
  Detta är master-vyn som alla andra vyer kommer extenda. Se filen
  "extended-view.blade.php" för exempel på detta.
-->
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    
    <title>
      <!--
        Vi definerar här en sektion, för att göra det möjligt att förändra
        innehållet i våra andra vyer.
      -->
      @section('title')
        My title
      @show
    </title>

  </head>
  <body>

    <!--
      Med "yeild" säger vi bara till att vi vill ha en sektion här, där vi
      har för avsikt att skjuta in innehåll i. "body" kommer vi fylla med
      relevant information från våra andra vyer, beroende på vilken vy som
      visas.
    -->
    @yield('body')

  </body>
</html>
