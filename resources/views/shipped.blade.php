{{-- crie um email de ecommerce informando que a compra foi realizada com sucesso --}}
<html>

<body>
    <h1>Olá {{ $user->first_name }},</h1>
    <p>Seu pedido foi realizado com sucesso!</p>
    <p>Segue abaixo os dados do seu pedido:</p>

    @foreach ($items as $item)
        <div style="display: flex; padding: 3px">
            <img width="100" src="{{ $item->image }}" alt="">
            <div style="margin-left: 10px">
                <a href="http://127.0.0.1:8000/product/{{ $item->id }}" style="padding: 5px">{{ $item->title }}</a>
                <div style="padding: 5px">${{ $item->price }}</div>
            </div>
        </div>
    @endforeach

    <p>Valor total: {{ $order->total_decimal }}</p>

    <p>Muito Obrigado - Amazon Clone</p>
</body>

</html>
