<!DOCTYPE html>
<html>
<title>Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    * {
        text-decoration: none !important;
    }
</style>
<body>
<h2>Shopping Cart </h2>
<h3><a href="/">
        <button class="w3-button w3-black w3-round-large">Back</button>
    </a>
    <a href="/cart/reset">
        <button class="w3-button w3-red w3-round-large">Reset</button>
    </a></h3>

@if($shoppingCart != null)
    <table class="w3-table-all">
        <tr>
            <th>Thumbnail</th>
            <th>Name Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
        <?php
        $totalPrice = 0;
        ?>
        @foreach($shoppingCart as $cartItem)

            <?php
            $totalPrice += ($cartItem->quantity) * ($cartItem->price);
            ?>
            <form action="/cart/update" method="post">
                @csrf
                <tr>
                    <td><img src="{{$cartItem->thumbnail}}" style="width: 100px;" alt=""></td>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
{{--                    <td>{{$cartItem->quantity}}</td>--}}
                    <input type="hidden" name="id" value="{{$cartItem->id}}" min="1" max="{{$cartItem->inventory}}">
                    <td><input class="w3-input" type="number" name="quantity"
                               value="{{$cartItem->quantity}}" style="width: 100px;"></td>
                    <td>{{$cartItem->quantity*$cartItem->price}}</td>
                    <td>
                        <button class="w3-btn w3-teal" type="submit">Update</button>
                        <a href="/cart/delete/{{$cartItem->id}}">
                            <button class="w3-bar-item w3-button w3-red" type="button">Delete</button>
                        </a>

                    </td>
                </tr>
            </form>
        @endforeach
        <tr>
            <td colspan="4"></td>
            <td style="color:red;">
                Total Price:{{$totalPrice}}
            </td>
        </tr>
    </table>
@else
    <h1>Cart Null</h1>
@endif

</body>
</html>
