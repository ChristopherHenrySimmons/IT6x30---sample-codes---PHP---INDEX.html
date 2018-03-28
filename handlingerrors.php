<?php

function customErrMsg ($ErrLevel, $ErrMsg) {
	switch ($ErrLevel) {
		case E_USER_ERROR:
			echo "<b>Fatal Error:</b> [$ErrLevel] $ErrMsg<br/>\n";
			break;
		case E_USER_WARNING:
			echo "<b>Warning:</b> [$ErrLevel] $ErrMsg<br/>\n";
			break;
		case E_USER_NOTICE:
			echo "<b>Important Notice:</b> [$ErrLevel] $ErrMsg<br/>\n";
			break;
		default:
			echo "<b>Unknown error</b>: [$ErrLevel] $ErrMsg<br/>\n";
			break;
	}
	return true;
}

set_error_handler (customErrMsg);

trigger_error ("Test custom error", E_USER_ERROR);
trigger_error ("Display custom error by code number", 512);

?>
