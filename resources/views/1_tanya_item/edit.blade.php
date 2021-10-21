<h3>Pertanyaan Item</h3>

<form method="POST" action="/PertanyaanItem/{{$PertanyaanItem->id}}">
    @csrf
    @method('PUT')

    <br> Nama Pembekal <input type="text" class="form-control" name="pembekal_id">
    {{-- <select name=pembekal_id class="form-control">
        @foreach ($pembekal as $pembekal)
        <option value="pembekal_id">{{$pembekal->pembekal_company_name}}</option>
        @endforeach
    </select> --}}

    <br>Kuatiti Item yang Diterima <input type="number" class="form-control" name="tanya_kuanititi" value="{{$PertanyaanItem->tanya_kuantiti}}">
    <br>Tempoh Penghantaran <input type="text" class="form-control" name="tanya_tempoh_penghantaran" value="{{$PertanyaanItem->tanya_tempoh_penghantaran}}">
    <br>Jenis Perolehan <input type="text" class="form-control" name="tanya_jenis_perolehan" value="{{$PertanyaanItem->jenis_perolehan}}">
    <br>Catatan <input type="text" class="form-control" name="tanya_catatan" value="{{$PertanyaanItem->tanya_catatan}}">
    <br>Ketersediaan Stok <input type="text" class="form-control" name="tanya_ketersediaan_stok" value="{{$PertanyaanItem->tanya_ketersediaan_stok}}">
    <br>Harga Baru <input type="number"  min="1" step="any" class="form-control" name="tanya_harga_baru" value="{{$PertanyaanItem->tanya_harga_baru}}">
    <br>Status <input type="text" class="form-control" name="tanya_status" value="{{$PertanyaanItem->tanya_status}}">

    <br> <button type="submit">Hantar</button>

</form>




