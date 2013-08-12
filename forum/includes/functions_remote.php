<?php
/**
*
* @package phpBB3
* @version $Id$
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

function set_db($forum_location) {    //LPADLO ADD

 global $db, $db2, $dbLocal;

    if ($forum_location == 'R') {
      $db = $db2;
    } else {
      $db = $dbLocal;
    } 
    set_forumLocation($forum_location);
}

function set_all_config($forum_location) {    //LPADLO ADD
  set_db($forum_location);
  //set_user($forum_location);
  //set_auth($forum_location);
  //set_cache($forum_location);  
  set_forumLocation($forum_location);
  
}

function set_user($forum_location) {    //LPADLO ADD

 global $user, $userLocal, $userRemote;

    if ($forum_location == 'R') {
      $user = $userRemote;
    } else {
      $user = $userLocal;
    } 
    set_forumLocation($forum_location);
}

function set_auth($forum_location) {    //LPADLO ADD

 global $auth, $authLocal, $authRemote;

    if ($forum_location == 'R') {
      $auth = $authRemote;
    } else {
      $auth = $authLocal;
    }
    set_forumLocation($forum_location); 
}

function set_cache($forum_location) {    //LPADLO ADD

 global $cache, $cacheLocal, $cacheRemote;

    if ($forum_location == 'R') {
      $cache = $cacheRemote;
    } else {
      $cache = $cacheLocal;
    } 
    set_forumLocation($forum_location);
}

function set_forumLocation($forum_location) {    //LPADLO ADD
    if ($forum_location != 'R' && $forum_location != 'R') {
      $forum_location = 'L';  
    } 
}


function getRemoteForumLocation() {
  global $forum_location;
  if ($forum_location = 'R') {
    return array($forum_rows, $subforums, $forum_id_max);
  }

}

function logString($text) {
  $ourFileName = "d:/forumLog.txt";
  /*
  $ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
  fwrite($ourFileHandle, $text . "\n");   
  fclose($ourFileHandle);
  */
   $text = $text . "\r\n";
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($ourFileName, $text, FILE_APPEND | LOCK_EX);
}

?>