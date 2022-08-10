<div class="banner" id="banner">
  <div class="contenedor">
    <div class="banner__content container">

      <div class="banner__content-title__description">
        <?php if (empty($user)) { ?>
          <h2 class="banner__titulo">Hola bienvenido, ¡Gracias por visitarnos!</h2>
        <?php } else { ?>
          <h2 class="banner__titulo">Hola <?php echo ucwords($user['name']); ?>, ¡Gracias por visitarnos!</h2>
        <?php } ?>

          <p class="banner__txt">Somos una agencia digital dedicada al diseño y desarrollo web, a manejar las herramientas digitales como el SEO, SEM, campañas de marketing en redes sociales, tenemos una gran variedad de estrategias digitales que te pueden ayudar a mejorar tus servicios, entregamos todos nuestros proyectos a tiempo.</p>    
      </div>

      <div class="banner__continue-container">
        <!-- <div class="banner__continue-container--flex"> -->

          <p class="banner__continue"><a class="banner__continue--link" href="controller/login.controller.php">Iniciar sesión <span class="icon-chevron-right"></span></a></p>

          <p class="banner__continue"><a class="banner__continue--link2" href="controller/registro.controller.php">Registrarse <span class="icon-chevron-right"></span></a></p>
          
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<p class="icon-flecha-p"><a href="#bienvenida"><span class="icon-down-open-big icon-flecha"></span></a></p>

<br>

<div id="bienvenida"></div>

<div class="contenido__info" id="">
  <img src="img/codigo-txt.png" class="contenido__info-img__fondo">
  <div class="contenido__info-contenedor-color">
    <div class="contenido__info-contenedor--flex container">
          <img src="img/development.svg" alt="Desarrollo web en cacahoatan" class="contenido__info-contenedor-img">
          <div class="contenido__info-contenedor-texto">
            <h1 class="contenido__info-contenedor-texto-h2">Diseño y desarrollo web en cacahoatan</h1>
            <p class="contenido__info-contenedor-texto-p">
              Hola si tienes una pequeña o mediana empresa y quieres aumentar tus ventas por internet llegando a más personas esta es tu oportunidad, en InsideWEB desarrollamos tu proyecto. De igual forma si eres un profesional que trabaja de manera independiente y quieres que conoscan tus servicios, necesitas
              tu propia pagina web para generar más credibilidad con tus clientes.</p>
              <p class="contenido__info-contenedor-p"><a class="contenido__info-contenedor-link" href="index.php?action=contact">Contacto &raquo;</a></p>

              <div id="servicios"></div>
          
          </div>
      </div>
  </div>
</div>

<div class="servicios container" id="">

  <h4 class="servicios-titulo">NUESTROS SERVICIOS</h4>
  <div class="servicios-content">

    <div class="servicios__column">
      <a href="controller/formulario_paquetes.controller.php?serv=Diseño Web&paq=">
        <img class="servicios__column-img" src="img/web-design.svg" alt="diseño web en cacahoatan">
      </a>
      <h3 class="servicios__column-title">Diseño web</h3>
      <p class="servicios__column-txt">Te ofrecemos diseños web personalisados elegimos los colores adecuados para tu página web</p>
    </div>

    <div class="servicios__column">
      <a href="controller/formulario_paquetes.controller.php?serv=Desarrollo Web&paq=">
        <img class="servicios__column-img" src="img/developer-web.svg" alt="desarrollo web en cacahoatan">
      </a>
      <h3 class="servicios__column-title">Desarrollo web</h3>
      <p class="servicios__column-txt">El desarrollo web es la
       mejor opcion si quieres una pagina web dinamica con una base de datos donde puedas almacenar y leer información.</p>
    </div>

    <div class="servicios__column">
      <a href="controller/formulario_paquetes.controller.php?serv=Diseño Web Movil&paq=">
        <img class="servicios__column-img" src="img/design-web-movil.svg" alt="diseño web movil en cacahoatan">
      </a>
      <h3 class="servicios__column-title">Diseño web movil</h3>
      <p class="servicios__column-txt">Si tienes una
       pagina web que no se adapte a dispositivos moviles escoge esta opción, adaptamos tu web a diferentes tamaños de pantalla (Móvil, tablet, laptop, pc de escritorio).</p>
    </div>

    <div class="servicios__column">
      <a href="controller/formulario_paquetes.controller.php?serv=Marketing Digital&paq=">
        <img class="servicios__column-img" src="img/marketing.svg" alt="marketing digital en cacahoatan">
      </a>
      <h3 class="servicios__column-title">Marketing Digital</h3>
      <p class="servicios__column-txt">El Marketing Digital es la mercadotecnia atraves de internet y una buena opcion si quieres tener más clientes con la ayuda de las redes sociales.</p>
    </div>

    <div class="servicios__column">
      <a href="controller/formulario_paquetes.controller.php?serv=CMS&paq=">
        <img class="servicios__column-img" src="img/web-design.svg" alt="tienda online en cacahoatan">
      </a>
      <h3 class="servicios__column-title">E-Commerce - Tienda online</h3>
      <p class="servicios__column-txt">Ya tienes un negocio y quieres vender por internet? esta es tu oportunidad te desarrollamos tu propia tienda online con tu marca.</p>
    </div>

    <div class="servicios__column">
      <a href="controller/formulario_paquetes.controller.php?serv=SEO&paq=">
        <img class="servicios__column-img" src="img/seo.svg" alt="SEO y SEM en cacahoatan">
      </a>
      <h3 class="servicios__column-title">SEO y SEM</h3>
      <p class="servicios__column-txt">El SEO y el SEM posiciona tu página web en Google aumentando la probabilidad de aparecer en la primera página y asi tener más visitas a tu web.</p>
    </div>

  </div>

    <!-- <div id="formulario__registro"></div><br><br> -->

</div>

<div class="contenedor-costos" id="costos">

  <!--
  <h2 class="contenedor-costos-titulo container animado">Desarrollo web en cacahoatan, chiapas en apoyo a tu economía tenemos un 50% de descuento en todos nuestros planes y servicios hasta el dia Jueves 31 de Diciembre de 2020. ¡No dejes ir esta oportunidad!</h2>
  -->
  
  <div class="costos-row container">

    <div class="costos-column animado">
      <h3 class="costos-column-titulo">Plan Pyme</h3>
      <h6 class="costos-column-precio-anterior"><s>Antes: $3,999</s></h6>
      <h2 class="costos-column-precio">$1,800</h2>
      
      <p class="costos-column-texto">* Diseño de 1 pàgina web con 4 enlaces</p>
      <p class="costos-column-texto">* Imàgenes de Stock y/o Propias</p>
      <!-- <p class="costos-column-texto">* Posicionamiento en Google</p> -->
      <p class="costos-column-texto">* Integración a redes sociales (Facebook, Twitter, Linkedin, Instagram etc)</p>
      <p class="costos-column-texto">* Responsive Design</p>
      <p class="costos-column-texto">* Hosting</p>
      <p class="costos-column-texto">* Dominio (.com, .net, .org)</p>
      <p class="costos-column-texto">* Administrador de contenidos. Actualice noticias, promociones, imágenes y/o productos.</p>
      <p class="costos-column-texto">* Integraciòn con WhatsApp y/o Messenger</p>
      <p class="costos-column-texto">* Galeria de imàgenes</p>
      <p class="costos-column-texto">* Mapa de ubicaciòn</p>
      <p class="costos-column-texto">* Formulario de contacto</p>
      <p class="costos-column-texto">* Blog (Opcional)</p>
      <p class="costos-column-texto">* Manual de usuario</p>
      <p class="costos-column-texto">* Tiempo de entrega: 14 dias hàbiles</p>
      
    <h3 class="costos-column-titulo">Extras</h3>
      
      <p class="costos-column-texto">* Campaña publicitaria en Facebook Ads. Se añade $2,599 al plan(*Pago mensual)</p>
      <p class="costos-column-texto">* Cambio de idioma. Añadir al plan $1,999</p>
      <p class="costos-column-texto">* Correo corporativo (Ej. info@midominio.com)</p>
      
      <p class="costos-column-p"><a class="costos-column-link" href="controller/formulario_paquetes.controller.php?paq=basico">&laquo; Comprar ahora &raquo;</a></p>
    </div>

    <div class="costos-column animado">
      <h3 class="costos-column-titulo">Plan empresarial</h3>
      <h6 class="costos-column-precio-anterior"><s>Antes: $7,999</s></h6>
      <h2 class="costos-column-precio">$3,999</h2>
      
      <p class="costos-column-texto">* Diseño de 1 pàgina web con 10 enlaces</p>
      <p class="costos-column-texto">* Imàgenes de Stock y/o Propias</p>
      <!-- <p class="costos-column-texto">* Posicionamiento en Google</p> -->
      <p class="costos-column-texto">* Integración a redes sociales (Facebook, Twitter, Linkedin, Instagram etc)</p>
      <p class="costos-column-texto">* Responsive Design</p>
      <p class="costos-column-texto">* Hosting</p>
      <p class="costos-column-texto">* Dominio (.com, .net, .org)</p>
      <p class="costos-column-texto">* Administrador de contenidos. Actualice noticias, promociones, imágenes y/o productos.</p>
      <p class="costos-column-texto">* Integraciòn con WhatsApp y/o Messenger</p>
      <p class="costos-column-texto">* Galeria de imàgenes</p>
      <p class="costos-column-texto">* Mapa de ubicaciòn</p>
      <p class="costos-column-texto">* Formulario de contacto</p>
      <p class="costos-column-texto">* Blog (Opcional)</p>
      <p class="costos-column-texto">* Manual de usuario</p>
      <p class="costos-column-texto">* Tiempo de entrega: 16 dias hàbiles</p>
      
    <h3 class="costos-column-titulo">Extras</h3>
      
      <p class="costos-column-texto">* Campaña publicitaria en Facebook Ads. Se añade $3,599 al plan(*Pago mensual)</p>
      <p class="costos-column-texto">* Cambio de idioma. Añadir al plan $2,999</p>
      <p class="costos-column-texto">* Correo corporativo (Ej. info@midominio.com)</p>
      
      <p class="costos-column-p"><a class="costos-column-link" href="controller/formulario_paquetes.controller.php?paq=premium">&laquo; Comprar ahora &raquo;</a></p>
    </div>

    <div class="costos-column animado">
      <h3 class="costos-column-titulo">Plan personalizado</h3>
      <!--<h6 class="costos-column-precio-anterior"><s>Antes: ?</s></h6>-->
      <h2 class="costos-column-precio">?</h2>
      <p class="costos-column-texto">- Panel de administración</p>
      <p class="costos-column-texto">- SEO</p>
      <p class="costos-column-texto">- Diseño Web Movil</p>
      <p class="costos-column-texto">- Rediseñar Sitio Web</p>
      <p class="costos-column-texto">- Agregar funciones a un sitio web existente</p>
      <p class="costos-column-texto">- Traducir un Sitio Web al Ingles</p>
      <p class="costos-column-descripcion">Si el Plan pyme o el empresarial no se
      ajustan a tus necesidades o si tienes una aplicación web especial por favor envianos un mensaje y nos pondremos en contacto contigo lo más pronto posible.</p>
      <p class="costos-column-p"><a class="costos-column-link" href="controller/formulario_paquetes.controller.php?paq=per">&laquo; Comprar ahora &raquo;</a></p>
    </div>
  </div>
</div>

<div class="container-developer-color">
  <div class="container-developer-flex container">
  <div class="developer-image animadoDerecha">
    <img class="developer-image-img" src="img/programmer-pro.svg">
  </div>  
  <div class="developer-text animadoIzquierda">
    <h2 class="developer-title">Desarrollo Web en cacahoatan</h2>
    <p class="developer-txt">El desarrollo web es la programación de páginas
    web para todo tipo de necesidades principalmente para negocios, es usado en
    empresas para poder brindarles su producto o servicio a sus clientes
    de una manera más comoda y sin salir de casa, es indispensable que cualquier negocio por más pequeño que este sea cuente con su propia página web para brindarles un mejor servicio
    a sus clientes.<br> Desarrollamos tu página web 100% Online, estamos ubicados
    en la ciudad de Cacahoatan, Chiapas, México.</p>
    <div class="developer-networks">
      <a target="_blank" href="https://www.facebook.com/Online-Web-102704511274930/" class="developer-networks-link"><span class="icon-facebook"></span>Facebook</a>
      <a target="_blank" href="https://twitter.com/onlineweb4" class="developer-networks-link"><span class="icon-twitter"></span>Twitter</a>
      <a target="_blank" href="https://www.instagram.com/onlineweb.official" class="developer-networks-link"><span class="icon-instagram"></span>Instagram</a>
      <a target="_blank" href="https://www.linkedin.com/in/joseph-morales-diaz-3410351aa" class="developer-networks-link"><span class="icon-linkedin"></span>LinkedIn</a>
    </div>
  </div>
 </div>
</div>

<div class="container-technologies">
<h2 class="technologies-titulo animado">TECNOLOGIAS</h2>
<div class="contenedor-technologies container">
  <div class="technologies animado">
    <img class="technologies-img" src="img/html.png"/>
    <h2 class="technologies-title">HTML y CSS</h2>
    <p class="technologies-txt">HTML y CSS son los lenguajes base de cualquier web. Con HTML se estructura todo el contenido del sito web y usamos CSS para darle una mejor apariencia a la web, es decir, darle colores, cambiar fuentes, poner fondo, etc.</p>
  </div>
  <div class="technologies animado">
    <img class="technologies-img" src="img/js.png"/>
    <h2 class="technologies-title">JS</h2>
    <p class="technologies-txt">Usamos JS para darle funcionalidad al sitio y junto con CSS crear las animaciones.</p>
  </div>
  <div class="technologies animado">
    <img class="technologies-img" src="img/php.png"/>
    <h2 class="technologies-title">PHP</h2>
    <p class="technologies-txt">PHP es un lenguaje de programación que a diferencia de HTML, CSS y JS que se ejecutan del lado del cliente (Front-end) este se ejecuta del lado del servidor (Back-end) es el encargado de la seguridad y las interacciones con la base de datos.</p>
  </div>
  <div class="technologies animado">
    <img class="technologies-img" src="img/mysql.png"/>
    <h2 class="technologies-title">MySQL</h2>
    <p class="technologies-txt">Usamos MySQL como gestor de bases de datos relacionales, muy importante en el desarrollo de sitios web dinamicos.</p>
  </div>
</div>
</div>

<div class="container">

<!--
<div class="contenido-mv">
  <div class="mision">
    <h3>Mision</h3>
    <p>Nuestra mision es poder facilitar a las empresas y usuarios la creacion de su propio sitio web para que tengan una prensencia online en internet y asi puedan llegar a mas clientes.<br><br></p>
  </div>

  <div class="vision">
    <h3>Vision</h3>
    <p>Expandir y mejorar nuestros servicios para llegar a mas personas logrando asi que cada empresa, mediana empresa o microempresa se beneficie con esta gran herramienta que es internet.</p>
  </div>

  <div class="objetivos">
    <h3>Objetivos</h3>
    <p>Nuestro principal objetivo esta en ir inovando nuestros servicios y ajustarnos a las necesidades de nuestros clientes.<br><br><br><br></p>
  </div>
</div>
-->
</div>
