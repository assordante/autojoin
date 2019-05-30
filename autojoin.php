<?php
require_once 'madeline.phar';
$settings = ['session' => 'sessions/appoggio2.madeline', 'readmsg' => true, 'auto_reboot' => true, 'multithread' => false, 'old_update_parser' => false, 'madeline' => ['app_info' => ['api_id' => 278690, 'api_hash' => '4c441ef5982f3c3eceb186659be92fdb', 'lang_code' => 'it', 'app_version' => '4.7.0'], 'logger' => ['logger' => 0]]];
	$dir = readline("\n\nInserisca ora directory dove presente sessioni (tipo sessions):");
	$l = readline("\n\nInserisca ora il link:");
	$mex =  readline("\n\nInserisca ora testo da mandare a gruppo joins:");

	foreach(array_diff(scandir("$dir"), ['.', '..']) as $sexa)
	{
		try{
			$MadelineProto = new \danog\MadelineProto\API('sessions/'.$sexa, $settings['madeline']);
			echo "\nh";
				
	$MadelineProto->channels->joinChannel(['channel' => $l, ]);
		$MadelineProto->messages->sendMessage(['peer' => $mex, 'message' => "asd", 'parse_mode' => 'html']);
		echo "\n\n";}catch(Exception $e){continue;}
		
	}

// ©️ un tecnologia assordante
