<div id="konten"></div>
<style >
    .judul {
        margin-top: 30px;
        margin-bottom: 20px;
    }
</style>
<script>
    const gh = new XMLHttpRequest();
    gh.open("GET","http://localhost/uas1/server/dtmk.php");
    gh.send();

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        var tx ='<h3 class="text-center judul">Data Mata Kuliah</h3>';
        tx +='<table class="table table-hover bg-success text-light"><thead><tr><th scope="col">No.</th><th scope="col">KODE</th><th scope="col">Mata Kuliah</th><th scope="col">Semester</th><th scope="col"> <a href="index.php?p=mk&sp=addnew" class="badge bg-primary">New</a></th></tr></thead><tbody>';

        let nomor = 1;
        for(i=0;i<dta.length;i++){
        
            tx +='<tr>';
            tx +='  <th scope="row">'+nomor+'</th>';
            tx +='  <td>'+dta[i][0]+'</td>';
            tx +='  <td>'+dta[i][1]+'</td>';
            tx +='  <td>'+dta[i][2]+'</td>';
            tx +='  <td> ';
            tx +='<a href="index.php?p=mk&sp=edit&kode_mk='+dta[i][0]+'" class="badge bg-warning">Edit</a> ';
            tx +='<a href="index.php?p=mk&sp=dele&kode_mk='+dta[i][0]+'" class="badge bg-danger">Hapus</a> ';
            tx +='</td>';
            tx +='</tr>';
            nomor++;
        }    
        tx +='  </tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>