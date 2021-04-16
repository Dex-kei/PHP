<?php

if(isset($_FILES['avatar'])){
    echo json_encode($_FILES['avatar']);
}

