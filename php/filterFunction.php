<?php 

function filterParamsOfFunction($sql){


if (isset($_GET['sort']) && $_GET['sort'] ===  'desc'){
    $sql .= " ORDER BY id DESC";
} else{
    $sql .= " ORDER BY id ASC";
}

return $sql;
};




