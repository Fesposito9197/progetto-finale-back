<h1>Lista ordini</h1>
<ul>
    @foreach ($userOrders as $order)
        <li>
            <h3>{{ $order->name }} </h3>
            {{ $order->total_price }}
            {{ $order->email }}
            {{ $order->telephone }}
            {{ $order->address }}
            Prodotti:
            <ul>
                @foreach($order->products as $product)
                <li>
                    {{$product->name}}
                    {{$product->price}}
                    {{$product->company_id}}
                </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
