<?php
    if(isset($_SESSION['m'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> <?= $_SESSION['m']; ?> </strong> 
    </div>

<?php 
    unset($_SESSION['m']);
    endif;
?>