<?php
	/**
	 * Example use of RevUpdater
	 */

	header("Content-Type: application/json; charset=utf-8");
	$data = $_POST['data'];
	$field = $_POST['field'];

	$json['message'] = "OK";

	echo json_encode($json);
?>