<?php
return [
	'APIException:ApiResultUnknown' => "APIaren emaitza mota ezezaguna da, hau ez zen inoiz gertatu behar.",
	'APIException:MissingParameterInMethod' => "%s parametroa faltan %s metodoan",
	'APIException:ParameterNotArray' => "%s ematen du ez dela array bat.",
	'APIException:UnrecognisedTypeCast' => "Mota ezezaguna %s \"cast\"-ean '%s' aldagairako '%s' metodoan",
	'APIException:InvalidParameter' => "Parametro okerra aurkitu da '%s'-rako '%s' metodoan.",
	'APIException:FunctionParseError' => "%s(%s) analisi errorea.",
	'APIException:FunctionNoReturn' => "%s(%s) ez du baliorik bueltatu.",
	'APIException:APIAuthenticationFailed' => "Dei metodoak API Autentifikazioan huts egin du",
	'APIException:UserAuthenticationFailed' => "Dei metodoak  Erabiltzaile Autentifikazioan huts egin du",
	'APIException:MethodCallNotImplemented' => "'%s' dei metodoa ez da inplementatua izan.",
	'APIException:FunctionDoesNotExist' => "'%s' metodorako funtzioa ez da deigarria",
	'APIException:AlgorithmNotSupported' => "'%s' algoritmoa ez da onartua edo desgaitua izan da.",
	'APIException:NotGetOrPost' => "Eskaera metodoa GETO edo POST izan behar dira",
	'APIException:MissingAPIKey' => "API giltza falta da",
	'APIException:BadAPIKey' => "API giltz okerra",
	'APIException:MissingHmac' => "X-Elgg-hmac goiburua falta da",
	'APIException:MissingHmacAlgo' => "X-Elgg-hmac-algo goiburua falta da",
	'APIException:MissingTime' => "X-Elgg-time goiburua falta da",
	'APIException:MissingNonce' => "X-Elgg-nonce goiburua falta da",
	'APIException:TemporalDrift' => "X-Elgg-time oso urruti dago iragan eta etorkizunean. Epokak huts egin du.",
	'APIException:NoQueryString' => "Ez dago daturik kontsulta katean",
	'APIException:MissingPOSTHash' => "X-Elgg-posthash goiburua falta da",
	'APIException:MissingPOSTAlgo' => "X-Elgg-posthash_algo goiburua falta da",
	'APIException:MissingContentType' => "Post daturako eduki mota falta da",
	'SecurityException:APIAccessDenied' => "Barkatu, API atzipena desgaitua izan da administratzaileagatik.",
	'SecurityException:NoAuthMethods' => "Ez dira autentifikazio metodorik aurkitu API eskaera honekin autentifikatu ahal dena.",
	'SecurityException:authenticationfailed' => "Erabiltzailea ezin izan da autentifikatu",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Metodo edo funtzioa ez ezarria expose_method() deian",
	'InvalidParameterException:APIParametersArrayStructure' => "Arrayen parametro egitura ez da egokia deiarentzako '%s' metodoa erakusteko",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Onarpen gabeko http %s metodoa '%s' api metodoarentzako",
	'SecurityException:AuthTokenExpired' => "Autentifikazio token-a falta, ez da egokia edo iraungi da.",
	'SecurityException:InvalidPostHash' => "POST datu traola ez da egokia - %s izan da itxarondakoa baina %s lortu da.",
	'SecurityException:DupePacket' => "Pakete sinadura jada ikusia.",
	'SecurityException:InvalidAPIKey' => "API giltza falta edo okerra da.",
	'NotImplementedException:CallMethodNotImplemented' => "'%s' dei metodoa une honetan ez da onartua.",
	'CallException:InvalidCallMethod' => "%s '%s' erabiliz deitua izan behar du",

	'system.api.list' => "Sistema eskuragarri dauden API dei guztiak zerrendatu",
	'auth.gettoken' => "API dei honek erabiltzaileari autentifikazio tokena lortzen uzten dio non etorkizuneko API deiak autentifikatzen erabiltzeko. auth_token parametro bezala pasatu",
];
