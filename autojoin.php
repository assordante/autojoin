<?php
require_once 'madeline.phar';
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
