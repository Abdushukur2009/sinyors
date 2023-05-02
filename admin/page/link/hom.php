 <div class="content">
     <div class="container-fluid pt-4 px-4">
         <div class="row g-4">
             <?php
                include 'url.php';
                ?>
             <div class="col-sm-12 col-xl-8">
                 <div class="bg-secondary text-center rounded p-4">
                     <div class="d-flex align-items-center justify-content-between mb-4">
                         <h6 class="mb-0">Worldwide Sales</h6>
                         <a href="">Show All</a>
                     </div>
                     <table class="table table-dark bg-dark">
                         <tr>
                             <th>id</th>
                             <th>title</th>
                             <th>text</th>
                             <th>galary_type</th>
                             <th>img</th>
                             <th>options</th>
                         </tr>
                         <!--                --> <?php
                                                    $get = gets('histore');

                                                    foreach ($get as $v) :
                                                    ?>
                             <tr>
                                 <td><?= $v['id'] ?></td>
                                 <td><?= $v['title'] ?></td>
                                 <td><?= $v['text'] ?></td>
                                 <td><?= $v['galary_type'] ?></td>
                                 <td><?= $v['img'] ?></td>
                                 <td><a href="?al=hom.php&u=<?= $v['img'] ?>&a=<?= $v['id'] ?>" class="btn btn-danger btn-sm">remove</a></td>
                             </tr>
                         <?php
                                                    endforeach;
                                                    if (isset($_GET['a'])) {
                                                        unlink($conf['do_img'] . $_GET['u']);
                                                        dalete('histore', 'id', $_GET['a']);
                            ?>
                             <script>
                                 window.location.href = "http://localhost/sinyors/admin/?al=hom.php"
                             </script>
                         <?php
                                                    }
                            ?>
                     </table>
                 </div>
             </div>
             <div class="col-sm-12 col-xl-4">
                 <div class="bg-secondary text-center rounded p-4">
                     <div class="d-flex align-items-center justify-content-between mb-4">
                         <h6 class="mb-0">Salse & Revenue</h6>
                         <a href="">Show All</a>
                     </div>
                     <form method="post" enctype="multipart/form-data">
                         <input required type="text" name="title" placeholder="title" class="form-control"><br>
                         <textarea required name="text" class="form-control" id="" cols="30" rows="10" placeholder="massage"></textarea><br>
                         <select class="form-control bg-dark" name="gt">
                             <option value="ekshin">ekshin</option>
                             <option value="strategik">strategik</option>
                             <option value="jangari">jangari</option>
                             <option value="0+">0+</option>
                             <option value="7+">7+</option>
                             <option value="16+">16+</option>
                         </select><br>
                         <input type="file" required name="img" id="" placeholder="img" class="form-control"><br>
                         <button class="btn btn-outline-danger btn-blok" name="go" type="submit">Save</button>
                     </form>
                     <pre>
                            <?php
                            if (isset($_POST['go'])) {
                                $file = $_FILES['img'];
                                if ($file['error'] <= 0) {
                                    if ($file['size'] <= (1024 * 1024) * 10) {
                                        $no = explode('/', $file['type']);
                                        $no = $no[0];
                                        $nom = $no . '/' . time() . '.png';
                                        if (is_dir($conf['do_img'] . $no . '/')) {
                                            if (move_uploaded_file($file['tmp_name'], $conf['do_img'] . $nom)) {
                                                upend('histore', ['title', 'text', 'galary_type', 'img'], [$_POST['title'], $_POST['text'], $_POST['gt'], $nom]);
                            ?>
                                <script>
                                window.location.href="http://localhost/sinyors/admin/?al=hom.php"
                                </script>
                                 <?php
                                            }
                                        } else {
                                            if (mkdir($conf['do_img'] . $no . '/')) {
                                                if (move_uploaded_file($file['tmp_name'], $conf['do_img'] . $nom)) {
                                                    upend('histore', ['title', 'text', 'galary_type', 'img'], [$_POST['title'], $_POST['text'], $_POST['gt'], $nom]);
                                    ?>
                                                    <script>
                                                    window.location.href="http://localhost/sinyors/admin/?al=hom.php"
                                                    </script>
                                                     <?php
                                                    }
                                                }
                                            }
                                        } else {
                                            echo 'iltimos 5mb dan kam hajimli rasm yuklang';
                                        }
                                    }
                                }
                                                        ?>
                            </pre>
                 </div>
             </div>
         </div>
     </div>
 </div>