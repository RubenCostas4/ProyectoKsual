let gridContainer = document.querySelector(".Imgportada")
let imagen1 = document.querySelector(".imgportada1")
let imagen2 = document.querySelector(".imgportada2")
let imagen3 = document.querySelector(".imgportada3")
let imagen4 = document.querySelector(".imgportada4")
let imagen5 = document.querySelector(".imgportada5")


imagen1.addEventListener("mouseover", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "2fr 1fr 1fr 1fr 1fr"
});
imagen1.addEventListener("mouseout", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 1fr 1fr"
});


imagen2.addEventListener("mouseover", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 2fr 1fr 1fr 1fr"
});
imagen2.addEventListener("mouseout", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 1fr 1fr"
});


imagen3.addEventListener("mouseover", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 2fr 1fr 1fr"
});
imagen3.addEventListener("mouseout", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 1fr 1fr"
});


imagen4.addEventListener("mouseover", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 2fr 1fr"
});
imagen4.addEventListener("mouseout", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 1fr 1fr"
});


imagen5.addEventListener("mouseover", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 1fr 2fr"
});
imagen5.addEventListener("mouseout", function (evento) {
    console.log(evento)
    gridContainer.style.gridTemplateColumns = "1fr 1fr 1fr 1fr 1fr"
});


window.addEventListener("scroll", function () {
    var botonSubida = document.querySelector("#BotonFijo2");

    if (window.pageYOffset === 0) {
        botonSubida.style.display = "none";
    } else {
        botonSubida.style.display = "block";
    }
});


window.addEventListener("scroll", function () {
    var botonBajada = document.querySelector("#BotonFijo1");
    var windowHeight = window.innerHeight;
    var maxScroll = document.documentElement.scrollHeight - windowHeight;

    if (window.pageYOffset >= maxScroll - 1) {
        botonBajada.style.display = "none";
    } else {
        botonBajada.style.display = "block";
    }
});



const registro = document.querySelector("#username"); //HEMOS SELECCIONADO YA EL ELEMENTO

registro.addEventListener("click", function (evento) {
    console.log(evento);//ME MUESTRA INFORMACIÓN DEL EVENTO
    evento.preventDefault();// PARA EVITAR QUE EN LOS FORMULARIOS ME RECARGUE LA PÁGINA SOLA
    //SUELE USAR EN FORMULARIOS

    console.log("Introducindo Nome...");
});

const registro1 = document.querySelector("#password"); //HEMOS SELECCIONADO YA EL ELEMENTO

registro1.addEventListener("click", function (evento) {
    console.log(evento);//ME MUESTRA INFORMACIÓN DEL EVENTO
    evento.preventDefault();// PARA EVITAR QUE EN LOS FORMULARIOS ME RECARGUE LA PÁGINA SOLA
    //SUELE USAR EN FORMULARIOS

    console.log("Introducindo Contrasinal...");
});


const promociones = document.querySelector("#promocion"); //HEMOS SELECCIONADO YA EL ELEMENTO

promociones.addEventListener("click", function (evento) {
    console.log(evento);//ME MUESTRA INFORMACIÓN DEL EVENTO
    evento.preventDefault();// PARA EVITAR QUE EN LOS FORMULARIOS ME RECARGUE LA PÁGINA SOLA

});



// Obtener referencias a los elementos necesarios
const addToCartButtons = document.querySelectorAll('.add-to-cart');
// const cartItemsContainer = document.getElementById('cart-items');
// const cartTotalElement = document.getElementById('cart-total');
let cartTotal = 0;
const cart = [];
const productId = 1243;
const productName = "camiseta";
const productPrice = 23.95;  
const item = { id: productId, name: productName, price: productPrice };
// Escuchar el evento de clic en los botones de "Agregar al carrito"
addToCartButtons.addEventListener('click', addToCart);


// Función para agregar un producto al carrito
function addToCart() {

  cart.push(item);
  cartTotal += productPrice;

// Actualizar la interfaz del carrito
updateCartUI();
}

// Función para actualizar la interfaz del carrito
const listItem = document.createElement('li');

function updateCartUI() {
  cartItemsContainer.innerHTML = '';
  cart.forEach(item => {
   
    listItem.textContent = `${item.name} - $${item.price}`;
    cartItemsContainer.appendChild(listItem);
  });

  cartTotalElement.textContent = `Total: $${cartTotal.toFixed(2)}`;
}



// // Obtener referencias a los elementos de video
// var video1 = document.getElementById('video1');
// var video2 = document.getElementById('video2');
// var video3 = document.getElementById('video3');

// // Configurar el inicio del primer video
// video1.addEventListener('canplay', function () {
//     // Configurar el tiempo de inicio deseado (1 segundo antes)
//     video1.currentTime = video1.currentTime;
// });


// // Configurar el inicio del segundo video
// video2.addEventListener('canplay', function () {
//     // Configurar el tiempo de inicio deseado (1 segundo antes)
//     video2.currentTime = video1.currentTime + 1;
// });

// //Configurar el inicio del tercer video
// video3.addEventListener('canplay', function () {
//     //Configurar el tiempo de inicio deseado del video3(1 segundo )
//     video3.currentTime = video2.currentTime + 1;
// });

// // Reproducir los videos automáticamente
// video1.play();
// video2.play();
// video3.play();



















