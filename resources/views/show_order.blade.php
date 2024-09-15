<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoRent</title>
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}" sizes="50" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="bootstrap.min.css" rel="stylesheet" /> -->

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <x-navbar_user />
    <!-- BẮT ĐẦU LỊCH SỬ ĐẶT HÀNG -->
    <div class="container order-container riwayat-body">
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-5 text-uppercase text-center">LỊCH SỬ <span class="text-success">ĐẶT HÀNG</span></h1>

            <!-- Card -->
            @foreach ($orders as $order)
                <div class="card p-3 mb-3 mt-5 shadow p-3 mb-5 bg-body-tertiary rounded"
                    style="max-width: 1000px; background-color: #0d7c5d;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <h4>CAR00{{ $order->car_id }}</h4>
                            <img src="{{ url('Storage/' . $order->car->car_img) }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">

                                <h5 class="card-title">Xe</h5>
                                <p class="card-text">{{ $order->car->brand }}{{ $order->car->name }}</p>
                                <h5 class="card-title">Ngày Thuê</h5>
                                <p class="card-text">{{ $order->rent_date }}</p>
                                <h5 class="card-title">Ngày Trả</h5>
                                <p class="card-text"> {{ $order->return_date }}</p>
                            </div>
                        </div>
                        <div class="col-md-5 me-">
                            <div class="card-body text-end">
                                <div class="card-content mb-3">
                                    <p class="card-title fw-bold" style="font-size: 35px;">Rp
                                        {{ $order->payment->cost }}</p>
                                    <p class="card-title">Trạng Thái</p>
                                    @if ($order->payment->payment_receipt == null)
                                        <h4 class="card-text fw-bold text-danger"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg> VUI LÒNG THANH TOÁN
                                        </h4>
                                    @else
                                        @if ($order->payment->is_paid == false)
                                            <h4 class="card-text fw-bold text-primary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-hourglass-bottom mb-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
                                                </svg> CHỜ XÁC NHẬN
                                            </h4>
                                        @else
                                            <h4 class="card-text fw-bold text-success"><i class="fa fa-check"></i>
                                                THÀNH CÔNG
                                            </h4>
                                            <form action="{{ route('pdf_user') }}" method="post">
                                                @csrf
                                                <button class="btn btn-success" type="submit" style="">Tải PDF
                                                    xuống</button>
                                            </form>
                                        @endif
                                    @endif
                                </div>

                                @if ($order->payment->payment_receipt == null)
                                    <!-- Nút kích hoạt modal -->
                                    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal"
                                        data-bs-target="#invoice">
                                        Tiếp tục Thanh Toán
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="invoice" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hóa Đơn Thanh Toán</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <div class="mb-3">

                                                        <!-- Input Ngân Hàng -->
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text" for="inputGroupSelect01"><i
                                                                    class="fa fa-credit-card"
                                                                    aria-hidden="true"></i></label>
                                                            <select class="form-select" id="inputGroupSelect01">
                                                                <option selected>Phương Thức Thanh Toán...</option>
                                                                <option value="1">Vietcombank - 123456789</option>
                                                                <option value="2">VietinBank - 987654321</option>
                                                                <option value="3">BIDV - 567890123</option>
                                                                <option value="4">Techcombank - 432187654</option>
                                                            </select>
                                                        </div>

                                                        <label for="formFileMultiple" class="form-label">Tải hóa đơn của
                                                            bạn lên ở đây:</label>
                                                        <input class="form-control" type="file" id="formFileMultiple"
                                                            multiple>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- KẾT THÚC LỊCH SỬ ĐẶT HÀNG -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9mf5atnl8G1t6Fq8jtZT9F7NfE4S9J4z1D4Wu6Lz8D1tD4t2kIM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1oV6K3Ra0xZQ2R3DbBf6e1t8PpQOShLvFjZ4tO2TAd6zh/vGePlAw6wId9g5AEX8F"
        crossorigin="anonymous"></script>
</body>

</html>
