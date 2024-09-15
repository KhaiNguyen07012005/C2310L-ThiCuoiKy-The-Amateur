<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Câu Hỏi Thường Gặp (FAQ)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('user/css/faq-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <x-navbar_user />

    <!-- FAQ -->
    <section id="faq" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Câu Hỏi Thường Gặp</h1>
                        <div class="line"></div>
                        <p>
                            Những câu hỏi thường gặp.</p>
                    </div>
                </div>
            </div>
            <div class="questions-container" data-aos="fade-down" data-aos-delay="250">
                <div class="question">
                    <button id="questionButton">
                        <span>Những yêu cầu chung để thuê xe là gì?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Những yêu cầu chung để thuê xe bao gồm có bằng lái xe hợp lệ, giấy tờ tùy thân hợp pháp và tuổi tối thiểu 18 tuổi.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Tôi có thể hủy đơn hàng của mình sau khi đã được xác nhận không?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>
                        Rất tiếc, bạn không thể hủy đơn hàng của mình sau khi đơn hàng đã được xác nhận.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Các phương thức thanh toán nào có sẵn?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Khi đơn hàng của bạn đã được xác nhận, bạn có thể thực hiện thanh toán trước qua chuyển khoản ngân hàng đến số tài khoản đã được cung cấp.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>
                            Có phí phụ thu nào khác ngoài giá thuê không?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Có, có thể có các phí phụ thu khác mà bạn cần thanh toán, chẳng hạn như phí hỏng hóc và phí trễ hạn trả xe.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Có giới hạn thời gian thuê xe không?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Thời gian thuê xe có giá theo ngày, tính từ ngày bạn nhận xe.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Quy trình nhận và trả xe như thế nào?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>1. Bạn phải đặt xe muốn thuê trước qua ứng dụng<br>
                        2. Sau khi đơn hàng được xác nhận, đến địa điểm cho thuê với các giấy tờ cần thiết và ký hợp đồng thuê.<br>
                        3. Sau khi được sự đồng ý của chúng tôi, bạn có thể mang xe đã đặt.<br>
                        4. Khi trả xe, bạn sẽ trả xe tại địa điểm cho thuê. Khi trả xe, đội ngũ của chúng tôi sẽ kiểm tra tình trạng xe cũng như thời gian trả xe. Nếu có trễ hạn hoặc hư hỏng xe, bạn sẽ phải thanh toán thêm phí.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Tôi có cần tự đổ nhiên liệu không?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Có, chúng tôi mong bạn tự đổ nhiên liệu trước khi trả xe. Đảm bảo trả xe với mức nhiên liệu giống như khi bạn nhận xe.</p>
                </div>

            </div>
    </section>

    <x-footer_user />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>

</body>

</html>
