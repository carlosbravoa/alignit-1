<?php
	    include 'class.php';
	    $a = new usuario();
	    $a->sessionstarter();
	    if ($a->edit == 0){
	    	echo "Ud no tiene permiso para estar aca.";
	    }
	    $c = new bu_excellence();
	    $c->id = $_REQUEST['id'];
	    $c->mod($_REQUEST['ed']);
	
		header("Location:granbu.php");
		
	    

	    ?>
