<?php
    if(! isset($pageName)){
        $pageName = '';
    }
?>
<style>
    nav.navbar .nav-item.active {
        background-color: #5dc0df;
        border-radius: 10px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $pageName=='ab-list' ? 'active' : '' ?>">
                    <a class="nav-link" href="ab-list.php">列表</a>
                </li>
                <li class="nav-item <?= $pageName=='ab-insert' ? 'active' : '' ?>">
                    <a class="nav-link" href="ab-insert.php">新增</a>
                </li>

            </ul>
            <ul class="navbar-nav">

                <li class="nav-item <?= $pageName=='login' ? 'active' : '' ?>">
                    <a class="nav-link" href="login.php">登入</a>
                </li>
                <li class="nav-item <?= $pageName=='register' ? 'active' : '' ?>">
                    <a class="nav-link" href="register.php">註冊</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
