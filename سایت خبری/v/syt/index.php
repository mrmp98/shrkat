<?php 
require_once __DIR__ . '/../../m/amal_ha.PHP';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div>
        <div id="qw">
            <p  id=titel>سایت خبری </p>
            <div class="rang_mtn_siyah" class id="icone"> <a href="../sign in/index.php"> <i class="bi bi-person" style="color: aliceblue;"></i> </a></div>
        </div>
    <div id="list">
       <?php 
     if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            echo '<a href="safe.html"><div class="rang_mtn_siyah">' . $row["$param"] . '</div></a><hr>';
            
        }
    }     
       ?>
    </div>
    
</div>
<script src="../../c/EROR.js"></script>
</body>
</html>