<?php
namespace Rhariyani\ObjectOrientedPhase1;
require_once("../php/Classes/Author.php");


$Rishita = new Author( "b58548e7-7537-4751-a65a-e940f142ed50",
	"https://www.gravatar.com/avatar/HASH", "12345678911", "rhariyani@cnm.edu", '$argon2i$v=19$m=1024,t=384,p=2$dE55dm5kRm9DTEYxNFlFUA$nNEMItrDUtwnDhZ41nwVm7ncBLrJzjh5mGIjj8RlzVA', "rish23");
var_dump($Rishita);


?>
