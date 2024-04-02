<section class="content">
        <div class="container-fluid">
          <div id="product-list" class="row">
            <?php
              $products = include '../utility/api.php';
              foreach ($products as $product):
            ?>
            <div class="col-md-3 col-6 mb-4 d-flex justify-content-center">
              <div class="card">
                <div class="image-container">
                  <div class="first">
                    <div class="d-flex justify-content-between align-items-center">
                      <span class="discount">-25%</span>
                      <span class="wishlist"><i class="fa fa-heart-o"></i></span>
                    </div>
                  </div>

                  <img
                    src="<?php echo $product['image']; ?>"
                    class="img-fluid rounded thumbnail-image"
                  />
                </div>

                <div class="product-detail-container p-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="dress-name"><?php echo $product['title']; ?></h5>

                    <div class="d-flex flex-column mb-2">
                      <span class="new-price">$<?php echo $product['price']; ?></span>
                      <small class="old-price text-right"><i class="fa fa-shopping-bag" aria-hidden="true"><?php echo $product['rating']['count']; ?></i></small>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between align-items-center pt-1">
                    <div class="color-select d-flex">
                      <input type="button" name="grey" class="btx creme" />
                      <input type="button" name="red" class="btx red ml-2" />
                      <input type="button" name="blue" class="btx blue ml-2" />
                    </div>

                    <div class="d-flex">
                      <span class="item-size mr-2 btx" type="button">S</span>
                      <span class="item-size mr-2 btx" type="button">M</span>
                      <span class="item-size btx" type="button">L</span>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between align-items-center pt-1">
                    <div>
                      <i class="fa fa-star-o rating-star"></i>
                      <span class="rating-number"><?php echo $product['rating']['rate']; ?></span>
                    </div>

                    <span class="buy">Beli <i class="fa fa-cart-plus" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->