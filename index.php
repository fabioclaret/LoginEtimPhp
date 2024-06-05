<?php
//toda vez que for utilizar uma session, uso o session_start

session_start();
?>
<head>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<div class="container">
    <?php
    if( !isset($_SESSION['nome']) ){
        //direcionar para fazer login
        //echo "<script>window.location.replace('login.php')</script>";
        echo "<script>alert('Voce nao está logado')</script>";

    }else{
        ?>
        <p class="text-danger">
            <?php echo"Bem vindo ".$_SESSION['nome'];?>
        </p>
        <?php
    }?>
</div>

