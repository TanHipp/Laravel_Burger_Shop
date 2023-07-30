<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang Chu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-59D5T+Y9a9UWZ4/MJxP9uBWKa3oJQqo1CvvSTOV5Qt3YfkfN2O/He7h5dC2GR5L1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{ $css ?? '' }}

</head>


<body>







    <!-- account.login.blade.php -->
    @include('includes/admin-nav')

    <div class="w3-container">
        <!-- Thông báo thành công -->
        @if (session('success_msg'))
            <div class="notification-container">
                <div class="success-notification">
                    <i class="material-icons"></i>
                    {{ session('success_msg') }}
                    <span class="close-btn" onclick="hideNotification(this)">&times;</span>
                </div>
            </div>
        @endif

        <!-- Thông báo lỗi -->
        @if (session('errors_msg'))
            <div class="notification-container">
                <div class="error-notification">
                    <i class="material-icons"></i>
                    {{ session('errors_msg') }}
                    <span class="close-btn" onclick="hideNotification(this)">&times;</span>
                </div>
            </div>
        @endif
    </div>















    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>



            <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
            <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SẢN PHẨM</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LIÊN HỆ</a>
            <div class="w3-dropdown-hover w3-hide-small">

                <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="" class="w3-bar-item w3-button">ADD DANH MUC</a>
                    <a href="" class="w3-bar-item w3-button">ADD SAN PHAM</a>
                </div>

            </div>



            @if (Auth::check())
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ĐĂNG
                    XUẤT</a>


                <span style="color: blue; font-weight: bold;"
                    class="w3-bar-item w3-button w3-padding-large w3-hide-smal"> Hello

                    <span style="color: blue; font-weight: bold;text-decoration: underline;">

                        <a href="{{ route('admin.dashboard') }}" class=""
                            style="color: blue; font-weight: bold;text-decoration: underline;">{{ Auth::user()->name }}

                    </span>

                    <i class="fa fa-check-circle fa-xs"
                        style="font-size: 0.9rem;color: rgb(20, 197, 38); font-weight: bold;"></i>

                </span>
            @else
                <a href="{{ route('account.login') }}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ĐĂNG
                    NHẬP</a>


                <a href="{{ route('account.register') }}"
                    class="w3-bar-item w3-button w3-padding-large w3-hide-small">ĐĂNG KÍ</a>
            @endif



            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right"
                id="searchIcon">
                <i class="fa fa-search"></i>
            </a>

        </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top"
        style="margin-top:46px">
        <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
    </div>


    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;margin-top:46px">

        <!-- Automatic Slideshow Images -->

        <div class="mySlides-01 w3-display-container w3-center">
            <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
            <img src="https://burgerking.vn/media/banner/image//v/o/vouchervfbs_bk_1367x500.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>...</h3>
                <p><b>Vô vàng các loại bánh đang chờ bạn!</b></p>
            </div>
        </div>
        <div class="mySlides-01 w3-display-container w3-center">
            <img src="https://burgerking.vn/media/banner/image//b/a/banner-web-trang-chu-2.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>...</h3>
                <p><b>Vô vàng các loại bánh đang chờ bạn!</b></p>
            </div>

        </div>
        <div class="mySlides-01 w3-display-container w3-center">
            <img src="https://burgerking.vn/media/banner/image//b/a/banner-web-trang-chu_1__2.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>...</h3>
                <p><b>Vô vàng các loại bánh đang chờ bạn!</b></p>
            </div>
        </div>

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">


            <h2 class="w3-wide">Hôm nay bạn muốn ăn gì?</h2>


            <p class="w3-opacity"><i>Chúng tôi yêu hamburger</i></p>


            <p class="w3-justify">TanHipp là một tiệm bánh mì burger độc đáo với không gian ấm cúng và độc đáo. Thực
                đơn đa
                dạng bao gồm các loại burger thơm ngon như Classic Beef và BBQ Chicken, cùng với Veggie Delight cho
                khách
                hàng ưa chuộng chế độ ăn chay. Chất lượng và nguyên liệu tươi ngon luôn được đảm bảo. TanHipp cũng cung
                cấp
                các loại nước uống phong phú và là nơi lý tưởng để hội tụ bạn bè và gia đình
                TanHipp tạo ra sự hoàn hảo trong mỗi khẩu phần bánh mì burger với bánh mì mềm mịn, thịt nướng hoàn hảo
                và
                rau sống tươi mát. Không chỉ là địa điểm ẩm thực còn là không gian thoáng đãng và hiện đại, nơi
                khách hàng có thể tận hưởng không khí ấm áp và thư giãn cùng dịch vụ tận tâm của nhân viên chu đáo.
            </p>



  {{-- DarkMode --}}
<label class="switch">
    <input type="checkbox" id="darkModeToggle">
    <span class="slider"></span>
</label>
{{-- DarkMode --}}




            <div class="w3-row w3-padding-32">

                <div class="w3-third">


                    <p>Burgers</p>
                    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/choose-img2.png"
                        class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">


                </div>

                <div class="w3-third">
                    <p>Pizza’s</p>
                    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/choose-img1.png"
                        class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                </div>
                <div class="w3-third">
                    <p>Fries</p>
                    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/choose-img3.png"
                        class="w3-round" alt="Random Name" style="width:60%">
                </div>
            </div>
        </div>

        <div class="sanphamct">
            <div style="text-align:center">
                <h2>CÁC SẢN PHẨM NỔI BẬT</h2>
                <p class="p-sp">Ấn vào ảnh để xem</p>
            </div>
            <!-- SẢN PHẨM NỔI BẬT -->
            <div class="row">
                <div class="column">
                    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/post-thumb1.jpg"
                        alt="Nature" style="width:100%" class="img-thumbnail" onclick="showImageModal(this);">
                </div>
                <div class="column">
                    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/post-thumb2.jpg"
                        alt="Snow" style="width:100%" class="img-thumbnail" onclick="showImageModal(this);">
                </div>
                <div class="column">
                    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/post-thumb3.jpg"
                        alt="Mountains" style="width:100%" class="img-thumbnail" onclick="showImageModal(this);">
                </div>
                <div class="column">
                    <img src="https://w.forfun.com/fetch/19/192622c3eb1e6d579e72d29059a45f69.jpeg" alt="Lights"
                        style="width:100%" class="img-thumbnail" onclick="showImageModal(this);">
                </div>
            </div>


            <div class="container" id="imageModalContainer" style="display: none;">
                <span onclick="closeImageModal()" class="closebtn">&times;</span>
                <img id="expandedImg" style="width:100%">
                <div id="imgtext">
                    <div class="product-name"></div>
                </div>
            </div>

            <script>
                // JavaScript
                function showImageModal(img) {
                    var expandedImg = document.getElementById("expandedImg");
                    var imgText = document.getElementById("imgtext");
                    expandedImg.src = img.src;
                    imgText.innerHTML = img.alt;

                    var container = document.getElementById("imageModalContainer");
                    container.classList.add("fade-in");
                    container.style.display = "block";
                }

                function closeImageModal() {
                    var container = document.getElementById("imageModalContainer");
                    container.classList.remove("fade-in");
                    container.classList.add("fade-out");
                    setTimeout(function() {
                        container.style.display = "none";
                        container.classList.remove("fade-out");
                    }, 300);
                }

                // Kiểm tra và hiển thị trạng thái của container khi tải lại trang
                document.addEventListener("DOMContentLoaded", function() {
                    var container = document.getElementById("imageModalContainer");
                    var isModalVisible = localStorage.getItem("imageModalVisible");

                    if (isModalVisible === "true") {
                        container.style.display = "block";
                    }
                });

                // Lưu trạng thái của container khi đóng
                window.addEventListener("beforeunload", function() {
                    var container = document.getElementById("imageModalContainer");
                    var isModalVisible = window.getComputedStyle(container).display;

                    localStorage.setItem("imageModalVisible", isModalVisible);
                });
            </script>




        </div>


        <!-- SẢN PHẨM NỔI BẬT -->
        <!--End The Tour Section -->
















        <!-- Danh Sách Sản Phẩm Banh Mi-->
        <div class="w3-black" id="tour">
            <div class="container-fluid py-5">
                <h2 class="w3-wide text-center mb-4">DANH SÁCH SẢN PHẨM</h2>
                <p class="w3-opacity text-center"><i>Ngon-Bổ-Rẻ!</i></p>
                @php
                    $count = 0;
                @endphp
                <div class="row">
                    @foreach ($data as $item)
                        @if ($count % 4 == 0 && $count != 0)
                </div>
                <div class="row">
                    @endif
                    <div class="col-md-3 mb-4">
                        <div class="product-card">
                            <img src="{{ $item->anh_bia }}" alt="" class="product-image">
                            <div class="p-3">
                                <h5 class="product-name">{{ $item->Ten_San_Pham }}</h5>
                                <p class="product-description">{{ $item->Mo_Ta }}</p>
                                <p class="product-price">Giá: {{ number_format($item->Gia) }}₫</p>
                                <!-- Button Container -->
                                <div class="button-container">
                                    @if (Auth::check())
                                        <!-- Nút Thêm Vào Giỏ Hàng -->
                                        <button class="button buy-button"
                                            onclick="showProductModal('{{ $item->anh_bia }}', '{{ $item->Ten_San_Pham }}', '{{ number_format($item->Gia) }}$', '{{ $item->Mo_Ta }}')">
                                            <span class="button__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                                </svg>
                                            </span>
                                            <span class="button__text">Thêm giỏ hàng</span>
                                        </button>
                                        <!-- Nút Mua Ngay -->
                                        <button class="button buy-button-cart"
                                            onclick="showProductModal('{{ $item->anh_bia }}', '{{ $item->Ten_San_Pham }}', '{{ number_format($item->Gia) }}$', '{{ $item->Mo_Ta }}')">
                                            <span class="button__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                                </svg>
                                            </span>
                                            <span class="button__text">Mua Ngay</span>
                                        </button>
                                    @else
                                        <!-- Người dùng chưa đăng nhập, hiển thị thông báo yêu cầu đăng nhập -->
                                        <button class="button buy-button" onclick="showLoginNotification()">
                                            <span class="button__text">Thêm giỏ hàng</span>
                                        </button>
                                        <button class="button buy-button-cart" onclick="showLoginNotification()">
                                            <span class="button__text">Mua Ngay</span>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $count++;
                    @endphp
                    @endforeach
                </div>
                <!-- Pagination Links -->
                <div class="row">
                    <div class="col-12 text-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                {{ $data->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Pagination Links -->
            </div>
        </div>

        <!-- Notification Container -->
        <div class="notification-container"></div>

        <!-- JavaScript -->
        <script>
            // Function to show the product modal
            function showProductModal(image, name, price, description) {
                // ... Your existing code to show the product modal ...
            }

            // Function to show the login notification
            function showLoginNotification() {
                // Create the notification element
                const notification = document.createElement('div');
                notification.className = 'error-notification';
                notification.innerHTML = `
            <p>Vui lòng đăng nhập để tiếp tục mua hàng</p>`;


                // Add the notification element to the container
                const container = document.querySelector('.notification-container');
                container.appendChild(notification);

                // Set the animation to fade in
                setTimeout(() => {
                    notification.style.opacity = 1;
                }, 100);

                // Automatically fade out the notification after 4 seconds (adjust duration as needed)
                setTimeout(() => {
                    notification.style.opacity = 0;
                    setTimeout(() => {
                        container.removeChild(notification);
                    }, 1000); // Remove the notification after fading out
                }, 4000);
            }

            // Function to hide the notification
            function hideNotification(btn) {
                const notification = btn.closest('.error-notification');
                notification.style.opacity = 0;
                setTimeout(() => {
                    const container = document.querySelector('.notification-container');
                    container.removeChild(notification);
                }, 1000);
            }

            // Add event listeners to "Thêm giỏ hàng" and "Mua Ngay" buttons
            const buyButtons = document.querySelectorAll('.buy-button');
            const buyButtonsCart = document.querySelectorAll('.buy-button-cart');

            buyButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    if (!Auth.check()) {
                        showLoginNotification();
                    } else {
                        // Call the function to handle the "Thêm giỏ hàng" button click
                        handleBuyButtonClick();
                    }
                });
            });

            buyButtonsCart.forEach((button) => {
                button.addEventListener('click', () => {
                    if (!Auth.check()) {
                        showLoginNotification();
                    } else {
                        // Call the function to handle the "Mua Ngay" button click
                        handleBuyButtonCartClick();
                    }
                });
            });

            // Replace the following functions with your actual handling logic for adding to cart or buying now
            function handleBuyButtonClick() {
                // Handle the logic for "Thêm giỏ hàng" button click
                // For example, you can add the item to the cart here
            }

            function handleBuyButtonCartClick() {
                // Handle the logic for "Mua Ngay" button click
                // For example, you can directly initiate the purchase process here
            }
        </script>

        <!--End Danh Sách Sản Phẩm Banh-->




        <!-- Modal Lúc Mua Sản Phẩm -->
        <div id="ticketModal" class="w3-modal" onclick="hideProductModal()">
            <div class="w3-modal-content w3-animate-top w3-card-4" onclick="event.stopPropagation()">
                <button type="button" class="w3-button w3-red w3-section close-btn" onclick="hideProductModal()">
                    Close <i class="fa fa-remove"></i>
                </button>
                <div class="w3-container">
                    <img id="productImage" src="" alt="" class="product-image-md">
                    <h5 id="productName" class="product-name"></h5>
                    <p id="productPrice" class="product-price"></p>
                    <p id="productDescription" class="product-description"></p>
                    <p><label><i class="fa fa-user"></i></label></p> <input class="w3-input w3-border" type="text"
                        placeholder="Ghi chú">
                    <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i
                            class="fa fa-check"></i></button>

                    <p class="w3-right">Bạn đang cần <a href="#" class="w3-text-blue">giúp đỡ?</a></p>
                </div>
            </div>
        </div>
        <!-- Modal Lúc Mua Sản Phẩm -->



        <!-- Đoạn JS để lấy thông tin sản phẩm khi ấn vào nút MUA -->
        <script>
            function showProductModal(image, name, price, description) {
                document.getElementById('productImage').src = image;
                document.getElementById('productName').innerText = name;
                document.getElementById('productPrice').innerText = price;
                document.getElementById('productDescription').innerText = description;
                document.getElementById('ticketModal').style.display = 'block';
            }

            function hideProductModal() {
                document.getElementById('ticketModal').style.display = 'none';
            }
        </script>
        <!-- Đoạn JS để lấy thông tin sản phẩm khi ấn vào nút MUA -->

        <!-- The Contact Section -->








        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
            <h2 class="w3-wide w3-center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
            <p class="w3-opacity w3-center"><i>Nếu bạn có gì không hài lòng!</i></p>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m6 w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker" style="width:30px"></i> Soc Trang, VN<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
                    <i class="fa fa-envelope" style="width:30px"></i>Email: thaitan@gmail@mail.com<br>
                </div>
                <div class="w3-col m6">
                    <!-- Add the id attribute to the form -->
                    <form id="contact-form" action="{{ route('contact.submit.form') }}" method="POST">
                        <!-- Add CSRF protection token -->
                        @csrf
                        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Họ tên" required
                                    name="Name">
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Email" required
                                    name="Email">
                            </div>
                        </div>
                        <input class="w3-input w3-border" type="text" placeholder="Nội dung" required
                            name="Message">
                        <button class="w3-button w3-black w3-section w3-right" type="submit">GỬI NGAY</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add a div to display the status notification -->
        <div id="status-notification"></div>

        <script>
            document.getElementById("contact-form").addEventListener("submit", function(event) {
                event.preventDefault();

                const formData = new FormData(this);
                fetch(this.action, {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        },
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        const statusNotification = document.getElementById(
                            "status-notification"
                        );
                        statusNotification.innerText = data.message;
                        statusNotification.className = "show " + data.status; // Update the class name

                        // Remove the notification after a few seconds
                        setTimeout(() => {
                            statusNotification.classList.remove("show");
                        }, 5000); // Show the notification for 5 seconds
                    })
                    .catch((error) => {
                        console.error(error);
                        const statusNotification = document.getElementById(
                            "status-notification"
                        );
                        statusNotification.innerText =
                            "Biểu mẫu gửi không thành công. Vui lòng kiểm tra lại";
                        statusNotification.className = "show error"; // Update the class name

                        // Remove the notification after a few seconds
                        setTimeout(() => {
                            statusNotification.classList.remove("show");
                        }, 5000); // Show the notification for 5 seconds
                    });
            });
        </script>








        <!-- End Page Content -->

    </div>






    <div class="danhgia">
        {{-- Đánh giá --}}
        <span class="heading">Đánh giá sản phẩm</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p>4,1 trung bình dựa trên 254 đánh giá.</p>
        <hr style="border:3px solid #f1f1f1">

        <div class="row">
            <div class="side">
                <div>5 sao</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-5"></div>
                </div>
            </div>
            <div class="side right">
                <div>150</div>
            </div>
            <div class="side">
                <div>4 sao</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-4"></div>
                </div>
            </div>
            <div class="side right">
                <div>63</div>
            </div>
            <div class="side">
                <div>3 sao</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-3"></div>
                </div>
            </div>
            <div class="side right">
                <div>15</div>
            </div>
            <div class="side">
                <div>2 sao</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-2"></div>
                </div>
            </div>
            <div class="side right">
                <div>6</div>
            </div>
            <div class="side">
                <div>1 sao</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-1"></div>
                </div>
            </div>
            <div class="side right">
                <div>20</div>
            </div>
        </div>
    </div>
    {{-- Đánh giá --}}




    <!-- Image of location/map -->
    <img src="https://sktperfectdemo.com/themepack/gbsandwich/wp-content/uploads/2022/06/food-combo1.png"
        class="anh-ft">
    <!-- Image of location/map -->







    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Liên lạc</h3>
                            <p>Đừng bỏ lỡ bất kỳ lần khuyễn mãi nào về các loại bánh mới của chúng tôi.!</p>
                            <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true"
                                _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail"
                                    placeholder="Email">
                                <button class="btn btn_get btn_get_two" type="submit">Gửi</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Tải xuống</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Android App</a></li>
                                <li><a href="#">ios App</a></li>
                                <li><a href="#">Desktop</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">My tasks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Trợ giúp</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Điều khoản &amp; điều kiện</a></li>
                                <li><a href="#">Báo cáo</a></li>
                                <li><a href="#">Tài liệu</a></li>
                                <li><a href="#">Chính sách hỗ trợ</a></li>
                                <li><a href="#">Bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Liên hệ qua</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                                <a href="#" class="fab fa-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <p class="mb-0 f_400">© Dương Thái Tân 2023 All rights reserved.</p>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-right">
                        <p>Được làm và phát triển bởi <i class="icon_heart"></i> in <a href="http://cakecounter.com"
                                target="_blank">Dương Thái Tân</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>









    <script src="{{ asset('js/home.js') }}"></script>


































    <!-- CÁC ĐOẠN JS BỔ SUNG  -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bk1" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-jTAp24UL6QK2v7bI8eWt3EXVS4BtKj3gL9lG9+XIECc=" crossorigin="anonymous"></script>

    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/home.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>



    {{-- //mo thanh auto header --}}
    <script>
        // Automatic Slideshow - change image every 4 seconds header
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides-01");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    {{-- //dong thanh auto header --}}







































    {{-- // Hàm đóng modal + khi người đóng modal bên ngoài không cần dùng đén nút close --}}
    <script>
        // JavaScript
        // Lấy phần tử modal và phần tử lớp overlay
        var modal = document.getElementById("ticketModal");
        var modalOverlay = document.querySelector(".modal-overlay");

        // Khi người dùng bấm vào vùng bên ngoài modal, đóng modal
        modalOverlay.addEventListener("click", function(event) {
            if (event.target === modalOverlay) {
                hideProductModal();
            }
        });

        // Hàm đóng modal + khi người đóng modal bên ngoài không cần dùng đén nút close
        function hideProductModal() {
            var modal = document.getElementById("ticketModal");
            modal.style.display = "none";
        }
    </script>





























    {{ $js ?? '' }}



</body>

</html>
