<?php
session_start();

/**
 *
 */
class board
{
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

    public function boardList(){

        $sql=<<<SQL
SELECT `b_no`, `b_title`, `b_content`, `b_date`, `b_hit`, `b_id`, `b_password`
FROM `board_free`
SQL;

        $q = new query();
    $RecordSet =
        $q->query($sql);

    $xml = "";
    while  ($row=$RecordSet->fetch_object()){
        $xml.=<<<XML
    <board id="{$row->b_no}">
        <b_title>{$row->b_title}</b_title>
        <b_content>{$row->b_content}</b_content>
        <b_date>{$row->b_date}</b_date>
        <b_hit>{$row->b_hit}</b_hit>
        <b_id>{$row->b_id}</b_id>
        <b_password>{$row->b_password}</b_password>
    </board>
XML;
    }
    $xml = $this->xmlDefault."<boards>".$xml."</boards>";

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
    public function boardDel($id,$b_title,$b_id,$b_date,$b_hit){
        $sql=<<<SQL
DELETE From `board_free`
Where id=$id;
SQL;
    $q = new query();
    $q->query($sql);
    }
    public function boardView($b_title, $b_content, $b_date, $b_hit, $b_id ){
        $sql=<<<SQL
SELECT `b_no`, `b_title`, `b_content`, `b_date`, `b_hit`, `b_id`, `b_password`
FROM `board_free`
where b_no = $bNo;
SQL;
    $q = new query();
    $result = $q->query($sql);
    $row = $result->fetch_assoc();
    }
}

?>