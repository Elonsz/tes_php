<?php
    include('session.php');
    include('../db.php');

    if(isset($_GET['nama'])){
        $nama = urldecode($_GET['nama']);
        
        // Deleting by Name since there's no ID column shown in the screenshot
        $delete = mysqli_query($conn, "DELETE FROM tb_contact WHERE `Nama Lengkap` = '".$nama."'");
        
        if($delete){
            echo '<script>alert("Data berhasil dihapus!"); window.location="contact.php"</script>';
        } else {
            echo 'Gagal menghapus: '.mysqli_error($conn);
        }
    } else {
        header('Location: contact.php');
    }
?>
