# slider
Como criar um controle no Wordpress de tempo de exibição de um slick slider fullwidth com progress bar para seus posts e
sem utilizar plugins.

Para começar a trabalhar com o Slick imediatamente, há algumas opções de CDN disponíveis para atender os arquivos o mais próximo 
possível de seus usuários, mas usei este:

https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js

PS: lembre-se de utilizar também o jQuery!
  <!--jQuery-->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!--Slick Slider-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

Demo de como funciona o slick slider no CodePen:
https://codepen.io/flannerydesigns/pen/pbzOgg


Abra os documentos adicionados neste repositório e adicione ao seu tema Wordpress.
Para entender o que cada documento contém:

1.functions.php:
Nesse documento cria-se uma nova seção no painel de controle do wordpress, usando uma função do wp_customize. 
Você irá criar a "section", as "settings" e o "control" (no caso, um input type number).
Esse campo será utilizado pelo cliente (ou você mesmo) para determinar o tempo de exibição do slider, ou seja, 
quanto tempo o slider ficará parado, até ocorrer a transição para a próximo slide (post).

2. header.php: 
Aqui você possui o cabeçalho do seu header com o CDN e o script da função que fará o slick slider funcionar.
Dentro dessa função jQuery, há uma parte muito importante que explico que pegará o valor digitado no input e será carregado para a
variável que determina o tempo de exibição do slider,conforme explico a seguir:
       
    var time = <?= get_theme_mod('slider_speed') ?>; ->aqui você pega o valor do ID input e salva na variável cahamda "time"
    $("#_customize-input-slider_speed", window.parent.document).on('change', function(){ ->aqui o jQuery deve pegar os novos valores digitados no input
      time = $(this).val(); -> aqui salva o novo valor na variável "time"
    });
    
PS: lembre-se que você está utilizando a linguagem php e, por isso necessita pegar o valor do input dessa forma: 
<?= get_theme_mod('slider_speed') ?>
e como o input está em uma página (personalizar do Wordpress) e a função do slider em outra página é necessário utilizar
"window.parent.document".

3.index.php:
Nesse documento você encontra o HTML que chamará o conteúdo a ser mostrado pelo slider, nesse caso as imagens destacadas dos posts (thumbnails). Mas conteúdo do slider você poderá criar e adiconar como quiser. O estilo utilizado foi adaptado do exemplo encontrado no CodePen (https://codepen.io/flannerydesigns/pen/pbzOgg).
    

 
