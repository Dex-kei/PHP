<!-- 登入用資料庫用 -->
<?php include __DIR__ . '/parts/config.php'; ?>

<!-- 前面登入範例 登入成功後 能夠在此範例驗證 -->
<?php
session_start();

echo json_encode($_SESSION);