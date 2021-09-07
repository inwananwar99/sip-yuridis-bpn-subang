<?php 

function login(){
	$ci = get_instance();
	if(!$ci->session->userdata('nama')){
		redirect('Autor/login');
	}
		
		
	
}


 ?>