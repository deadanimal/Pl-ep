<h3> Jawatankuasa </h3>

<form method="POST" action="/Jawatankuasa/{{$Jawatankuasa->id}}">
    @csrf
    @method('PUT')
{{-- jawatankuasa_id --}}
    <br> Jenis Jawatankuasa <select class="form-control" name="jenis_jawatankuasa">

    <option @if ($Jawatankuasa->jenis_jawatankuasa == 'Jawatankuasa Spesifikasi') selected @endif value='Jawatankuasa Spesifikasi'>Jawatankuasa Spesifikasi</option>
    <option @if ($Jawatankuasa->jenis_jawatankuasa == 'Jawatankuasa Teknikal') selected @endif value='Jawatankuasa Teknikal'>Jawatankuasa Teknikal</option>
    <option @if ($Jawatankuasa->jenis_jawatankuasa == 'Jawatankuasa Kewangan') selected @endif value='Jawatankuasa Kewangan'>Jawatankuasa Kewangan</option>
    <option @if ($Jawatankuasa->jenis_jawatankuasa == 'Jawatankuasa Kerja') selected @endif value='Jawatankuasa Kerja'>Jawatankuasa Kerja</option>
    <option @if ($Jawatankuasa->jenis_jawatankuasa == 'Jawatankuasa Pembuka') selected @endif value='Jawatankuasa Pembuka'>Jawatankuasa Pembuka</option>
    </select>
{{-- user_id --}}
    <br>Peranan Jawatankuasa <input type="text" class="form-control" name="jawatankuasa_peranan"  value="{{$Jawatankuasa->jawatankuasa_peranan}}">
{{-- pst_id --}}
{{-- jawatankuasa_created_by
jawatankuasa_created_date
jawatankuasa_updated_by
jawatankuasa_updated_date --}}

    <br><button type="submit">Hantar</button>
</form>
