<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">

    <title>Bảng Điều Khiển Người Dùng</title>
</head>

<body>
    <x-sidebar-admin />
    <!-- MAIN -->
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
                    <h3>Bảng Người Dùng</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Tuổi</th>
                            <th>Giới Tính</th>
                            <th>Vai Trò</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->age }}</td>
                                <td>
                                    @if ($user->gender == 'l')
                                        Nam
                                    @else
                                        Nữ
                                    @endif
                                </td>
                                <td>
                                    @if ($user->is_admin == true)
                                        Quản Trị Viên
                                    @else
                                        Người Dùng
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('delete_user', $user) }}" method="post">
                                        @csrf
                                        @method('delete')
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
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
