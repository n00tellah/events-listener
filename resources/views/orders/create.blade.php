<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Item</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            place-items: center;
        }

        div {
            margin: 10px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-black-200 {
            border-color: #000000;
        }

        .p-4 {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <h1>Order Item</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div>
            <label for="item">Item: </label>
            <input type="text" name="item" id="item">
        </div>

        <div>
            <label for="quantity">Quantity: </label>
            <input type="number" min="0" name="quantity" id="quantity">
        </div>

        <div>
            <label for="price">Payment Method: </label>
            <select name="payment" id="payment">
                <option value="cash">Cash</option>
                <option value="card">Card</option>
                <option value="gcash">GCash</option>
            </select>
        </div>

        <div class="border-2 border-black-200 p-4">
            <button type="submit">Place Order</button>
        </div>
    </form>
</body>
</html>
