<div class="container position-fixed fixed-bottom rounded bg-dark">
    <div class="text-center">
        <?php  
            $name = $_SESSION['authorized_user'][0]['name'];

            echo "<h6 class='m-1 text-light'>Logged as: <i>$name</i></h6>"
        ?>
    </div>
</div>