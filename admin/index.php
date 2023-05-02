
        <?php
        include 'db.php';
        
        if (isset($_GET['al'])) {
            require 'page/layout/h.php';
            require 'page/link/'.$_GET['al'];
            require 'page/layout/f.php';
        }
        else {
            require 'page/login/index.php';
        }
        

        ?>
       