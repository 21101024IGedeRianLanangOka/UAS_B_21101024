<div id="konten"></div>
<style >
    .judul {
        margin-top: 30px;
        margin-bottom: 20px;
    }
</style>
<script>
    const gh = new XMLHttpRequest();
    gh.open("GET","http://localhost/uas1/server/dtmhs.php");
    gh.send();

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        var tx ='<h3 class="text-center judul">Data Mahasiswa</h3>';
        tx +='<table class="table table-hover bg-success text-light"><thead><tr><th scope="col">No.</th><th scope="col">NIM</th><th scope="col">Nama Lengkap</th><th scope="col">Jenis Kelamin</th><th scope="col">Jurusan</th><th scope="col">Tanggal Lahir</th><th scope="col"> <a href="index.php?p=mhs&sp=addnew" class="badge bg-primary">New</a></th></tr></thead><tbody>';

        let nomor = 1;
        for(i=0;i<dta.length;i++){
            let jkel = "Laki-Laki";
            if(dta[i][3]=="P"){
                jkel = "Perempuan";
            }
            tx +='<tr>';
            tx +='  <th scope="row">'+nomor+'</th>';
            tx +='  <td>'+dta[i][0]+'</td>';
            tx +='  <td>'+dta[i][1]+'</td>';
            tx +='  <td>'+jkel+'</td>';
            tx +='  <td>'+dta[i][2]+'</td>';
            tx +='  <td>'+dta[i][4]+'</td>';
            tx +='  <td> ';
            tx +='<a href="index.php?p=mhs&sp=edit&nim='+dta[i][0]+'" class="badge bg-warning">Edit</a> ';
            tx +='<a href="index.php?p=mhs&sp=dele&nim='+dta[i][0]+'" class="badge bg-danger">Hapus</a> ';
            tx +='</td>';
            tx +='</tr>';
            nomor++;
        }    
        tx +='  </tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>