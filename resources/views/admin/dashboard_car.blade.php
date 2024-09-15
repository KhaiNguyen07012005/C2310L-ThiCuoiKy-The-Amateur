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

    <title>Bảng Điều Khiển Xe</title>
</head>

<body>
    <x-sidebar-admin />
    <!-- CHÍNH -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Xe</h1>
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

            <a href="{{ route('create_car') }}" class="btn-download">
                <i class='bx bxs-bus'></i>
                <span class="text">Thêm Xe</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Bảng Xe</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Thương Hiệu</th>
                            <th>Số Biển Số</th>
                            <th>Giá/Ngày</th>
                            <th>Độ Dài</th>
                            <th>Màu Sắc</th>
                            <th>Nhiên Liệu</th>
                            <th>Hình Ảnh</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->name }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->plat_num }}</td>
                                <td>{{ $car->price }}</td>
                                <td>{{ $car->capacity }}</td>
                                <td>{{ $car->colour }}</td>
                                <td>{{ $car->fuel }}</td>
                                <td><img src="{{ asset('storage/' . $car->car_img) }}" alt="" style="border-radius:0; width:100px; height:100px;">
                                </td>
                                <td class="d-flex align-items-center justify-content-center">

                                    <form action="{{ route('edit_car', $car) }}" method="get">
                                        @csrf

                                        <button type="submit" class="btn btn-primary">
                                            <i class="bx bx-edit" style="color:green; font-size: 20px;"></i>
                                        </button>
                                    </form>

                                    <form action="{{ route('delete_car', $car) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bx bx-trash" style="color:red; font-size: 20px;"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- CHÍNH -->
    </section>
    <!-- NỘI DUNG -->

    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
