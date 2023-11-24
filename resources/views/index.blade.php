<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Kenangan Senja</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">kenangan<span>senja</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="login">
            <a href={{ route('login') }}>Login</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- Search Form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search Form end -->

        <!-- Shopping Cart start -->
        <div class="shopping-cart">
            <div class="cart-item">
                <img src="img/products/1.jpg" alt="Product 1">
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">IDR 30K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
            <div class="cart-item">
                <img src="img/products/1.jpg" alt="Product 1">
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">IDR 30K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
            <div class="cart-item">
                <img src="img/products/1.jpg" alt="Product 1">
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">IDR 30K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
        </div>
        <!-- Shopping Cart end -->

    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <div class="mask-container">
            <main class="content">
                <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim.</p>
            </main>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/tentang-kami.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih kopi kami?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ducimus voluptatum dolor. Et,
                    voluptatum
                    accusantium!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo
                    cum
                    voluptates molestias nihil.</p>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora
            voluptatum.
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Capuccino -</h3>
                <p class="menu-card-price">IDR 25K</p>
            </div>
            <div class="menu-card">
                <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Latte -</h3>
                <p class="menu-card-price">IDR 20K</p>
            </div>
            <div class="menu-card">
                <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
        </div>
    </section>
    <!-- Menu Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
        <h2><span>Produk Unggulan</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>

        <div class="row">
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/products/1.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Coffee Beans 1</h3>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/products/1.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Coffee Beans 1</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/products/1.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Coffee Beans 1</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>

        </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">syifa ramadhani</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
    <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content">
                <img src="img/products/1.jpg" alt="Product 1">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis
                        obcaecati
                        ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus
                        voluptatibus!</p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box Item Detail end -->

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My Javascript -->
    <script src={{ asset('js/script.js') }}></script>
</body>

</html>
