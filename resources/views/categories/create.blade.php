<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    <form action="{{ route('category.store') }}" method="POST" >
        @csrf
  Name <input type="text" name="name" id="" value="">

    <button type="submit">submit</button>
</form>



    <form action="{{ route('category.index') }}">
        <button type="submit">return</button>
    </form>
</body>
</html>
