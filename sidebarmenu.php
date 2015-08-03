<?php
    include_once 'classes/class.Menus.php';
    
    $h = new Menus();

    $stmt = $h->GetHeaderMenus();
    
    $num = $stmt->rowCount();

    if($num>0){
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
            $g_id = $group_id;
            echo '<li class="treeview">
                    <a href=""
                        <i class=' . $menu_imagename . '></i>
                        <span> ' . $menu_header . ' </span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                 ';
            
            $detail = $h->GetDetailMenus($g_id);
            echo '<ul class="treeview-menu">';
            while ($d = $detail->fetch(PDO::FETCH_ASSOC)){
                extract($d);
                $program_id = $idprog;
                $url_id = $url;
                echo '<li><a href="?m=' . $idprog . '"><i class="fa fa-angle-double-right"></i> '. $menu_name . '</a></li>';
            }
            echo "</ul>";
        }
    }
    //unset $h;
?>