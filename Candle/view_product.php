<?php
//  session_start();
include "inc/header.php";
include "function/function.php";
?>
<body class="man-color">
<section class="page nnn">
<div class="container p-3 text-center">
<?php
echo fnGetProduct('$id');
?>
</div>
</section>
<?php
include "inc/footer.php";
?>