<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
        <div class="col-sm-12 col-xl-8">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Worldwide Sales</h6>
                        <a href="">Show All</a>
                    </div>
                    <table class="table table-dark bg-dark">
                        <tr>
                            <th>id</th>
                            <th>ism</th>
                            <th>username</th>
                            <th>parol</th>
                            <th>email</th>
                            <th>habar</th>
                            <th>vaqt</th>
                        </tr>
                        <?php
                        $get=gets('users');
                        foreach ($get as $k => $v) :
                        ?>
                            <tr>
                                <td><?= $v['id'] ?></td>
                                <td><?= $v['ism'] ?></td>
                                <td><?= $v['username'] ?></td>
                                <td><?= $v['parol'] ?></td>
                                <td><?= $v['email'] ?></td>
                                <td><?= $v['comment'] ?></td>
                                <td><?= $v['time'] ?></td>
                                <td><a href="?al=contj.php&v=<?= $v['username'] ?>" class="btn btn-outline-success btn-sm">javob</a></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </table>
                </div>
            </div>>
        </div>
    </div>
</div>