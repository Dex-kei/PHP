<!-- 登入用資料庫用 -->
<?php include __DIR__ . '/parts/config.php'; ?>

<?php
$title = '登入';
if (isset($_POST['account']) and isset($_POST['password'])) {
    if ($_POST['account'] == 'shin' and $_POST['password'] == '') {
        $_SESSION['account'] = 'shin';
    } else {
        $msg = '帳號或密碼錯誤';
    }
}

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="container">
    <pre>
<?php print_r($_POST) ?>
</pre>

    <div class="row">
        <?php if (isset($msg)) : ?>

            <div class="alert alert-danger" role="alert">
                <?= $msg ?>
            </div>
        <?php endif; ?>

        <!-- 可用F12 Application 刪除cookie當中的資料 重製登入狀態 -->
        <?php if (isset($_SESSION['account'])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['account'] . '你好' ?>
            </div>
            <div><a href="test0412 logoout.php">登出</a></div>


            <!-- 登入成功後把輸入表單藏起來 -->
        <?php else : ?>
            <div class="col-md-6">
                <form name="form1" method="post">
                    <div class="form-group">
                        <label for="account">account address</label>
                        <input type="text" class="form-control" id="account" name="account">


                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <?php endif; ?>