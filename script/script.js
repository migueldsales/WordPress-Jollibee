const btnCart = document.querySelector(".btnCart");
const cart = document.querySelector(".cart");
const cartWrapper = cart.querySelector ('.cart__wrapper');
const count= document.querySelector(".count")

let cartArr =[]


btnCart.addEventListener('click', () => {
  cart.classList.toggle('open')
})


const btnAddtoCarts = document.querySelectorAll('.btnAddtoCart');

btnAddtoCarts.forEach((btn)=> {
  btn.addEventListener('click', (e)=> {
    e.target.parentElement;
    const cartInfo = {
      img: e.target.parentElement.querySelector('img').src,
      title: e.target.parentElement.querySelector('h4').textContent,
      price: e.target.parentElement.querySelector('p span').textContent,
    }
    // when - click button - puntahan parent then select
    // click continously... array
    cartArr.push(cartInfo)
    if (cartArr.length !== 0) {
      count.style.display = "flex";
      count.textContent = cartArr.length
    }

    count.textContent=cartArr.length

    const cartItem = document.createElement('div');
    const div = document.createElement('div');
    cartItem.classList = "cartItem";
    const img = document.createElement('img')
    const h4 = document.createElement('h4')
    const span = document.createElement('span')
    // html pero javascript ang gamit

    
   img.setAttribute('src', e.target.parentElement.querySelector('img').src);
   h4.innerHTML = e.target.parentElement.querySelector('h4').textContent;
   span.innerHTML = e.target.parentElement.querySelector('span').textContent;
    //get source
   
  // yung CartItem...
   cartItem.appendChild(img)
   div.appendChild(h4)
   div.appendChild(span)
   cartItem.appendChild(div)

   cartWrapper.appendChild(cartItem)
   })
})

const btnModal = document.querySelector("#btnModal");
const btnClose = document.querySelector("#btnClose");
const modal = document.querySelector(".modal");

if(btnModal && modal) {
  btnModal.addEventListener("click", addShowClass);
  btnClose.addEventListener("click", removeShowClass);

  function addShowClass(){
    modal.classList.add("show")
  }
  function removeShowClass(){
    modal.classList.remove("show")
  }

}


