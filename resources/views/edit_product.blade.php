<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_product</title>
</head>
<body>
    <h1>Add new product</h1>
    <form action="{{url('/product/'.$id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="usname" id="usname">
        <input type="submit" value="Edit Product">
    </form>
</body>
</html>