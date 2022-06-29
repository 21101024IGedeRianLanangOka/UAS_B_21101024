<style >
    .judul {
        margin-top: 30px;
        margin-bottom: 20px;
    }
</style>
<h3 class="text-center judul">Tambah Data Mata Kuliah</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkode_mk" placeholder="Isi Kode Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isi Nama Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <input type="text" class="form-control" id="txsemester" placeholder="Isi Semester Berapa">
    </div>
    
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-danger"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas1/client/index.php?p=mk")
}
</script>
<script src="pagemkstoredata.js"></script>