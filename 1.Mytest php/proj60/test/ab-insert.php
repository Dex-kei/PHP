<?php include __DIR__. '/parts/config.php';?>
<?php
$title = '新增資料';
$pageName = 'ab-insert';
?>
<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>

                    <form name="form1" method="post">
                        <!-- 後面追加 novalidate 可讓全部警告false -->
                        <div class="form-group">
                            <label for="name">** 姓名</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <!-- require 必填警訊 -->
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <!-- type -> email 會檢查是否有輸入 -->
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                pattern="09\d{2}-?\d{3}-?\d{3}">
                            <!-- pattern 透過正規表達式 檢查 -->
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="text" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <textarea class="form-control" id="address" name="address" cols="30" rows="3"></textarea>
                            <!-- textarea結尾 前方不能有任何空格OR換行 -->
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>


        </div>
    </div>



</div>



<?php include __DIR__. '/parts/scripts.php';?>
<script>
    // 檢查email 正規表達式
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;




    // <!-- 重點 能夠複數判定 !!!!!!!!!!!!!!!!!!!!! -->
    const $name = $('#name'),
        $email = $('#email'),
        $mobile = $('#mobile');
    const fileds = [$name, $email, $mobile];
    // const smalls = [$name.next(), $email.next(), $mobile.next()];

    function checkForm() {
        //回到原來的狀態
        fileds.forEach(el => {
            el.css('border', '1px solid #cccccc');
            el.next().text('');
        });

        let isPass = true;

        if ($name.va().lenght < 2) {
            isPass = false;
            $name.css('border', '1px solid red');
            $name.next().text('請輸入正確的姓名');
        }
        if (!email_re.test($email.val())) {
            isPass = false;
            $email.css('border', '1px solid red');
            $email.next().text('請輸入正確的 email');
        }
        if (!mobile_re.test($mobile.val())) {
            isPass = false;
            $mobile.css('border', '1px solid red');
            $mobile.next().text('請輸入正確的手機號碼');
        }

        if (isPass) {
            $.post(
                'ab-insert-api.php',
                $(document.form1).serialize(),
                function (data) {
                    if (data.success) {
                        alert('資料新增成功');
                    }
                },
                'json'
            )
        }




// alert function 只能單一檢查 
//     function checkForm(){
//         if(document.form1.name.value.length < 2){
//             alert("請輸入正確的姓名");
//             return;
//         }
//         if(! email_re.test(document.form1.email.value)){
//             alert("請輸入正確的email");
//             return;
//         }
//     }
</script>



<?php include __DIR__. '/parts/html-foot.php'; ?>