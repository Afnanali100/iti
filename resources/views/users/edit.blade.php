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

    <form action="{{ route('user.update',$user->id) }}" method="POST">

    @method('PUT')
    @csrf

  Name <input type="text" name="user_name" id="" value="{{ $user->user_name }}">
  Email <input type="email" name="email" id="email" value="{{ $user->email }}">
  Password <input type="password" name="user_password" id="" value="{{ $user->user_password }}">
  Gender
   male <input type="radio" name="gender" id="male" value="male">
   female <input type="radio" name="gender" id="female" value="female" >
   <br>
   Age <input type="text" name="age" id="" value="{{ $user->age }}"  >

    <button type="submit">submit</button>
</form>



    <form action="{{ route('users.index') }}">
    <button type="submit">return</button>
    </form>
</body>
</html>
