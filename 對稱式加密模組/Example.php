<?php
	require_once("Cryption.Module.php");				//匯入對稱式加密模組，可依環境做調整

	$Data 	= 'phpbest';								//待加密的資料
	$Method = 'aes-256-cbc';							//使用的加密法，可使用openssl_get_cipher_methods()函數取得可使用的加密法

	/*加密範例*/
	$EnCryption = (array)new EnCryption($Data,$Method);	//建立加密物件，並取得加密後的資料
	
	/*在網頁上顯示回傳$EnCryption陣列包含Key、IV、加密後的資料*/
	echo "<pre>";
	print_r($EnCryption);
	echo "</pre>";

	/*解密範例*/
	/*解密模組需要 1.待解密的資料 2.使用的加密法 3.加密使用的Key 4.加密使用的IV */
	$DeCryption = (array)new DeCryption( $EnCryption['EnCryption'], $Method, $EnCryption['key'], $EnCryption['iv']);

	/*在網頁上顯示回傳$DeCryption陣列包含Key、IV、解密後的資料*/
	echo "<pre>";
	print_r($DeCryption);
	echo "</pre>";
?>