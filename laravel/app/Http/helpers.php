<?php

function delete_form($routeParams, $label = 'Delete'){
	$form = Form::open(['method' => 'delete', 'route' => $routeParams ]);

	$form .= Form::submit($label, ['class' => 'btn btn-danger']);

	return $form.= Form::close();
}