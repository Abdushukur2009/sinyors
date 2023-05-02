<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-8">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Worldwide Sales</h6>
                        <a href="">Show All</a>
                        <?php
                        if (isset($_SESSION['id1'])) {
                            
                            $get=getmy('galary','user_id',$_SESSION['id1']);
                            foreach ($get as $k => $v) :
                                ?>
                         <tr>   
                             <td><?= $v['id'] ?></td>
                             <td><?= $v['user_id'] ?></td>
                             <td><?= $v['dow_title'] ?></td>
                             <?php
                        endforeach;
                    }
                        ?>
                        <div class="col-6 offset-3">
                            <form method="post">
                            <input type="text" required name="name" class="form-control" style="text-transform: capitalize;" placeholder="Habar" maxlength="30"><br><br>
                            <button type="submit" name="go" class="btn btn-succes">yubor</button>
                            </form>
                            <?php
                            if (isset($_POST['go'])) {
                                if (upend('galary',['user','dow_title'],[$_GET['v'],$_POST['name']])) {
                                    echo 'super';
                                    ?>
                                    <script>
                                        window.location.href = "https://seniors.vodiy-yulduzlari.com/admin/?al=hom.php"
                                    </script>
                                <?php
                                }else{
                                    echo upend('galary',['user','dow_title'],[$_GET['v'],$_POST['name']]);
                                    ?>
                                    <script>
                                        window.location.href = "https://seniors.vodiy-yulduzlari.com/admin/?al=hom.php"
                                    </script>
                                <?php
                                }

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>