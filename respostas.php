<?php




$html = file_get_contents('D_MEGA.HTML'); 
$doc = new DOMDocument();

libxml_use_internal_errors(TRUE); 
if(!empty($html)){ 
    $doc->loadHTML($html);
    libxml_clear_errors(); //remove errors for yucky html

    $ready_xpath = new DOMXPath($doc);

  
    //$ganhadores_sena = $ready_xpath->query('//td[10]');
	//$ganhadores_quina = $ready_xpath->query('//td[14]');
	//$ganhadores_quadra = $ready_xpath->query('//td[16]');


	$linhas = $ready_xpath->query('//tr');	
	$colunas = $ready_xpath->query('//td');

	
	
	if($linhas->length > 0){
		
		foreach($linhas as $linha){
			
			foreach($colunas as $cols){
				
				$resultado = $cols->nodeValue.'<br/>';
				echo $resultado;	
				
			}
			
		}
			
	}
	
}
?>