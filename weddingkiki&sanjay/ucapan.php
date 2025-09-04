<?php
    include "service/database.php";
    include "service/postingucapan.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css" />    
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css"/>
    <script src="countdown/simplyCountdown.min.js"></script>
    <title>Invitation Kiki&Sanjay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">

</head>
<body>    
    <div class="titlephp">
        <div class="col-lg-8 shadow-sm p-3 mb-5 bg-body rounded borderucapan">
            <form action="index.php" method="POST">
                <input type="text" class="form-control mb-3" name="nama" required="required" placeholder="Nama Lengkap">
                <input type="text" class="form-control mb-3" name="alamat" required="required" placeholder="Alamat">
                <textarea class="form-control mb-3" name="ucapan" rows="3" required="required" placeholder="Tulis Ucapan"></textarea>
                <button type="submit" class="btn btn-danger" name="simpan" value="input">Kirim Ucapan</button>
            </form>
        </div> 
    </div>
    <div class="titlephp">
        <div class="col-lg-8 shadow-sm p-3 mb-5 bg-body rounded borderucapan">
            <div class="col-12">
                <div class="chat-container" data-aos="fade-up">
                    <?php include "dataucapan.php"; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>