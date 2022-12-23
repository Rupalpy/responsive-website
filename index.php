<?php include 'functions.php' ?>
<?php include 'header.php' ?>

<?php

$drinks = get_drinks();

?>
    <section class="background firstsection">
        <div class="box-main">

            <div class="firsthalf">

                <p class="textbig">In Drinks We Believe</p>
                <p class="textsmall">Drinquid provides you wide range of alcoholic and non alcoholic drinks.</p>
                <p class="textsmall">Drinquid is the perfect place for your perfect taste.
                    Just 3 steps to bring your favourite at your home.
                
                
                        Choose your favourite drinks
                        Add it to cart and fill the details
                        Complete the payment procedure
                    
                    And Your order is placed!!!</p>
                <div class="button">
                    <button class="btn">Alcoholic</button>
                    <button class="btn">Non-Alcoholic</button>
                </div>
            </div>
            <div class="secondhalf">
                <img src="img/glass.webp" alt="future image">


            </div>
        </div>
    </section>
    <section><h2 class="textcenter">Types of Drinks we offer</h2></section>
    <main>
 

  <div class="store">
    <div class="container">
      <?php if (mysqli_num_rows($drinks)) { ?>
        <div class="drinks flex">
          <?php foreach ($drinks as $drink) { ?>
            <div class="drink">
              <div class="image">
                <img src="img/<?= $drink['image'] ?>" alt="" />
              </div>
              <div class="content">
                <h3><?= $drink['name'] ?></h3>
                <p class="description">
                  <?= $drink['description'] ?>
                </p>
                <p class="price">£<?= $drink['price'] ?></p>
                <div class="add-to-basket">
                  <form action="add-to-cart.php" method="POST">
                    <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                    <input type="hidden" id="item-<?= $drink['d_id'] ?>" name="quantity" value="1">
                    <button type="submit" name="add-to-cart" class="btn">Add To Cart</button>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</main>
    
    
    <section class="contact " id="contact">
        <h2 class="textcenter">Contact Us</h2>
        <div class="form">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="name" id="email" placeholder="Enter your email">
            <input type="number" name="name" id="phone" placeholder="Enter your phone">
            <textarea name="name" id="area" cols="30" rows="10" placeholder="elaborate your concern"></textarea>
            <button class="btn btndark">Submit</button>
        </div>
    </section>
    <footer class="background">
        <p class="textcenter">
            Copyright &copy; 2027 -All Rights Reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>
</body>

</html>