<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>
<body>
<div class="col-12">

    <div class="jumbotron">
        <img
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEUAAAD///9JSUnNzc2QkJCLi4vAwMDR0dFERETn5+d/f3++vr7X19fU1NSBgYFvb292dnZlZWXc3NwbGxslJSXs7OxYWFgsLCyXl5czMzP39/c9PT3Hx8d0dHSpqanp6emgoKAPDw9QUFBZWVm1tbUwMDBnZ2cOtJswAAAG+ElEQVR4nO3d61riMBAG4CKKIIhy8IQsVhf3/i9xrTFLC0kzycwkwz7z/bUg75OZNIUSqsH/nqr0C2CPCs8/Kjz/qJA2m8nsejZ5yPo/cwkfhpeLz8rmaXE1zOXMIpzsPqrTfOwmOf55BuHw0cEz+T3k//fswtGT19fkc8v9ApiFS//42TwueV8Cr/A56GvyzPoaOIUPFyBgVV1wzquMwiXQ1wRYqZtN/MvgE24jgFUVnnAepnePL+uLxXNk37IJR1HAqhr1P91mfjh0HHWO4RLGAqtqGvF0vyNeCZMwHtg7iidz8usb+KXwCFOAPaNYnx77Ap5zWIRpQO8oDl3HPkJfDIcwFegjvjuP7e3bVhiE6UA3cec+9An4cuiFGKCT+Oo5FLhmJxfigA6id2l0X0aIBZ4SPUX6dcYoIsQDT6aQK99xK9h6nVZIATwexXvvcbCzPqmQBng0infew2Bv81AKqYDdURQkpAN2RlGOkBLYHkUxQhBwfb8f7e/XUUQpQhCwNhcEmxpysC1UIUIQ8HBp7rxaOM5IkhAEvG094BbygKkcYTQQSBxJEYKA10cPuoY8aCpDmAQEEkcShCDgzPHAGeSB0/LChB60AfXi1r/yziNMLFETUKH6P53LIkSMYBPQKBYVJvegDagXCwpRJWoCKtRiQgIgisguRJeoSXqhcguRk8whydMNs5CkRE1SC5VXSAhMJrIKiXrQJq0XOYVkPWiTNIqMQtISTSfyCclHsEnCjMomJO5Bm/he5BIylKhJdKEyCdmA8UQeIa5El83l7L33pqbIQmUR4iYZe1uM92bEuOmGQ4gr0cONW3PfIVGFyiDEjeBN66AbCiK9ENeDN53DvMSIXiQXUpWoCUGhUgtpgRREYiFdD9p4CxU6o9IKKXuQikgqpC5RE2ShUt5twgPEEmF3J4KEuBL1f/DQc28a8GMbIiFukvGPYBPvKMI/QsULuUo0QKQq1LCQ/jTRDW5GDY9iUMhxmgASQb0YJIaEvCVqwluoAWEOIJYYGMV+Id9pohvvSSPivpskIX8P2jBON33CPCVqwteLPULu00Q3uKv+nlH0C3P1oA1uAecneoWcSzV3mGZUnzBnD/ISPcK8PWjDMqO6hflOE0AiohedwhIlasJw0nAJywE5etEhzH2a6Ib8qv9UWGaSOYR6ujkRlixRE+JePBaWHsEmtAu4I2HZHrQhXcB1hfmXau5QzqgdYfketCEktoUyStSE7qq/JSy1VHOHbAF3EMopUROqk8Y/oYTTRDdEJw0rnEIelakHbWgWcJXUEWxCsoCr4COYsQdtKHqxkjuCTQhGsRGCduXK3IM2uF7cGuEEcmyGpZo7uEKdfAt9+7+04+1BzhI1QZ00Xhuhd3eUVgqVqAlqAbf7Eq7Ch2VbqrmDmW5Wgwrw1fgis2g7mEIdVpfBY4oDUcTLahw6pGgP2qSfNMZVaBsOASPYJHkUg9uMCAFiCrXfWHgWbSdxRl3396GIHrRJ68Vx1bfqElOiJkmFOq96lt3CgGnEbTXw/k1UiZokFOrXqq32/EnQJHNI9HRTfwk37tlUXImaRBbqetNcPTk3lxQKjCUuzTW+410agT1oE9OLzTs13+/THM+nL977/EuPYBPvKE5ejo783sPVvNc2WbT/MPfusywB2EPcdE7uCzNO9h3h2d3PfsSruX9b0PIlauLfffZh/jNvvt/ZRmt9MnO73e+3fZvWSwH2b7C73E7329ZEGfHdNRklauIt1NPAhZKAMUSw8Fdp01F+UQtljWAT6CgChfKAYCJMKBEIJYKEck4T3YB2ZYcIZY5gE8goAoRygSBiWCi1RE3ChRoUwn52q1yCP/gVEoI+Pi2a0De6Q8LwBzelc4kUun6aUVY+kELoj8OVy4UKVVgaEIwKVajC8lGhClVYPipUoQrLR4UqVGH5lBSux9CAfk1PoDD4Zu2/YN6zLCkMvZN5iPf3YlWoQhWqUIUqVKEKVahCFapQhSpUoQpVqEIVqlCFKlShClWoQhWqMKMQ832LPELs9y3kCx+RwkX4XxQWLpBCzP/OI7xCCvfihcjfXXNvXiNK2LfPBUQI2RqzqHAVeu6gELHHbBahd49asBBRplmEoSIFfNM5fVWTQxha0UCE0N+QLiP07tgVIRz8ESz8E35ugDC5EzMIg10I2zWiFiusAc8N2vkjcfcddiHZzh+DQXCz4SLCMei5YcLNp0Dhi3dbuQRh2lUUrxAwjUYJU27FZhWCnxy+m9ko+oZ6RuEa8rvxscLBYPcuRPi+i3jVMcLBpo6aVJmE4xo2xaQIv7KsF+ArxtD7C4eAL9FWixqwjOkkVthk8zYbQhLaG+eQCej5Zm9Rg/eTFOF5RYXnHxWef1R4/vkLjgyNDHC3GpUAAAAASUVORK5CYII="
            style="width: 50px" alt="">
        <h5>Sweet home</h5>
        <a href="">Home</a> |
        <a href="">Best Home</a> |
        <a href="">Life style</a> |
        <a href="">About us</a> |
        <a href="">Contact us</a>
        <div class="search-container" style="text-align: right">
            <form action="">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="col-6" style="float: left">
        <div class="container">
            <div class="row">
                @foreach($list as $item)
                    @if($item->status ==1)
                        <div class="col-sm-4">
                            <img
                                src="{{$item->thumbnail}}"
                                alt="{{$item->name}}" style="width: 200px;height: 240px;">
                            <h3>{{$item->name}}</h3>
                            <h3>{{$item->price}} $</h3>
                            <h5>{{$item->details}}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-4">
        <table>
            <tr>
                <th>Search By Arena</th>
            </tr>
            <tr>
                <td><u>District 1</u></td>
            </tr>
            <tr>
                <td><u>District 2</u></td>
            </tr>
            <tr>
                <td><u>District 3</u></td>
            </tr>
            <tr>
                <td><u>District 4</u></td>
            </tr>
            <tr>
                <td><u>District 5</u></td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>Search By Price</th>
            </tr>
            <tr>
                <td><u>< 100000$</u></td>
            </tr>
            <tr>
                <td><u>10000 - 15000$</u></td>
            </tr>
            <tr>
                <td><u>15000 - 30000$</u></td>
            </tr>
            <tr>
                <td><u>30000 - 50000$</u></td>
            </tr>
            <tr>
                <td><u> > 50000$</u></td>
            </tr>
        </table>

    </div>

</div>

<div style="clear: both"></div>
<div style="text-align: center">@include('default', ['paginator' => $list])</div>
<div class="w3-center w3-small w3-opacity " style="text-align: center">
    Aptech FPT @ Copyright 2018
</div>

</body>
</html>
