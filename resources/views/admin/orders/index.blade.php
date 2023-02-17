<h1>Lista ordini</h1>
<ul>
    @foreach ($orders as $order)
        <li>
            <h3>{{ $order->name }} </h3>
        </li>
    @endforeach
</ul>
