let cart = []; //global

    function addCart(item, price) {
      let existingItem = cart.find(c => c.item === item); //local variable

      if (existingItem) {
        cart[i].quantity += 1;
      }
      cart.push({ item, price, quantity: 1 });
      renderCart(); //nested function
    }

    function renderCart() {
      let cartItem = document.getElementById('cartItems');
      cartItem.innerHTML = "";

      let totalPrice = document.getElementById('totalPrice');

      let total = 0;

      for (let i = 0; i <= cart.length; i++) {
        let li = document.createElement('li');
        li.textContent = `${cart[i].item} (x ${cart[i].quantity}): ${cart[i].price * cart[i].quantity}`;
        cartItem.appendChild(li);
        total = total + cart[i].price * cart[i].quantity;

        let btnIncrement = document.createElement('button');
        btnIncrement.textContent = '+';
        li.appendChild(btnIncrement);

        btnIncrement.onclick = () => {
          cart[i].quantity += 1;
          renderCart();
        }

        let btnDecrement = document.createElement('button');
        btnDecrement.textContent = '-';
        li.appendChild(btnDecrement);

        btnDecrement.onclick = () => {

          if (cart[i].quantity > 1) {
            cart[i].quantity -= 1;
          } else {
            cart.splice(i, 1);
          }
          renderCart();
        }
        totalPrice.innerHTML = 'Total Price: ' + total;
      }

    }