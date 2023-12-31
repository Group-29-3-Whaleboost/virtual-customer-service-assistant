<style>
  .card-img-top {
    width: 200px;
    height: 200px;
    align-self: center;
  }

  h1 {
    margin-bottom: 50px;
  }
</style>

<body>

  <main>

    <!-- <div class="row">
      <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Cart (<span class="total-count"></span>)</button>
        <button class="clear-cart btn btn-danger">Clear Cart</button>
      </div>
    </div> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
          </div>
          <div class="modal-body">
            <table class="table" style="margin-bottom: 10px;">
              <thead>
                <td>Item</td>
                <td>Price</td>
                <td>Quentity</td>
                <td></td>
                <td>Total</td>
              </thead>
              <tbody class="show-cart">

              </tbody>
            </table>
            <div>Total price: LKR<span class="total-cart"></span></div>
          </div>
          <div class="modal-footer">
            <button class="clear-cart btn btn-danger">Clear Cart</button>
            <button type="button" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table" style="margin-bottom: 10px;">
              <tbody class="show-cart">

              </tbody>
            </table>
            <div>Total price: LKR<span class="total-cart"></span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div> -->
  </main>



  <script>
            // var myModal;
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            document.getElementById('cartIcon').addEventListener('click', function() {
                myModal.show();
            });

            document.getElementById('close').addEventListener('click', function() {
                myModal.hide();
            });
    </script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="<?php base_url() ?> assets\js\bootstrap.min.js"></script>

  <script>
    var shoppingCart = (function () {
      cart = [];

      function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
      }

      function saveCart() {
        sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
      }

      function loadCart() {
        cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
      }
      if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart();
      }

      var obj = {};

      obj.addItemToCart = function (name, price, count) {
        for (var item in cart) {
          if (cart[item].name === name) {
            cart[item].count++;
            saveCart();
            return;
          }
        }
        var item = new Item(name, price, count);
        cart.push(item);
        saveCart();
      }

      obj.setCountForItem = function (name, count) {
        for (var i in cart) {
          if (cart[i].name === name) {
            cart[i].count = count;
            break;
          }
        }
      };
      
      obj.removeItemFromCart = function (name) {
        for (var item in cart) {
          if (cart[item].name === name) {
            cart[item].count--;
            if (cart[item].count === 0) {
              cart.splice(item, 1);
            }
            break;
          }
        }
        saveCart();
      }

      obj.removeItemFromCartAll = function (name) {
        for (var item in cart) {
          if (cart[item].name === name) {
            cart.splice(item, 1);
            break;
          }
        }
        saveCart();
      }

      
      obj.clearCart = function () {
        cart = [];
        saveCart();
      }

     
      obj.totalCount = function () {
        var totalCount = 0;
        for (var item in cart) {
          totalCount += cart[item].count;
        }
        return totalCount;
      }

     
      obj.totalCart = function () {
        var totalCart = 0;
        for (var item in cart) {
          totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
      }

    
      obj.listCart = function () {
        var cartCopy = [];
        for (i in cart) {
          item = cart[i];
          itemCopy = {};
          for (p in item) {
            itemCopy[p] = item[p];

          }
          itemCopy.total = Number(item.price * item.count).toFixed(2);
          cartCopy.push(itemCopy)
        }
        return cartCopy;
      }
      return obj;
    })();


    $('.add-to-cart').click(function (event) {
      event.preventDefault();
      var name = $(this).data('name');
      var price = Number($(this).data('price'));
      shoppingCart.addItemToCart(name, price, 1);
      displayCart();
    });


    $('.clear-cart').click(function () {
      shoppingCart.clearCart();
      displayCart();
    });


    function displayCart() {
      var cartArray = shoppingCart.listCart();
      var output = "";
      for (var i in cartArray) {
        output += "<tr class='custom-row'>"
          + "<td>" + cartArray[i].name + "</td>"
          + "<td>(" + cartArray[i].price + ")</td>"
          + "<td><div class='input-group' style='display: flex;'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
          + "<input style='width: 80px;'type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
          + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
          + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
          + " = "
          + "<td>" + cartArray[i].total + "</td>"
          + "</tr>";
      }
      $('.show-cart').html(output);
      $('.total-cart').html(shoppingCart.totalCart());
      $('.total-count').html(shoppingCart.totalCount());
    }

  

    $('.show-cart').on("click", ".delete-item", function (event) {
      var name = $(this).data('name')
      shoppingCart.removeItemFromCartAll(name);
      displayCart();
    })

    $('.show-cart').on("click", ".minus-item", function (event) {
      var name = $(this).data('name')
      shoppingCart.removeItemFromCart(name);
      displayCart();
    })

    $('.show-cart').on("click", ".plus-item", function (event) {
      var name = $(this).data('name')
      shoppingCart.addItemToCart(name);
      displayCart();
    })

    $('.show-cart').on("change", ".item-count", function (event) {
      var name = $(this).data('name');
      var count = Number($(this).val());
      shoppingCart.setCountForItem(name, count);
      displayCart();
    });

    displayCart();
  </script>

</body>

</html>
