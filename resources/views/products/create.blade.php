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
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="col-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="col-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="">
            </div>
            <div class="col-3">
                <label for="quantity" class="form-label">quantity</label>
                <input type="number" class="form-control" name="quantity" id="">
            </div>
            <div class="col-3">
            <select name="cat_id" id="">Category
            <option value="1">cars</option>
            <option value="2">bikles</option>
            <option value="2">trains</option>
            <option value="4">plans</option>
            </select>
             </div>
            <input type="submit" class="form-action">
        </form>
    </div>
 <form action="{{ route('products.index') }}">
    <button type="submit">return</button>
    </form>
</body>

</html>
