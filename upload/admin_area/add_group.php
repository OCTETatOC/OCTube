<?php

require_once '../includes/admin_config.php';
$userquery->admin_login_check();
$userquery->login_check('member_moderation');
$pages->page_redir();

/* Assigning page and subpage */
if(!defined('MAIN_PAGE')){
	define('MAIN_PAGE', 'Groups');
}
if(!defined('SUB_PAGE')){
	define('SUB_PAGE', 'Add Group');
}

if(isset($_POST['create_group']))
{
    if($cbgroup->create_group($_POST,userid(),true))
    {
        e(lang("new_mem_added"),"m");
        $_POST = '';
    }
}

subtitle("Add New group");
template_files('add_group.html');
display_it();
?>