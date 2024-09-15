<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoRent</title>
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}" sizes="50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
</head>

<body>
    <x-navbar_user />

    <!-- CHI TIẾT -->
    <div class="container-fluid">
        <div class="card border-0 shadow-lg rounded pb-4">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ url('Storage/' . $car->car_img) }}" class="w-100">
                </div>
                <div class="col-lg-6 mt-4 ps-3 d-flex flex-column justify-content-around">
                    <div class="row px-3">
                        <h1 class="fw-bold">{{ $car->brand }}{{ $car->name }}</h1>
                        <p class="fs-3 fw-semibold"> {{ $car->price }} VNĐ/ngày</p>
                    </div>
                    <form action="{{ route('add_order', $car) }}" method="post" class="">
                        @csrf
                        <div class="row px-3">
                            <div class="date-input mb-3">
                                <label for="dateFirst" class="fs-4 fw-semibold mb-1" style="color: #0d7c5d;">Ngày
                                    Mượn</label>
                                <input type="date" name="rent_date" class="form-control" id="dateFirst">
                            </div>
                            <div class="date-input">
                                <label for="dateFirst" class="fs-4 fw-semibold mb-1" style="color: #0d7c5d;">Ngày
                                    Trả</label>
                                <input type="date" name="return_date" class="form-control" id="dateFirst">
                            </div>
                        </div>
                        <div class="detail-btn ms-3 pt-3">
                            <button class="btn btn-rent" type="submit">Thuê Ngay</button>
                        </div>
                    </form>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p style="color: red; margin-left:20px;">Ngày mượn phải sớm hơn ngày trả</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="card border-0 shadow-lg rounded mt-5">
            <h5 class="ms-3 mt-4 text-center">Chi Tiết Sản Phẩm</h5>
            <hr>
            <div class="detail-product row text-center">
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Hãng</p>
                    <p>{{ $car->brand }}</p>
                </div>
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Loại</p>
                    <p>{{ $car->name }}</p>
                </div>
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Biển số</p>
                    <p>{{ $car->plat_num }}</p>
                </div>
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Năm</p>
                    <p>2023</p>
                </div>
            </div>
            <hr>
            <div class="detail-desc mt-2">
                <h3 class="fs-3 fw-semibold ms-5">Mô Tả</h3>
                <p class="fs-6 text-secondary px-5 py-4">Xe này cung cấp nhiều tính năng cho phép trải nghiệm lái xe thoải mái, an toàn và hiện đại. Với thiết kế hiện đại và khí động học, xe này có các tính năng sau: <br>
                    1. Hiệu suất cao: Xe được trang bị động cơ mạnh mẽ cung cấp khả năng tăng tốc nhanh và tốc độ tối đa ấn tượng. Hệ thống lái phản hồi nhanh cũng cho phép điều khiển chính xác và ổn định. <br>
                    2. Kết nối số: Với hệ thống giải trí mới nhất, xe này cung cấp kết nối số tuyệt vời. Người lái và hành khách có thể kết nối với điện thoại thông minh của họ, truy cập ứng dụng, nghe nhạc hoặc sử dụng điều hướng dễ dàng qua màn hình cảm ứng trực quan. <br>
                    3. An toàn cao: Các tính năng an toàn tiên tiến như hệ thống phanh chống bó cứng, giám sát điểm mù, camera lùi và cảm biến đỗ xe giúp giảm nguy cơ tai nạn. Xe cũng được trang bị túi khí và hệ thống phanh khẩn cấp để tối ưu hóa bảo vệ hành khách. <br>
                    4. Tính năng tiện nghi: Với ghế thoải mái và điều chỉnh điện, người lái có thể tìm thấy vị trí lý tưởng. Các tính năng khác như điều hòa tự động, ghế sưởi, hệ thống âm thanh cao cấp và điều khiển nhiệt độ hai vùng đảm bảo sự thoải mái tối đa trong chuyến đi. <br>
                    5. Hiệu quả nhiên liệu: Xe được trang bị công nghệ tối ưu hóa hiệu quả nhiên liệu, như hệ thống hybrid hoặc động cơ thân thiện với môi trường. Điều này giúp giảm mức tiêu thụ nhiên liệu và khí thải. <br>
                    6. Thiết kế sáng tạo: Thiết kế ngoại thất của xe nổi bật với các đường nét khí động học thanh thoát và chi tiết quyến rũ. Nội thất rộng rãi và linh hoạt cung cấp đủ không gian cho hành khách và hành lý. <br>
                    Xe này là hiện thân của công nghệ ô tô tiên tiến kết hợp hiệu suất cao, an toàn, tiện nghi, hiệu quả và vẻ đẹp trong một gói ấn tượng.</p>
            </div>
        </div>
    </div>
    <!-- CHI TIẾT KẾT THÚC -->
    <x-footer_user />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
