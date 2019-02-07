<?php
session_start();

/**
 *
 */
class member{
    /**
     *
     */
    public function __construct()
    {
    }
     //xml 기본셋팅
    public $xmlDefault='<?xml version="1.0" encoding="utf-8"?>';
    public $name;
    public $phone;

    public function memberList(){
        if($_GET['stance'] == 'member'){
        $sql=<<<SQL
SELECT `member`, `name`, `mobile`,
`pin`, `address`, `point`, `grade` , `email`
FROM `Member`
WHERE grade < 10
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <member id="{$row->member}">
        <name>{$row->name}</name>
        <mobile>{$row->mobile}</mobile>
        <pin>{$row->pin}</pin>
        <address>{$row->address}</address>
        <point>{$row->point}</point>
        <grade>{$row->grade}</grade>
        <email>{$row->email}</email>
    </member>
XML;
    }
    $xml = $this->xmlDefault."<members>".$xml."</members>";

    if ($xml == "") {
        $xml=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>false</login>
</result>
XML;
    }
    //echo $xml;
    return $xml;
        }elseif($_GET['stance'] == 'kiup'){
        $sql=<<<SQL
SELECT `member`, `name`, `mobile`,
`pin`, `address`, `point`, `grade` , `email`
FROM `Member`
WHERE grade = 10
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <member id="{$row->member}">
        <name>{$row->name}</name>
        <mobile>{$row->mobile}</mobile>
        <pin>{$row->pin}</pin>
        <address>{$row->address}</address>
        <point>{$row->point}</point>
        <grade>{$row->grade}</grade>
        <email>{$row->email}</email>
    </member>
XML;
    }
    $xml = $this->xmlDefault."<members>".$xml."</members>";

    if ($xml == "") {
        $xml=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>false</login>
</result>
XML;
    }
    //echo $xml;
    return $xml;
        }

    }



    public function Login($phone, $pin)
    {
        $sql=<<<SQL
SELECT *
FROM  `Member`
WHERE  REPLACE(`mobile`,'-','') ='{$phone}'
AND  `pin` = {$pin}
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>true</login>
    <name>{$row->name}</name>
    <value>{$row->grade}</value>
</result>
XML;
    $_SESSION['userId'] = $row->member;
    $_SESSION['userName'] = $row->name;
    $_SESSION['userGrade'] = $row->grade;
    $_SESSION['userPhone'] = $row->userPhone;

    }
    if ($xml == "") {
        $xml=<<<XML
<?xml version="1.0" charset="utf-8"?>
<result>
    <login>false</login>
</result>
XML;
return false;
    }else{
     return true;
    }
    echo $xml;

    }
    public function Join($name,$mobile,$pin,$address,$point,$grade,$email){
    /**
    * 사용자 가입
    * @param void $name
    * @param void $mobile
    * @param void $pin
    * @param void $address
    * @param void $point
    * @param void $grade
    * @param void $email
    */
        $sql=<<<SQL
INSERT INTO `Member`
(`name`, `mobile`, `pin`, `address`, `point`, `grade`, `email`)
VALUES ('{$name}','{$mobile}','{$pin}','{$address}','{$point}','{$grade}','{$email}')
SQL;
        $q = new query();
        $q->query($sql);
        echo $count;
    }

}

?>