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

    <form action="{{ route('order.store') }}" method="POST" >
        @csrf
        
  total<input type="text" name="total" id="" value="">
  user_id<input type="text" name="user_id" id="" value=""  >

    <button type="submit">submit</button>
</form>



    <form action="{{ route('users.index') }}">
        <button type="submit">return</button>
    </form>
</body>
</html>
