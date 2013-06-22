<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/fabian.css" type="text/css" media="screen" />
<title>Component Creator</title>
</head>
<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
  <!-- Navbar
    ================================================== -->
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="#">Basic Joomla 2.5 Component generator</a>
       <div class="nav-collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
          <li><a href="index.php">Home</a></li>
        </ul>
       </div>
     </div>
   </div>
 </div>

    <div class="container">
<section id="forms">
  <div class="page-header">
    <h1>Component Files Generator</h1>
  </div>

  <div class="row">
    <div class="span9">
      <?PHP 
		if(isset($_POST['submit']))
		  { 
		    $comName = $_POST['comName'];
			if (!empty($comName)) 
				{
					echo "The component name is: ".$comName.". you will need to zip the file.<br>";					
					/** MAIN DIRECTORY NAMES **/

					$dir     = 'ZipInside';
					$dir1    = 'com_'.$comName;
					$dir2    = 'admin';
					$dir2_1  = 'assets';
					$dir2_2  = 'controllers';
					$dir2_3  = 'css';
					$dir2_4  = 'helpers';
					$dir2_5  = 'js';
					$dir2_6  = 'language';
					$dir2_7  = 'models';
					$dir2_8  = 'sql';
					$dir2_9  = 'tables';
					$dir2_10 = 'views';
					
					$dir3 = 'site';
					$dir3_1  = 'controllers';
					$dir3_2  = 'css';
					$dir3_3  = 'helpers';
					$dir3_4  = 'js';
					$dir3_5  = 'language';
					$dir3_6  = 'models';
					$dir3_7  = 'views';
					
					$dir4    = 'en-GB';
					$dir5    = $comName;
					$dir5_1  = 'tmpl';
					
					/** THE DIRECTORY PATH'S **/
					$string2_1    = $dir1."/".$dir2."/".$dir2_1;
					$string2_2    = $dir1."/".$dir2."/".$dir2_2;
					$string2_3    = $dir1."/".$dir2."/".$dir2_3;
					$string2_4    = $dir1."/".$dir2."/".$dir2_4;
					$string2_5    = $dir1."/".$dir2."/".$dir2_5;
					$string2_6    = $dir1."/".$dir2."/".$dir2_6;
					$string2_6_1  = $dir1."/".$dir2."/".$dir2_6."/".$dir4;
					$string2_7    = $dir1."/".$dir2."/".$dir2_7;
					$string2_8    = $dir1."/".$dir2."/".$dir2_8;
					$string2_9    = $dir1."/".$dir2."/".$dir2_9;
					$string2_10   = $dir1."/".$dir2."/".$dir2_10;
					$string2_10_1 = $dir1."/".$dir2."/".$dir2_10."/".$dir5;
					$string2_10_2 = $dir1."/".$dir2."/".$dir2_10."/".$dir5."/".$dir5_1;

					$string3_1    = $dir1."/".$dir3."/".$dir3_1;
					$string3_2    = $dir1."/".$dir3."/".$dir3_2;
					$string3_3    = $dir1."/".$dir3."/".$dir3_3;
					$string3_4    = $dir1."/".$dir3."/".$dir3_4;
					$string3_5    = $dir1."/".$dir3."/".$dir3_5;
					$string3_5_1  = $dir1."/".$dir3."/".$dir3_5."/".$dir4;
					$string3_6    = $dir1."/".$dir3."/".$dir3_6;
					$string3_7    = $dir1."/".$dir3."/".$dir3_7;
					$string3_7_1  = $dir1."/".$dir3."/".$dir3_7."/".$dir5;
					$string3_7_2  = $dir1."/".$dir3."/".$dir3_7."/".$dir5."/".$dir5_1;
					
					/** FILE DEFINITION: NAME OF THE FILES THAT NEEDS TO BE CREATED **/					
					$file    = "index.html";
					$file_h1 = "controller.php";
					$file1   = $comName.".php"; //it should be actually the controller view name
					$file1_1 = $comName.".xml"; //it should be actually the controller view name
					$file2   = "com_$comName _css.css"; // css file 
					$file3   = "helper.php";
					$file4   = "com_$comName"."_js.js";//if you have custom js
					$file5_1 = "en-GB.com_$comName.ini";
					$file5_2 = "en-GB.com_$comName.sys.ini";
					$file6_1 = $comName.".php";
					$file6_2 = ".php"; //it should be one for each view, similar to controller
					$file7_1 = "install.mysql.utf8.sql"; //if your component require the usage(s) of a table
					$file7_2 = "unstall.mysql.utf8.sql"; //Only if u want table be deleted when comp. Uninstall
					$file8   = ".php";  //I havent understood the purpose of this file yet
					$file9_1 = "view.html.php";
					$file9_2 = "default.php";
					
					/** IMPORT THE FILE WITH THE INFORMATION THAT BELONGS TO EACH FILE **/
					//require 'strings.php';
$index_txt = " ";
$main_xml_txt = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<extension type=\"component\" version=\"2.5.0\" method=\"upgrade\">
	<name>com_$comName</name>
	<creationDate>July 2013</creationDate>
	<copyright>Copyright (C) 2013 Fabian Manzano. All rights reserved.</copyright>
	<license>GNU General Public License version 2 or later; see LICENSE.txt</license>
    <author>Fabian Manzano</author>
	<authorEmail>manzanofab@hotmail.com</authorEmail>
	<authorUrl>http://fabianmanzano.info</authorUrl>
	<version>1.0.0</version>
	<description>com_$comName"."_description</description>
<!-- 
	<install> 
    	<sql>
        	<file driver=\"mysql\" charset=\"utf8\">sql/install.mysql.utf8.sql</file>
  		</sql>
    </install>
    <uninstall>
    	<sql>
        	<file driver=\"mysql\" charset=\"utf8\">sql/uninstall.mysql.utf8.sql</file>
  		</sql>
   </uninstall>
-->
	<files folder=\"site\">
		<filename>$comName".".php</filename>
		<filename>controller.php</filename>
		<filename>index.html</filename>
		<folder>controllers</folder>
		<folder>css</folder>
		<folder>helpers</folder>
		<folder>js</folder>
		<folder>language</folder>
        <folder>models</folder>
        <folder>views</folder>
	</files>
	
	<languages folder=\"site\">
		<language tag=\"en-GB\">language/en-GB/en-GB.com_$comName".".ini</language>
	
	</languages>
<!--
	<media destination=\"com_alis\" folder=\"assets\">
		<filename>index.html</filename>
		<folder>css</folder>
		<folder>images</folder>
		<folder>js</folder>
	</media>
-->
	<administration>
		<menu>com_$comName</menu>
		<files folder=\"admin\">
			<filename>$comName".".php</filename>
			<filename>controller.php</filename>
			<filename>index.html</filename>
			<folder>controllers</folder>
			<folder>css</folder>
			<folder>helpers</folder>
			<folder>js</folder>
			<folder>language</folder>
			<folder>models</folder>
			<folder>sql</folder>
			<folder>tables</folder>
			<folder>views</folder>
		</files>
	
		<languages folder=\"admin\">
			<language tag=\"en-GB\">language/en-GB/en-GB.com_$comName".".ini</language>
			<language tag=\"en-GB\">language/en-GB/en-GB.com_$comName".".sys.ini</language>		
		</languages>
	</administration>

</extension>

";
#file1_txt they are more than 1 different version!!!
$admin_component = "<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_$comName')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

".'$doc'." = JFactory::getDocument();
".'$doc'."->addScript(\"/administration/com_$comName"."/js/jquery.js\");
".'$doc'."->addScript(\"/administration/com_$comName"."/js/jquery.js\");
".'$doc'."->addStyleSheet(\"/components/com_$comName"."/css/com_$comName"."_css.css\");

".'$controller'."	= JController::getInstance('$comName');
".'$controller'."->execute(JRequest::getCmd('task'));
".'$controller'."->redirect();
";
$admin_controller   = "<?php 
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');
class ".$comName."Controller"."changeName extends JController {//change name should be the view that its been called
	
	public function edit (){
		
		}

	public function add (){
	
		}

	public function remove (){
	
		}
	
	public function save (){
	
		}
	
	public function apply (){
	
		}
}
";
$file_h1_txt = "<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');
class ".$comName."Controller extends JController {

}";
$admin_helper = "<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');



class $comName"."Helper {
	
	public static function getmessage (){
		
		
		}	
}

?>";
$comName_Uppercase = strtoupper($comName);
$admin_language = "COM_$comName_Uppercase"."_TITLE=\"Component Menu Modify me on the language file folder ADMIN\"";
$admin_language_sys = "COM_$comName_Uppercase"."=\"Component Name Modify me on the language file folder ADMIN\"
COM_$comName_Uppercase"."_DESCRIPTION=\"Component Description Modify me on the language file folder ADMIN\"
COM_$comName_Uppercase"."_TITLE=\"Component Menu Modify me on the language file folder ADMIN\"
";
$admin_model="<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.model');
class $comName"."Model"."$comName extends JModel {
	
}";
$tpl = '$'.'tpl';
$admin_view_html_php = "<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.view');
class $comName"."View"."$comName extends JView {
	public function display (".$tpl." = null){	
		JToolBarHelper::title(JText::_('COM_$comName"."_TITLE'), 'fab.png');
		JToolBarHelper::cancel('$comName".".cancel');
		parent::display(".$tpl.");
		}
}";

$site_view_html_php = "<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.view');
class $comName"."View"."$comName extends JView {
	public function display (".$tpl." = null){	
		parent::display(".$tpl.");
		}
}";

$admin_view_tmpl_default="<?php
/**
 * @version     1.0.0
 * @package     com_$comName
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

?>

Fabian Manzano is awesome";

$site_default_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<metadata>
	<layout title=\"Fisrt Page\">
		<message>Fisrt Page</message>
	</layout>
</metadata>";

$site_metadata_xml = "";
/** IDEALLY THIS WILL COME FROM A DIFFERENT FILE **/


					/** CHECK IF MAIN DIRECTORY EXIST **/
					if( is_dir($dir1) === false )
					{
						/** CREATE ALL THE PATH'S **/
					   mkdir($string2_1, 0700, true);  
					   mkdir($string2_2, 0700, true);  
					   mkdir($string2_3, 0700, true);  
					   mkdir($string2_4, 0700, true);  
					   mkdir($string2_5, 0700, true);  
					   mkdir($string2_6, 0700, true);  
					   mkdir($string2_6_1, 0700, true);  
					   mkdir($string2_7, 0700, true);  
					   mkdir($string2_8, 0700, true);  
					   mkdir($string2_9, 0700, true);  
					   mkdir($string2_10, 0700, true);  
					   mkdir($string2_10_2, 0700, true);  		

					   mkdir($string3_1, 0700, true);  
					   mkdir($string3_2, 0700, true);  
					   mkdir($string3_3, 0700, true);  
					   mkdir($string3_4, 0700, true);  
					   mkdir($string3_5, 0700, true);  
					   mkdir($string3_5_1, 0700, true);  
					   mkdir($string3_6, 0700, true);  
					   mkdir($string3_7, 0700, true);  
					   mkdir($string3_7_1, 0700, true);  
					   mkdir($string3_7_2, 0700, true);  
					}

/** ADD INTO EACH PATH THE FILES REQUIRED **/
// 2 FILES OUTSIDE THE ADMIN AND SITE FOLDER
#index
$ourFileHandle = fopen("$dir1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ XML FILE
$ourFileHandle = fopen("$dir1/".$file1_1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $main_xml_txt );
fclose($ourFileHandle);

//------------------------
/** ADMIN FILES**/
#index
$ourFileHandle = fopen("$dir1/$dir2/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ component name.php
$ourFileHandle = fopen("$dir1/$dir2/".$file1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_component );
fclose($ourFileHandle);
//------------------------ controller.php
$ourFileHandle = fopen("$dir1/$dir2/".$file_h1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $file_h1_txt );
fclose($ourFileHandle);

//------------------------ assets folder
$ourFileHandle = fopen("$string2_1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ controller folder: index
$ourFileHandle = fopen("$string2_2/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ controller folder: controller
$ourFileHandle = fopen("$string2_2/"."changeName.php", 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_controller );
fclose($ourFileHandle);
//------------------------ css folder: index
$ourFileHandle = fopen("$string2_3/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ css folder: 
$ourFileHandle = fopen("$string2_3/".$file2, 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);
//------------------------ HELPER folder: index
$ourFileHandle = fopen("$string2_4/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ HELPER folder: 
$ourFileHandle = fopen("$string2_4/".$file3, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_helper  );
fclose($ourFileHandle);
//------------------------ JS folder: index
$ourFileHandle = fopen("$string2_5/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ JS folder: 
$ourFileHandle = fopen("$string2_5/".$file4, 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);

//------------------------ LANGUAGE folder: index
$ourFileHandle = fopen("$string2_6/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ LANGUAGE ENGLISH SUBfolder: index
$ourFileHandle = fopen("$string2_6_1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ LANGUAGE folder: 
$ourFileHandle = fopen("$string2_6_1/".$file5_1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_language );
fclose($ourFileHandle);
//------------------------ LANGUAGE folder: 
$ourFileHandle = fopen("$string2_6_1/".$file5_2, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_language_sys);
fclose($ourFileHandle);
//------------------------ MODELS folder: index
$ourFileHandle = fopen("$string2_7/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ MODELS folder: 
$ourFileHandle = fopen("$string2_7/".$file1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_model );
fclose($ourFileHandle);
//------------------------ MODELS folder: 
$ourFileHandle = fopen("$string2_7/"."ONEPERVIEW.PHP", 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);
//------------------------ SQL folder: INDEX 
$ourFileHandle = fopen("$string2_8/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ SQL folder: 
$ourFileHandle = fopen("$string2_8/install.mysql.utf8.sql", 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);
//------------------------ SQL folder: 
$ourFileHandle = fopen("$string2_8/uninstall.mysql.utf8.sql", 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);
//------------------------ TABLES folder: INDEX 
$ourFileHandle = fopen("$string2_9/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS folder: INDEX 
$ourFileHandle = fopen("$string2_10/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder: INDEX 
$ourFileHandle = fopen("$string2_10_1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder: VIEW.HTML.PHP 
$ourFileHandle = fopen("$string2_10_1/view.html.php", 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_view_html_php );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder tmpl: INDEX 
$ourFileHandle = fopen("$string2_10_2/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder tmpl: default 
$ourFileHandle = fopen("$string2_10_2/default.php", 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_view_tmpl_default );
fclose($ourFileHandle);

//------------------------
/** SITE FILES**/
//------------------------
#index
$ourFileHandle = fopen("$dir1/$dir3/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ component name.php
$ourFileHandle = fopen("$dir1/$dir3/".$file1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_component );
fclose($ourFileHandle);
//------------------------ controller.php
$ourFileHandle = fopen("$dir1/$dir3/".$file_h1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $file_h1_txt );
fclose($ourFileHandle);
//------------------------ controller folder: index
$ourFileHandle = fopen("$string3_1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ controller folder: controller
$ourFileHandle = fopen("$string3_1/"."changeName.php", 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_controller );
fclose($ourFileHandle);

//------------------------ css folder: index
$ourFileHandle = fopen("$string3_2/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ css folder: 
$ourFileHandle = fopen("$string3_2/".$file2, 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);
//------------------------ HELPER folder: index
$ourFileHandle = fopen("$string3_3/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ HELPER folder: 
$ourFileHandle = fopen("$string3_3/".$file3, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_helper  );
fclose($ourFileHandle);
//------------------------ JS folder: index
$ourFileHandle = fopen("$string3_4/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);

//------------------------ LANGUAGE folder: index
$ourFileHandle = fopen("$string3_5/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ LANGUAGE ENGLISH SUBfolder: index
$ourFileHandle = fopen("$string3_5_1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ LANGUAGE folder: 
$ourFileHandle = fopen("$string3_5_1/".$file5_1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_language );
fclose($ourFileHandle);

//------------------------ MODELS folder: index
$ourFileHandle = fopen("$string3_6/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ MODELS folder: 
$ourFileHandle = fopen("$string3_6/".$file1, 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_model );
fclose($ourFileHandle);
//------------------------ MODELS folder: 
$ourFileHandle = fopen("$string3_6/"."ONEPERVIEW.PHP", 'w') or die("can't open file");
fwrite( $ourFileHandle, "" );
fclose($ourFileHandle);

//------------------------ VIEWS folder: INDEX 
$ourFileHandle = fopen("$string3_7/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder: INDEX 
$ourFileHandle = fopen("$string3_7_1/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder: VIEW.HTML.PHP 
$ourFileHandle = fopen("$string3_7_1/view.html.php", 'w') or die("can't open file");
fwrite( $ourFileHandle, $site_view_html_php );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder: metadata XML 
$ourFileHandle = fopen("$string3_7_1/metadata.xml", 'w') or die("can't open file");
fwrite( $ourFileHandle, $site_metadata_xml );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder tmpl: INDEX 
$ourFileHandle = fopen("$string3_7_2/".$file, 'w') or die("can't open file");
fwrite( $ourFileHandle, $index_txt );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder tmpl: default 
$ourFileHandle = fopen("$string3_7_2/default.php", 'w') or die("can't open file");
fwrite( $ourFileHandle, $admin_view_tmpl_default );
fclose($ourFileHandle);
//------------------------ VIEWS subfolder tmpl: default XML
$ourFileHandle = fopen("$string3_7_2/default.xml", 'w') or die("can't open file");
fwrite( $ourFileHandle, $site_default_xml );
fclose($ourFileHandle);

				}
			else { 	echo"please type the name";}
		  } 
		else
		{  
?>


      <form class="form-horizontal well" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <fieldset>
          <legend>Component Name</legend>
          <div class="control-group">
            <label class="control-label" for="input01">Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01" name="comName">
              <p class="help-block">No spaces, if more than 1 word separete it with _</p>
            </div>
          </div>
          <div class="form-actions">
            <button name="submit" type="submit" class="btn btn-primary">Create</button>
            <!--I have to add name into this button to make it work!!!!-->
            <button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
      <?php
		}
	  ?>
    </div>
  </div>

</section>
    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/application.js"></script>
    <script src="js/bootswatch.js"></script>

</body>  
</html>
<?php

?>
