<?php
include 'Database.php';
    function dem_so_luong($bang){
            $data = [];
            $conn = Connect();
            $sql = "select * from ".$bang."";
            $view = $conn -> query($sql);
            while ($row = $view->fetch_assoc()) {
                $data[] = $row;
            }
            $dem = count($data);
            return $dem;
        }
?>