<h1>Lista ordini</h1>
<ul>
    @foreach ($orders as $order)
        <li>
            <h3>{{ $order->name }} </h3>
            {{ $order->total_price }}
            {{ $order->email }}
            {{ $order->telephone }}
            {{ $order->address }}
        </li>
    @endforeach
</ul>
