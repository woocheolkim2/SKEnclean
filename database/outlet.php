<meta charset="utf-8">
<?php
session_start();
require('query.php');
require('member.php');
require('board.php');

$outlet = $_REQUEST["outlet"];

// hp?outlet=memberlogin&phone=01012345678&pin=1234
switch ($outlet) {
    case 'memberlogin':
        $phone = $_REQUEST["phone"];
        $pin = $_REQUEST["pin"];
        $m = new member();
        $result = $m->Login($phone, $pin);
        if($result == true){
            header('location:/web/index.php');
        }else{
            echo "<script>alert('로그인 정보가 틀렸습니다. 다시 확인하고 입력해주세요.')</script>";
            echo "<script>location.href='/web/llogin.php'</script>";
        }


    break;

    case 'memberdelete':
        $phone = $_REQUEST["phone"];
        $sql=<<<SQL
DELETE from `Member`
WHERE `mobile` = '$phone'
SQL;
        $q = new query();
        $q->query($sql);
        // echo $_REQUEST["phone"];
        echo "<script>location.href='/WebProject/admin/index.php'</script>";
    break;

    case 'memberlogout':
        session_destroy();
        echo "<script>location.href='/web/index.php'</script>";
    break;

    case 'memberjoin':

        $name = $_REQUEST['name'];
        $mobile = $_REQUEST['mobile'];
        $pin = $_REQUEST['pin'];
        $address = $_REQUEST['address'];
        $point = $_REQUEST['point'];
        $grade = $_REQUEST['grade'];
        $email = $_REQUEST['email'];
        $m = new member();
        $m -> Join($name,$mobile,$pin,$address,$point,$grade,$email);
        // 화면 이동
        // echo "<script>location.href='/index.php'</script>";
        header('Location: /web/index.php');
    break;

    case 'memberList':
        $m = new member();
        echo $m -> memberList();
    break;

    case 'boardDel':
        $b_id = $_REQUEST["b_id"];
        $sql=<<<SQL
DELETE from `board_free`
WHERE `b_id` = '$b_id'
SQL;
        $q = new query();
        $q->query($sql);
        echo "<script>location.href='/WebProject/admin/index.php?stance=bbs'</script>";
    break;

    case 'boardView':
        $b_id = $_REQUEST["b_id"];
        $b_date = $_REQUEST["b_date"];
        $b_hit = $_REQUEST["b_hit"];
        $b_content = $_REQUEST["b_content"];

        $sql=<<<SQL
SELECT `b_no`, `b_title`, `b_content`, `b_date`, `b_hit`, `b_id`, `b_password`
FROM `board_free`
SQL;
        $q = new query();
        $result = $q->query($sql);
        $row = $result->fetch_assoc();
        // echo "<script>location.href='/WebProject/admin/index.php?stance=bbs'</script>";
    break;

    default:
        // code...
        break;
}




