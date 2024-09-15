<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Liên Hệ Chúng Tôi</title>
    <link rel="icon" href="logo1_green.png" sizes="50" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <x-navbar_user />

    <!-- Liên Hệ Bắt Đầu -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5 text-secondary">Liên Hệ <span class="text-success">Chúng Tôi</span></h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4 shadow-lg" style="padding: 30px">
                        <form>
                            <div class="row mb-3">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Tên của bạn" required="required" />
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" placeholder="Email của bạn" required="required" />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control p-4" placeholder="Chủ đề" required="required" />
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control py-3 px-4" rows="5" placeholder="Tin nhắn" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-success py-3 px-5" type="submit">Gửi Tin Nhắn</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="d-flex flex-column justify-content-center px-5 mb-4"
                        style="height: 416px; background-color: #292F36;">
                        <div class="d-flex mb-4 mt-4">
                            <i class="fa fa-2x fa-map-marker-alt text-success flex-shrink-0 mr-3 me-3 ml-1"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Trụ Sở Chính</h5>
                                <a class="text-decoration-none" href="https://maps.app.goo.gl/PwnSJawzQhnguW7n8" style="color: #8486a0">Nhà APTECH</a>
                            </div>
                        </div>
                        <div class="d-flex mb-4 mt-4">
                            <i class="fa fa-2x fa-envelope-open text-success flex-shrink-0 mr-3 me-3 ml-1"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Dịch Vụ Khách Hàng</h5>
                                <a class="text-decoration-none" href="mailto:cs.autorent@gmail.com" style="color: #8486a0">cs.autorent@gmail.com</a>
                            </div>
                        </div>
                        <div class="d-flex mb-4 mt-4">
                            <i class="fa fa-2x fa-phone text-success flex-shrink-0 mr-3 me-3 ml-1" style="transform: scaleX(-1);"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Điện Thoại</h5>
                                <a class="m-0 text-decoration-none" href="tel:+62 896-4908-1621" style="color: #8486a0">+84 0000-1111</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Liên Hệ Kết Thúc -->
    <x-footer_user />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
