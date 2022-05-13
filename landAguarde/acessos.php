
<?php
try {
	// Abre o Arquvio no Modo r (para leitura)
	$arquivo = fopen ('acessos.txt', 'r');
	// Lê o conteúdo do arquivo
	while(!feof($arquivo)){
		//Mostra uma linha do arquivo
		$linha = fgets($arquivo, 1024);
		echo $linha.'<br />';
	}
	// Fecha arquivo aberto
	fclose($arquivo);

}catch(Exception $e){
    
}
?>