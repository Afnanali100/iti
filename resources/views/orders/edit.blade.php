<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="row m-50 m-auto">
        <form action="{{ route('order.update', $order->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="col-3">
                <label for="total" class="form-label">total</label>
                <input type="text" class="form-control" name="total" value="{{ $order->total }}" id="">
            </div>
            <div class="col-3">
                <label for="" class="form-label">user_id</label>
                 <input type="text" class="form-control" name="user_id" value="{{ $order->user_id }}" id="">

            </div>
             <input type="submit" value="submit">
        </form>
    </div>
 <form action="{{ route('order.index') }}">
    <button type="submit">return</button>
    </form>
</body>

</html>
