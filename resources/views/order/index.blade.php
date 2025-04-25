<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Orders</title>
    <style>
        body {
            font-family: Arial;
        }

        .container {
            border: 2px solid #000;
            width: 90%;
            margin: 30px auto;
            padding: 20px;
        }

        .order-block {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f4f4f4;
        }

        .highlight {
            background-color: yellow;
            width: 100px;
            height: 20px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Orders</h2>
        <div class="highlight"></div>
        <p><strong>Khách hàng:</strong> {{ $user_orders->name }}</p>

        @foreach ($user_orders->orders as $order)
            <div class="order-block">
                <h4>Đơn hàng: {{ $order->code }}</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->pivot->quantity }}</td>
                                <td>{{ number_format($product->price, 0, ',', '.') }}đ</td>
                                <td>{{ number_format($product->price * $product->pivot->quantity, 0, ',', '.') }}đ</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</body>

</html>