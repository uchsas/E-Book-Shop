<?php
$flag=0;
if (isset($_POST['submit'])) {
$json = file_get_contents('./control/admin.json');
$array = json_decode($json, true);
foreach ($array as $key => $value) {
    if ($value['aid'] == $_POST['aid']) {
        $array[$key]['approve'] = 1;
        header("Location: ../view/showa.php");

    }
}
file_put_contents('admin.json', json_encode($array));
         
}

?>

