<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '列表';

$perpage =5 ;

$t_sql = "SELECT COUNT(1) FROM testtext";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perpage);
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; 



$sql = sprintf("SELECT * FROM testtext LIMIT %s, %s", ($page-1)*$perpage, $perpage);
$rows = $pdo->query($sql)->fetchAll();

?>  

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>


<div class="container">
    <div><?= $totalRows ?></div>
    <div><?= $totalPages ?></div>


    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page<=1 ? 'disabled' : '' ?>">
                      <?php for($i=1; $i<=$totalPages; $i++): ?> 
                    </li>
                    <?php for($i=1; $i<=$totalPages; $i++): ?>
                    <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                       <a class="page-link" href="#"><?= $i ?></a>
                    </li>

                    <?php endfor; ?>
                    <li class="page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                        
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">address</th>
                <th scope="col"><i class="fas fa-trash-alt"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>   
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['address'] ?></td>
                    <th class="trash">
                        <i class="fas fa-trash-alt"></i>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    $('.trash').click(function(){
        $(this).closest('tr').remove();
    })
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>