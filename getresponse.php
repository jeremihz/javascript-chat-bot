<?php 
	$responses['what is your name'] = "My name is Vincent.";
	// echo "Hello world";
	$responses['tell me about yourself'] = "I am a chatbot. I'm still learning a lot of things so please forgive me if I can't answer you in some cases.";
	
	$responses["i'm fine"] = "Good. I'm happy about that.";
	$responses["can i ask you anything?"] = "sure go ahead";
	$responses["who are you"] ="im just a robot";
	$responses["stupid"] ="mind your language please";
	$responses["who am i?"] ="i think you can remember your name,im just a Robot!!";
	$responses["kenya"] ="yes its a nice country";
	$responses["im happy to hear about that"] ="Always welcome";

	
	$q = $_GET["q"];

	$response = "";

	if ($q != "") {
		# code...
		$q = strtolower($q);
		foreach ($responses as $r => $value) {
			# code...
			if (strpos($r, $q) !== false) {
				# code...
				$response = $value;
			}

			
		}
	}
	$noresponse = "Sorry I'm still learning. Hence my responses are limited. Ask something else.";
	echo $response === "" ? $noresponse : $response;
?>