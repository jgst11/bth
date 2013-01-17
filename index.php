<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package LydiaCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('ANTON_INSTALL_PATH', dirname(__FILE__));
define('ANTON_SITE_PATH', ANTON_INSTALL_PATH . '/site');

require(ANTON_INSTALL_PATH.'/src/bootstrap.php');

$jst = CAnton::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$jst->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$jst->ThemeEngineRender();
