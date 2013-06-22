
/*


$file2   = "com_$comName_css.css"; // css file 
$file3   = "helper.php";
$file4   = "com_$comName_js.js";//if you have custom js
$file5_1 = "en-GB.com_$comName.ini";
$file5_2 = "en-GB.com_$comName.sys.ini";
$file6_1 = $comName."php";
$file6_2 = ".php"; //it should be one for each view, similar to controller
$file7_1 = "install.mysql.utf8.sql"; //if your component require the usage(s) of a table
$file7_2 = "unstall.mysql.utf8.sql"; //Only if u want table be deleted when comp. Uninstall
$file8   = ".php";  //I havent understood the purpose of this file yet
$file9_1 = "view.html.php";
$file9_2 = "default.php";
					

$file_txt = 'index.html';
$file1 = 'en-GB.mod_'.$modname.'.ini';
$file2 = 'en-GB.mod_'.$modname.'sys.ini';
$file3 = 'default.php';
$file4 = 'mod_'.$modname.'.php';
$file5 = 'mod_'.$modname.'.xml';
$file6 = 'helper.php';
$phpintro ="<?php
/**
 * @copyright	Copyright (C) 2012 Fabian Manzano. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::register('"."mod"."$modname"."Helper', dirname(__FILE__).'/helper.php');

".'$list'." = "."mod"."$modname"."Helper::getList(".'$params'.");
if (isset(".'$list'."[0])) {
	".'$moduleclass_sfx'." = htmlspecialchars(".'$params'."->get('moduleclass_sfx'));
	require JModuleHelper::getLayoutPath("."'"."mod_"."$modname"."'".", ".'$params'."->get('layout', 'default'));
}"
;

$helper = "<?php
/**
 * @copyright	Copyright (C) 2012 Fabian Manzano. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JLoader::register('ContentHelperRoute', JPATH_SITE.'/components/com_content/helpers/route.php');

abstract class mod"."$modname"."Helper
{
public static function getList(".'&$params'.")
		{
			
		}
}	
";
$longstring = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<extension type=\"module\" version=\"2.5.0\" client=\"site\" method=\"upgrade\">
  <name>$modname</name>  
  <author>Fabian Manzano</author>
  <creationDate>December 2012</creationDate>
  <copyright>Copyright (C)2012 Fabian Manzano</copyright>
  <license>GNU General Public License version 2 or later</license>
  <authorEmail>manzanofab@hotmail.com</authorEmail>
  <authorUrl>www.fabianmanzano.info</authorUrl>
  <version>1.0</version>
  <description>Easy start for module creation</description>
  <files>
    <filename module=\"$dir1\">$file4</filename>
    <filename>index.html</filename>
	<filename>helper.php</filename>
	<filename>$file4</filename>
	<filename>$file5</filename>
	<folder>language</folder>
	<folder>tmpl</folder>
  </files>
  <config>
		<fields name=\"params\">
			<fieldset name=\"basic\" addrulepath=\"modules/mod_joompro_articles_author\">
				
				
			</fieldset>
			<fieldset name=\"advanced\">
				<field name=\"layout\" type=\"modulelayout\" label=\"JFIELD_ALT_LAYOUT_LABEL\"
					description=\"JFIELD_ALT_MODULE_LAYOUT_DESC\" />

				<field name=\"moduleclass_sfx\" type=\"text\" label=\"COM_MODULES_FIELD_MODULECLASS_SFX_LABEL\"
					description=\"COM_MODULES_FIELD_MODULECLASS_SFX_DESC\" />

				<field name=\"cache\" type=\"list\" default=\"1\" label=\"COM_MODULES_FIELD_CACHING_LABEL\" 
					description=\"COM_MODULES_FIELD_CACHING_DESC\">
					<option value=\"1\">JGLOBAL_USE_GLOBAL</option>
					<option value=\"0\">COM_MODULES_FIELD_VALUE_NOCACHING</option>
				</field>
				<field name=\"cache_time\" type=\"text\" default=\"900\" label=\"COM_MODULES_FIELD_CACHE_TIME_LABEL\" 
				description=\"COM_MODULES_FIELD_CACHE_TIME_DESC\" />
				<field name=\"cachemode\" type=\"hidden\" default=\"static\">
					<option value=\"static\"></option>
				</field>
			</fieldset>
		</fields>
	</config>
</extension>

";
$defaultTXT ="<?php
/**
 * @copyright	Copyright (C) 2011 Fabian Manzano. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Output as a list of links in a ul element
?>
<ul class=".'"'."joompro<?php echo ".'$moduleclass_sfx;'." ?>".'"'.">
";
