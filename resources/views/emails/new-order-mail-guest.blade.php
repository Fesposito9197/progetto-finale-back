<div class="container-fluid text-center">
    <h1>Hai effettuato un nuovo ordine!</h1>
    <h4>Email: {{ $order->email }}</h4>
    <div>
        <h2>Il ristorante sta preparando l'ordine e arriverà tra poco!</h2>
    </div>
    <div>
        <strong>Indirizzo di consegna: {{ $order->address }}</strong>
    </div>

    <h2>Entra nel tuo spazio riservato per i dettagli!</h2>
</div>