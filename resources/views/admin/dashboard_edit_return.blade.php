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

    <title>Bảng Điều Khiển Xác Nhận Trả Xe</title>
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
                <h1>Người Dùng</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng Điều Khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('dashboard_user') }}">Người Dùng</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Bảng Xác Nhận Trả Xe</h3>

                </div>
                <form method="post" action="{{ route('update_return', $CarReturn) }}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Nhập Tiền Phạt: </label>
                        <input class="form-control" type="number" name="fines" value="{{ $CarReturn->fines }}" />
                        <label>Nhập Ngày Trả Xe: </label>
                        <input type="date" name="date_of_return" id="">
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
