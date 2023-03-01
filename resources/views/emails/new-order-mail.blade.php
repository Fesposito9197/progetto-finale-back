<div class="container-fluid text-center">
    <h1>Hai ricevuto un nuovo ordine da: {{ $order->name }}</h1>
    <h4>Email: {{ $order->email }}</h4>
    <div>
        <strong>Numero di telefono: <small>{{ $order->telephone }}</small></strong>
    </div>
    <div>
        <strong>Indirizzo di consegna: {{ $order->address }}</strong>
    </div>

    <h2>Entra nel tuo spazio riservato per i dettagli!</h2>
</div>