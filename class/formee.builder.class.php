<?php
class MontaForm {
	function inputText($titulo, $id, $valor, $classe = '', $tamanho = '12', $obrigatorio = 'nao-obrigatorio', $tipo = 'text', $read = 'nao-readonly') {
		$obrigatorio_input = $obrigatorio == "required"? "input-req":"";
		$obrigatorio = $obrigatorio == "required"? " <em class=\"formee-req\">*</em>":"";
		$read = $read == "readonly"? "readonly=readonly":"";
			$retornar .= "<div class=\"grid-$tamanho-12\">\n";
			$retornar .= "<label for=\"$id\">$titulo:$obrigatorio</label><br/>\n";
			$retornar .= "<input type=\"$tipo\" name=\"$id\" id=\"$id\" size=\"$tamanho\" class=\"$id $classe $obrigatorio_input\" value=\"$valor\" $read />\n";
			$retornar .= "</div>\n\n";
		echo $retornar;
	}
	function inputCheck($titulo, $id, $valor, $tipo, $checked = 'nao-checked', $tamanho = '12', $classe = '', $obrigatorio = 'nao-obrigatorio') {
		$obrigatorio = $obrigatorio == 'required'? " <span class=\"obrigatorio\">*</span>":"";
		$retornar .= "<div class=\"grid-$tamanho-12\">\n";
		$retornar .= "<label>$titulo:$obrigatorio</label><br/>\n";
		$retornar .= "<ul class=\"formee-list\">\n";
		foreach ($valor as $valor => $nome){
			$check = $checked == $valor? "checked":"";
			$retornar .= "<li><label><input type=\"$tipo\" name=\"$id\" id=\"$id\" class=\"$id $classe\" value=\"$valor\" $check /> $nome</label></li>\n";
		}
		$retornar .= "</ul>\n";
		$retornar .= "</div>\n\n";
		echo $retornar;
	}
	function textArea($titulo, $id, $valor, $classe = '', $tamanho = '12', $obrigatorio = 'nao-obrigatorio') {
		$obrigatorio_input = $obrigatorio == "required"? "input-req":"";
		$obrigatorio = $obrigatorio == "required"? " <em class=\"formee-req\">*</em>":"";
	
		$retornar .= "<div class=\"grid-$tamanho-12\">\n";
		$retornar .= "<label for=\"$id\">$titulo:$obrigatorio</label><br/>\n";
		$retornar .= "<textarea name=\"$id\" id=\"$id\" class=\"$id $classe $obrigatorio_input\" />$valor</textarea>\n";
		$retornar .= "</div>\n\n";
		echo $retornar;
	}
	function Select($titulo, $id, $valor, $valor_padrao = "", $multiple = "nao-multiple", $classe = '', $tamanho = '12', $obrigatorio = 'nao-obrigatorio') {
		$obrigatorio_input = $obrigatorio == "required"? "input-req":"";
		$obrigatorio = $obrigatorio == "required"? " <em class=\"formee-req\">*</em>":"";
		$valor_padrao_array = $valor_padrao != ""? explode(',',$valor_padrao):"";
		$retornar .= "<script>\n\r";
		$retornar .= "$(document).ready(function () {\n\r";
		foreach($valor_padrao_array as $value){
			$retornar .= "$('#".$id." option[value=\"$value\"]').attr('selected','selected');\n\r";
		}
		$retornar .= "})\n\r;";
		$retornar .= "</script>";
		$multiple_bool = $multiple == "multiple"? "[]":"";
		$multiple = $multiple == "multiple"? "multiple=\"multiple\"":"";

		$retornar .= "<div class=\"grid-$tamanho-12 $id-div\">\n";
		$retornar .= "<label for=\"$id\">$titulo:$obrigatorio</label><br/>\n";
		$retornar .= "<select name=\"$id$multiple_bool\" id=\"$id\" class=\"$id $classe $obrigatorio_input\" $multiple  >\n";
		foreach ($valor as $valor => $nome){
			if(is_array($nome) && $nome[1]){
				$disabled = "disabled=\"disabled\"";
				$descricao = $nome[0];
			} else {
				$descricao = is_array($nome)? $nome[0]:$nome;
				$disabled = "";
			}
			$retornar .= "<option value=\"$valor\" $disabled>".$descricao."</option>\n";
		}
		$retornar .= "</select>";
		$retornar .= "</div>\n\n";
		echo $retornar;
	}
	function finaliza($titulo, $id, $url_volta = false, $limpar = true) {
		$retornar .= "<div class=\"grid-12-12\">\n";
		$retornar .= "<input type=\"submit\" value=\"$titulo\" name=\"$id\" id=\"$id\" />\n";
		$retornar .= $limpar == true?"<input type=\"reset\" value=\"Limpar\" name=\"limpar\" id=\"limpar\" />\n":"";
		$retornar .= $url_volta?"<input type=\"button\" value=\"Voltar\" name=\"voltar\" id=\"voltar\" onClick=\"location.href='$url_volta'\" />\n":"";
		$retornar .= "</div>\n\n";
		echo $retornar;
	}
}
$formeeBuilder = new MontaForm; 
