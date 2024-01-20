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


/**
 * SkinTemplate class for Vector skin
 * @ingroup Skins
 */
class SkinLod extends SkinTemplate {

	var $skinname = 'lod',
	$stylename = 'lod',
	$template = 'LodTemplate';


	public $useHeadElement = true;

	/**
	 * Initializes output page and sets up skin-specific parameters
	 * @param $out OutputPage object to initialize
	 */
	public function initPage( OutputPage $out ) {

		global $wgLocalStylePath, $wgRequest, $LodUseHeadElement, $wgOcdlaNamespace, $wgResourceModules, $wgScriptPath;
	
		$this->useHeadElemnt = $LodUseHeadElement;

		$title = $out->getContext()->getTitle();
		
		$ns = $title->mNamespace;

		$wgOcdlaNamespace = $ns;

		parent::initPage($out);
		

		/**
		 * http://www.mediawiki.org/wiki/Manual:$wgRequest
		 */
		// $request = $out->getRequest();
		// $Resource_Loader = $out->getResourceLoader();
		// Append CSS which includes IE only behavior fixes for hover support -
		// this is better than including this in a CSS fille since it doesn't
		// wait for the CSS file to load before fetching the HTC file.
		$out->addMeta('viewport','width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no');
		$out->addMeta('http:X-UA-Compatible', 'IE=Edge');
		$out->addMeta('google-site-verification', $wgGoogleSiteVerification);
		$out->addLink(array("href"=>"https://fonts.googleapis.com/css?family=Alegreya+Sans|Open+Sans|Open+Sans:600","rel"=>"stylesheet"));
		$out->addModuleStyles('skins.lod');
		$out->addModules('skins.lod.js');
		$out->addScriptFile("$wgScriptPath/resources/jquery/jquery.makeCollapsible.js");
	}


	/**
	 * Load skin and user CSS files in the correct order
	 * fixes bug 22916
	 * @param $out OutputPage object
	 */
	 // parent is includes/SkinTemplate.php
	 // commented out 2013-03-16 to prevent legacy stylesheet's media queries from 
	 // interfering with mobile CSS
	function setupSkinUserCss(OutputPage $out) {

		parent::setupSkinUserCss($out);
	}
}