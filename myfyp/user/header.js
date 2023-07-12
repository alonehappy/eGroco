
let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove("active");
    registerForm.classList.remove("active");
    navBar.classList.remove("active");
    addToCart.classList.remove('active')
}
let addToCart = document.querySelector('.cart-container');
document.querySelector('#cart-btn').onclick = () =>{
    addToCart.classList.toggle('active')
    loginForm.classList.remove("active");
    registerForm.classList.remove("active");
    navBar.classList.remove("active");
    searchForm.classList.remove('active');
}
let loginForm = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle("active");
    registerForm.classList.remove("active");
    searchForm.classList.remove('active');
    navBar.classList.remove("active");
    addToCart.classList.remove('active')

}
let registerForm = document.querySelector('.register-form');
document.querySelector('#createIt').onclick = () =>{
    registerForm.classList.toggle("active");
    loginForm.classList.remove("active");
    searchForm.classList.remove('active');
    navBar.classList.remove("active");
    addToCart.classList.remove('active')
}
let navBar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () =>{
    navBar.classList.toggle("active");
    registerForm.classList.remove("active");
    loginForm.classList.remove("active");
    searchForm.classList.remove('active');
    addToCart.classList.remove('active')
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navBar.classList.remove('active');
    addToCart.classList.remove('active')
}



// product slider effect 

var swiper = new Swiper(".product-slider",{
    loop:true,
    spaceBetween:20,
    autoplay: {
        delay:7500,
        disableOnInteraction:false,
    },

    breakpoints:{
        0:{
            slidesPerView:1,
        },
        768:{
            slidesPerView: 2,
        },
        1020:{
            slidesPerView:3,
        },

    },
    
});

// review slider effect 

var swiper = new Swiper(".review-slider",{
    loop:true,
    spaceBetween:20,
    autoplay: {
        delay:7500,
        disableOnInteraction:false,
    },

    breakpoints:{
        0:{
            slidesPerView:1,
        },
        768:{
            slidesPerView: 2,
        },
        1020:{
            slidesPerView:3,
        },

    },
    
});

// add items to cart 

// let products = [
//     {
//         name: "Fresh Cabbage",
//         tag: 'product1',
//         price:120,
//         inCart:0
//     },
//     {
//         name: "Fresh Carrot",
//         tag: 'product2',
//         price:120,
//         inCart:0
//     },
//     {
//         name: "Fresh Potato",
//         tag: 'product3',
//         price:120,
//         inCart:0
//     },
//     {
//         name: "Fresh Orange",
//         tag: 'product4',
//         price:120,
//         inCart:0
//     }
// ];

// // upgrade cart 

// let carts = document.querySelectorAll('.add-cart');
// for(let i = 0; i < carts.length; i++){

   
//     carts[i].addEventListener('click',() =>{
//         cartNumbers(products[i]);
//         totalCost(products[i]);
//     })
// }
// function onLoadCartNumbers (){
//     let productNumbers = localStorage.getItem('cartNumbers');
//     if(productNumbers){
//         document.querySelector('.fa span').textContent =productNumbers;
//     }
// }
// function cartNumbers(product){
//     let productNumbers = localStorage.getItem('cartNumbers');
    
    
//     productNumbers = parseInt(productNumbers);
//     if(productNumbers){
//         localStorage.setItem('cartNumbers',productNumbers + 1);
//         document.querySelector('.fa span').textContent = productNumbers + 1;
//     }else{
//         localStorage.setItem('cartNumbers', 1);
//         document.querySelector('.fa span').textContent = 1;
//     }
//     setItems(product);
// }

// function setItems(product){
//     // let cartItems = localStorage.getItem('productsInCart');
//     cartItems =JSON.parse(cartItems);
//     if(cartItems != null){
//         if(cartItems[product.tag] == undefined){
//             cartItems = {
//                 ...cartItems,[product.tag]: product
//             }
//         }
//         cartItems[product.tag].inCart += 1;
//     }else{
//         product.inCart = 1;
//     cartItems = {
//         [product.tag]:product
//     }
//     }
     
    
//     localStorage.setItem("productsInCart",JSON.stringify(cartItems));
// }

// function totalCost(product){

//     // console.log("Product price is ",product.price);
//     let cartCost = localStorage.getItem('totalCost');
//     console.log("My cartCost is", cartCost)
//     console.log(typeof cartCost);
    
//     if(cartCost != null){
//         cartCost = parseInt(cartCost);
//         localStorage.setItem("totalCost",cartCost + product.price);

//     }
//     else{
//        localStorage.setItem("totalCost",product.price)
//     }
// }
// function displayCart(){
//     let cartItems = localStorage.getItem("productsInCart");
//     cartItems = JSON.parse(cartItems);
//     let productContainer = document.querySelector('.cart-products');
//     let cartCost = localStorage.getItem('totalCost');
//     if(cartItems && productContainer){

//         productContainer.innerHTML = '';
//         Object.values(cartItems).map(item =>{
//             productContainer.innerHTML +=`
//             <div class = "product-container">
//             <div class = "my-product">
//             <img src="./fypimg/${item.tag}.png">
//             <span>${item.name}</span>
//             </div>
//             <div class = "cart-price">Rs/.${item.price}</div>
//             <div class = "quantity"> ${item.inCart}</div>
//             </div>
//             <div class = "total">Rs/.${item.inCart * item.price},00
//             `;
//         });
//         productContainer.innerHTML += `<div class = "basketTotalContainer">
//         <h4 class = "basketTotalTitle">
//         Total Cost
//         </h4>
//         <h4 class = "basketTotal">
//         Rs./${cartCost},00
//         </h4>
//         </div>
//   `
//   productContainer.innerHTML += `

//   <a href = "#" class = "btn checkIt">Check Out </a>
  
//   `
//   ;

//     }

// }


// displayCart();
// onLoadCartNumbers();

// cart end 

