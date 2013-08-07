<?php
/**
*
* @package acp
* @version $Id: acp_im.php,v 1.0 2008/01/20 15:05:50 crazygandalf Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_im_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_im',
			'title'		=> 'ACP_IM_SETTINGS',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'im'		=> array('title' => 'ACP_IM_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('ACP_CLIENT_COMMUNICATION')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
?>
