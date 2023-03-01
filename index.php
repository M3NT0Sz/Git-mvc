<?php
        require __DIR__.'./vendor/autoload.php';
        use App\Controller\GitController;
        $git = new GitController();
?>

<link rel="stylesheet" href="style.css">
<div class="meio">
    <div class="abc">
        <div class="aaa">
        <?php
            echo $git->iniciar();
        ?>
        </div>
        <div class="aaa">
        <?php
            echo $git->conta();
        ?>
        </div>    
    </div>
</div>