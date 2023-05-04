<div class="container-fluid bg-black">
    <section class="games" id="games">
        <div class="container py-3 color-red"><br><br><br><br><br><br><br>
            <h1 class="games-page text-center">Games Section</h1>
            <h3 class="games-page-lorem text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
            Oʻyin —tarbiyalash va hordiq chiqarish vositalaridan biri.</h3>
                
            <br><br>
            <div class="row">
                
                <?php
                $get = gets('histore');
                foreach ($get as $key => $v) :
                ?>
                    <div class="overflow-new col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3 offset-0 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0 p-3">
                        <img src="<?= $conf['img']  . $v['img'] ?>?>" class="img-scl" height="150px" width="100%" alt=""><br>
                        <b style="font-size: 10px;"><?= $v['title'] ?></b><br><br><br>
                        <span><?= $v['text'] ?></span>
                    </div>
                <?php
                endforeach;
                ?>

            </div><br><br>
        </div>
    </section>
</div>
<div class="container-fluid bg-black">
    <section id="images">
        <div class="container color-red"><br><br><br>
            <h1 class="games-page text-center">Games IMAGES</h1>
            <h3 class="games-page-lorem text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                quas quam
                eligendi repellendus saepe
                quasi omnis sapiente minima doloremque ducimus.</h3>
            <br><br>
            <h1>ekshin</h1>
            <div class="owl-carousel owl-theme">
                <?php
                $get = gets('histore');
                foreach ($get as $v => $k) :
                    if ($k['galary_type'] == 'ekshin') :
                ?>
                        <div class="item">
                            <img src="<?= $conf['img'] . $k['img'] ?>" height="202px">
                        </div>
                <?php
                    endif;
                endforeach;
                ?>

            </div>
            <br>
            <h1>strategik</h1>
            <br>
            <div class="owl-carousel owl-theme">
                <?php
                $get = gets('histore');
                foreach ($get as $v => $k) :
                    if ($k['galary_type'] == 'strategik') :
                ?>
                        <div class="item">
                            <img src="<?= $conf['img'] . $k['img'] ?>" height="202px">
                        </div>
                <?php
                    endif;
                endforeach;
                ?>

            </div><br>
            <h1>jangari</h1>
            <br>
            <div class="owl-carousel owl-theme">
                <?php
                $get = gets('histore');
                foreach ($get as $v => $k) :
                    if ($k['galary_type'] == 'jangari') :
                ?>
                        <div class="item">
                            <img src="<?= $conf['img'] . $k['img'] ?>" height="202px">
                        </div>
                <?php
                    endif;
                endforeach;
                ?>

            </div><br>
            <h1>0+</h1> <br>
            <div class="owl-carousel owl-theme">
                <?php
                $get = gets('histore');
                foreach ($get as $v => $k) :
                    if ($k['galary_type'] == '0+') :
                ?>
                        <div class="item">
                            <img src="<?= $conf['img'] . $k['img'] ?>" height="202px">
                        </div>
                <?php
                    endif;
                endforeach;
                ?>

            </div><br>
            <h1>7+</h1><br>
            <div class="owl-carousel owl-theme">
                <?php
                $get = gets('histore');
                foreach ($get as $v => $k) :
                    if ($k['galary_type'] == '7+') :
                ?>
                        <div class="item">
                            <img src="<?= $conf['img'] . $k['img'] ?>" height="202px">
                        </div>
                <?php
                    endif;
                endforeach;
                ?>

            </div><br>
            <h1>16+</h1><br>
            <div class="owl-carousel owl-theme">
                <?php
                $get = gets('histore');
                foreach ($get as $v => $k) :
                    if ($k['galary_type'] == '16+') :
                ?>
                        <div class="item">
                            <img src="<?= $conf['img'] . $k['img'] ?>" height="202px">
                        </div>
                <?php
                    endif;
                endforeach;
                ?>

            </div><br><br><br><br><br><br>
        </div>
    </section>
</div>
<div class="container-fluid main-bg">
    <section id="contact">
        <div class="container color-red"><br><br><br>
            <h1 class="games-page text-center">CONTACT</h1>
            <h3 class="games-page-lorem text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                quas quam
                eligendi repellendus saepe
                quasi omnis sapiente minima doloremque ducimus.</h3>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <form method="post" action="">
                        <input type="text" required name="name" class="inp-contact" style="text-transform: capitalize;" placeholder="Name" maxlength="30"><br><br>
                        <input type="text" required name="surname" class="inp-contact" style="text-transform: capitalize;" placeholder="Surname" maxlength="30"><br><br>
                        <input type="email" required name="email" placeholder="Email" style="text-transform: capitalize;" class="inp-contact" maxlength="30"><br><br>
                        <input type="password" required name="password" placeholder="Password" style="text-transform: capitalize;" class="inp-contact"><br><br>
                        <textarea name="comment" required placeholder="comment" class="inp-contact"></textarea><br><br><br>
                        <button type="submit" name="go" class="btn btn-outline-danger" style="margin: 0 auto;">SendMe</button><br><br>
                    </form>
                    <?php
                    if (isset($_POST['go'])) {
                        upend('users', ['ism', 'comment', 'username', 'parol', 'email', 'time'], [$_POST['name'], $_POST['comment'], $_POST['surname'], $_POST['password'], $_POST['email'], $set]);
                        $gets = gets('users');
                        foreach ($get as $k => $v) {
                            $_SESSION['id1'] = $_POST['surname'];
                            break;
                        }
                        ?>
                        <script>
                            window.location.href = "https://seniors.vodiy-yulduzlari.com"
                        </script>
                    <?php
                    }
                    ?>
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="row">
                                <h3>Javob</h3>
                            </div>
                            <div class="row">
                                <?php
                                if (isset($_SESSION['id1'])) {
                                    $take = gets("galary");
                                    if (count($take) >= 0) {
                                        $get = search('galary', 'user', $_SESSION['id1']);

                                        foreach ($get as $key => $v) : ?>
                                            <div class="col-6 offset-3 my-2 p-2 border border-danger">
                                            <?= $v['dow_title'] ?>

                                            </div>
                                <?php
                                        endforeach;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><br><br><br><br>
</div>