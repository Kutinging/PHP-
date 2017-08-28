<?php
	class EnCryption{
		var $key,$iv;
		function EnCryption($Data,$Method){
			$ReturnArray = array();
			$this->key 			= base64_encode(openssl_random_pseudo_bytes(32));
			$this->iv 			= base64_encode(openssl_random_pseudo_bytes(16));
			$this->EnCryption	= base64_encode(openssl_encrypt($Data, $Method, base64_decode($this->key), OPENSSL_RAW_DATA, base64_decode($this->iv)));
			
			$ReturnArray = array(
				'key' =>$this->key,
				'iv' =>$this->iv,
				'EnCryption' =>$this->EnCryption
			);
			
			return $ReturnArray;
		}
	}
	class DeCryption{
		var $key,$iv;
		function DeCryption($Data,$Method,$key,$iv){
			$Data = base64_decode($Data);
			$this->key 	= $key;
			$this->iv 	= $iv;
			$this->DeCryption = openssl_decrypt($Data,$Method, base64_decode($this->key), OPENSSL_RAW_DATA, base64_decode($this->iv));
			$ReturnArray = array(
				'DeCryption' =>$this->DeCryption
			);
			
			return $ReturnArray;
		}
	}
?>