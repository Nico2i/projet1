<?php
if(isset($_POST['envoyer']))
{
    $description = (isset($_POST['text'])) ? $_POST['text'] : "";
    header('Content-type: application/json');
    if(($description !=""))
    {
        $user = json_decode($description);
        print_r(json_encode($user));
    }
}