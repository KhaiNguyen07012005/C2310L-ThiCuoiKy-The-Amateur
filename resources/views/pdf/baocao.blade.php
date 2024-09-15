<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Ví dụ 2</title>
    <link rel="stylesheet" href="style.css" media="all" />
    <style>
        @font-face {
            font-family: 'SourceSansPro', Arial, sans-serif;
            src: url(SourceSansPro-Regular.ttf);
        }

        .clearfix {
            display: flex;
            justify-content: space-around;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #0087C3;
            text-decoration: none;
        }

        body {
            border: solid 1px black;
            padding: 40px;
            position: relative;
            margin: 0 auto;
            color: #555555;
            background: #FFFFFF;
            font-family: 'SourceSansPro', Arial, sans-serif; /* Đặt phông chữ chính */
            font-size: 14px;
        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #logo img {
            height: 70px;
        }

        #company {
            float: right;
            text-align: right;
        }

        #details {
            margin-bottom: 50px;
        }

        #client {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
            float: left;
        }

        #client .to {
            color: #777777;
        }

        h2.name {
            font-size: 1.4em;
            font-weight: normal;
            margin: 0;
        }

        #invoice {
            float: right;
            text-align: right;
        }

        #invoice h1 {
            color: #0087C3;
            font-size: 2.4em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        h1 {
            text-align: center;
            font-size: 2em; /* Điều chỉnh cỡ chữ tiêu đề chính */
        }

        #invoice .date {
            font-size: 1.1em;
            color: #777777;
        }

        #thanks {
            font-size: 16px;
            text-align: justify;
            margin-bottom: 50px;
        }

        #notices {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
        }

        #notices .notice {
            font-size: 1.2em;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .footer-content {
            text-align: center;
            position: fixed;
            padding: 10px;
            font-size: 14px;
            bottom: 0;
            left: 0;
            width: 98%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-weight: bold;
        }

        tbody td {
            padding: 8px;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #ebebeb;
        }
    </style>
</head>

<body>
    <header class="clearfix" style="margin-top: 20px;">
        <div>
            <img src="{{ $imagePath }}" alt="" style="width: 100px; height: auto">
        </div>
        <div id="company">
            <h2 class="name">The Amateurs</h2>
            <div></div>
            <div>+84 0000-1111</div>
            <div><a href="mailto:company@example.com">cs.autorent@gmail.com</a></div>
        </div>
    </header>
    <br>
    <main>
        @php
            $url = request()->url();
            $segments = explode('/', $url);
            $segment = end($segments);
        @endphp
        @if ($segment == 'week')
            <h1>Báo cáo tài chính tuần của AutoRent</h1>
        @elseif ($segment == 'month')
            <h1>Báo cáo tài chính tháng của AutoRent</h1>
        @elseif ($segment == 'year')
            <h1>Báo cáo tài chính năm của AutoRent</h1>
        @endif

        <table>
            <thead>
                @php
                    $no = 1;
                    $totalCost = 0;
                @endphp
                <tr>
                    <th>STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Ngày thu nhập</th>
                    <th>Thu nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->return_date }}</td>
                        <td>{{ $order->payment->cost }}</td>
                    </tr>
                    @php
                        $no++;
                        $totalCost += $order->payment->cost;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <div class="footer-content">
            AutoRent The Amateur
            <br>
            Drive Ur Dream, Rent With Us!
        </div>
    </footer>
</body>

</html>
