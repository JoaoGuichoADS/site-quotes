<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Frase do dia</title>
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="wrapper">
      <header>Frase do dia</header>
      <div class="content">
        <div class="quote-area">
          <i class="fas fa-quote-left"></i>
          <p class="quote">
          <?php
            $array = array('Nossos fracassos, às vezes, são mais frutíferos do que os êxitos.', 'A persistência é o caminho do êxito.', 'Os problemas são oportunidades para se mostrar o que sabe.', 'É em meio a dificuldade que se encontra a oportunidade.', 'As pessoas costumam dizer que a motivação não dura para sempre. Bem, nem o efeito do banho, por isso recomenda-se diariamente.', 'Tente de novo. Fracasse de novo. Mas fracasse melhor.', 'É costume de um tolo, quando erra, queixar-se dos outros. É costume de um sábio queixar-se de si mesmo.', 'Faça, porque se você não fizer, em breve, o resto será silêncio', 'A verdadeira motivação vem de realização, desenvolvimento pessoal, satisfação no trabalho e reconhecimento.', 'O verdadeiro heroísmo consiste em persistir por mais um momento, quando tudo parece perdido.');
            shuffle($array );
            echo current($array );
          ?>
          </p>
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
      <div class="buttons">
        <div class="features">
          <ul>
            <li class="speech"><i class="fas fa-volume-up"></i></li>
            <li class="copy"><i class="fas fa-copy"></i></li>
            <li class="twitter"><i class="fab fa-twitter"></i></li>
          </ul>
          <form method="post">
            <button class="bot">Nova frase</button>
          </form>
        </div>
      </div>
    </div>
    <script src="frase.js">
  </body>
</html>