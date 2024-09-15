<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Về AutoRent</title>
    <link rel="icon" href="logo1_green.png" sizes="50" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet" /> --}}

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <x-navbar_user />

    <!-- Về Chúng Tôi -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">VỀ <span class="text-success">AutoRent</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/pict2.jpg" alt="" />
                    <div class="d-flex align-items-center p-4 mb-4 text-dark">
                        <p>
                            AutoRent là nền tảng cho thuê xe trực tuyến cung cấp dịch vụ chất lượng cao cho khách hàng
                            cần xe tạm thời. Bằng cách sử dụng công nghệ tiên tiến và quy trình hiệu quả, AutoRent
                            đơn giản hóa quy trình thuê xe cho khách hàng, loại bỏ sự phiền toái và mang đến trải nghiệm
                            tiện lợi cũng như đáng tin cậy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success ml-n2 mr-4"
                            style="width: 100px; height: 100px; margin-right:20px;">
                            <i class="fa fa-2x fa-check-circle  text-dark "></i>
                        </div>
                        <h4 class="text-uppercase m-0">Sự Tiện Lợi và Dễ Dàng</h4>
                    </div>
                    <p class="text-dark  text-justify">
                        AutoRent mang đến sự tiện lợi và dễ dàng cho khách hàng khi thuê xe. Thông qua trang web này,
                        khách hàng có thể nhanh chóng tìm kiếm xe họ muốn, kiểm tra tình trạng sẵn có, và đặt xe chỉ
                        với vài cú nhấp chuột.
                    </p>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success ml-n2 mr-4"
                            style="width: 100px; height: 100px; margin-right:20px;">
                            <i class="fa fa-2x fa-fast-forward  text-dark"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Quy Trình Thuê Xe Nhanh và An Toàn</h4>
                    </div>
                    <p class="text-dark text-justify">AutoRent ưu tiên tốc độ và sự an toàn trong quy trình thuê xe.
                        Với chỉ vài tài liệu cần thiết, khách hàng có thể dễ dàng hoàn tất quy trình đăng ký và xác
                        thực.</p>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success ml-n2 mr-4"
                            style="width: 100px; height: 100px; margin-right:20px;">
                            <i class="fa fa-2x fa-car text-dark"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Lựa Chọn Xe Đa Dạng</h4>
                    </div>
                    <p class="text-dark text-justify">
                        AutoRent cung cấp nhiều lựa chọn xe, từ xe gia đình thoải mái đến xe sang trọng tinh tế. Khách
                        hàng có thể chọn xe phù hợp với nhu cầu của mình, dù là cho công việc hay cho kỳ nghỉ.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Về Chúng Tôi Kết Thúc -->
    <x-footer_user />
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>

</html>
