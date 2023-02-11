@extends('main')
@section('content')

<a href="{{ route('order.create') }}" class="btn btn-primary p-1 m-3">create order</a>
{{-- @dd($orders) --}}
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>total</th>
                <th>user name</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }} </td>
                    <td>{{ $order->total }} </td>
                    <td>{{ $order->user->user_name }} </td>
                    <td>{{ $order->created_at }} </td>
                    <td>
                        <form action="{{ route('order.show', $order->id) }}">
                            <button type="submit">show</button>
                        </form>

                        <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">delete</button>
                        </form>

                         <form action="{{ route('order.edit', $order->id) }}">
                            <button type="submit">update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
@endsection
