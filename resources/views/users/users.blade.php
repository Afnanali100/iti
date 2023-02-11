@extends('main')
@section('content')

<a href="{{ route('users.create') }}" class="btn btn-primary p-1 m-3">create user</a>
<table>
        <thead>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ( $users as $user )
            <tr>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age }}</td>
                <td>
                    <form action="{{ route('users.show',$user-> id) }}">
                     <button type="submit">show</button>
                    </form>
                 <form action="{{ route('user.delete',$user->id) }}" method="post">
                    @method('delete')
                    @csrf
                       <button type="submit">delete</button>
                 </form>
                 <form action="{{ route('user.edit',$user->id) }}">
                  <button type="submit">edit</button>
                 </form>


                </td>
            </tr>
            @endforeach
        </tbody>
      </table>


@endsection


