<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- RemixIcon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.3.0/remixicon.css" integrity="sha512-0JEaZ1BDR+FsrPtq5Ap9o05MUwn8lKs2GiCcRVdOH0qDcUcCoMKi8fDVJ9gnG8VN1Mp/vuWw2sMO0SQom5th4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="product.css" />
  <title>Our Products</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="nav-center container">
        <!-- Hamburger Menu -->
        <!-- <input type="checkbox" id="menu-toggle" class="menu-toggle" />
          <label for="menu-toggle" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
          </label> -->
        <!--# shopping-cart #-->
        <div class="back-button">
        <form>
                    <button type="submit" formaction="user.php">Homepage</button>
                </form>
        </div>
        <div class="cart-btn">
          <span class="nav-icon">
            <i class="ri-shopping-cart-line"></i>
          </span>
          <div class="cart-items">0</div>
        </div>
        </ul>
      </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="">
      <div class="search-container">
        <div class="search-border container">
          <i class="search-icon ri-search-2-line"></i>
          <input class="search" type="search" placeholder="Search" />
        </div>
      </div>
      <div class="">
        <div class="products">
          <h2 class="section-title">Our Products</h2>

          <div class="container">
            <div class="products-center">
              <!-- Product-1 -->
              <!-- <div class="product">
                  <div class="img-container">
                    <img
                      class="product-img"
                      src="./Images/burger-bun.jpg"
                      alt="p-1"
                    />
                  </div>

                  <div class="product-desc">
                    <p class="product-title">
                      Burger Buns
                    </p>
                    <p class="product-price">Rs.500</p>
                  </div>

                  <button class="add-to-cart">Add tO Cart</button>
                </div> -->
              <!--  -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <section class="cart-modal">
    <div class="backdrop"></div>

    <div class="cart">
      <h3 class="cart-title">Your Cart</h3>

      <!--# cart-body #-->
      <div class="cart-content">
        <!-- <div class="cart-item">

            <img
              class="cart-item-img"
              src="./images/burger-bun.jpg"
            />

            <div class="cart-item-desc">
              <h4>product title</h4>
              <h5> 120</h5>
            </div>

            <div class="cart-item-controller">
              <i class="ri-arrow-up-s-line"></i>
              <p>1</p>
              <i class="ri-arrow-down-s-line"></i>
            </div>

            <i class="ri-delete-bin-line"></i>
            
          </div> -->
      </div>
      <div class="cart-footer">
        <div class="">
          <span class="cart-total">Total price: Rs.90</span>
        </div>
        <div class="">
          <button class="btn clear-cart">Clear</button>
          <button class="btn cart-item-confirm">Checkout</button>
        </div>
      </div>
    </div>
  </section>

  <script type="module" src="product.js"></script>
</body>

</html>