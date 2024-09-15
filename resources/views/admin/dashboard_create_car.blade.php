<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS của tôi -->
    <link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">

    <title>Thêm Xe</title>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            margin-bottom: 0.5rem;
        }

        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            margin-bottom: 0.5rem;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <x-sidebar-admin />
    <!-- CHÍNH -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Thêm Xe</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng Điều Khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('dashboard_car') }}">Xe</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Bảng Thêm Xe</h3>

                </div>
                <form role="form" method="post" action="{{ route('store_car') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Seri Xe: </label><br>
                        <input class="form-control" type="text" name="name" /><br>
                        <label>Thương Hiệu: </label><br>
                        <div class="custom-select" style="width:200px;">
                            <select style="font-size: 18px ; padding: 6px 5px; margin: 5px 0px" name="brand" class="form-control">
                                <option value="Toyota">Toyota</option>
                                <option value="Mitshubishi">Mitshubishi</option>
                                <option value="Honda">Honda</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Izuzu">Izuzu</option>
                                <option value="Daihatsu">Daihatsu</option>
                                <option value="Chevrolet">Chevrolet</option>
                            </select><br>
                        </div>
                        <label>Màu Sắc: </label><br>
                        <div class="custom-select" style="width:200px;">
                            <select style="font-size: 18px ; padding: 6px 5px; margin: 5px 0px" name="colour" class="form-control">
                                <option value="Merah">Đỏ</option>
                                <option value="Hitam">Đen</option>
                                <option value="Putih">Trắng</option>
                                <option value="Biru">Xanh Dương</option>
                                <option value="Gold">Vàng</option>
                                <option value="Silver">Bạc</option>
                            </select><br>
                        </div>
                        <label>Số Biển Số: </label><br>
                        <input class="form-control" type="text" name="plat_num" /><br>
                        <label>Số Ghế: </label><br>
                        <input class="form-control" type="number" name="capacity" /><br>
                        <label>Nhiên Liệu: </label><br>
                        <input class="form-control" type="text" name="fuel" /><br>
                        <label>Giá/Ngày: </label><br>
                        <input class="form-control" type="number" name="price" /><br>
                        <input type="file" name="car_img"><br>
                        <button class="btn btn-success" type="submit">Gửi</button>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <!-- CHÍNH -->
    </section>
    <!-- NỘI DUNG -->

    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
