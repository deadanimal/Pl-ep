<form method="POST" action="/SupportingDocsUpdateProfil">
@csrf
    Nama Dokumen <input type="text" name="pkp_doc_name" class="form-control">
    <br>Catatan Dokumen <input type="text" name="pkp_doc_catatan" class="form-control">
    <br> Status <<input type="text" class="form-control" name="pkp_doc_status_terima">
    
    <button type="submit">Hantar</button>
</form>
