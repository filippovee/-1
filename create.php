<?php

require_once 'Send.php';

class Create
{

    private $send;

    function __construct()
    {
        $count=1;
        $this->send = new Send;
        $this->add_obj($count);
        echo "Сущности созданы";
    }

    public function add_obj($count)
    {

        $mktime = mktime();
        $date="$mktime";
        for ($i = 1; $i<=$count; $i++) {
            $request[$i]['name'] = "name {$i}";
            $request[$i]['next_date'] = $date;
        }
        $dataname['add'] = $request;

        $leads= $this->send->post('leads', $dataname);
        $conacts = $this->send->post('contacts', $dataname);

       // post('contacts', $dataname);
       // post('customers', $dataname);

        $this->link($leads, $conacts);

    }
private function link($id_leads, $id_contacts){

    $mktime = mktime();
    $date="$mktime";

    foreach ($id_contacts  as $key=>$val) {
        $request[$key]['contacts_id'] = $val;
        $request2[$key]['id'] = $val;
        $request2[$key]['updated_at'] = $date;

    }

    foreach ($id_leads as $key=>$val) {
        $request[$key]['leads_id'] = $val;
        $request2[$key]['leads_id'] = $val;
    }
    foreach ($id_leads as $key=>$val) {
        $request[$key]['name'] = "company {$val}";
    }

    $dataname['add'] = $request;
    $dataname2['update'] = $request2;
    var_dump($request);
//    var_dump($request2);

$this->send->post('companies', $dataname);
$this->send->post('leads', $dataname2);
}
}
/*
$create = new Create();
$create->add_obj(1, 1);
*/



/*$count=1;
    $date1 =mktime();
    $date="$date1";
    for ($i = 1; $i<=$count; $i++) {
        $request[$i]['name'] = "name {$i}";
        $request[$i]['next_date'] = $date;
    }

    $dataname['add'] = $request;

var_dump($dataname);

$data = array (
    'add' =>
        array (
            0 =>
                array (
                    'name' => '1',
                    'next_date' => '1538381220',
                ),
        ),
);
var_dump($data);*/

/*$id_contacts=array(1 => name1);
$id_leads=2;
$id_customers=3;

$date = mktime();
foreach ($id_contacts  as $key=>$val) {
    $send[$key]['contacts_id'] = $val;
    $send2[$key]['id'] = $val;
    $send2[$key]['updated_at'] = $date;

}

foreach ($id_leads as $key=>$val) {
    $send[$key]['leads_id'] = $val;
    $send2[$key]['leads_id'] = $val;
}

foreach ($id_leads as $key=>$val) {
    $send[$key]['name'] = "company {$val}";
}

foreach ($id_customers as $key=>$val) {
    $send[$key]['customers_id'] = $val;
    $send2[$key]['customers_id'] = $val;
}
$request['add'] = $send;
$request2['update'] = $send2;

var_dump($send);*/



