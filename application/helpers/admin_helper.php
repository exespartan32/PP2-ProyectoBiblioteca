<?php

function setJsAdmin($js) {
	return '<script src="'.base_url().'assets/AdminLTE-3.1.0/'.$js.'"></script>';
}

function setCssAdmin($css) {
	return '<link rel="stylesheet" href="'.base_url().'assets/AdminLTE-3.1.0/'.$css.'">';
}

function setImgAdmin($img) {
	return base_url()."assets/AdminLTE-3.1.0/".$img;
}
?>