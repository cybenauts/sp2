<?php<br>$_SESSION['website'] = "w3r";session_destroy();// this is for destroying session, but which one?echo $_SESSION['website']."<br />";print_r(error_get_last());?>  