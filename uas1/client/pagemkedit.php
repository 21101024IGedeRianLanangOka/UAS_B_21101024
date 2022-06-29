<style >
    .judul {
        margin-top: 30px;
        margin-bottom: 20px;
    }
</style>
<h3 class="text-center judul">Edit Data Matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
</div>
<form>
    <div class="mb-3">
        <label class="form-label">KODE</label>
        <input type="text" class="form-control" id="txkode_mk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Mata Kuliah</label>
        <input type="text" class="form-control" id="txnama">
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <input type="text" class="form-control" id="txsemester">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="updatedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-danger"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas1/client/index.php?p=mk")
}
</script>
<script src="pagemkcaridata.js"></script>
<script src="pagemkupdatedata.js"></script>