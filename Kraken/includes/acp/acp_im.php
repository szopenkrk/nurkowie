<?php
/**
*
* @package acp
* @version $Id: acp_im.php,v 1.0 2008/01/20 14:36:32 crazygandalf Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_im
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang(array('acp/board', 'mods/im'));

		$action	= request_var('action', '');
		$submit = (isset($_POST['submit'])) ? true : false;

		if ($mode != 'im')
		{
			return;
		}

		$this->tpl_name = 'acp_im';
		$this->page_title = 'ACP_IM_SETTINGS';

		$enable_gg			= request_var('enable_gg', $config['enable_gg']);
		$enable_tlen			= request_var('enable_tlen', $config['enable_tlen']);
		$enable_skype			= request_var('enable_skype', $config['enable_skype']);
		$enable_msn			= request_var('enable_msn', $config['enable_msn']);
		$enable_icq			= request_var('enable_icq', $config['enable_icq']);
		$enable_yim			= request_var('enable_yim', $config['enable_yim']);
		$enable_aim			= request_var('enable_aim', $config['enable_aim']);
		$enable_jabber			= request_var('enable_jabber', $config['enable_jabber']);
		
		$form_name = 'acp_im';
		add_form_key($form_name);

		if ($submit)
		{
			if (!check_form_key($form_name))
			{
				trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
			}

			$error = array();

			$message = $user->lang['IM_SETTINGS_CHANGED'];
			$log = 'IM_SETTINGS_CHANGED';

			set_config('enable_gg', $enable_gg);
			set_config('enable_tlen', $enable_tlen);
			set_config('enable_skype', $enable_skype);
			set_config('enable_msn', $enable_msn);
			set_config('enable_icq', $enable_icq);
			set_config('enable_yim', $enable_yim);
			set_config('enable_aim', $enable_aim);
			set_config('enable_jabber', $enable_jabber);															

			add_log('admin', 'LOG_' . $log);
			trigger_error($message . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'ENABLE_GG'				=> $enable_gg,
			'ENABLE_TLEN'				=> $enable_tlen,
			'ENABLE_SKYPE'				=> $enable_skype,
			'ENABLE_MSN'				=> $enable_msn,
			'ENABLE_ICQ'				=> $enable_icq,
			'ENABLE_YIM'				=> $enable_yim,
			'ENABLE_AIM'				=> $enable_aim,
			'ENABLE_JABBER'				=> $enable_jabber,
		));
	}
}

?>
