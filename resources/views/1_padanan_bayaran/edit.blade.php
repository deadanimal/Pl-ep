<form method="POST" action="/PadananBayaran/{{$PadananBayaran->id}}">
    @csrf
    @method('PUT');

    <br>Perihal Pembayaran <input type="text" class=form-control name="padanan_perihal_pembayaran" value="{{$padanan">
    <br>Jenis Potongan <input type="text" class=form-control name="padanan_jenis_potongan">
    <br>Perihal Potongan <input type="text" class=form-control name="padanan_perihal_potongan">
    <br>Klausa Rujukan <input type="text" class=form-control name="padanan_klausa_rujukan">
    <br>Cara Pembayaran <input type="text" class=form-control name="padanan_cara_pembayaran">
    <br>Kod Akaun <input type="text" class=form-control name="padanan_kod_akaun">
    <br>Amaun <input type="text" class=form-control name="padanan_amaun">
    
    <button type="submit">Hantar</button>
    </form>
    