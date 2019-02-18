<?php
header("Content-Type: text/plain");

/* 
A domain Class to demonstrate RESTful web services
*/

// phpinfo();

// Class Mobile {
	
	// private $mobiles = array(
		// 1 => 'Apple iPhone XS',  
		// 2 => 'Samsung Galaxy S6',  
		// 3 => 'Apple iPhone 6S Plus',  			
		// 4 => 'LG G4',  			
		// 5 => 'Samsung Galaxy S6 edge',  
		// 6 => 'OnePlus 2');
		
	// /*
		// you should hookup the DAO here
	// */
	// public function getAllMobile(){
		// return $this->mobiles;
	// }
	
	// public function getMobile($id){
		
		// $mobile = array($id => ($this->mobiles[$id]) ? $this->mobiles[$id] : $this->mobiles[1]);
		// return $mobile;
	// }	
// }


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
		
	// echo json_encode(array('Documents' => $Documents));
	 // echo $json = json_encode($Documents);
	
	
	$dir    = 'C:\inetpub\wwwroot\ArenaProcessDocuments\site\ArenaNorDocs';
	$files1 = scandir($dir);
	$files2 = scandir($dir, 1);

	// print_r($files1);
	// print_r($files2);	
	
	
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