<?php
header("Content-Type: text/plain");

/* 
A domain Class to demonstrate RESTful web services
*/


$lan = $_GET['language'];

$Documents = array
			(
				['path' => 'DIPS Arena Dokumenter 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Dokumenter 18.1.0 Brukerdokumentasjon'],
				['path' => 'DIPS Arena Arbeidsflytskript 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Arbeidsflytskript 18.1.0 Brukerdokumentasjon'],
				['path' => 'DIPS Arena Arketypeadmin 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Arketypeadmin 18.1.0 Brukerdokumentasjon'],
				['path' => 'DIPS Arena Basisfunksjonalitet 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Basisfunksjonalitet 18.1.0 Brukerdokumentasjon'],
				['path' => 'DIPS Arena Behandlingsplan 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Behandlingsplan 18.1.0 Brukerdokumentasjon'],
				['path' => 'DIPS Arena Bestilling 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Bestilling 18.1.0 Brukerdokumentasjon'],
				['path' => 'DIPS Arena Desktopintegrasjon 18.1.0 Brukerdokumentasjon.pdf' , 'name' => 'DIPS Arena Desktopintegrasjon 18.1.0 Brukerdokumentasjon']
			);
			
	if ($lan == "no") {
		$dir    = 'C:\inetpub\wwwroot\ArenaProcessDocuments\site\ArenaNorDocs\no';
		// echo $dir;
	}
	else
	{
		$dir    = 'C:\inetpub\wwwroot\ArenaProcessDocuments\site\ArenaNorDocs\en';
		// echo $dir;
	}
	
	
	$files1 = scandir($dir);
	$files2 = scandir($dir, 1);

	// print_r($files1);	
	
	if (is_dir($dir)) 
	{
		$files = scandir($dir);
		foreach($files as $file) 
		{ 
			$path_to_file = $dir . "\\". $file;
			$extension = pathinfo ( $path_to_file, PATHINFO_EXTENSION );
			$bareName = pathinfo($path_to_file, PATHINFO_FILENAME);
			// $file_url = $dir_url . $file;
			// echo 'Path to file: ' . $path_to_file . '<br />';
			// echo 'Extension: ' . $extension . '<br />';         
			// echo 'File Name: ' . $bareName . '<br />';         
			// echo 'URL: ' . $file_url . '<br />';  
			$files_array[] = array('path' => $path_to_file , 'name' => $bareName); // Add the file to the array				
		}		
	}
	
	$return_array =array($files_array);
	echo json_encode($files_array);	
	
	/*	
	$path = '\\\\az-sea-fl-srv02.dipscloud.com\DIPS-Log';
	$path2 = '\\\\10.16.1.103\DocShare';

	$user = "dipscloud.com\optimus";
	$pass = "Norm@J3an";
	$drive_letter = "y";
	
	system("net use y: \\\\az-sea-fl-srv02.dipscloud.com\Share /user:dipscloud.com\optimus Norm@J3an /persistent:no>nul 2>&1");

	if ($handle = opendir($path)) 
	{
		while (false !== ($entry = readdir($handle))) 
		{
			echo "$entry \r\n";
		} 
		closedir($handle);
	}	
	
	system("net use O: \\\\10.16.1.103\DocShare\ /user:localhost\admin Welcome123$ /persistent:no>nul 2>&1");
	
	if ($handle = opendir($path2)) 
	{
		while (false !== ($entry = readdir($handle))) 
		{
			echo "$entry \r\n";
		} 
		closedir($handle);
	}
	
	*/	

?>