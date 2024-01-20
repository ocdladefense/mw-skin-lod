<?php
/**
 * Lod - Development theme for Lod
 * improvements.
 *
 * @todo document
 * @file
 * @ingroup Skins
 */

if(!defined('MEDIAWIKI')) die(-1);

$wgValidSkinNames['lod'] = 'Lod';
$wgExtensionMessagesFiles['Lod'] = __DIR__ . '/Lod/Lod.i18n.php';
$wgAutoloadClasses['SkinLod'] = __DIR__ . '/Lod.php';
$wgAutoloadClasses['LodTemplate'] = __DIR__ . '/LodTemplate.php';
$wgMessagesDirs['Lod'] = __DIR__ . '/Lod/i18n';


$wgOcdlaNamespace = null;

// Continued from above
/*
 * Template for reference.
 
$wgResourceModules['skins.ocdla'] = array(
	'styles' => array(
		'ocdla/resources/screen.css' => array( 'media' => 'screen' ),
		'ocdla/resources/print.css' => array( 'media' => 'print' ),
	),
	'remoteBasePath' => $GLOBALS['wgStylePath'],
	'localBasePath' => $GLOBALS['wgStyleDirectory'],
	'position' => 'top'
);
*/
    
$wgResourceModules['skins.lod'] = array(
	// Keep in sync with WebInstallerOutput::getCSS()
	'styles' => array(
		'common/commonElements.css' => array( 'media' => 'screen' ),
		'common/commonContent.css' => array( 'media' => 'screen' ),
		'common/commonInterface.css' => array( 'media' => 'screen' ),
		'lod/screen.css' => array( 'media' => 'screen' ),
		'lod/overrides.css' => array( 'media' => 'screen' ),
		'lod/screen-hd.css' => array( 'media' => 'screen and (min-width: 982px)' ),
	),
	'scripts' => 'lod/lod.js',
	'position' => 'top',
	'remoteBasePath' => 'skins',
	'localBasePath' => 'skins'
);


$wgResourceModules['skins.lod.js'] = array(
	'scripts' => array(
		'lod/lod.js'
	),
	//'dependencies' => array(
		// In this example, awesome.js needs the jQuery UI dialog stuff
	//	'jquery.ui.dialog',
	//),
	'position' => 'top',
	'remoteBasePath' => '/skins',
	'localBasePath' => 'skins'
);
// Continued from above




