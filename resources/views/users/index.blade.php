<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <!-- This page will be for admin only. -->
    <h1>Users</h1>
    <table>
        <tr>
            <th>Users</th>
            <th>Email</th>
            <th>Password</th>
            <th>Order Item</th>
            <th>Item Quantity</th>
            <th>Payment Method</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                @if (!is_null($user->orders))
                    @foreach ($user->orders as $order)
                        <td>{{ $order->item }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->item_quantity }}</td>
                        <td>{{ $order->payment_method }}</td>
                    @endforeach
                @endif
            </tr>
        @endforeach
    </table>
</body>
</html>