<!-- INICIO DE CÓDIGO HTML PROYECTO PERSONAL KASUAL BRAND -->
<!DOCTYPE html>

<!-- Idioma de la Página Web -->
<html dir="ltr" lang="es">

<!-- Datos Página -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título Página -->
    <title>KASUAL BRAND</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">

    <!-- Estas dos lineas son para Enlazar con Normalize, van juntas, primera linea : precarga. segunda linea: enlace para la hoja CSS -->
    <link rel="preload" href="CSS/Normalize.css">
    <link href="CSS/Normalize.css" rel="stylesheet">

    <!-- Lineas para enlazar HTML-CSS del PROYECYO PERSONAL -->
    <link rel="preload" href="CSS/Style.css">
    <link href="CSS/Style.css" rel="stylesheet">

</head>



<!-- Cuerpo página web -->

<body id="ParteSuperior">

    <audio src="AUDIOS/HiloMusical.mp3" autoplay></audio>

    <!-- Menu de la cabecera de la pagina -->
    <header class="Menu">



        <!-- Enlaces del Menu -->
        <nav class="EnlacesMenu">

            <!-- Logo de la marca de ropa -->
            <div class="Logo">

                <img src="IMGorigins/LogoMarca2.png">
            </div>

            <div class="menuD1">

                <a href="catalogoProductos.php">CATALOGO PRODUCTOS</a>

                <li class="subD1">

                    <a href="#Camisetas"> CAMISETAS </a>
                    <a href="#Sudaderas"> SUDADERAS </a>
                    <a href="#Gorras"> GORRAS </a>
                    <a href="#Pantalones"> PANTALONES</a>

                </li>

            </div>

            <div class="menuD2">

                <a href="sobreNosotros.php">SOBRE NOSOTROS</a>

                <li class="subD2">

                    <a href="#Inicios">INICIOS</a>
                    <a href="#Historia">HISTORIA</a>
                    <a href="#Procedencia">PROCEDENCIA</a>
                    <a href="#Inspiraciones">INSPIRACIONES</a>
                </li>

            </div>

            <div class="menuD3">

                <a href="todosConjuntos.php">TODOS LOS CONJUNTOS</a>

                <li class="subD3">

                    <a href="#Chandals">CHANDALS</a>
                    <a href="#Conjuntos">CONJUNTOS</a>
                </li>

            </div>

            <div class="menuD4">

                <a href="#">ATENCION AL CLIENTE</a>

                <li class="subD4">

                    <a href="mailto:costasruben@hotmail.com">E-MAIL</a>
                    <a href="https://instagram.com/ksual_brand?igshid=MzRIODBiNWFIZA==">INSTAGRAM</a>
                    <a href="https://wa.me/+34678676767/?text=manda%20un%20mensaje%20para%20realizar%20un%20pedido">WHATSAPP</a>
                </li>
            </div>

        </nav>

        <!-- Iconos del Menu principal -->

        <!-- Icono Enviar Mensaje -->
        <div class="registro contenedor">

            <div class="login-container">

                <h2> Kasual Brand</h2>

                <form id="login-form">

                    <input type="text" placeholder="Usuario" id="username">
                    <input type="password" placeholder="Contraseña" id="password">

                    <button type="submit">Iniciar sesión</button>
                </form>
            </div>

        </div>

    </header>

    <!-- Imagen de Portada de la Web (Hacer Transicionesde varias imagenes) -->
    <section class="Portada">


        <div class="Imgportada ">

            <!-- Imagenes Baner Interactivo con Flex -->
            <img class="imgportada1" src="IMG/Bañador.jpg">
            <img class="imgportada2" src="IMG/Dana.jpg">
            <img class="imgportada3" src="IMG/Brenda.jpg">
            <img class="imgportada4" src="IMG/Dany.jpg">
            <img class="imgportada5" src="IMG/Omar.jpg">

        </div>

    </section>

    <!-- seccion de pequeña historia  -->
    <section class="Pequeñahistoria contenedor ">

        <!-- Encabezado Pequeñahistoria -->
        <div class="Encabezadohistoria">
            <h2>SOBRE NOSOTROS: </h2>
        </div>

        <!-- Texto Pequeñahistoria -->
        <div class="Textohistoria">
            <h3>Elaboramos cada prenda desde la creación del diseño, hasta su confección en nuestro pequeño taller.
            </h3>
            <h3>Ubicado en un humilde barrio da Galiza.</h3>

        </div>
    </section>


    <section class="Eslogan contenedor">

        <!-- Betsellers de Kasual  -->
        <div class="Textoeslogan">

            <h4>-DESCUBRE NUESTROS BESTSELLER-</h4>
        </div>

    </section>

    <!-- Primer catalogo de Imagenes BestSeller mas precioss -->
    <section class="Catalogo1 contenedor">

        <!-- Primer grupo de 3 imagenes (Catalogo1) grupo de dos imagenes -->
        <img src="IMG/Bermuda.jpg">
        <!--Propiedades del Selector de tallas -->
        <div class="product1">

            <!-- Imagen encima del selector de tallas opcional(quitar) -->
            <select>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option>
            </select>
            <select>
                <option value="1 Ud">1 Ud</option>
                <option value="2 Uds">2 Uds</option>
                <option value="3 Uds">3 Uds</option>
            </select>
            <div class="MiniTexto">
                <p>DESCRIPCION:</p>
            </div>

            <button href="#">AÑADIR AL CARRITO</button>

        </div>


        <img src="IMG/Sudadera.jpg">
        <!--Propiedades del Selector de tallas -->
        <div class="product1">

            <!-- Imagen encima del selector de tallas opcional(quitar) -->
            <select>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option>
            </select>
            <select>
                <option value="1 Ud">1 Ud</option>
                <option value="2 Uds">2 Uds</option>
                <option value="3 Uds">3 Uds</option>
            </select>
            <div class="MiniTexto">
                <p>DESCRIPCION:</p>
            </div>

            <button href="#">AÑADIR AL CARRITO</button>

        </div>


        <img src="IMG/Barberia.jpg">
        <!--Propiedades del Selector de tallas -->
        <div class="product1">

            <!-- Imagen encima del selector de tallas opcional(quitar) -->
            <select>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option>
            </select>
            <select>
                <option value="1 Ud">1 Ud</option>
                <option value="2 Uds">2 Uds</option>
                <option value="3 Uds">3 Uds</option>
            </select>
            <div class="MiniTexto">
                <p>DESCRIPCION:</p>
            </div>

            <button href="#">AÑADIR AL CARRITO</button>

        </div>


    </section>

    <!-- Segundo catalogo de Imagenes BestSeller mas precioss -->
    <section class="Catalogo2 contenedor">

        <!-- Segundo grupo de 3 imagenes (Catalogo2) grupo de dos imagenes -->
        <img src="IMG/CamiGranate.jpg">
        <!--Propiedades del Selector de tallas -->
        <div class="product1">

            <!-- Imagen encima del selector de tallas opcional(quitar) -->
            <select>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option>
            </select>
            <select>
                <option value="1 Ud">1 Ud</option>
                <option value="2 Uds">2 Uds</option>
                <option value="3 Uds">3 Uds</option>
            </select>
            <div class="MiniTexto">
                <p>DESCRIPCION:</p>
            </div>

            <button href="#">AÑADIR AL CARRITO</button>

        </div>


        <img src="IMG/Bañador.jpg">
        <!--Propiedades del Selector de tallas -->
        <div class="product1">

            <!-- Imagen encima del selector de tallas opcional(quitar) -->
            <select>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option>
            </select>
            <select>
                <option value="1 Ud">1 Ud</option>
                <option value="2 Uds">2 Uds</option>
                <option value="3 Uds">3 Uds</option>
            </select>
            <div class="MiniTexto">
                <p>RDESCRIPCION:</p>
            </div>

            <button href="#">AÑADIR AL CARRITO</button>

        </div>


        <img src="IMG/TopNegro.jpg">
        <!--Propiedades del Selector de tallas -->
        <div class="product1">

            <!-- Imagen encima del selector de tallas opcional(quitar) -->
            <select>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option>
            </select>
            <select>
                <option value="1 Ud">1 Ud</option>
                <option value="2 Uds">2 Uds</option>
                <option value="3 Uds">3 Uds</option>
            </select>

            <div class="MiniTexto">

                <p>DESCRIPCION:</p>
            </div>

            <button href="#">AÑADIR AL CARRITO</button>

        </div>



    </section>


    <section class="EncabezadoCatalogo contenedor">
        <h4>LO KASUAL NUNCA PASA DE MODA...</h4>
    </section>


    <!-- Contenedor de Catologo extenso -->
    <section class="CatalogoGeneral1 contenedor">

        <div class="Foto1">

            <img src="IMG/AronPantalon.jpg">

            <!--Propiedades del Selector de tallas -->
            <div class="product">

                <!-- Imagen encima del selector de tallas opcional(quitar) -->
                <select>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>
                    <option value="3XL">3XL</option>
                </select>
                <select>
                    <option value="1 Ud">1 Ud</option>
                    <option value="2 Uds">2 Uds</option>
                    <option value="3 Uds">3 Uds</option>
                </select>
            </div>
            <button href="#">AÑADIR AL CARRITO</button>
            <p>ESTA PRENDA ESTA CONFECCIONADA POR NUESTROS ARTESANOS DEL VINILO EN NUESTRA CENTRAL DE VIGO</p>

        </div>

        <div class="Foto2">

            <img src="IMG/Viko.jpg">

            <!--Propiedades del Selector de tallas -->
            <div class="product">

                <!-- Imagen encima del selector de tallas opcional(quitar) -->
                <select>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>
                    <option value="3XL">3XL</option>
                </select>
                <select>
                    <option value="1 Ud">1 Ud</option>
                    <option value="2 Uds">2 Uds</option>
                    <option value="3 Uds">3 Uds</option>
                </select>
            </div>
            <button href="#">AÑADIR AL CARRITO</button>
            <p>ESTA PRENDA ESTA CONFECCIONADA POR NUESTROS ARTESANOS DEL VINILO EN NUESTRA CENTRAL DE VIGO</p>

        </div>

        <div class="Foto3">

            <img src="IMG/Gato.jpg">

            <!--Propiedades del Selector de tallas -->
            <div class="product">

                <!-- Imagen encima del selector de tallas opcional(quitar) -->
                <select>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>
                    <option value="3XL">3XL</option>
                </select>
                <select>
                    <option value="1 Ud">1 Ud</option>
                    <option value="2 Uds">2 Uds</option>
                    <option value="3 Uds">3 Uds</option>
                </select>
            </div>
            <button href="#">AÑADIR AL CARRITO</button>
            <p>ESTA PRENDA ESTA CONFECCIONADA POR NUESTROS ARTESANOS DEL VINILO EN NUESTRA CENTRAL DE VIGO</p>

        </div>

    </section>


    <!-- SECCION PARA LAS PROMOCIONES -->
    <h4>PROMOCIONES DE PRENDAS MAS IMAGENES</h4>

    <section id ="promocion" class="Promociones">


        <div class="Textopromociones">

            <a href="promociones.php">

                PROMOCION DEL 60%

            </a>
        </div>

    </section>

    <!-- SECCION PACKS DE ROPA AHORRO -->
    <h4>PACKS DE ROPA MAS IMAGENES</h4>

    <section class="Packs contenedor">


        <div class="Pack1">
            <p>POLO + BERMUDAS</p>
            <p>Breve descripcion de los dos elementos juntos (sus colores, como combinan entre ellos ...)</p>
            <div>
                <img src="IMG/Conjunto1.jpg">
            </div>
        </div>

        <div class="Pack2">
            <p>CAMISETA + GORRA</p>
            <p>Breve descripcion de los dos elementos juntos (sus colores, como combinan entre ellos ...)</p>
            <div> <img src="IMG/CamiGorra.jpg">
            </div>
        </div>

        <div class="Pack3">
            <p>SUDADERA + GORRA</p>
            <p>Breve descripcion de los dos elementos juntos (sus colores, como combinan entre ellos ...)</p>
            <div>
                <img src="IMG/SudaderaGorra.jpg">
            </div>
        </div>

        <div class="Pack4">
            <p>CHAQUETA + GORRO</p>
            <p>Breve descripcion de los dos elementos juntos (sus colores, como combinan entre ellos ...)</p>
            <div><img src="IMG/GaboGorro.jpg">
            </div>
        </div>

    </section>

    <!-- Seccion de los video de promocion -->
    <section class="videoPromo contenedor">

        <video id="video1" src="IMGorigins/VideoOmar.mp4" autoplay loop></video>
        <video id="video2" src="IMGorigins/VideoOmar.mp4" autoplay loop></video>
        <video id="video3" src="IMGorigins/VideoNube.mp4" autoplay loop></video>

    </section>



    <!-- Botón fijo de bajada al principio de la web del margen derecho de la web -->
    <section id="BotonFijo1" class="BotonFijo1">

        <a href="#ParteInferior"> <img src="IMGorigins/flechaAbajo.png"></a>
    </section>

    <!-- Botón fijo de subida al principio de la web del margen derecho de la web -->
    <section id="BotonFijo2" class="BotonFijo2">

        <a href="#ParteSuperior"> <img src="IMGorigins/flechaAbajo.png"></a>
    </section>



    <!-- Pie de pagina con Enlaces -->
    <footer id="ParteInferior">

        <!-- Sección Botones de Compra -->
        <section class="Botonescompra contenedor">

            <!-- Boton rojo redireccion Instagram -->
            <div class="Botoninsta">
                <a href="https://instagram.com/ksual_brand?igshid=MzRIODBiNWFIZA=="> PERFIL DE INSTAGRAM :</a>
                <p> @KASUAL_BRAND </p>
            </div>

            <!-- Boton  para pedidos atrasves de WHATSAPP -->
            <div class="Botonwas">
                <a href=" https://wa.me/+34678676767/?text=manda%20un%20mensaje%20para%20realizar%20un%20pedido">PEDIDOS
                    A TRAVÉS DE WHATSAPP :</a>
                <p>Nº: 666 77 88 99</p>
            </div>

            <!-- Boton para enviar correo electronico -->
            <div class="Botoncorreo">
                <a href="mailto:costasruben@hotmail.com">PREGUNTANOS CUALQUIER DUDA :</a>
                <p>Kasual_Brand@hotmail.com</p>
            </div>

        </section>
        <!-- ESTRUCTURA DE UN QUESTIONARIO DE SATISFACIÓN -->
        <section class="Cuestionario contenedor">

            <title>Cuestionario de satisfacción</title>

            <div class="question">
                <label> Pregunta 1: ¿Cómo calificarías nuestro servicio? </label>
                <input type="number" min="1" max="10" step="1">
            </div>

            <div class="question">
                <label>"Pregunta 2:" ¿Cuál es tu nivel de satisfacción con nuestro producto?</label>
                <input type="number" min="1" max="10" step="1">
            </div>
        </section>

        <!-- Sección de páginas legales para pie de pagina  -->
        <div class="PaginasLegales">

            <!-- Enlaces de las paginas legales -->
            <a href="FQA.php">(FAQ)</a>
            <a href="CookiesYprivacidad.php">Politica de Cookies</a>
            <a href="CookiesYprivacidad.php">Politica De Privacidad</a>
            <a href="avisoLegal.php">Aviso Legal</a>

        </div>

    </footer>

    <script src="Java.js"></script>

</body>


</html>