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

  total  <input type="text" name="total" id="" value="">

            <div class="col-3">
            <select name="user_id" id="">
            <option value="13">afnan</option>
            <option value="14">ahmed</option>

            </select>
             </div>

    <button type="submit">submit</button>
</form>



    <form action="{{ route('order.index') }}">
        <button type="submit">return</button>
    </form>
</body>
</html>
