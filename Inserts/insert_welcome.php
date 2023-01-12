<?php

    if (isset($_POST['Play'])) {
        header("Location:../pair_pick.php");
    }

    elseif (isset($_POST['Retour'])) {
        header("Location:../index.php");
    }

?>