<?php
    include("include/db.php");
    include('include/inc.php');
    login_check();

    $member_id = $_SESSION['mb_id'];
    $fileId = $_GET['file_id'];

    $sql="UPDATE KPC_BANNER
            SET
                FILE_ID_M = '',
                MOD_ID='".$member_id."',
                MOD_DATE=NOW()
            WHERE
                FILE_ID_M = '".$fileId."'
        ";
    $result=mysqli_query($dbconn, $sql);
    if($result === false) {
        echo "<script> alert('파일삭제를 실패했습니다.'); history.back();</script>";
    } else {
        echo "<script> alert('파일삭제가 완료되었습니다.'); history.back();</script>";
    }
?>