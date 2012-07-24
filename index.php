<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formee Builder Class PHP</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://formee.org/demo/js/formee.js"></script>
<link rel="stylesheet" href="http://formee.org/demo/css/formee-structure.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://formee.org/demo/css/formee-style.css" type="text/css" media="screen" />
<style>
form:after, div:after, ol:after, ul:after, li:after, dl:after {
	content:".";
	display:block;
	clear:both;
	visibility:hidden;
	height:0;
	overflow:hidden;
}
body {background: #fff; font: normal 10px/1.1em Arial,Sans-Serif;margin:10px;padding:0;}
</style>
</head>

<body>
<form id="cadastrar" class="formee" action="" method="post">
    <fieldset>
        <legend>Form</legend>
		<?php
			include("class/formee.builder.class.php");
			$formeeBuilder->inputText("InputText", "inputtext", "inputText", "inputText", 12, "required", "text", "false");
			$formeeBuilder->inputText("InputPassword", "inputtextpassword", "inputText", "inputText", 6, "required", "password", "false");
			$formeeBuilder->inputText("InputFile", "inputtext", "inputText", "", 6, "required", "file", "false");
			$formeeBuilder->textArea("textArea1", "textarea1", "textArea", "", 6, "required");
			$formeeBuilder->textArea("textArea2", "textarea2", "textArea", "", 6, "required");
			$formeeBuilder->inputCheck("inputCheck", "inputcheck", array("inputCheck" => "inputCheck","inputCheck2" => "inputCheck2"), "radio", "inputCheck", 12, "", "false");
			$formeeBuilder->Select("Select1", "select1", array("Select1" => "Select1","Select2" => "Select2"), "Select2", "false", "", 6, "false");
			$formeeBuilder->Select("Select2", "select2", array("Select1" => "Select1","Select2" => "Select2"), "Select1", "true", "", 6, "false");
			$formeeBuilder->finaliza("Finaliza", "finaliza", "http://www.google.com/", true);
		?>
	</fieldset>
</form>
</body>
</html>