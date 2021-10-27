<h1>Shopping Cart</h1>

@if ($itemKart)
    @foreach ($itemKart as $itemKart)
        <ul>
            <li>Pembelian Barang ID: {{ $itemKart->id }}</li>
            <li>
                <form action="/ItemKart/removecart/{{ $itemKart->id }}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Remove Cart</button>
                </form>
                
            </li>

        </ul>
    @endforeach
@endif
