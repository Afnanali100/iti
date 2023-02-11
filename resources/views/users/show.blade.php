<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>age</th>
            <th>gender</th>
        </thead>
        <tbody>

            <tr>
            <td>{{ $user->user_name }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->user_password }}</td>
             <td>{{ $user->age }}</td>
             <td>{{ $user->gender }}</td>
             </tr>

        </tbody>
    </table>
    <form action="{{ route('users.index') }}">
        <button type="submit">return</button>
    </form>
</body>
</html>
