<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Twitter</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>


    
  <script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      auth2 = gapi.auth2.init({
        client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',

      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          document.getElementById('name').innerText = "Signed in: " +
              googleUser.getBasicProfile().getName();
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
  }
  </script>
</head>
<body>
    
    <aside id="socialista">
        <img src="image.png" alt="" width=40px> <br>
        <button class="esquerda"><h1>#  Explorar</h1></button>
        <button class="esquerda"><h1><img src="engre.png" width=40px> Configurações</h1></button>
        
    </aside>

    <aside id="centrao">
    <main>
      <form><input style="width:90%;" type="text"> <button type="submit"><img src="44813.png" alt="lupa" width="9px" height="9px"></button></form>
      <div class="noticia">
        <div class="manchete"> Trending Topic 1</div>
        <div class="subtitulo">Subtítulo da primeira Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 2</div>
        <div class="subtitulo">Subtítulo da segunda Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 3</div>
        <div class="subtitulo">Subtítulo da terceira Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 4</div>
        <div class="subtitulo">Subtítulo da quarta Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 5</div>
        <div class="subtitulo">Subtítulo da quinta Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 6</div>
        <div class="subtitulo">Subtítulo da sexta Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 7</div>
        <div class="subtitulo">Subtítulo da sétima Trending Topic</div>
      </div>
      <div class="noticia">
        <div class="manchete"> Trending Topic 8</div>
        <div class="subtitulo">Subtítulo da oitava Trending Topic</div>
      </div>

</section>
</main>
    </aside>

    <aside id="capitalista">
        <section id="caixinha">
           <h1>Novo no Twitter?</h1>
           <p class="pp">Inscreva-se para ter sua própria timeline personalizada!</p>
           <div id="gSignInWrapper">
    <div id="customBtn" class="customGPlusSignIn">
      <span class="icon"></span>
      <span class="buttonText"> Inscrever-se com o Google</span>
    </div>
  </div>
  <div id="name"></div>
  <div id="appleid-signin">
    <div id="customBtn" class="appleid-signin">
      <span class="icon"></span>
      <div id="appleid-signin"><span class="buttonText"> Inscrever-se com Apple </span></div>
      
    </div>
  </div>
  <div id="name"></div>
  <div id="login">
    <div id="customBtn" class="login">
      <span class="icon"></span>
      <span class="buttonText" onclick="location.href = 'conta.php';"> Entrar no Twitter</span></button>
    </div>
  </div>
  <div id="criar">
    <div id="customBtn" class="login">
      <span class="icon"></span>
      <span class="buttonText" onclick="location.href = 'cadastro.php';"> Criar Conta no Twitter</span></button>
    </div>
  </div>
  <div id="name"></div>
        </section>
    </aside>
    <footer>
    <h2>  Não perca o que está acontecendo </h2>
    <p class="pc"> As pessoas que usam o Twitter são as primeiras a saber. </p>
    </footer>
    <script>startApp();</script>
</body>
</html>