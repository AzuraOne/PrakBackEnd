<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
</head>

<body>

    <div>
    


        <h1>Input Pemesanan</h1>

        <form action="<?php echo site_url('Informasi_c/add'); ?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="judul" id="judul" placeholder="Judul Buku">
            <textarea name="detail" id="detail" rows="10" cols="80">
               
            </textarea>
            <input type="email" name="email" id="email" placeholder="Email Contact">
            <input type="password" name="password" id="password" placeholder="password buku">
            <input type="date" name="tanggal" id="tanggal">
        
            
            <input type="file" name="uploading" id="uploading">
            <select name="jenis" id="jenis">
                <option >Pilih Jenis</option>
                <option value="baru">Cetakan Baru</option>
                <option value="lama">Cetakan Lama</option>
                

            </select>
            <label for="pilihan">Pilih Kualitas</label>
            <input type="radio" name="pilihan" id="pilihan" value="Koran">Kertas koran

            <input type="radio" name="pilihan" id="pilihan" value="HVS">Kertas HVS
            <input type="radio" name="pilihan" id="pilihan" value="Buffalo">Kertas Buffalo
            <input type="submit" value="submit" value="submit">
        </form>
    </div>
    <script>
        // Replace the <textarea id="texteditor"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('detail');
    </script>
</body>

</html>