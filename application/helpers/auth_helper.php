<?php 

function is_logged_in()
{
	$ci=get_instance();
	if (!$ci->session->userdata('username')) {
		redirect('adminsystem/auth');
	}
}

function forbidden_role()
{
	$ci=get_instance();
	if ($ci->session->userdata('role')==1) {
		redirect('adminsystem');
	}
}

?>