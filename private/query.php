<?php




function services_create()
{

    global $db;

    $title = 'Creative Design';
    $icon = 'fa fa-user';
    $description = "Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum";


    $sql = "INSERT INTO `services`(`icon`, `title`, `description`) ";
    $sql .= "VALUES (";
    $sql .= "'.$icon.' ,";
    $sql .= "'.$title.' ,";
    $sql .= "'.$description.'";
    $sql .= ")";


    $result = mysqli_query($db, $sql);
    confirm_result_set($db, $result);

    return 'created';
}
