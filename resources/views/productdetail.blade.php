
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Detail</title>
    <link rel="icon" href="../Product_img/logo.png">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link
            href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
            rel="stylesheet"
    />
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        body {
            background-color: #ecedee;
        }
        .card {
            border: none;
            overflow: hidden;
        }
        .thumbnail_images ul {
            list-style: none;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .thumbnail_images ul li {
            margin: 5px;
            padding: 10px;
            border: 2px solid #eee;
            cursor: pointer;
            transition: all 0.5s;
        }
        .thumbnail_images ul li:hover {
            border: 2px solid #000;
        }
        .main_image {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eee;
            height: 400px;
            width: 100%;
            overflow: hidden;
        }
        .heart {
            height: 29px;
            width: 29px;
            background-color: #eaeaea;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content p {
            font-size: 12px;
        }
        .ratings span {
            font-size: 14px;
            margin-left: 12px;
        }
        .colors {
            margin-top: 5px;
        }
        .colors ul {
            list-style: none;
            display: flex;
            padding-left: 0px;
        }
        .colors ul li {
            height: 20px;
            width: 20px;
            display: flex;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer;
        }
        .colors ul li:nth-child(1) {
            background-color: #6c704d;
        }
        .colors ul li:nth-child(2) {
            background-color: #96918b;
        }
        .colors ul li:nth-child(3) {
            background-color: #68778e;
        }
        .colors ul li:nth-child(4) {
            background-color: #263f55;
        }
        .colors ul li:nth-child(5) {
            background-color: black;
        }
        .right-side {
            position: relative;
        }
        .search-option {
            position: absolute;
            background-color: #000;
            overflow: hidden;
            align-items: center;
            color: #fff;
            width: 200px;
            height: 200px;
            border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
            left: 30%;
            bottom: -250px;
            transition: all 0.5s;
            cursor: pointer;
        }
        .search-option .first-search {
            position: absolute;
            top: 20px;
            left: 90px;
            font-size: 20px;
            opacity: 1000;
        }
        .search-option .inputs {
            opacity: 0;
            transition: all 0.5s ease;
            transition-delay: 0.5s;
            position: relative;
        }
        .search-option .inputs input {
            position: absolute;
            top: 200px;
            left: 30px;
            padding-left: 20px;
            background-color: transparent;
            width: 300px;
            border: none;
            color: #fff;
            border-bottom: 1px solid #eee;
            transition: all 0.5s;
            z-index: 10;
        }
        .search-option .inputs input:focus {
            box-shadow: none;
            outline: none;
            z-index: 10;
        }
        .search-option:hover {
            border-radius: 0px;
            width: 100%;
            left: 0px;
        }
        .search-option:hover .inputs {
            opacity: 1;
        }
        .search-option:hover .first-search {
            left: 27px;
            top: 25px;
            font-size: 15px;
        }
        .search-option:hover .inputs input {
            top: 20px;
        }
        .search-option .share {
            position: absolute;
            right: 20px;
            top: 22px;
        }
        .buttons .btn {
            height: 50px;
            width: 150px;
            border-radius: 0px !important;
        }
    </style>
</head>
<body className="snippet-body">


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 fixed-top">
    <div class="container">
        <a
                class="navbar-brand d-flex justify-content-between align-items-center order-lg-0"
                href="index.html"
        >
            <img src="../Product_img/logo.png" alt="site icon" />
            <span class="text-uppercase fw-lighter ms-2" style="color: white"
            >Tech Phone Shop</span
            >
        </a>


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
                            href="../index.php"
                            style="color: white"
                    >home</a
                    >
                </li>
                <li class="nav-item px-2 py-2">
                    <a
                            class="nav-link text-uppercase text-light"
                            href="../product.php"
                            style="color: white"
                    >product</a
                    >
                </li>
                <li class="nav-item px-2 py-2">
                    <a
                            class="nav-link text-uppercase text-light"
                            href="index.html "
                            style="color: white"
                    >Product specials</a
                    >
                </li>
                <li class="nav-item px-2 py-2">
                    <a
                            class="nav-link text-uppercase text-light"
                            href="index.html "
                            style="color: white"
                    >blogs</a
                    >
                </li>
                <li class="nav-item px-2 py-2">
                    <a
                            class="nav-link text-uppercase text-light"
                            href="index.html "
                            style="color: white"
                    >about us</a
                    >
                </li>
                <li class="nav-item px-2 py-2 border-0">
                    <a class="nav-link text-uppercase text-light" href="index.html"
                    >popular</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<header>
    <br><br> <br><br>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                            @csrf
                            <img
                                    src="{{$productjoin->image_url}}"
                                    id="main_product_image"
                                    width="350"
                            />
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li>
                                    <img
                                        onclick="changeImage(this)"
                                        src="{{ URL::to($productjoin->image_url)}}"
                                        width="70"
                                    />
                                </li>
                                @foreach($productimgs as $img)
                                <li>
                                    <img
                                            onclick="changeImage(this)"
                                            src="{{$img}}"
                                            width="70"
                                    />
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{$productjoin->Name}}</h3>
                            <span class="heart"><i class="bx bx-heart"></i></span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>
                                {{$productjoin->name}}
                            </p>
                        </div>
                        <h3>${{$productjoin->Price}}</h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row">
                                <i class="bx bxs-star"></i> <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i> <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <span>441 reviews</span>
                        </div>
                        <!--Feature Section-->
                        <div class="row mt-5">
                            <div class="col-lg-3" style="align-items: center;text-align: center;">
                                <div class="row align-items-center">
                                    <div class="img align-items-center">
                                        <img class="align-items-center" src="data:image/png;base64,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" style="width: 70%;">
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-center">6.7"</h3>
                                </div>
                                <div class="row">
                                    <p class="text-center">1290x2796 pixels</p>
                                </div>
                            </div>
                            <div class="col-lg-3" style="align-items: center;text-align: center;">
                                <div class="row align-items-center">
                                    <div class="img align-items-center">
                                        <div class="img align-content-center">
                                            <img src="data:image/png;base64,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" style="width: 50%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-center">6.7"</h3>
                                </div>
                                <div class="row">
                                    <p class="text-center">1290x2796 pixels</p>
                                </div>
                            </div>
                            <div class="col-lg-3" style="align-items: center;text-align: center;">
                                <div class="row align-items-center">
                                    <div class="img align-items-center">
                                        <div class="img align-content-center">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAe1BMVEX///8AAABubm5mZmbr6+s0NDStra2oqKjb29tiYmLx8fE9PT2kpKTe3t57e3v19fW9vb2RkZHLy8tXV1eFhYVcXFxKSkogICDT09NycnLn5+fKysqysrI4ODhPT09EREQwMDCYmJgSEhInJyeLi4shISEXFxd4eHiCgoKkgE79AAAE0UlEQVR4nO2ca3eqOhRFwYIgluITq/VJreX//8Kr447KTrI3jx49Jp41P9rVkAlIwiboeQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCG9PX7xW16h/c6wch/BspnF/T9pXiKPrpnN2MkGL4+umM3oycYLh/dsZuRZ7zh4NEduxlh8OyGGxg6DwzPhMueayzzToZvfMJq+jCEofXA0IOh9cDQg6H13MwwSOOKNGESKxKIV8LN6DWcNoQztTm5pRsZrnp7nzIc652aTBc0UOT9Gr/J9KshvM4LmlhMJ/c1/PANduphZIo9YumLK+5pJRamsnK4p2Fgbs/35w27wPdfhT5NuLAicOASH3c0nHEbVLY45QILYYNzNky+ahm7vc0dDTfsFskhWi3YBF9oDz6bwuxB9v07GvIb/K4CMZ/gLzZCBZqE+3wi/duG5OIgGPJfRMEwajSMYQhDGMLwQYbrTob+gZtS22yYrclQ3KrmHUbMPN9ew1FOAy2r+qHZkK2GmTZZbP3cwphsWWqYhFqgtWGh34vZaRjs9IBkWBpNfWpH0UrDJDcCW16QXm6vig4YvpgB6QY+25tZ9a7ARkNuk/yAeebdzBbWGzK30TWVodS8RY/o3y00NI/KRqhy/E+Wjo7TE82HdOC30LCn/GVbrmN2NqYSKxcnekNtn2FCKyGf0movE6pI/8s+Q1r9K2rKxXXbHlttSGtV7Y+gpxxEWs+1z5AWoLsIesfq/+j8wD7Dt+rTHQwVyFzW7rOUPvnoIki3TZ8j2GdIB/y6h1wayZb8nzujxan1aKHO3Rwa8fe187WfLq7HW6W1vVOzts2sX/u6hRfr5QDt5LbQ0GykqBn5mceb6i2whYbaQazZ3JmEeTz4XHfATBVDvQG20pBb2vzt8bwZSf36a6VhtjUCUiXK2Blf+tHmNzhr7DT/3RfC6yrBnFUXtP2eGJWJtvXSwjidzb11gXxXA6aY5UuPpQPzyn1BmLEQjIb0gmlLw4X5feXfjKL9Z65svj8UCgvsa0gbGj5xibnRkF4ybWW4YGd5RnXZV2+RvRXXJWkZE7s8R5mXjLgE1/0PpWctDE/CkLIyi3FHNfH+ZSTWfFuXsLneRAubq6b2wv4akbGuhaF0ufWy6GU3rNgujalgMB6QwHBeiuXZM8l4QJubmuG0nNLmBmOh88rO+MPVl1lS8dtEp3DSrjmsL/VgaD0w9GBoPTD0YGg93QxrfjzDWjqua3MbGLoPDN3n3zU066Wu0mHlnqNIRZiEfw/JQcQnbEIB1jkiSdDzYr6o7RZh7cqhLKVfxmP0Q5+scdxcP41oDfzYv4ZJUXXIh8t+h5ZJmFzu90I32FeTKbQOTU5nssCGFNXpG5CkUDtrDJPdPK4+nfJhUpI9VJ/mpNN8y90MSadJP5IbG2Ydwnlj+PeGVdMwhCEMYXgvw+rTZzV8zmPYacRvDv92xKeGpNO/Nhz3f1iTudUwun6sztoawvSBdVmFB2yYtjxjwyHfcjdDF4EhDO0HhuoQ5yLNS70z/ld2nKHFu3n8LyW5QpsXZ/jfZnKFuiVmV2J3z9NCXiSokBwGw9BB5iW/UpeXDBykvR4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIDMfw7LhbKbF87/AAAAAElFTkSuQmCC" style="width: 50%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-center">6.7"</h3>
                                </div>
                                <div class="row">
                                    <p class="text-center">1290x2796 pixels</p>
                                </div>
                            </div>
                            <div class="col-lg-3" style="align-items: center;text-align: center;">
                                <div class="row align-items-center">
                                    <div class="img align-items-center">
                                        <div class="img align-content-center">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAb1BMVEX///8AAAD09PQnJydbW1vDw8Ovr6/8/PwEBASDg4NjY2Pn5+fGxsbQ0NAYGBjq6uq2trZpaWmYmJhWVlYuLi6goKD29vaAgIAXFxd1dXWMjIw3NzcrKytNTU29vb3h4eE+Pj5GRkbY2NgeHh6dnZ2+EM1HAAAEY0lEQVR4nO2c63aqMBCFAyoBQfGCKGjVat//GU9IopJELl1HsJj9tT+qkyXNdpIZkjCEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgL8FpZ1foesLDA86OFVc103dDmEf/u4utoYNGUpcb5mMuma/9NweRuhLoCQ6OP0wit7d2VawL27hOH4PgvjFVY7v7m87wn4kKVRh1wnf3d1WjMU32Icm7Gf87u62weX/rLOZdM1G+OMQws+Rf4WzHq40444yhBnFKyRZ95LGrgtP8bq+zgvgmrx0lPOUR3uDMy4uZacmhIYq0ITEX1q8WabCYLEmYyMIr0oGOzWZ8+SsnJZMhcFiTdaGJvCTeK4NnS/MJ0yVMH4Q3jNXqzWpAJqYQBMTmzUJF96ixPE2oVisSaSnbLuTMFisydnIT7bCYLEmZh67FAaLNQn0sXPTwWJNSD7fXUscNvJ9izUxVuywfqKvsz1eWa2JurhL4SdPTg9AE+ItFbLbLrHFmmyMWDwRBos1Gakb0Oxv5GwjY1M+EwaLNfGMsSN3Xi3WhER5kD8IcnlbbLMmlTvPFmtCVFkeaa3dmijcBbJaEzct4cJPCEmXSZlDkkOTzIjFcgHFYk2u6tqjfz/YZ7EmZ81LfCcQBos1uehDJ4mFwWJNSDqZRA8mEdaUqo9Q2q2JmsfCT7D2+Ix0poJ1e3K6anHnjLjzbeSxuTBYrMncWHtEHjs1/AT3O/F6Ny+xm2eIOyzwqI/RIhbjXMETzNwemhjATwiZrRQ22N95sg94EQaLNUm0nM3HfrG+HouzoIyVMXZw/oR4a4Xx7TFrmzWpAproUCs1qX++n6Z7GzWpN+d8vu2jWsT/0kITva9VfXeDaQ17Hpadl/zTHdOoyW0rwg1D+fKZJuzN0IjBBv5tGfJv00oT6skaBNmswk2oeLyrvuCO7yQd9eK1NGtCKD8F7Ps8PT1X1M5a3FvUsB9ClZwmTYotPaVOhS9W4Q1fyZu9xNnlemWUP0qDJlRs18gyVD7/zbSupSTNuJcwU1BJPom7781raPKTeF/c0t09gP8daKmIuxbv+w016QbhJKRBEza/ZsIBDj+XMJxtpTtMlFanvXCg0aXuQnQohQ0LTfxCk+cjnfIDNkyF2zG9+JsvBCTlxhfpP2wCHUqnG/CKb/irIjGnZMmnkh/5kjUSoiwebY58tvGdNSXPU5fhceRzRdVE4HIPmBbzKBG6iRp303uLHznRbM16W4MlFiG0oo6fuEc5SS/iOeyKt5f2KJMReEM+x014vceGVOustNdSeBGeh1Cd7xeEjtOgybbcnKY7TRLHuQ7hZrc9VE6S1dyPt0rSRLWygHOq+PChwuaAaFTrJvrA2Grmr2HcxPyS2nrU+432WLmblayHUfApE6tCES6qi5anaoQtgku5xHn6KQFYhScWlT3TFpGMgPsxAVijrlsfk4kBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlX9aUjp+bZ0fnwAAAABJRU5ErkJggg==" style="width: 80%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-center">6.7"</h3>
                                </div>
                                <div class="row">
                                    <p class="text-center">1290x2796 pixels</p>
                                </div>
                            </div>
                        </div>

                        <!--Close Feature Section-->

                        <div class="detail mt-5">
                            <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi explicabo beatae distinctio sit quae laboriosam eligendi? Quidem aut eos quo accusamus, suscipit inventore, in temporibus doloremque excepturi ad maxime reiciendis!</h1>
                        </div>

                        <div class="buttons d-flex flex-row mt-4 gap-3">
                            <button class="btn btn-outline-dark">Buy Now</button>
                            <button class="btn btn-dark">Add to Card</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript">
        function changeImage(element) {
            var main_prodcut_image = document.getElementById("main_product_image");
            main_prodcut_image.src = element.src;
        }
    </script>
    <script type="text/javascript">
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener("click", function (e) {
            e.preventDefault();
        });
    </script>
</body>
</html>
