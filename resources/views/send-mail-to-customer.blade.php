<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-light text-dark" style="box-shadow: 0 8px 8px;">
        <a class="navbar-brand"><img src="https://banner2.cleanpng.com/20180311/wre/kisspng-online-shopping-drawing-electricity-supplier-transaction-model-5aa5e7d61aa6b3.2541996915208222301092.jpg"width="85px"><sup style="color:red">HB</sup><sub>Shop</sub></a>

 @foreach ( $data as $item )
    <h4>Hello Dear {{$item['name']}} Tnx for Register</h4>
@endforeach







</body>
</html>
