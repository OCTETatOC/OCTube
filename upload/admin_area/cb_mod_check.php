<?php
/* 
 ***************************************************************
 | Copyright (c) 2007-2008 Clip-Bucket.com. All rights reserved.
 | @ Author : ArslanHassan										
 | @ Software : ClipBucket , � PHPBucket.com					
 ****************************************************************
*/
require'../includes/admin_config.php';
$userquery->admin_login_check();
$pages->page_redir();

/* Assigning page and subpage */
if(!defined('MAIN_PAGE')){
	define('MAIN_PAGE', 'Tool Box');
}
if(!defined('SUB_PAGE')){
	define('SUB_PAGE', 'Server Modules Info');
}


subtitle("ClipBucket Server Module Checker");
template_files("cb_mod_check.html");
display_it();
?>