<?php

class Security {

	const HMAC_SHA256 = 'sha256';
	const SECRET_KEY = '<YOUR SECRET KEY>';
	const PROFILE_ID = '<YOUR PROFILE ID';
	const ACCESS_KEY = '<YOUR ACCESS KEY>';

	static public function sign($params) {
	  return self::signData(self::buildDataToSign($params), SELF::SECRET_KEY);
	}

	static public function signData($data) {
	    return base64_encode(hash_hmac(self::HMAC_SHA256, $data, SELF::SECRET_KEY, true));
	}

	static public function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return self::commaSeparate($dataToSign);
	}

	static public function getUnsignedFields($params){
		$signedFieldNames = explode(",",$params["signed_field_names"]);
	        foreach ($params as $key=>$field) {
	           if(!in_array($key, $signedFieldNames)){
	           	$unsignedFieldNames[] = $key;
	           }
	        }
	    
	    return self::commaSeparate($unsignedFieldNames);
	}

	static public function commaSeparate ($dataToSign) {
	    return implode(",",$dataToSign);
	}

}
