<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuê Xe Tự Động</title>
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}" sizes="50" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Phông chữ Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Tùy chỉnh Stylesheet Bootstrap -->
    <!-- <link href="bootstrap.min.css" rel="stylesheet" /> -->

    <!-- Stylesheet mẫu -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <x-navbar_user />
    <!-- BẮT ĐẦU LỊCH SỬ ĐẶT HÀNG -->
    <div class="container order-container riwayat-body">
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-5 text-uppercase text-center">LỊCH SỬ <span class="text-success">ĐẶT XE</span></h1>

            <!-- Thẻ (Card) -->
            @foreach ($orders as $order)
                <div class="card p-3 mb-3 mt-5 shadow p-3 mb-5 bg-body-tertiary rounded"
                    style="max-width: 1000px; background-color: 0d7c5d;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <h4>XE00{{ $order->car_id }}</h4>
                            <img src="{{ url('Storage/' . $order->car->car_img) }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">

                                <h5 class="card-title">Xe</h5>
                                <p class="card-text">{{ $order->car->brand }} {{ $order->car->name }}</p>
                                <h5 class="card-title">Ngày Thuê</h5>
                                <p class="card-text">{{ $order->rent_date }}</p>
                                <h5 class="card-title">Ngày Trả</h5>
                                <p class="card-text"> {{ $order->return_date }}</p>
                            </div>
                        </div>
                        <div class="col-md-5 me-">
                            <div class="card-body text-end">
                                <div class="card-content mb-3">
                                    <p class="card-title fw-bold" style="font-size: 35px;">
                                        {{ $order->payment->cost }} VNĐ</p>
                                    <p class="card-title">Trạng thái</p>
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
                                                </svg> ĐANG CHỜ XÁC MINH
                                            </h4>
                                        @else
                                            <h4 class="card-text fw-bold text-success"><i class="fa fa-check"></i>
                                                THÀNH CÔNG
                                            </h4>
                                            <form action="{{ route('pdf_user') }}" method="post">
                                                @csrf
                                                <button class="btn btn-success" type="submit" style="">Tải xuống PDF</button>
                                            </form>
                                        @endif
                                    @endif
                                </div>

                                @if ($order->payment->payment_receipt == null)
                                    <!-- Nút kích hoạt cửa sổ -->
                                    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal"
                                        data-bs-target="#invoice">
                                        Tiếp tục Thanh Toán
                                    </button>

                                    <!-- Cửa sổ Modal -->
                                    <div class="modal fade" id="invoice" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Biên lai Thanh Toán</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Đóng"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <div class="mb-3">

                                                        <!-- Nhập Ngân hàng -->
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text" for="inputGroupSelect01"><i
                                                                    class="fa fa-credit-card"
                                                                    aria-hidden="true"></i></label>
                                                            <select class="form-select" id="inputGroupSelect01">
                                                                <option selected>Phương thức Thanh Toán...</option>
                                                                <option value="1">MB - 123456789000</option>
                                                                <option value="2">VCB - 000987654321</option>
                                                                <option value="3">HDB - 5678900001234
                                                                </option>
                                                                <option value="4">TechComBank - 43218765000</option>
                                                            </select>
                                                        </div>

                                                        <label for="formFileMultiple" class="form-label">Vui lòng nhập bằng chứng thanh toán
                                                           </label>
                                                        <form
                                                            action="{{ route('submit_payment_receipt', $order->payment) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input class="form-control" placeholder="Input bukti"
                                                                type="file" id="formFileMultiple" multiple
                                                                name="payment_receipt" ">



                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button  class="btn btn-primary" type="submit" >Upload <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-upload mb-1" viewBox="0 0 16 16">
                                                            <path
                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                            <path
                                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                        </svg></button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end modal --}}
 @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text"><small class="text-body-secondary">Last updated 3
                                                    mins ago</small></p>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- END ORDER HISTORY -->
                        <x-footer_user />

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
                        </script>
</body>

</html>
