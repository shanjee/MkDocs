## This Document will explain step by step instruction to import and export FolderType data as packages.


## Steps to perform the action in arena client
1. Click on System Manager
![Screenshot](/images/SelectSystemManager.png) 

2. Click on 2nd tab call "Packages" and select FolderType from the pull down list
![Screenshot](/images/ImportPackage.png) 

3. Click on 2nd tab call "Packages" and select FolderType from the pull down list

4. Once you select the fldertype from the pull down list you will get the full list of available folder types in the connected database.

5. Select a one result which you are interested to perform export operation, refer the bellow image.
you can export the result as

		a) Export as Zip
		b) Export as Nuget Package
soon a save dialogbox will prompt and ask to select the location where the data to be exported.

	![Screenshot](/images/SelectFolderType.png) 


6. The same way you can import the previous export package into system.
Select "import and Installation" and then click on import button, soon you press the import button the file open dialog box will be displayed and you can choose the package which you want to import to system.

!!! information 

	In this case the system will validate the package and if validation succeeded then user can install it otherwise the status will be displayed as "skipped"
	
![Screenshot](/images/InstallSkipped.png) 
	
7	. Diagram bellow shows the flow chart of the full import and export functionality. 

![Screenshot](/images/PackageExportImport.png) 
