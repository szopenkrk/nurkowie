<?php exit; ?>
1375888392
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 14
730
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"14";s:10:"bbcode_tag";s:7:"youtube";s:15:"bbcode_helpline";s:0:"";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:31:"[youtube]{SIMPLETEXT}[/youtube]";s:10:"bbcode_tpl";s:122:"<iframe width="420" height="345" src="http://www.youtube.com/embed/{SIMPLETEXT}" frameborder="0" allowfullscreen></iframe>";s:16:"first_pass_match";s:46:"!\[youtube\]([a-zA-Z0-9-+.,_ ]+)\[/youtube\]!i";s:18:"first_pass_replace";s:33:"[youtube:$uid]${1}[/youtube:$uid]";s:17:"second_pass_match";s:56:"!\[youtube:$uid\]([a-zA-Z0-9-+.,_ ]+)\[/youtube:$uid\]!s";s:19:"second_pass_replace";s:114:"<iframe width="420" height="345" src="http://www.youtube.com/embed/${1}" frameborder="0" allowfullscreen></iframe>";}}