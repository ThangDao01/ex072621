<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sweet home
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
        }
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
        <i class="fa fa-home" style="font-size: 100px"></i>
        <h5>Sweet home </h5>
        <a href="">Home</a> |
        <a href="">Best Home</a> |
        <a href="">Life style</a> |
        <a href="">About us</a> |
        <a href="">Contact us</a>
        <div class="search-container" style="text-align: right">
            <form action="">
                <a href="/cart/show">  <i class="fa fa-shopping-cart" style="font-size: 50px;color: black"></i></a>

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
                                <img src="{{$item->thumbnail}}"
                                     alt="{{$item->name}}" style="width: 200px;height: 240px;">
                                <h3>{{$item->name}}</h3>
                                <h3>{{$item->price}} $ <a href="/cart/add/{{$item->id}}"><i class="fa fa-plus-circle" >Add to cart</i></a></h3>
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
