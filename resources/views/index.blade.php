
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Shop</title>
    <link rel="icon" href="Product_img/logo.png">
    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 fixed-top">
      <div class="container">
        <a
          class="navbar-brand d-flex justify-content-between align-items-center order-lg-0"
          href="index.html"
        >
          <img src="Product_img/logo.png" alt="site icon" />
          <span class="text-uppercase fw-lighter ms-2" style="color: white"
            >Computer Shop</span
          >
        </a>

        <div class="order-lg-2 nav-btns">
          <button
            type="button"
            class="btn position-relative"
            style="color: white"
          >
            <i class="fa fa-shopping-cart"></i>
            <span
              class="position-absolute top-0 start-100 translate-middle badge bg-primary"
              >5</span
            >
          </button>
          <button
            type="button"
            class="btn position-relative"
            style="color: white"
          >
            <i class="fa fa-heart"></i>
            <span
              class="position-absolute top-0 start-100 translate-middle badge bg-primary"
              >2</span
            >
          </button>
          <button
            type="button"
            class="btn position-relative"
            style="color: white"
          >
            <i class="fa fa-search"></i>
          </button>
        </div>

        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-1" id="navMenu">
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="#header"
                style="color: white"
                >home</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="product.php"
                style="color: white"
                >product</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="#special"
                style="color: white"
                >Product specials</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="#blogs"
                style="color: white"
                >blogs</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="#about"
                style="color: white"
                >about us</a
              >
            </li>
            <li class="nav-item px-2 py-2 border-0">
              <a class="nav-link text-uppercase text-light" href="#popular"
                >popular</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- header -->
    <header
      id="header"
      class="vh-100 carousel slide"
      data-bs-ride="carousel"
      style="padding-top: 104px"
    >
      <div class="container h-100 d-flex align-items-center carousel-inner">
        <div class="text-center carousel-item active">
          <h2 class="text-capitalize text-white">best collection</h2>
          <h1 class="text-uppercase py-2 fw-bold text-white">new arrivals</h1>
          <a href="#" class="btn mt-3 text-uppercase">shop now</a>
        </div>
        <div class="text-center carousel-item">
          <h2 class="text-capitalize text-white">best price & offer</h2>
          <h1 class="text-uppercase py-2 fw-bold text-white">new season</h1>
          <a href="#" class="btn mt-3 text-uppercase">buy now</a>
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </header>
    <!-- end of header -->

    <!-- special products -->
    <section id="special" class="py-5">
      <div class="container">
        <div class="title text-center py-5">
          <h2 class="position-relative d-inline-block">Special Selection</h2>
        </div>

        <div class="special-list row g-0">
           @foreach($productjoin as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 <?php //echo $product['CategoryID']?><!---->">
                    <a href="{{route('detail',$productid=$item->ProductID)}}">
                        <div class="special-img position-relative overflow-hidden">
                            <img src="{{$item->image_url}}" class="w-100" />
                            </span>
                        </div>
                    </a>
                    <div class="text-center">
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <p class="text-capitalize mt-3 mb-1"> {{$item->Name}}</p>
                        <span class="fw-bold d-block">{{$item->Price}}$</span>
                        <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- end of special products -->

    <!-- blogs -->
    <section id="offers" class="py-5">
      <div class="container">
        <div
          class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start"
        >
          <div class="offers-content">
            <span class="text-white">Discount Up To 40%</span>
            <h2 class="mt-2 mb-4 text-white">Grand Sale Offer!</h2>
            <a href="#" class="btn">Buy Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end of blogs -->

    <!-- blogs -->
    <section id="blogs" class="py-5">
      <div class="container">
        <div class="title text-center py-5">
          <h2 class="position-relative d-inline-block">Our Latest Blog</h2>
        </div>

        <div class="row g-3">
          <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
            <img src="img/6.jpg" alt="" />
            <div class="card-body px-0">
              <h4 class="card-title">
                Lorem ipsum, dolor sit amet consectetur adipisicing
              </h4>
              <p class="card-text mt-3 text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit
                adipisci omnis quia itaque ratione iusto sapiente reiciendis,
                numquam officiis aliquid ipsam fuga.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  <span class="fw-bold">Author: </span>John Doe
                </small>
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>

          <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
            <img src="img/4.jpg" alt="" />
            <div class="card-body px-0">
              <h4 class="card-title">
                Lorem ipsum, dolor sit amet consectetur adipisicing
              </h4>
              <p class="card-text mt-3 text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit
                adipisci omnis quia itaque ratione iusto sapiente reiciendis,
                numquam officiis aliquid ipsam fuga.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  <span class="fw-bold">Author: </span>John Doe
                </small>
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>

          <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
            <img src="img/4.jpg" alt="" />
            <div class="card-body px-0">
              <h4 class="card-title">
                Lorem ipsum, dolor sit amet consectetur adipisicing
              </h4>
              <p class="card-text mt-3 text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit
                adipisci omnis quia itaque ratione iusto sapiente reiciendis,
                numquam officiis aliquid ipsam fuga.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  <span class="fw-bold">Author: </span>John Doe
                </small>
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of blogs -->

    <!-- about us -->
    <section id="about" class="py-5">
      <div class="container">
        <div class="row gy-lg-5 align-items-center">
          <div class="col-lg-6 order-lg-1 text-center text-lg-start">
            <div class="title pt-3 pb-5">
              <h2 class="position-relative d-inline-block ms-4">About Us</h2>
            </div>
            <p class="lead text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
              ipsam.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatem fuga blanditiis, modi exercitationem quae quam eveniet!
              Minus labore voluptatibus corporis recusandae accusantium velit,
              nemo, nobis, nulla ullam pariatur totam quos.
            </p>
          </div>
          <div class="col-lg-6 order-lg-0">
            <img src="img/6.jpg" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- end of about us -->

    <!-- popular -->
    <section id="popular" class="py-5">
      <div class="container">
        <div class="title text-center pt-3 pb-5">
          <h2 class="position-relative d-inline-block ms-4">
            Popular Of This Year
          </h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Top Rated</h3>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 2900.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 2100.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 1920.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Best Selling</h3>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 2500.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 2500.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 1900.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">On Sale</h3>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 4020.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 3000.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="img/strix.jpg" alt="" class="img-fluid pe-3 w-25" />
              <div>
                <p class="mb-0">Asus Laptop</p>
                <span>$ 1020.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of popular -->

    <!-- newsletter -->
    <section id="newsletter" class="py-5">
      <div class="container">
        <div
          class="d-flex flex-column align-items-center justify-content-center"
        >
          <div class="title text-center pt-3 pb-5">
            <h2 class="position-relative d-inline-block ms-4">
            Tech Phone Shop Subscription
            </h2>
          </div>

          <p class="text-center text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
            rem officia accusantium maiores quisquam dolorum?
          </p>
          <div class="input-group mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              placeholder="Enter Your Email ..."
            />
            <button class="btn btn-primary" type="submit">Subscribe</button>
          </div>
        </div>
      </div>
    </section>
    <!-- end of newsletter -->

    <!-- footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row text-white g-4">
          <div class="col-md-6 col-lg-3">
            <a
              class="text-uppercase text-decoration-none brand text-white"
              href="index.html"
              >Tech Phone Shop</a
            >
            <p class="text-white text-muted mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit
              dolor ipsam?
            </p>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light">Links</h5>
            <ul class="list-unstyled">
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Home
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Collection
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Blogs
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> About Us
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light mb-3">Contact Us</h5>
            <div
              class="d-flex justify-content-start align-items-start my-2 text-muted"
            >
              <span class="me-3">
                <i class="fas fa-map-marked-alt"></i>
              </span>
              <span class="fw-light">
                Rich Street, Phnom Penh, OG 000, Cambodia
              </span>
            </div>
            <div
              class="d-flex justify-content-start align-items-start my-2 text-muted"
            >
              <span class="me-3">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="fw-light"> Tech_Phone_Shop.support@gmail.com </span>
            </div>
            <div
              class="d-flex justify-content-start align-items-start my-2 text-muted"
            >
              <span class="me-3">
                <i class="fas fa-phone-alt"></i>
              </span>
              <span class="fw-light"> +1235 123 123</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light mb-3">Follow Us</h5>
            <div>
              <ul class="list-unstyled d-flex">
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-pinterest"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->

    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
  </body>
</html>
