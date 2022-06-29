<style >
    .judul {
        margin-top: 30px;
        margin-bottom: 20px;
    }
</style>
<h3 class="text-center judul">Edit Data Dosen <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama">
    </div>
<div id="sembunyi">
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" id="txemail">
    </div>
</div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-primary">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-danger"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas1/client/index.php?p=dsn")
}
</script>
<script src="pagedsncaridata.js"></script>
<script src="pagedsndeletedata.js"></script>