<?php

function asos()
{
    $db = new mysqli('localhost', 'u294704900_husanboyev2oo5', 'Rahmatillo05@', 'u294704900_senior');

    if ($db->connect_errno <= 0) {
        $db->set_charset('utf8');
        return $db;
    } else {
        echo 'xato';
    }
}
function gets($table)
{
    $db = asos();
    $rrr = $db->query("SELECT * FROM " . $table);

    $gg = [];
    while ($a = $rrr->fetch_assoc()) {
        $gg[] = $a;
    }
    return $gg;
}
function getalif($table, $col)
{
    $db = asos();
    $rrr = $db->query('SELECT * FROM ' . $table . ' ORDER BY ' . $col . ' ASC');

    $gg = [];
    while ($a = $rrr->fetch_assoc()) {
        $gg[] = $a;
    }
    return $gg;
}
function dalete($table,$col,$values)
{
    $db = asos();
    $rs = $db->query("DELETE FROM `$table` WHERE $col=$values");
    return $rs;
}
function get($table, $id)
{
    $db = asos();

    $r = $db->query("SELECT * FROM $table WHERE $id");

    return $r->fetch_assoc();
}
function getmy($table, $col, $id)
{
    $db = asos();
    $sql = "SELECT * FROM $table WHERE $col='{$id}'";
    // echo $sql;
    $r = $db->query($sql);
    // if ($r->fetch_assoc()) {
    return $r->fetch_assoc();
    print_r($r);
    // }else{
    // return false;
    // }
}
function upend($table, $col = [], $values = [])
{
    $db = asos();
    $query = "INSERT INTO $table (";
    $val = '';
    if (is_array($col) && is_array($values)) {
        if (count($col) == count($values)) {

            $query .= trim(implode(', ', $col), ' ') . ") VALUES (";

            for ($i = 0; $i < count($values); $i++) {

                $val .= "'{$values[$i]}', ";
            }

            $query = $query . trim($val, ', ') . ")";
            $a = $db->query($query);

            return $query;

            // return false;

        }
    }
}
function update($table, $col = [], $values = [], $col2, $id)
{
    $db = asos();
    $query = "UPDATE $table SET ";
    $val = '';
    if (is_array($col) && is_array($values)) {
        if (count($col) == count($values)) {

            for ($i = 0; $i < count($values); $i++) {
                $query .= $col[$i] . '=' . "'" . $values[$i] . "', ";
            }


            $query = trim($query, ', ') . " WHERE $col2='{$id}'";
            if ($db->query($query)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
function getLimit($table, $col = 'status', $as = 1, $star, $limit = 20)
{
    $db = asos();

    $r = $db->query("SELECT * FROM $table WHERE $col=$as LIMIT $limit,$star");
    if ($r) {
        $arr = [];
        while ($a = $r->fetch_assoc()) {
            $arr[] = $a;
        }
        return $arr;
    } else {
        return false;
    }
}
function countr($table, $col, $val)
{
    $db = asos();
    $a = $db->query("SELECT COUNT(*) AS son FROM $table WHERE $col=" . $val);

    return $a->fetch_array();
}
function search($table, $col, $ser)
{
    $db = asos();

    $r = $db->query("SELECT * FROM $table WHERE $col like '%$ser%'");
    if ($r) {
        $arr = [];
        while ($a = $r->fetch_assoc()) {
            $arr[] = $a;
        }
        return $arr;
    } else {
        return false;
    }
}

?>
<!-- SELECT * FROM `lugat` ORDER BY noun ASC -->