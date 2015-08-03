<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 26 /06 /15
 * Time: 23.37
 */

include_once ('/Applications/MAMP/htdocs/isias/configs/functions.php');


if(isset($_POST['pageId']) && !empty($_POST['pageId'])){
    $id=$_POST['pageId'];
}else{
    $id='1';
}

$pageLimit=PAGE_PER_NO*$id;

$list = new Akuns();
$stmt = $list->GetListAkuns($pageLimit, PAGE_PER_NO);

$num=$stmt->rowCount();

if ($num>0){
    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
        extract($row);
        $HTML.= "<tr>";
        $HTML.= "<td>{$acc_no}</td>";
        $HTML.= "<td>{$acc_name}</td>";
        $HTML.= "<td>{$sub_acc_no}</td>";
        $HTML.= "<td>{$typeakun}</td>";
        $HTML.= "<td style='text-align:center;'>
                <a class='btn btn-warning btn-sm' href='' role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                <a class='btn btn-danger btn-sm' href='' role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                  </td>
            </td>";
        $HTML.= "</tr>";
    }
}
else{
    $HTML.= "<tr rowspan=5> No Data Found! </tr>";
}

echo $HTML;