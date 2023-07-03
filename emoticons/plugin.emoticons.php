<?php
/*
 * Plugin Name: Emoticons
 * Version: 1.0.1
 * Plugin URI: http://www.flatpress.org/
 * Description: Adds emoticons when surrounded by spaces or at the end of a line. See <a href="./fp-plugins/emoticons/doc_emoticons.txt" title="Anleitung" target="_blank">[Instructions]</a>
 * Author: Fraenkiman
 * Author URI: https://frank-web.dedyn.io
 * License:		The Google font "Noto Emoji" and its derivatives are licensed under the SIL Open Font License (OFL).
 *				This plugin can be used under the GNU General Public License v2.0.
 * Changelog:	Fixed path for DOC (thx on Arvid @azett),
 * 				Added google moto emoticons,
 * 				Put an emoticon at the end of a line if no space follows (thx on Arvid @azett)
 * Last change: 	02.10.2022
 */ 

define('EMOTICONS_DIR', BLOG_BASEURL . PLUGINS_DIR . 'emoticons/img/');

function plugin_emoticons_filter ($emostring) {
	static $EMOTICONS = array(
	
		//'[]'	=> '',
	
		'^^'	=> '1F600.png',
		'^-^'	=> '1F600.png',
		'^.^'	=> '1F600.png',
		'1F600'	=> '1F600.png',
		':mrgreen:'	=> '1F600.png',
		':grinning:'	=> '1F600.png',

		':d'	=> '1F603.png',
		'1F603'	=> '1F603.png',
		':smiley:'	=> '1F603.png',
		':smile-big:'	=> '1F603.png',

		':-]'	=> '1F604.png',
		':]'	=> '1F604.png',
		'=)'	=> '1F604.png',
		'(='	=> '1F604.png',
		'=]'	=> '1F604.png',
		':>'	=> '1F604.png',
		':>;'	=> '1F604.png',
		'=>'	=> '1F604.png',
		'1F604'	=> '1F604.png',		
		':smile:'	=> '1F604.png',


		'1F601'	=> '1F601.png',
		':grin:'	=> '1F601.png',

		'1F606'	=> '1F606.png',
		':satisfied:'	=> '1F606.png',
		':laughing:'	=> '1F606.png',

		':‘-)'	=> '1F605.png',
		'1F605'	=> '1F605.png',
		':sweat_smile:'	=> '1F605.png',

		'XD'	=> '1F923.png',
		'xD'	=> '1F923.png',
		'1F923'	=> '1F923.png',
		':rofl:'	=> '1F923.png',

		':D'	=> '1F602.png',
		':-D'	=> '1F602.png',
		':°D'	=> '1F602.png',
		'=D'	=> '1F602.png',
		'8D'	=> '1F602.png',
		'BD'	=> '1F602.png',
		'x3'	=> '1F602.png',
		'X3'	=> '1F602.png',
		':-))'	=> '1F602.png',
		':))'	=> '1F602.png',
		'1F602'	=> '1F602.png',
		':joy:'	=> '1F602.png',
		':lol:'	=> '1F602.png',

		':)'	=> '1F642.png',
		':-)'	=> '1F642.png',
		'(-:'	=> '1F642.png',
		'1F642'	=> '1F642.png',
		':slight_smile:'	=> '1F642.png',

		'1F643'	=> '1F643.png',
		':upside_down:'	=> '1F643.png',

		';)'	=> '1F609.png',
		';-)'	=> '1F609.png',
		';-]'	=> '1F609.png',
		'M]'	=> '1F609.png',
		';->'	=> '1F609.png',
		';>'	=> '1F609.png',
		'^_~'	=> '1F609.png',
		'1F609'	=> '1F609.png',
		':wink:'	=> '1F609.png',

		'1F60A'	=> '1F60A.png',
		':blush:'	=> '1F60A.png',

		'o:)'	=> '1F607.png',
		'O:)'	=> '1F607.png',
		'0:-)'	=> '1F607.png',
		'o:-)'	=> '1F607.png',
		'1F607'	=> '1F607.png',
		':innocent:'	=> '1F607.png',
		':angel:'	=> '1F607.png',

		'C:'	=> '1F970.png',
		'1F970'	=> '1F970.png',
		':smiling_face_with_3_hearts:'	=> '1F970.png',

		'<3'	=> '1F60D.png',
		'1F60D'	=> '1F60D.png',
		':heart_eyes:'	=> '1F60D.png',
		':love:'	=> '1F60D.png',

		'@-)'	=> '1F929.png',
		'*_*'	=> '1F929.png',
		'1F929'	=> '1F929.png',
		':star_struck:'	=> '1F929.png',

		';*'	=> '1F618.png',
		':-*'	=> '1F618.png',
		':*'	=> '1F618.png',
		'1F618'	=> '1F618.png',
		':kissing_heart:'	=> '1F618.png',

		'1F617'	=> '1F617.png',
		':kissing:'	=> '1F617.png',

		':c)'	=> '263A.png',
		'x)'	=> '263A.png',
		'263A'	=> '263A.png',
		':relaxed:'	=> '263A.png',

		'1F61A'	=> '1F61A.png',
		':kissing_closed_eyes:'	=> '1F61A.png',

		'1F619'	=> '1F619.png',
		':kissing_smiling_eyes:'	=> '1F619.png',

		'q_q'	=> '1F972.png',
		'1F972'	=> '1F972.png',
		':grateful:'	=> '1F972.png',

		'1F60B'	=> '1F60B.png',
		':yum:'	=> '1F60B.png',

		':p'	=> '1F61B.png',
		';P'	=> '1F61B.png',
		':P'	=> '1F61B.png',
		';-P'	=> '1F61B.png',
		':-P'	=> '1F61B.png',
		':-p'	=> '1F61B.png',
		'1F61B'	=> '1F61B.png',
		':stuck_out_tongue:'	=> '1F61B.png',
		':naughty:'	=> '1F61B.png',

		'1F61C'	=> '1F61C.png',
		':stuck_out_tongue_winking_eye:'	=> '1F61C.png',

		'1F92A'	=> '1F92A.png',
		':zany_face:'	=> '1F92A.png',
		':zany:'	=> '1F92A.png',

		'1F61D'	=> '1F61D.png',
		':stuck_out_tongue_closed_eyes:'	=> '1F61D.png',

		'($)_($)'	=> '1F911.png',
		'1F911'	=> '1F911.png',
		':money_mouth_face:'	=> '1F911.png',
		':money_mouth:'	=> '1F911.png',

		'1F917'	=> '1F917.png',
		':smiling_face_with_open_hands:'	=> '1F917.png',
		':hugging:'	=> '1F917.png',
		':hugs:'	=> '1F917.png',

		'1F92D'	=> '1F92D.png',
		':face_with_hand_over_mouth:'	=> '1F92D.png',
		':hand_over_mouth:'	=> '1F92D.png',

		'1FAE2'	=> '1FAE2.png',
		':face_with_open_eyes_and_hand_over_mouth:'	=> '1FAE2.png',

		'1FAE3'	=> '1FAE3.png',
		':face_with_peeking_eye:'	=> '1FAE3.png',
		':peeking_eye:'	=> '1FAE3.png',

		'1F92B'	=> '1F92B.png',
		':shushing_face:'	=> '1F92B.png',
		':shushing:'	=> '1F92B.png',

		'%-('	=> '1F914.png',
		':-/'	=> '1F914.png',
		'ò_ó'	=> '1F914.png',
		'1F914'	=> '1F914.png',
		':thinking:'	=> '1F914.png',

		'1FAE1'	=> '1FAE1.png',
		':saluting_face:'	=> '1FAE1.png',
		':saluting:'	=> '1FAE1.png',

		':-x'	=> '1F910.png',
		':-X'	=> '1F910.png',
		'1F910'	=> '1F910.png',
		':zipper_mouth:'	=> '1F910.png',
		':zipper:'	=> '1F910.png',

		'o_O'	=> '1F928.png',
		'ó_O'	=> '1F928.png',
		'1F928'	=> '1F928.png',
		':face_with_raised_eyebrow:'	=> '1F928.png',
		':raised_eyebrow:'	=> '1F928.png',

		':|'	=> '1F610.png',
		':-|'	=> '1F610.png',
		'-.-'	=> '1F610.png',
		'1F610'	=> '1F610.png',
		':plain:'	=> '1F610.png',
		':neutral:'	=> '1F610.png',
		':neutral_face:'	=> '1F610.png',

		'1F611'	=> '1F611.png',
		':expressionless:'	=> '1F611.png',

		'1F636'	=> '1F636.png',
		':no_mouth:'	=> '1F636.png',

		':=>'	=> '1F60F.png',
		':->'	=> '1F60F.png',
		'W.W'	=> '1F60F.png',
		'w.w'	=> '1F60F.png',
		'ù.ù'	=> '1F60F.png',
		'ù_ù'	=> '1F60F.png',
		'U_U'	=> '1F60F.png',
		'u_u'	=> '1F60F.png',
		'v.v'	=> '1F60F.png',
		'V_V'	=> '1F60F.png',
		'V.V'	=> '1F60F.png',
		'v_v'	=> '1F60F.png',
		'u.u'	=> '1F60F.png',
		'U.U'	=> '1F60F.png',
		'1F60F'	=> '1F60F.png',
		':smug:'	=> '1F60F.png',
		':smirk:'	=> '1F60F.png',

		'1F612'	=> '1F612.png',
		':unamused:'	=> '1F612.png',

		'1F644'	=> '1F644.png',
		':face_with_rolling_eyes:'	=> '1F644.png',
		':rolling_eyes:'	=> '1F644.png',

		'1F62C'	=> '1F62C.png',
		':grimacing:'	=> '1F62C.png',

		'1F4A8'	=> '1F4A8.png',
		':exhaling:'	=> '1F4A8.png',

		'1F925'	=> '1F925.png',
		':lying:'	=> '1F925.png',

		'1F60C'	=> '1F60C.png',
		':relieved:'	=> '1F60C.png',

		'^_^'	=> '1F614.png',
		'._.'	=> '1F614.png',
		'1F614'	=> '1F614.png',
		':pensive:'	=> '1F614.png',

		'_T'	=> '1F62A.png',
		'1F62A'	=> '1F62A.png',
		':sleepy:'	=> '1F62A.png',

		':p~~~~~~'	=> '1F924.png',
		'1F924'	=> '1F924.png',
		':drooling:'	=> '1F924.png',

		'|-I'	=> '1F634.png',
		'1F634'	=> '1F634.png',
		':sleeping:'	=> '1F634.png',

		'1F637'	=> '1F637.png',
		':mask:'	=> '1F637.png',

		':$'	=> '1F912.png',
		'(:-$'	=> '1F912.png',
		'1F912'	=> '1F912.png',
		':thermometer_face:'	=> '1F912.png',

		'1F915'	=> '1F915.png',
		':head_bandage:'	=> '1F915.png',

		'X_X'	=> '1F922.png',
		'#_#'	=> '1F922.png',
		'x_X'	=> '1F922.png',
		'X_x'	=> '1F922.png',
		'x_x'	=> '1F922.png',
		'X.X'	=> '1F922.png',
		'x.X'	=> '1F922.png',
		'X.x'	=> '1F922.png',
		'x.x'	=> '1F922.png',
		'~_~'	=> '1F922.png',
		'1F922'	=> '1F922.png',
		':sick:'	=> '1F922.png',
		':nauseated:'	=> '1F922.png',
		':nauseated_face:'	=> '1F922.png',

		'-_-'	=> '1F92E.png',
		'-__-'	=> '1F92E.png',
		':- (*)'	=> '1F92E.png',
		'1F92E'	=> '1F92E.png',
		':face_vomiting:'	=> '1F92E.png',
		':vomiting:'	=> '1F92E.png',
		':throwup:'	=> '1F92E.png',

		'1F927'	=> '1F927.png',
		':sneezing_face:'	=> '1F927.png',
		':sneezing:'	=> '1F927.png',

		'1F975'	=> '1F975.png',
		':hot_face:'	=> '1F975.png',
		':hot:'	=> '1F975.png',

		'1F976'	=> '1F976.png',
		':cold_face:'	=> '1F976.png',
		':cold:'	=> '1F976.png',

		'#-)'	=> '1F974.png',
		'+_°'	=> '1F974.png',
		'1F974'	=> '1F974.png',
		':woozy_face:'	=> '1F974.png',
		':woozy:'	=> '1F974.png',

		'+.+'	=> '1F635.png',
		'1F635'	=> '1F635.png',
		':dizzy_face:'	=> '1F635.png',
		':dizzy:'	=> '1F635.png',

		'#:-)'	=> '1F92F.png',
		':-(('	=> '1F92F.png',
		':(('	=> '1F92F.png',
		'=(('	=> '1F92F.png',
		'1F92F'	=> '1F92F.png',
		':exploding_head:'	=> '1F92F.png',
		':depressed:'	=> '1F92F.png',

		'1F4AB'	=> '1F4AB.png',
		':spiral_eyes:'	=> '1F4AB.png',

		'1F920'	=> '1F920.png',
		':cowboy:'	=> '1F920.png',

		'(O'	=> '1F973.png',
		'(o'	=> '1F973.png',
		'1F973'	=> '1F973.png',
		':partying_face:'	=> '1F973.png',
		':party:'	=> '1F973.png',

		'1F978'	=> '1F978.png',
		':disguised_face:'	=> '1F978.png',
		':disguised:'	=> '1F978.png',

		'8)'	=> '1F60E.png',
		'B-)'	=> '1F60E.png',
		'1F60E'	=> '1F60E.png',
		':sunglasses:'	=> '1F60E.png',

		'<:-)'	=> '1F913.png',
		'1F913'	=> '1F913.png',
		':nerd:'	=> '1F913.png',

		'1F9D0'	=> '1F9D0.png',
		':face_with_monocle:'	=> '1F9D0.png',
		':monocle:'	=> '1F9D0.png',

		'@_@'	=> '1F615.png',
		'1F615'	=> '1F615.png',
		':confused:'	=> '1F604.png',

		'1FAE4'	=> '1FAE4.png',
		':diagonal_mouth:'	=> '1FAE4.png',

		'1F61F'	=> '1F61F.png',
		':worried:'	=> '1F61F.png',

		':('	=> '1F641.png',
		':-('	=> '1F641.png',
		')-:'	=> '1F641.png',
		':o('	=> '1F641.png',
		'1F641'	=> '1F641.png',
		':slight_frown:'	=> '1F641.png',

		'2639'	=> '2639.png',
		':frowning2:'	=> '2639.png',

		'1F62E'	=> '1F62E.png',
		':open_mouth:'	=> '1F62E.png',

		'1F62F'	=> '1F62F.png',
		':hushed:'	=> '1F62F.png',

		// ':O'	=> '1F632.png',
		':-O'	=> '1F632.png',
		'=O'	=> '1F632.png',
		// ':o'	=> '1F632.png',
		':-o'	=> '1F632.png',
		';o'	=> '1F632.png',
		';-o'	=> '1F632.png',
		'1F632'	=> '1F632.png',
		':surprised:'	=> '1F632.png',
		':astonished:'	=> '1F632.png',

		'(o)_(o)'	=> '1F633.png',
		'1F633'	=> '1F633.png',
		':flushed:'	=> '1F633.png',

		'1F97A'	=> '1F97A.png',
		':pleading_face:'	=> '1F97A.png',
		':pleading:'	=> '1F97A.png',

		'1F979'	=> '1F979.png',
		':face_holding_back_tears:'	=> '1F979.png',

		'1F626'	=> '1F626.png',
		':frowning:'	=> '1F626.png',

		'1F627'	=> '1F627.png',
		':anguished:'	=> '1F627.png',

		'1F628'	=> '1F628.png',
		':fearful:'	=> '1F628.png',

		'1F630'	=> '1F630.png',
		':cold_sweat:'	=> '1F630.png',

		':-['	=> '1F625.png',
		':['	=> '1F625.png',
		']:'	=> '1F625.png',
		'=('	=> '1F625.png',
		'=['	=> '1F625.png',
		':-<'	=> '1F625.png',
		':<'	=> '1F625.png',
		':<;'	=> '1F625.png',
		'=<'	=> '1F625.png',
		'1F625'	=> '1F625.png',
		':sad:'	=> '1F625.png',
		':disappointed_relieved:'	=> '1F625.png',

		';('	=> '1F622.png',
		';-('	=> '1F622.png',
		':‘-('	=> '1F622.png',
		'1F622'	=> '1F622.png',
		':cry:'	=> '1F622.png',

		':.-(...'	=> '1F62D.png',
		':c'	=> '1F62D.png',
		':-c'	=> '1F62D.png',
		';_;'	=> '1F62D.png',
		'1F62D'	=> '1F62D.png',
		':emotional:'	=> '1F62D.png',
		':sob:'	=> '1F62D.png',

		'1F631'	=> '1F631.png',
		':scream:'	=> '1F631.png',

		'1F616'	=> '1F616.png',
		':confounded:'	=> '1F616.png',

		'x('	=> '1F623.png',
		'1F623'	=> '1F623.png',
		':persevere:'	=> '1F623.png',

		':/'	=> '1F61E.png',
		'1F61E'	=> '1F61E.png',
		':disappointed:'	=> '1F61E.png',

		'?_?'	=> '1F613.png',
		':-S'	=> '1F613.png',
		':S'	=> '1F613.png',
		'=S'	=> '1F613.png',
		'1F613'	=> '1F613.png',
		':sweat:'	=> '1F613.png',
		':downcast_with_sweat:'	=> '1F613.png',

		'1F629'	=> '1F629.png',
		':weary:'	=> '1F629.png',

		':()'	=> '1F62B.png',
		':-()'	=> '1F62B.png',
		'1F62B'	=> '1F62B.png',
		':tired_face:'	=> '1F62B.png',
		':tired:'	=> '1F62B.png',

		'%-/'	=> '1F971.png',
		'1F971'	=> '1F971.png',
		':yawning_face:'	=> '1F971.png',
		':yawning:'	=> '1F971.png',

		'1F624'	=> '1F624.png',
		':steam_from_nose:'	=> '1F624.png',
		':triumph:'	=> '1F624.png',

		'1F92C'	=> '1F92C.png',
		':face_with_symbols_over_mouth:'	=> '1F92C.png',
		':symbols_over_mouth:'	=> '1F92C.png',

		'>:-o'	=> '1F621.png',
		')O'	=> '1F621.png',
		'(:-&'	=> '1F621.png',
		'1F621'	=> '1F621.png',
		':rage:'	=> '1F621.png',

		'>:-@'	=> '1F620.png',
		'>:@'	=> '1F620.png',
		'>:('	=> '1F620.png',
		'>_<'	=> '1F620.png',
		'è_é'	=> '1F620.png',
		'X-('	=> '1F620.png',
		'X-C'	=> '1F620.png',
		'X-/'	=> '1F620.png',
		':angry:'	=> '1F620.png',

		'1F608'	=> '1F608.png',
		':smiling_imp:'	=> '1F608.png',

		'1F47F'	=> '1F47F.png',
		':imp:'	=> '1F47F.png',

		'1F480'	=> '1F480.png',
		':skull:'	=> '1F480.png',

		'2620'	=> '2620.png',
		':skull_crossbones:'	=> '2620.png',

		'1F4A9'	=> '1F4A9.png',
		':poop:'	=> '1F4A9.png',
		':hankey:'	=> '1F4A9.png',
		':shit:'	=> '1F4A9.png',

		'1F921'	=> '1F921.png',
		':clown:'	=> '1F921.png',

		'>:-)'	=> '1F479.png',
		'3:D'	=> '1F479.png',
		'3:)'	=> '1F479.png',
		'>:)'	=> '1F479.png',
		'1F479'	=> '1F479.png',
		':japanese_ogre:'	=> '1F479.png',

		'1F47A'	=> '1F47A.png',
		':japanese_goblin:'	=> '1F47A.png',

		'1F47B'	=> '1F47B.png',
		':ghost:'	=> '1F47B.png',

		'1F47D'	=> '1F47D.png',
		':alien:'	=> '1F47D.png',

		'1F47E'	=> '1F47E.png',
		':space_invader:'	=> '1F47E.png',

		'[:-]'	=> '1F916.png',
		'1F916'	=> '1F916.png',
		':robot:'	=> '1F916.png',

		'1F648'	=> '1F648.png',
		':see_no_evil:'	=> '1F648.png',

		':@'	=> '1F649.png',
		':-@'	=> '1F649.png',
		'1F649'	=> '1F649.png',
		':hear_no_evil:'	=> '1F649.png',
		':monkey:'	=> '1F649.png',
		':ape:'	=> '1F649.png',

		'1F64A'	=> '1F64A.png',
		':speak_no_evil:'	=> '1F64A.png',

		'1F48C'	=> '1F48C.png',
		':love_letter:'	=> '1F48C.png',

		'1F498'	=> '1F498.png',
		':heart_with_arrow:'	=> '1F498.png',

		'1F49D'	=> '1F49D.png',
		':heart_with_ribbon:'	=> '1F49D.png',

		'1F496'	=> '1F496.png',
		':sparkling_heart:'	=> '1F496.png',

		'1F497'	=> '1F497.png',
		':growing_heart:'	=> '1F497.png',

		'1F493'	=> '1F493.png',
		':beating_heart:'	=> '1F493.png',

		'1F49E'	=> '1F49E.png',
		':revolving_hearts:'	=> '1F49E.png',

		'1F495'	=> '1F495.png',
		':two_hearts:'	=> '1F495.png',

		'1F49F'	=> '1F49F.png',
		':heart_decoration:'	=> '1F49F.png',

		'2763'	=> '2763.png',
		':heart_exclamation:'	=> '2763.png',

		'1F494'	=> '1F494.png',
		':broken_heart:'	=> '1F494.png',

		'FE0F'	=> 'FE0F.png',
		':heart_on_fire:'	=> 'FE0F.png',

		'2764'	=> '2764.png',
		':red_heart:'	=> '2764.png',

		'1F9E1'	=> '1F9E1.png',
		':orange_heart:'	=> '1F9E1.png',

		'1F49B'	=> '1F49B.png',
		':yellow_heart:'	=> '1F49B.png',

		'1F49A'	=> '1F49A.png',
		':green_heart:'	=> '1F49A.png',

		'1F499'	=> '1F499.png',
		':blue_heart:'	=> '1F499.png',

		'1F49C'	=> '1F49C.png',
		':purple_heart:'	=> '1F49C.png',

		'1F90E'	=> '1F90E.png',
		':brown_heart:'	=> '1F90E.png',

		'1F5A4'	=> '1F5A4.png',
		':black_heart:'	=> '1F5A4.png',

		'1F90D'	=> '1F90D.png',
		':white heart:'	=> '1F90D.png',

		'1F48B'	=> '1F48B.png',
		':kiss:'	=> '1F48B.png',

		':100:'	=> '1F4AF.png',
		'1F4AF'	=> '1F4AF.png',
		':hundred_points:'	=> '1F4AF.png',

		'1F4A2'	=> '1F4A2.png',
		':anger:'	=> '1F4A2.png',

		'1F4A5'	=> '1F4A5.png',
		':boom:'	=> '1F4A5.png',
		':collision:'	=> '1F4A5.png',

		'1F4A6'	=> '1F4A6.png',
		':sweat_drops:'	=> '1F4A6.png',

		'1F573'	=> '1F573.png',
		':hole:'	=> '1F573.png',

		'1F4AC'	=> '1F4AC.png',
		':speech_balloon:'	=> '1F4AC.png',

		'1F5EF'	=> '1F5EF.png',
		':anger_bubble:'	=> '1F5EF.png',

		'1F4AD'	=> '1F4AD.png',
		':thought_balloon:'	=> '1F4AD.png',

		'1F4A4'	=> '1F4A4.png',
		':zzz:'	=> '1F4A4.png',

		'1F44B'	=> '1F44B.png',
		':wave:'	=> '1F44B.png',

		'1F91A'	=> '1F91A.png',
		':raised_back_of_hand:'	=> '1F91A.png',

		'1F590'	=> '1F590.png',
		':hand_with_fingers_splayed:'	=> '1F590.png',

		'270B'	=> '270B.png',
		':hand:'	=> '270B.png',
		':raised_hand:'	=> '270B.png',

		'1F596'	=> '1F596.png',
		':vulcan_salute:'	=> '1F596.png',

		'1F44C'	=> '1F44C.png',
		':ok_hand:'	=> '1F44C.png',

		'1F90C'	=> '1F90C.png',
		':pinched_fingers:'	=> '1F90C.png',

		'1F90F'	=> '1F90F.png',
		':pinching_hand:'	=> '1F90F.png',

		':v:'	=> '270C.png',
		'270C'	=> '270C.png',
		':victory_hand:'	=> '270C.png',

		'1F91E'	=> '1F91E.png',
		':crossed_fingers:'	=> '1F91E.png',

		'1F91F'	=> '1F91F.png',
		':love_you_gesture:'	=> '1F91F.png',

		'1F918'	=> '1F918.png',
		':sign_of_the_horns:'	=> '1F918.png',
		':metal:'	=> '1F918.png',

		'1F919'	=> '1F919.png',
		':call_me_hand:'	=> '1F919.png',
		':call_me:'	=> '1F919.png',

		'1F448'	=> '1F448.png',
		':backhand_index_pointing_left:'	=> '1F448.png',
		':point_left:'	=> '1F448.png',

		'1F449'	=> '1F449.png',
		':backhand_index_pointing_right:'	=> '1F449.png',
		':point_right:'	=> '1F449.png',

		'1F446'	=> '1F446.png',
		':point_up_2:'	=> '1F446.png',
		':backhand_index_pointing_up:'	=> '1F446.png',

		'1F595'	=> '1F595.png',
		':middle_finger:'	=> '1F595.png',
		':fu:'	=> '1F595.png',

		'1F447'	=> '1F447.png',
		':backhand_index_pointing_down:'	=> '1F447.png',
		':point_down:'	=> '1F447.png',

		'261D'	=> '261D.png',
		':point_up:'	=> '261D.png',
		':index_pointing_up:'	=> '261D.png',

		':+1:'	=> '1F44D.png',
		'(y)'	=> '1F44D.png',
		'1F44D'	=> '1F44D.png',
		':thumbsup:'	=> '1F44D.png',
		':thumbs_up:'	=> '1F44D.png',

		':-1:'	=> '1F44E.png',
		'(n)'	=> '1F44E.png',
		'1F44E'	=> '1F44E.png',
		':fist:'	=> '1F44E.png',
		':raised_fist:'	=> '1F44E.png',
		':thumbsdown:'	=> '1F44E.png',

		'1F44A'	=> '1F44A.png',
		':facepunch:'	=> '1F44A.png',
		':oncoming_fist:'	=> '1F44A.png',
		':punch:'	=> '1F44A.png',

		'1F91B'	=> '1F91B.png',
		':left_facing_fist:'	=> '1F91B.png',

		'1F91C'	=> '1F91C.png',
		':right_facing_fist:'	=> '1F91C.png',

		'1F44F'	=> '1F44F.png',
		':clap:'	=> '1F44F.png',
		':clapping_hands:'	=> '1F44F.png',

		'1F64C'	=> '1F64C.png',
		':raised_hands:'	=> '1F64C.png',
		':raising_hands:'	=> '1F64C.png',

		'1F450'	=> '1F450.png',
		':open_hands:'	=> '1F450.png',

		'1F932'	=> '1F932.png',
		':palms_up_together:'	=> '1F932.png',

		'1F91D'	=> '1F91D.png',
		':handshake:'	=> '1F91D.png',

		'1F64F'	=> '1F64F.png',
		':pray:'	=> '1F64F.png',
		':folded_hands:'	=> '1F64F.png',

		'270D'	=> '270D.png',
		':writing_hand:'	=> '270D.png',

		'1F485'	=> '1F485.png',
		':nail_care:'	=> '1F485.png',
		':nail_polish:'	=> '1F485.png',

		'1F933'	=> '1F933.png',
		':selfie:'	=> '1F933.png',

		'1F4AA'	=> '1F4AA.png',
		':muscle:'	=> '1F4AA.png',
		':flexed_biceps:'	=> '1F4AA.png',

		'1F9BE'	=> '1F9BE.png',
		':mechanical_arm:'	=> '1F9BE.png',

		'1F9BF'	=> '1F9BF.png',
		':mechanical_leg:'	=> '1F9BF.png',

		'1F9B5'	=> '1F9B5.png',
		':leg:'	=> '1F9B5.png',

		'1F9B6'	=> '1F9B6.png',
		':foot:'	=> '1F9B6.png',

		'1F442'	=> '1F442.png',
		':ear:'	=> '1F442.png',

		'1F9BB'	=> '1F9BB.png',
		':ear_with_hearing_aid:'	=> '1F9BB.png',

		'1F443'	=> '1F443.png',
		':nose:'	=> '1F443.png',

		'1F9E0'	=> '1F9E0.png',
		':brain:'	=> '1F9E0.png',

		'1FAC0'	=> '1FAC0.png',
		':anatomical_heart:'	=> '1FAC0.png',

		'1FAC1'	=> '1FAC1.png',
		':lungs:'	=> '1FAC1.png',

		'1F9B7'	=> '1F9B7.png',
		':tooth:'	=> '1F9B7.png',

		'1F9B4'	=> '1F9B4.png',
		':bone:'	=> '1F9B4.png',

		'1F440'	=> '1F440.png',
		':eyes:'	=> '1F440.png',

		'1F441'	=> '1F441.png',
		':eye:'	=> '1F441.png',

		'=P'	=> '1F445.png',
		'=p'	=> '1F445.png',
		'xP'	=> '1F445.png',
		'1F445'	=> '1F445.png',
		':razz:'	=> '1F445.png',
		':oops:'	=> '1F445.png',
		':tongue:'	=> '1F445.png',

		'1F444'	=> '1F444.png',
		':mouth:'	=> '1F444.png',

		'1F476'	=> '1F476.png',
		':baby:'	=> '1F476.png',

		'1F9D2'	=> '1F9D2.png',
		':child:'	=> '1F9D2.png',

		'1F466'	=> '1F466.png',
		':boy:'	=> '1F466.png',

		'1F467'	=> '1F467.png',
		':girl:'	=> '1F467.png',

		'1F9D1'	=> '1F9D1.png',
		':person:'	=> '1F9D1.png',

		'1F471'	=> '1F471.png',
		':person_with_blond_hair:'	=> '1F471.png',

		'1F468'	=> '1F468.png',
		':man:'	=> '1F468.png',

		'1F9D4'	=> '1F9D4.png',
		':person_with_beard:'	=> '1F9D4.png',
		':bearded_person:'	=> '1F9D4.png',

		'1F469'	=> '1F469.png',
		':woman:'	=> '1F469.png',

		'1F9D3'	=> '1F9D3.png',
		':older_person:'	=> '1F9D3.png',
		':older_adult:'	=> '1F9D3.png',

		'1F474'	=> '1F474.png',
		':old_man:'	=> '1F474.png',

		'1F475'	=> '1F475.png',
		':old_woman:'	=> '1F475.png',

		'1F64D'	=> '1F64D.png',
		':person_frowning:'	=> '1F64D.png',

		'1F64E'	=> '1F64E.png',
		':person_pouting:'	=> '1F64E.png',

		'1F645'	=> '1F645.png',
		':person_gesturing_NO:'	=> '1F645.png',
		':no_good:'	=> '1F645.png',

		'1F646'	=> '1F646.png',
		':ok_woman:'	=> '1F646.png',
		':person_gesturing_OK:'	=> '1F646.png',

		'1F481'	=> '1F481.png',
		':information_desk_person:'	=> '1F481.png',
		':person_tipping_hand:'	=> '1F481.png',

		'1F64B'	=> '1F64B.png',
		':person_raising_hand:'	=> '1F64B.png',
		':raising_hand:'	=> '1F64B.png',

		'1F9CF'	=> '1F9CF.png',
		':deaf_person:'	=> '1F9CF.png',

		'1F647'	=> '1F647.png',
		':person_bowing:'	=> '1F647.png',
		':bow:'	=> '1F647.png',

		'1F926'	=> '1F926.png',
		':person_facepalming:'	=> '1F926.png',

		'1F937'	=> '1F937.png',
		':person_shrugging:'	=> '1F937.png',

		'1F46E'	=> '1F46E.png',
		':police_officer:'	=> '1F46E.png',
		':cop:'	=> '1F46E.png',

		'1F575'	=> '1F575.png',
		':detective:'	=> '1F575.png',

		'1F482'	=> '1F482.png',
		':guard:'	=> '1F482.png',
		':guardsman:'	=> '1F482.png',

		'1F977'	=> '1F977.png',
		':ninja:'	=> '1F977.png',

		'1F477'	=> '1F477.png',
		':construction_worker:'	=> '1F477.png',

		'1F934'	=> '1F934.png',
		':prince:'	=> '1F934.png',

		'1F478'	=> '1F478.png',
		':princess:'	=> '1F478.png',

		'1F473'	=> '1F473.png',
		':person_wearing_turban:'	=> '1F473.png',
		':man_with_turban:'	=> '1F473.png',

		'1F472'	=> '1F472.png',
		':person_with_skullcap:'	=> '1F472.png',
		':man_with_gua_pi_mao:'	=> '1F472.png',

		'1F9D5'	=> '1F9D5.png',
		':woman_with_headscarf:'	=> '1F9D5.png',

		'1F935'	=> '1F935.png',
		':person_in_tuxedo:'	=> '1F935.png',

		'1F470'	=> '1F470.png',
		':bride_with_veil:'	=> '1F470.png',
		':person_with_veil:'	=> '1F470.png',

		'1F930'	=> '1F930.png',
		':pregnant_woman:'	=> '1F930.png',

		'1F931'	=> '1F931.png',
		':breast_feeding:'	=> '1F931.png',

		'1F47C'	=> '1F47C.png',
		':baby_angel:'	=> '1F47C.png',

		'1F385'	=> '1F385.png',
		':santa_claus:'	=> '1F385.png',
		':santa:'	=> '1F385.png',

		'1F936'	=> '1F936.png',
		':mrs_claus:'	=> '1F936.png',

		'1F9B8'	=> '1F9B8.png',
		':superhero:'	=> '1F9B8.png',

		'1F9B9'	=> '1F9B9.png',
		':supervillain:'	=> '1F9B9.png',

		'1F9D9'	=> '1F9D9.png',
		':mage:'	=> '1F9D9.png',

		'1F9DA'	=> '1F9DA.png',
		':fairy:'	=> '1F9DA.png',

		'1F9DB'	=> '1F9DB.png',
		':vampire:'	=> '1F9DB.png',

		'1F9DC'	=> '1F9DC.png',
		':merperson:'	=> '1F9DC.png',

		'1F9DD'	=> '1F9DD.png',
		':elf:'	=> '1F9DD.png',

		'1F9DE'	=> '1F9DE.png',
		':genie:'	=> '1F9DE.png',

		'1F9DF'	=> '1F9DF.png',
		':zombie:'	=> '1F9DF.png',

		'1F9D8'	=> '1F9D8.png',
		':person_in_lotus_position:'	=> '1F9D8.png',

		'1F6C0'	=> '1F6C0.png',
		':person_taking_bath:'	=> '1F6C0.png',
		':bath:'	=> '1F6C0.png',

		'1F6CC'	=> '1F6CC.png',
		':person_in_bed:'	=> '1F6CC.png',

		'1F331'	=> '1F331.png',
		':seedling:'	=> '1F331.png',

		'1FAB4'	=> '1FAB4.png',
		':potted_plant:'	=> '1FAB4.png',

		'1F332'	=> '1F332.png',
		':evergreen_tree:'	=> '1F332.png',

		'1F333'	=> '1F333.png',
		':deciduous_tree:'	=> '1F333.png',

		'1F334'	=> '1F334.png',
		':palm_tree:'	=> '1F334.png',

		'1F335'	=> '1F335.png',
		':cactus:'	=> '1F335.png',

		'1F33E'	=> '1F33E.png',
		':sheaf_of_rice:'	=> '1F33E.png',
		':ear_of_rice:'	=> '1F33E.png',

		'1F33F'	=> '1F33F.png',
		':herb:'	=> '1F33F.png',

		'2618'	=> '2618.png',
		':shamrock:'	=> '2618.png',

		'1F340'	=> '1F340.png',
		':four_leaf_clover:'	=> '1F340.png',

		'1F341'	=> '1F341.png',
		':maple_leaf:'	=> '1F341.png',

		'1F342'	=> '1F342.png',
		':fallen_leaf:'	=> '1F342.png',

		'1F343'	=> '1F343.png',
		':leaf_fluttering_in_wind:'	=> '1F343.png',

		'1F344'	=> '1F344.png',
		':mushroom:'	=> '1F344.png',

		'1F347'	=> '1F347.png',
		':grapes:'	=> '1F347.png',

		'1F348'	=> '1F348.png',
		':melon:'	=> '1F348.png',

		'1F349'	=> '1F349.png',
		':watermelon:'	=> '1F349.png',

		'1F34A'	=> '1F34A.png',
		':tangerine:'	=> '1F34A.png',

		'1F34B'	=> '1F34B.png',
		':lemon:'	=> '1F34B.png',

		'1F34C'	=> '1F34C.png',
		':banana:'	=> '1F34C.png',

		'1F34D'	=> '1F34D.png',
		':pineapple:'	=> '1F34D.png',

		'1F96D'	=> '1F96D.png',
		':mango:'	=> '1F96D.png',

		'1F34E'	=> '1F34E.png',
		':red_apple:'	=> '1F34E.png',

		'1F34F'	=> '1F34F.png',
		':green_apple:'	=> '1F34F.png',

		'1F350'	=> '1F350.png',
		':pear:'	=> '1F350.png',

		'1F351'	=> '1F351.png',
		':peach:'	=> '1F351.png',

		'1F352'	=> '1F352.png',
		':cherries:'	=> '1F352.png',

		'1F353'	=> '1F353.png',
		':strawberry:'	=> '1F353.png',

		'1FAD0'	=> '1FAD0.png',
		':blueberries:'	=> '1FAD0.png',

		'1F95D'	=> '1F95D.png',
		':kiwi_fruit:'	=> '1F95D.png',
		':kiwi:'	=> '1F95D.png',

		'1F345'	=> '1F345.png',
		':tomato:'	=> '1F345.png',

		'1FAD2'	=> '1FAD2.png',
		':olive:'	=> '1FAD2.png',

		'1F965'	=> '1F965.png',
		':coconut:'	=> '1F965.png',

		'1F951'	=> '1F951.png',
		':avocado:'	=> '1F951.png',

		'1F346'	=> '1F346.png',
		':eggplant:'	=> '1F346.png',

		'1F954'	=> '1F954.png',
		':potato:'	=> '1F954.png',

		'1F955'	=> '1F955.png',
		':carrot:'	=> '1F955.png',

		'1F33D'	=> '1F33D.png',
		':ear_of_corn:'	=> '1F33D.png',
		':corn:'	=> '1F33D.png',

		'1F336'	=> '1F336.png',
		':hot_pepper:'	=> '1F336.png',

		'1FAD1'	=> '1FAD1.png',
		':bell_pepper:'	=> '1FAD1.png',

		'1F952'	=> '1F952.png',
		':cucumber:'	=> '1F952.png',

		'1F96C'	=> '1F96C.png',
		':leafy_green:'	=> '1F96C.png',

		'1F966'	=> '1F966.png',
		':broccoli:'	=> '1F966.png',

		'1F9C4'	=> '1F9C4.png',
		':garlic:'	=> '1F9C4.png',

		'1F9C5'	=> '1F9C5.png',
		':onion:'	=> '1F9C5.png',

		'1F95C'	=> '1F95C.png',
		':peanuts:'	=> '1F95C.png',

		'1F330'	=> '1F330.png',
		':chestnut:'	=> '1F330.png',

		'1F35E'	=> '1F35E.png',
		':bread:'	=> '1F35E.png',

		'1F950'	=> '1F950.png',
		':croissant:'	=> '1F950.png',

		'1F956'	=> '1F956.png',
		':baguette_bread:'	=> '1F956.png',

		'1FAD3'	=> '1FAD3.png',
		':flatbread:'	=> '1FAD3.png',

		'1F968'	=> '1F968.png',
		':pretzel:'	=> '1F968.png',

		'1F96F'	=> '1F96F.png',
		':bagel:'	=> '1F96F.png',

		'1F95E'	=> '1F95E.png',
		':pancakes:'	=> '1F95E.png',

		'1F9C7'	=> '1F9C7.png',
		':waffle:'	=> '1F9C7.png',

		'1F9C0'	=> '1F9C0.png',
		':cheese_wedge:'	=> '1F9C0.png',

		'1F356'	=> '1F356.png',
		':meat_on_bone:'	=> '1F356.png',

		'1F357'	=> '1F357.png',
		':poultry_leg:'	=> '1F357.png',

		'1F969'	=> '1F969.png',
		':cut_of_meat:'	=> '1F969.png',

		'1F953'	=> '1F953.png',
		':bacon:'	=> '1F953.png',

		'1F354'	=> '1F354.png',
		':hamburger:'	=> '1F354.png',

		'1F35F'	=> '1F35F.png',
		':french_fries:'	=> '1F35F.png',

		'1F355'	=> '1F355.png',
		':pizza:'	=> '1F355.png',

		'1F32D'	=> '1F32D.png',
		':hot_dog:'	=> '1F32D.png',

		'1F96A'	=> '1F96A.png',
		':sandwich:'	=> '1F96A.png',

		'1F32E'	=> '1F32E.png',
		':taco:'	=> '1F32E.png',

		'1F32F'	=> '1F32F.png',
		':burrito:'	=> '1F32F.png',

		'1FAD4'	=> '1FAD4.png',
		':tamale:'	=> '1FAD4.png',

		'1F959'	=> '1F959.png',
		':stuffed_flatbread:'	=> '1F959.png',

		'1F9C6'	=> '1F9C6.png',
		':falafel:'	=> '1F9C6.png',

		'1F95A'	=> '1F95A.png',
		':egg:'	=> '1F95A.png',

		'1F373'	=> '1F373.png',
		':cooking:'	=> '1F373.png',

		'1F958'	=> '1F958.png',
		':shallow_pan_of_food:'	=> '1F958.png',

		'1F372'	=> '1F372.png',
		':pot_of_food:'	=> '1F372.png',

		'1FAD5'	=> '1FAD5.png',
		':fondue:'	=> '1FAD5.png',

		'1F963'	=> '1F963.png',
		':bowl_with_spoon:'	=> '1F963.png',

		'1F957'	=> '1F957.png',
		':green_salad:'	=> '1F957.png',

		'1F37F'	=> '1F37F.png',
		':popcorn:'	=> '1F37F.png',

		'1F9C8'	=> '1F9C8.png',
		':butter:'	=> '1F9C8.png',

		'1F9C2'	=> '1F9C2.png',
		':salt:'	=> '1F9C2.png',

		'1F96B'	=> '1F96B.png',
		':canned_food:'	=> '1F96B.png',

		'1F366'	=> '1F366.png',
		':soft_ice_cream:'	=> '1F366.png',

		'1F367'	=> '1F367.png',
		':shaved_ice:'	=> '1F367.png',

		'1F368'	=> '1F368.png',
		':ice_cream:'	=> '1F368.png',

		'1F369'	=> '1F369.png',
		':doughnut:'	=> '1F369.png',

		'1F36A'	=> '1F36A.png',
		':cookie:'	=> '1F36A.png',

		'1F382'	=> '1F382.png',
		':birthday_cake:'	=> '1F382.png',

		'1F370'	=> '1F370.png',
		':shortcake:'	=> '1F370.png',

		'1F9C1'	=> '1F9C1.png',
		':cupcake:'	=> '1F9C1.png',

		'1F967'	=> '1F967.png',
		':pie:'	=> '1F967.png',

		'1F36B'	=> '1F36B.png',
		':chocolate_bar:'	=> '1F36B.png',

		'1F36C'	=> '1F36C.png',
		':candy:'	=> '1F36C.png',

		'1F36D'	=> '1F36D.png',
		':lollipop:'	=> '1F36D.png',

		'1F36E'	=> '1F36E.png',
		':custard:'	=> '1F36E.png',

		'1F36F'	=> '1F36F.png',
		':honey_pot:'	=> '1F36F.png',

		'1F37C'	=> '1F37C.png',
		':baby_bottle:'	=> '1F37C.png',

		'1F95B'	=> '1F95B.png',
		':glass_of_milk:'	=> '1F95B.png',

		'2615'	=> '2615.png',
		':hot_beverage:'	=> '2615.png',

		'1FAD6'	=> '1FAD6.png',
		':teapot:'	=> '1FAD6.png',

		'1F375'	=> '1F375.png',
		':teacup_without_handle:'	=> '1F375.png',

		'1F376'	=> '1F376.png',
		':sake:'	=> '1F376.png',

		'1F37E'	=> '1F37E.png',
		':bottle_with_popping_cork:'	=> '1F37E.png',

		'1F377'	=> '1F377.png',
		':wine_glass:'	=> '1F377.png',

		'1F378'	=> '1F378.png',
		':cocktail_glass:'	=> '1F378.png',

		'1F379'	=> '1F379.png',
		':tropical_drink:'	=> '1F379.png',

		'1F37A'	=> '1F37A.png',
		':beer_mug:'	=> '1F37A.png',

		'1F37B'	=> '1F37B.png',
		':clinking beer mugs:'	=> '1F37B.png',

		'1F942'	=> '1F942.png',
		':clinking_glasses:'	=> '1F942.png',

		'1F943'	=> '1F943.png',
		':tumbler_glass:'	=> '1F943.png',

		'1F964'	=> '1F964.png',
		':cup_with_straw:'	=> '1F964.png',

		'1F9CB'	=> '1F9CB.png',
		':bubble_tea:'	=> '1F9CB.png',

		'1F9C3'	=> '1F9C3.png',
		':beverage_box:'	=> '1F9C3.png',

		'1F9C9'	=> '1F9C9.png',
		':mate:'	=> '1F9C9.png',

		'1F9CA'	=> '1F9CA.png',
		':ice:'	=> '1F9CA.png',

		'1F962'	=> '1F962.png',
		':chopsticks:'	=> '1F962.png',

		'1F37D'	=> '1F37D.png',
		':fork_and_knife_with_plate:'	=> '1F37D.png',

		'1F374'	=> '1F374.png',
		':fork and knife:'	=> '1F374.png',

		'1F944'	=> '1F944.png',
		':spoon:'	=> '1F944.png',

		'1F52A'	=> '1F52A.png',
		':kitchen_knife:'	=> '1F52A.png',
		':knife:'	=> '1F52A.png',
		':hocho:'	=> '1F52A.png',

		'1F3FA'	=> '1F3FA.png',
		':amphora:'	=> '1F3FA.png',

		'1F30D'	=> '1F30D.png',
		':globe_showing_europe_africa:'	=> '1F30D.png',
		':earth_africa:'	=> '1F30D.png',

		'1F30E'	=> '1F30E.png',
		':globe_showing_americas:'	=> '1F30E.png',
		':earth_americas:'	=> '1F30E.png',

		'1F30F'	=> '1F30F.png',
		':globe_showing_asia-australia:'	=> '1F30F.png',
		':earth_asia:'	=> '1F30F.png',

		'1F310'	=> '1F310.png',
		':globe_with_meridians:'	=> '1F310.png',

		'1F5FA'	=> '1F5FA.png',
		':world_map:'	=> '1F5FA.png',

		'1F5FE'	=> '1F5FE.png',
		':map_of_japan:'	=> '1F5FE.png',

		'1F9ED'	=> '1F9ED.png',
		':compass:'	=> '1F9ED.png',

		'1F3D4'	=> '1F3D4.png',
		':snow_capped_mountain:'	=> '1F3D4.png',

		'26F0'	=> '26F0.png',
		':mountain:'	=> '26F0.png',

		'1F30B'	=> '1F30B.png',
		':volcano:'	=> '1F30B.png',

		'1F5FB'	=> '1F5FB.png',
		':mount_fuji:'	=> '1F5FB.png',

		'1F3D5'	=> '1F3D5.png',
		':camping:'	=> '1F3D5.png',

		'1F3D6'	=> '1F3D6.png',
		':beach_with_umbrella:'	=> '1F3D6.png',

		'1F3DC'	=> '1F3DC.png',
		':desert:'	=> '1F3DC.png',

		'1F3DD'	=> '1F3DD.png',
		':desert_island:'	=> '1F3DD.png',

		'1F3DE'	=> '1F3DE.png',
		':national_park:'	=> '1F3DE.png',

		'1F3DF'	=> '1F3DF.png',
		':stadium:'	=> '1F3DF.png',

		'1F3DB'	=> '1F3DB.png',
		':classical_building:'	=> '1F3DB.png',

		'1F3D7'	=> '1F3D7.png',
		':building_construction:'	=> '1F3D7.png',

		'1F9F1'	=> '1F9F1.png',
		':brick:'	=> '1F9F1.png',

		'1FAA8'	=> '1FAA8.png',
		':rock:'	=> '1FAA8.png',

		'1FAB5'	=> '1FAB5.png',
		':wood:'	=> '1FAB5.png',

		'1F6D6'	=> '1F6D6.png',
		':hut:'	=> '1F6D6.png',

		'1F3D8'	=> '1F3D8.png',
		':houses:'	=> '1F3D8.png',

		'1F3DA'	=> '1F3DA.png',
		':derelict_house:'	=> '1F3DA.png',

		'1F3E0'	=> '1F3E0.png',
		':house:'	=> '1F3E0.png',

		'1F3E1'	=> '1F3E1.png',
		':house_with_garden:'	=> '1F3E1.png',

		'1F3E2'	=> '1F3E2.png',
		':office_building:'	=> '1F3E2.png',

		'1F3E3'	=> '1F3E3.png',
		':japanese_post_office:'	=> '1F3E3.png',

		'1F3E4'	=> '1F3E4.png',
		':post_office:'	=> '1F3E4.png',

		'1F3E5'	=> '1F3E5.png',
		':hospital:'	=> '1F3E5.png',

		'1F3E6'	=> '1F3E6.png',
		':bank:'	=> '1F3E6.png',

		'1F3E8'	=> '1F3E8.png',
		':hotel:'	=> '1F3E8.png',

		'1F3E9'	=> '1F3E9.png',
		':love_hotel:'	=> '1F3E9.png',

		'1F3EA'	=> '1F3EA.png',
		':convenience_store:'	=> '1F3EA.png',

		'1F3EB'	=> '1F3EB.png',
		':school:'	=> '1F3EB.png',

		'1F3EC'	=> '1F3EC.png',
		':department_store:'	=> '1F3EC.png',

		'1F3ED'	=> '1F3ED.png',
		':factory:'	=> '1F3ED.png',

		'1F3EF'	=> '1F3EF.png',
		':japanese_castle:'	=> '1F3EF.png',

		'1F3F0'	=> '1F3F0.png',
		':castle:'	=> '1F3F0.png',

		'1F492'	=> '1F492.png',
		':wedding:'	=> '1F492.png',

		'1F5FC'	=> '1F5FC.png',
		':tokyo_tower:'	=> '1F5FC.png',

		'1F5FD'	=> '1F5FD.png',
		':statue_of_siberty:'	=> '1F5FD.png',

		'26EA'	=> '26EA.png',
		':church:'	=> '26EA.png',

		'1F54C'	=> '1F54C.png',
		':mosque:'	=> '1F54C.png',

		'1F6D5'	=> '1F6D5.png',
		':hindu_temple:'	=> '1F6D5.png',

		'1F54D'	=> '1F54D.png',
		':synagogue:'	=> '1F54D.png',

		'26E9'	=> '26E9.png',
		':shinto shrine:'	=> '26E9.png',

		'1F54B'	=> '1F54B.png',
		':kaaba:'	=> '1F54B.png',

		'26F2'	=> '26F2.png',
		':fountain:'	=> '26F2.png',

		'26FA'	=> '26FA.png',
		':tent:'	=> '26FA.png',

		'1F301'	=> '1F301.png',
		':foggy:'	=> '1F301.png',

		'1F303'	=> '1F303.png',
		':night_with_stars:'	=> '1F303.png',

		'1F3D9'	=> '1F3D9.png',
		':cityscape:'	=> '1F3D9.png',

		'1F304'	=> '1F304.png',
		':sunrise_over_mountains:'	=> '1F304.png',

		'1F305'	=> '1F305.png',
		':sunrise:'	=> '1F305.png',

		'1F306'	=> '1F306.png',
		':cityscape_at_dusk:'	=> '1F306.png',

		'1F307'	=> '1F307.png',
		':sunset:'	=> '1F307.png',

		'1F309'	=> '1F309.png',
		':bridge_at_night:'	=> '1F309.png',

		'2668'	=> '2668.png',
		':hot_springs:'	=> '2668.png',

		'1F3A0'	=> '1F3A0.png',
		':carousel_horse:'	=> '1F3A0.png',

		'1F3A1'	=> '1F3A1.png',
		':ferris_wheel:'	=> '1F3A1.png',

		'1F3A2'	=> '1F3A2.png',
		':roller_coaster:'	=> '1F3A2.png',

		'1F488'	=> '1F488.png',
		':barber_pole:'	=> '1F488.png',

		'1F3AA'	=> '1F3AA.png',
		':circus_tent:'	=> '1F3AA.png',

		'1F682'	=> '1F682.png',
		':locomotive:'	=> '1F682.png',

		'1F683'	=> '1F683.png',
		':railway_car:'	=> '1F683.png',

		'1F684'	=> '1F684.png',
		':high_speed_train:'	=> '1F684.png',

		'1F685'	=> '1F685.png',
		':bullet_train:'	=> '1F685.png',

		'1F686'	=> '1F686.png',
		':train:'	=> '1F686.png',

		'1F687'	=> '1F687.png',
		':metro:'	=> '1F687.png',

		'1F688'	=> '1F688.png',
		':light_rail:'	=> '1F688.png',

		'1F689'	=> '1F689.png',
		':station:'	=> '1F689.png',

		'1F68A'	=> '1F68A.png',
		':tram:'	=> '1F68A.png',

		'1F69D'	=> '1F69D.png',
		':monorail:'	=> '1F69D.png',

		'1F69E'	=> '1F69E.png',
		':mountain_railway:'	=> '1F69E.png',

		'1F68B'	=> '1F68B.png',
		':tram_car:'	=> '1F68B.png',

		'1F68C'	=> '1F68C.png',
		':bus:'	=> '1F68C.png',

		'1F68D'	=> '1F68D.png',
		':oncoming_bus:'	=> '1F68D.png',

		'1F68E'	=> '1F68E.png',
		':trolleybus:'	=> '1F68E.png',

		'1F690'	=> '1F690.png',
		':minibus:'	=> '1F690.png',

		'1F691'	=> '1F691.png',
		':ambulance:'	=> '1F691.png',

		'1F692'	=> '1F692.png',
		':fire_engine:'	=> '1F692.png',

		'1F693'	=> '1F693.png',
		':police_car:'	=> '1F693.png',

		'1F694'	=> '1F694.png',
		':oncoming_police_car:'	=> '1F694.png',

		'1F695'	=> '1F695.png',
		':taxi:'	=> '1F695.png',

		'1F696'	=> '1F696.png',
		':oncoming_taxi:'	=> '1F696.png',

		'1F697'	=> '1F697.png',
		':automobile:'	=> '1F697.png',

		'1F698'	=> '1F698.png',
		':oncoming_automobile:'	=> '1F698.png',

		'1F699'	=> '1F699.png',
		':sport_utility_vehicle:'	=> '1F699.png',

		'1F6FB'	=> '1F6FB.png',
		':pickup_truck:'	=> '1F6FB.png',

		'1F69A'	=> '1F69A.png',
		':delivery_truck:'	=> '1F69A.png',

		'1F69B'	=> '1F69B.png',
		':articulated_lorry:'	=> '1F69B.png',

		'1F69C'	=> '1F69C.png',
		':tractor:'	=> '1F69C.png',

		'1F3CE'	=> '1F3CE.png',
		':racing_car:'	=> '1F3CE.png',

		'1F3CD'	=> '1F3CD.png',
		':motorcycle:'	=> '1F3CD.png',

		'1F6F5'	=> '1F6F5.png',
		':motor_scooter:'	=> '1F6F5.png',

		'1F9BD'	=> '1F9BD.png',
		':manual_wheelchair:'	=> '1F9BD.png',

		'1F9BC'	=> '1F9BC.png',
		':motorized_wheelchair:'	=> '1F9BC.png',

		'1F6FA'	=> '1F6FA.png',
		':auto_rickshaw:'	=> '1F6FA.png',

		'1F6B2'	=> '1F6B2.png',
		':bicycle:'	=> '1F6B2.png',

		'1F6F4'	=> '1F6F4.png',
		':kick_scooter:'	=> '1F6F4.png',

		'1F6F9'	=> '1F6F9.png',
		':skateboard:'	=> '1F6F9.png',

		'1F6FC'	=> '1F6FC.png',
		':roller_skate:'	=> '1F6FC.png',

		'1F68F'	=> '1F68F.png',
		':bus_stop:'	=> '1F68F.png',

		'1F6E3'	=> '1F6E3.png',
		':motorway:'	=> '1F6E3.png',

		'1F6E4'	=> '1F6E4.png',
		':railway_track:'	=> '1F6E4.png',

		'1F6E2'	=> '1F6E2.png',
		':oil_drum:'	=> '1F6E2.png',

		'26FD'	=> '26FD.png',
		':fuel_pump:'	=> '26FD.png',

		'1F6A8'	=> '1F6A8.png',
		':police_car_light:'	=> '1F6A8.png',

		'1F6A5'	=> '1F6A5.png',
		':horizontal_traffic_light:'	=> '1F6A5.png',

		'1F6A6'	=> '1F6A6.png',
		':vertical_traffic_light:'	=> '1F6A6.png',

		'1F6D1'	=> '1F6D1.png',
		':stop_sign:'	=> '1F6D1.png',

		'1F6A7'	=> '1F6A7.png',
		':construction:'	=> '1F6A7.png',

		'2693'	=> '2693.png',
		':anchor:'	=> '2693.png',

		'26F5'	=> '26F5.png',
		':sailboat:'	=> '26F5.png',

		'1F6F6'	=> '1F6F6.png',
		':canoe:'	=> '1F6F6.png',

		'1F6A4'	=> '1F6A4.png',
		':speedboat:'	=> '1F6A4.png',

		'1F6F3'	=> '1F6F3.png',
		':passenger_ship:'	=> '1F6F3.png',

		'26F4'	=> '26F4.png',
		':ferry:'	=> '26F4.png',

		'1F6E5'	=> '1F6E5.png',
		':motor_boat:'	=> '1F6E5.png',

		'1F6A2'	=> '1F6A2.png',
		':ship:'	=> '1F6A2.png',

		'2708'	=> '2708.png',
		':airplane:'	=> '2708.png',

		'1F6E9'	=> '1F6E9.png',
		':small_airplane:'	=> '1F6E9.png',

		'1F6EB'	=> '1F6EB.png',
		':airplane_departure:'	=> '1F6EB.png',

		'1F6EC'	=> '1F6EC.png',
		':airplane_arrival:'	=> '1F6EC.png',

		'1FA82'	=> '1FA82.png',
		':parachute:'	=> '1FA82.png',

		'1F4BA'	=> '1F4BA.png',
		':seat:'	=> '1F4BA.png',

		'1F681'	=> '1F681.png',
		':helicopter:'	=> '1F681.png',

		'1F69F'	=> '1F69F.png',
		':suspension_railway:'	=> '1F69F.png',

		'1F6A0'	=> '1F6A0.png',
		':mountain_cableway:'	=> '1F6A0.png',

		'1F6A1'	=> '1F6A1.png',
		':aerial_tramway:'	=> '1F6A1.png',

		'1F6F0'	=> '1F6F0.png',
		':satellite:'	=> '1F6F0.png',

		'1F680'	=> '1F680.png',
		':rocket:'	=> '1F680.png',

		'1F6F8'	=> '1F6F8.png',
		':flying_saucer:'	=> '1F6F8.png',

		'1F6CE'	=> '1F6CE.png',
		':bellhop_bell:'	=> '1F6CE.png',

		'1F9F3'	=> '1F9F3.png',
		':luggage:'	=> '1F9F3.png',

		'231B'	=> '231B.png',
		':hourglass_done:'	=> '231B.png',

		'23F3'	=> '23F3.png',
		':hourglass_not_done:'	=> '23F3.png',
		':hourglass:'	=> '23F3.png',
		':hourglass_flowing_sand:'	=> '23F3.png',

		'231A'	=> '231A.png',
		':watch:'	=> '231A.png',

		'23F0'	=> '23F0.png',
		':alarm_clock:'	=> '23F0.png',

		'23F1'	=> '23F1.png',
		':stopwatch:'	=> '23F1.png',

		'23F2'	=> '23F2.png',
		':timer_clock:'	=> '23F2.png',

		'1F570'	=> '1F570.png',
		':mantelpiece_clock:'	=> '1F570.png',

		'1F55B'	=> '1F55B.png',
		':twelve_o_clock:'	=> '1F55B.png',
		':clock12:'	=> '1F55B.png',

		'1F567'	=> '1F567.png',
		':twelve_thirty:'	=> '1F567.png',
		':clock1230:'	=> '1F567.png',

		'1F550'	=> '1F550.png',
		':one_o_clock:'	=> '1F550.png',
		':clock1:'	=> '1F550.png',

		'1F55C'	=> '1F55C.png',
		':one_thirty:'	=> '1F55C.png',
		':clock130:'	=> '1F55C.png',

		'1F551'	=> '1F551.png',
		':two_o_clock:'	=> '1F551.png',
		':clock2:'	=> '1F551.png',

		'1F55D'	=> '1F55D.png',
		':two_thirty:'	=> '1F55D.png',
		':clock230:'	=> '1F55D.png',

		'1F552'	=> '1F552.png',
		':three_o_clock:'	=> '1F552.png',
		':clock3:'	=> '1F552.png',

		'1F55E'	=> '1F55E.png',
		':three_thirty:'	=> '1F55E.png',
		':clock330:'	=> '1F55E.png',

		'1F553'	=> '1F553.png',
		':four_o_clock:'	=> '1F553.png',
		':clock4:'	=> '1F553.png',

		'1F55F'	=> '1F55F.png',
		':four_thirty:'	=> '1F55F.png',
		':clock430:'	=> '1F55F.png',

		'1F554'	=> '1F554.png',
		':five_o_clock:'	=> '1F554.png',
		':clock5:'	=> '1F554.png',

		'1F560'	=> '1F560.png',
		':five_thirty:'	=> '1F560.png',
		':clock530:'	=> '1F560.png',

		'1F555'	=> '1F555.png',
		':six_o_clock:'	=> '1F555.png',
		':clock6:'	=> '1F555.png',

		'1F561'	=> '1F561.png',
		':six_thirty:'	=> '1F561.png',
		':clock630:'	=> '1F561.png',

		'1F556'	=> '1F556.png',
		':seven_o_clock:'	=> '1F556.png',
		':clock7:'	=> '1F556.png',

		'1F562'	=> '1F562.png',
		':seven_thirty:'	=> '1F562.png',
		':clock730:'	=> '1F562.png',

		'1F557'	=> '1F557.png',
		':eight_o_clock:'	=> '1F557.png',
		':clock8:'	=> '1F557.png',

		'1F563'	=> '1F563.png',
		':eight_thirty:'	=> '1F563.png',
		':clock830:'	=> '1F563.png',

		'1F558'	=> '1F558.png',
		':nine_o_clock:'	=> '1F558.png',
		':clock9:'	=> '1F558.png',

		'1F564'	=> '1F564.png',
		':nine_thirty:'	=> '1F564.png',
		':clock930:'	=> '1F564.png',

		'1F559'	=> '1F559.png',
		':ten_o_clock:'	=> '1F559.png',
		':clock10:'	=> '1F559.png',

		'1F565'	=> '1F565.png',
		':ten_thirty:'	=> '1F565.png',
		':clock1030:'	=> '1F565.png',

		'1F55A'	=> '1F55A.png',
		':eleven_o_clock:'	=> '1F55A.png',
		':clock11:'	=> '1F55A.png',

		'1F566'	=> '1F566.png',
		':eleven_thirty:'	=> '1F566.png',
		':clock1130:'	=> '1F566.png',

		'1F311'	=> '1F311.png',
		':new_moon:'	=> '1F311.png',

		'1F312'	=> '1F312.png',
		':waxing_crescent_moon:'	=> '1F312.png',

		'1F313'	=> '1F313.png',
		':first_quarter_moon:'	=> '1F313.png',

		'1F314'	=> '1F314.png',
		':waxing_gibbous_moon:'	=> '1F314.png',
		':moon:'	=> '1F314.png',

		'1F315'	=> '1F315.png',
		':full_moon:'	=> '1F315.png',

		'1F316'	=> '1F316.png',
		':waning_gibbous_moon:'	=> '1F316.png',

		'1F317'	=> '1F317.png',
		':last_quarter_moon:'	=> '1F317.png',

		'1F318'	=> '1F318.png',
		':waning_crescent_moon:'	=> '1F318.png',

		'1F319'	=> '1F319.png',
		':crescent moon:'	=> '1F319.png',

		'1F31A'	=> '1F31A.png',
		':new_moon_face:'	=> '1F31A.png',

		'1F31B'	=> '1F31B.png',
		':first_quarter_moon_face:'	=> '1F31B.png',

		'1F31C'	=> '1F31C.png',
		':last_quarter_moon_face:'	=> '1F31C.png',

		'1F321'	=> '1F321.png',
		':thermometer:'	=> '1F321.png',

		'2600'	=> '2600.png',
		':sun:'	=> '2600.png',

		'1F31D'	=> '1F31D.png',
		':full_moon_face:'	=> '1F31D.png',

		'1F31E'	=> '1F31E.png',
		':sun_with_face:'	=> '1F31E.png',
		':sunny:'	=> '1F31E.png',

		'1FA90'	=> '1FA90.png',
		':ringed_planet:'	=> '1FA90.png',

		'2B50'	=> '2B50.png',
		':star:'	=> '2B50.png',

		'1F31F'	=> '1F31F.png',
		':glowing_star:'	=> '1F31F.png',

		'1F320'	=> '1F320.png',
		':shooting_star:'	=> '1F320.png',

		'1F30C'	=> '1F30C.png',
		'milky_way'	=> '1F30C.png',

		'2601'	=> '2601.png',
		':cloud:'	=> '2601.png',

		'26C5'	=> '26C5.png',
		':sun_behind_cloud:'	=> '26C5.png',
		':partly_sunny:'	=> '26C5.png',

		'26C8'	=> '26C8.png',
		':cloud_with_lightning_and_rain:'	=> '26C8.png',

		'1F324'	=> '1F324.png',
		':sun_behind_small_cloud:'	=> '1F324.png',

		'1F325'	=> '1F325.png',
		':sun_behind_large_cloud:'	=> '1F325.png',

		'1F326'	=> '1F326.png',
		':sun_behind_rain_cloud:'	=> '1F326.png',

		'1F327'	=> '1F327.png',
		':cloud_with_rain:'	=> '1F327.png',

		'1F328'	=> '1F328.png',
		':cloud_with_snow:'	=> '1F328.png',

		'1F329'	=> '1F329.png',
		':cloud_with_lightning:'	=> '1F329.png',

		'1F32A'	=> '1F32A.png',
		':tornado:'	=> '1F32A.png',

		'1F32B'	=> '1F32B.png',
		':fog:'	=> '1F32B.png',

		'1F32C'	=> '1F32C.png',
		':wind_face:'	=> '1F32C.png',

		'1F300'	=> '1F300.png',
		':cyclone:'	=> '1F300.png',

		'1F308'	=> '1F308.png',
		':rainbow:'	=> '1F308.png',

		'1F302'	=> '1F302.png',
		':closed_umbrella:'	=> '1F302.png',

		'2602'	=> '2602.png',
		':umbrella:'	=> '2602.png',

		'2614'	=> '2614.png',
		':umbrella_with_rain_drops:'	=> '2614.png',

		'26F1'	=> '26F1.png',
		':umbrella_on_ground:'	=> '26F1.png',

		'26A1'	=> '26A1.png',
		':high_voltage:'	=> '26A1.png',
		':zap:'	=> '26A1.png',

		'2744'	=> '2744.png',
		':snowflake:'	=> '2744.png',

		'2603'	=> '2603.png',
		':snowman:'	=> '2603.png',

		'26C4'	=> '26C4.png',
		':snowman_without_snow:'	=> '26C4.png',

		'2604'	=> '2604.png',
		':comet:'	=> '2604.png',

		'1F525'	=> '1F525.png',
		':fire:'	=> '1F525.png',

		'1F4A7'	=> '1F4A7.png',
		':droplet:'	=> '1F4A7.png',

		'1F30A'	=> '1F30A.png',
		':water_wave:'	=> '1F30A.png',

		'1F383'	=> '1F383.png',
		':jack_o_lantern:'	=> '1F383.png',

		'1F384'	=> '1F384.png',
		':christmas_tree:'	=> '1F384.png',

		'1F386'	=> '1F386.png',
		':fireworks:'	=> '1F386.png',

		'1F387'	=> '1F387.png',
		':sparkler:'	=> '1F387.png',

		'1F9E8'	=> '1F9E8.png',
		':firecracker:'	=> '1F9E8.png',

		'2728'	=> '2728.png',
		':sparkles:'	=> '2728.png',

		'1F388'	=> '1F388.png',
		':balloon:'	=> '1F388.png',

		'1F389'	=> '1F389.png',
		':party_popper:'	=> '1F389.png',

		'1F38A'	=> '1F38A.png',
		':confetti_ball:'	=> '1F38A.png',

		'1F38B'	=> '1F38B.png',
		':tanabata_tree:'	=> '1F38B.png',

		'1F38D'	=> '1F38D.png',
		':pine_decoration:'	=> '1F38D.png',

		'1F38E'	=> '1F38E.png',
		':japanese_dolls:'	=> '1F38E.png',

		'1F38F'	=> '1F38F.png',
		':carp_streamer:'	=> '1F38F.png',

		'1F390'	=> '1F390.png',
		':wind_chime:'	=> '1F390.png',

		'1F391'	=> '1F391.png',
		':moon_viewing_ceremony:'	=> '1F391.png',

		'1F9E7'	=> '1F9E7.png',
		':red_envelope:'	=> '1F9E7.png',

		'1F380'	=> '1F380.png',
		':ribbon:'	=> '1F380.png',

		'1F381'	=> '1F381.png',
		':wrapped_gift:'	=> '1F381.png',

		'1F397'	=> '1F397.png',
		':reminder_ribbon:'	=> '1F397.png',

		'1F39F'	=> '1F39F.png',
		':admission_tickets:'	=> '1F39F.png',

		'1F3AB'	=> '1F3AB.png',
		':ticket:'	=> '1F3AB.png',

		'1F396'	=> '1F396.png',
		':military_medal:'	=> '1F396.png',

		'1F3C6'	=> '1F3C6.png',
		':trophy:'	=> '1F3C6.png',

		'1F3C5'	=> '1F3C5.png',
		':sports_medal:'	=> '1F3C5.png',

		'1F947'	=> '1F947.png',
		':1st_place_medal:'	=> '1F947.png',

		'1F948'	=> '1F948.png',
		':2nd_place_medal:'	=> '1F948.png',

		'1F949'	=> '1F949.png',
		':3rd_place_medal:'	=> '1F949.png',

		'26BD'	=> '26BD.png',
		':soccer_ball:'	=> '26BD.png',

		'26BE'	=> '26BE.png',
		':baseball:'	=> '26BE.png',

		'1F94E'	=> '1F94E.png',
		':softball:'	=> '1F94E.png',

		'1F3C0'	=> '1F3C0.png',
		':basketball:'	=> '1F3C0.png',

		'1F3D0'	=> '1F3D0.png',
		':volleyball:'	=> '1F3D0.png',

		'1F3C8'	=> '1F3C8.png',
		':american_football:'	=> '1F3C8.png',

		'1F3C9'	=> '1F3C9.png',
		':rugby_football:'	=> '1F3C9.png',

		'1F3BE'	=> '1F3BE.png',
		':tennis:'	=> '1F3BE.png',

		'1F94F'	=> '1F94F.png',
		':flying_disc:'	=> '1F94F.png',

		'1F3B3'	=> '1F3B3.png',
		':bowling:'	=> '1F3B3.png',

		'1F3CF'	=> '1F3CF.png',
		':cricket_game:'	=> '1F3CF.png',

		'1F3D1'	=> '1F3D1.png',
		':field_hockey:'	=> '1F3D1.png',

		'1F3D2'	=> '1F3D2.png',
		':ice_hockey:'	=> '1F3D2.png',

		'1F94D'	=> '1F94D.png',
		':lacrosse:'	=> '1F94D.png',

		'1F3D3'	=> '1F3D3.png',
		':ping_pong:'	=> '1F3D3.png',

		'1F3F8'	=> '1F3F8.png',
		':badminton:'	=> '1F3F8.png',

		'1F94A'	=> '1F94A.png',
		':boxing_glove:'	=> '1F94A.png',

		'1F94B'	=> '1F94B.png',
		':martial_arts_uniform:'	=> '1F94B.png',

		'1F945'	=> '1F945.png',
		':goal_net:'	=> '1F945.png',

		'26F3'	=> '26F3.png',
		':flag_in_hole:'	=> '26F3.png',

		'26F8'	=> '26F8.png',
		':ice_skate:'	=> '26F8.png',

		'1F3A3'	=> '1F3A3.png',
		':fishing_pole:'	=> '1F3A3.png',

		'1F93F'	=> '1F93F.png',
		':diving_mask:'	=> '1F93F.png',

		'1F3BD'	=> '1F3BD.png',
		':running_shirt:'	=> '1F3BD.png',

		'1F3BF'	=> '1F3BF.png',
		':skis:'	=> '1F3BF.png',

		'1F6F7'	=> '1F6F7.png',
		':sled:'	=> '1F6F7.png',

		'1F94C'	=> '1F94C.png',
		':curling_stone:'	=> '1F94C.png',

		'1F3AF'	=> '1F3AF.png',
		':bullseye:'	=> '1F3AF.png',

		'1FA80'	=> '1FA80.png',
		':yo_yo:'	=> '1FA80.png',

		'1FA81'	=> '1FA81.png',
		':kite:'	=> '1FA81.png',

		'1F52B'	=> '1F52B.png',
		':water_pistol:'	=> '1F52B.png',
		':gun:'	=> '1F52B.png',

		'1F3B1'	=> '1F3B1.png',
		':pool_8_ball:'	=> '1F3B1.png',

		'1F52E'	=> '1F52E.png',
		':crystal_ball:'	=> '1F52E.png',

		'1FA84'	=> '1FA84.png',
		':magic_wand:'	=> '1FA84.png',

		'1F3AE'	=> '1F3AE.png',
		':video_game:'	=> '1F3AE.png',

		'1F579'	=> '1F579.png',
		':joystick:'	=> '1F579.png',

		'1F3B0'	=> '1F3B0.png',
		':slot_machine:'	=> '1F3B0.png',

		'1F3B2'	=> '1F3B2.png',
		':game_die:'	=> '1F3B2.png',

		'1F9E9'	=> '1F9E9.png',
		':puzzle_piece:'	=> '1F9E9.png',

		'1F9F8'	=> '1F9F8.png',
		':teddy_bear:'	=> '1F9F8.png',

		'1FA85'	=> '1FA85.png',
		':pinata:'	=> '1FA85.png',

		'1FA86'	=> '1FA86.png',
		':nesting_dolls:'	=> '1FA86.png',

		'2660'	=> '2660.png',
		':spade_suit:'	=> '2660.png',

		'2665'	=> '2665.png',
		':heart_suit:'	=> '2665.png',

		'2666'	=> '2666.png',
		':diamond_suit:'	=> '2666.png',

		'2663'	=> '2663.png',
		':club_suit:'	=> '2663.png',

		'265F'	=> '265F.png',
		':chess_pawn:'	=> '265F.png',

		'1F0CF'	=> '1F0CF.png',
		':joker:'	=> '1F0CF.png',

		'1F004'	=> '1F004.png',
		':mahjong_red_dragon:'	=> '1F004.png',

		'1F3B4'	=> '1F3B4.png',
		':flower_playing_cards:'	=> '1F3B4.png',

		'1F3AD'	=> '1F3AD.png',
		':performing_arts:'	=> '1F3AD.png',

		'1F5BC'	=> '1F5BC.png',
		':framed_picture:'	=> '1F5BC.png',

		'1F3A8'	=> '1F3A8.png',
		':artist_palette:'	=> '1F3A8.png',

		'1F9F5'	=> '1F9F5.png',
		':thread:'	=> '1F9F5.png',

		'1FAA1'	=> '1FAA1.png',
		':sewing_needle:'	=> '1FAA1.png',

		'1F9F6'	=> '1F9F6.png',
		':yarn:'	=> '1F9F6.png',

		'1FAA2'	=> '1FAA2.png',
		':knot:'	=> '1FAA2.png',

		'1F453'	=> '1F453.png',
		':glasses:'	=> '1F453.png',

		'1F576'	=> '1F576.png',
		':sunglasses:'	=> '1F576.png',

		'1F97D'	=> '1F97D.png',
		':goggles:'	=> '1F97D.png',

		'1F97C'	=> '1F97C.png',
		':lab_coat:'	=> '1F97C.png',

		'1F9BA'	=> '1F9BA.png',
		':safety_vest:'	=> '1F9BA.png',

		'1F454'	=> '1F454.png',
		':necktie:'	=> '1F454.png',

		'1F455'	=> '1F455.png',
		':t-shirt:'	=> '1F455.png',

		'1F456'	=> '1F456.png',
		':jeans:'	=> '1F456.png',

		'1F9E3'	=> '1F9E3.png',
		':scarf:'	=> '1F9E3.png',

		'1F9E4'	=> '1F9E4.png',
		':gloves:'	=> '1F9E4.png',

		'1F9E5'	=> '1F9E5.png',
		':coat:'	=> '1F9E5.png',

		'1F9E6'	=> '1F9E6.png',
		':socks:'	=> '1F9E6.png',

		'1F457'	=> '1F457.png',
		':dress:'	=> '1F457.png',

		'1F458'	=> '1F458.png',
		':kimono:'	=> '1F458.png',

		'1F97B'	=> '1F97B.png',
		':sari:'	=> '1F97B.png',

		'1FA71'	=> '1FA71.png',
		':one_piece_swimsuit:'	=> '1FA71.png',

		'1FA72'	=> '1FA72.png',
		':briefs:'	=> '1FA72.png',

		'1FA73'	=> '1FA73.png',
		':shorts:'	=> '1FA73.png',

		'1F459'	=> '1F459.png',
		':bikini:'	=> '1F459.png',

		'1F45A'	=> '1F45A.png',
		':womans_clothes:'	=> '1F45A.png',

		'1F45B'	=> '1F45B.png',
		':purse:'	=> '1F45B.png',

		'1F45C'	=> '1F45C.png',
		':handbag:'	=> '1F45C.png',

		'1F45D'	=> '1F45D.png',
		':clutch_bag:'	=> '1F45D.png',

		'1F6CD'	=> '1F6CD.png',
		':shopping_bags:'	=> '1F6CD.png',

		'1F392'	=> '1F392.png',
		':backpack:'	=> '1F392.png',

		'1FA74'	=> '1FA74.png',
		':thong_sandal:'	=> '1FA74.png',

		'1F45E'	=> '1F45E.png',
		':mans_shoe:'	=> '1F45E.png',

		'1F45F'	=> '1F45F.png',
		':running_shoe:'	=> '1F45F.png',

		'1F97E'	=> '1F97E.png',
		':hiking_boot:'	=> '1F97E.png',

		'1F97F'	=> '1F97F.png',
		':flat_shoe:'	=> '1F97F.png',

		'1F460'	=> '1F460.png',
		':high_heeled_shoe:'	=> '1F460.png',

		'1F461'	=> '1F461.png',
		':womans_sandal:'	=> '1F461.png',

		'1FA70'	=> '1FA70.png',
		':ballet_shoes:'	=> '1FA70.png',

		'1F462'	=> '1F462.png',
		':womans_boot:'	=> '1F462.png',

		'1F451'	=> '1F451.png',
		':crown:'	=> '1F451.png',

		'1F452'	=> '1F452.png',
		':womans_hat:'	=> '1F452.png',

		'1F3A9'	=> '1F3A9.png',
		':top_hat:'	=> '1F3A9.png',

		'1F393'	=> '1F393.png',
		':graduation_cap:'	=> '1F393.png',

		'1F9E2'	=> '1F9E2.png',
		':billed_cap:'	=> '1F9E2.png',

		'1FA96'	=> '1FA96.png',
		':military_helmet:'	=> '1FA96.png',

		'26D1'	=> '26D1.png',
		':rescue_workers_helmet:'	=> '26D1.png',

		'1F4FF'	=> '1F4FF.png',
		':prayer_beads:'	=> '1F4FF.png',

		'1F484'	=> '1F484.png',
		':lipstick:'	=> '1F484.png',

		'1F48D'	=> '1F48D.png',
		':ring:'	=> '1F48D.png',

		'1F48E'	=> '1F48E.png',
		':gem_stone:'	=> '1F48E.png',

		'1F507'	=> '1F507.png',
		':muted_speaker:'	=> '1F507.png',
		':mute:'	=> '1F507.png',

		'1F508'	=> '1F508.png',
		':speaker_low_volume:'	=> '1F508.png',
		':speaker:'	=> '1F508.png',

		'1F509'	=> '1F509.png',
		':speaker_medium_volume:'	=> '1F509.png',
		':sound:'	=> '1F509.png',

		'1F50A'	=> '1F50A.png',
		':speaker_high_volume:'	=> '1F50A.png',

		'1F4E2'	=> '1F4E2.png',
		':loudspeaker:'	=> '1F4E2.png',

		'1F4E3'	=> '1F4E3.png',
		':megaphone:'	=> '1F4E3.png',
		':mega:'	=> '1F4E3.png',

		'1F4EF'	=> '1F4EF.png',
		':postal_horn:'	=> '1F4EF.png',

		'1F514'	=> '1F514.png',
		':bell:'	=> '1F514.png',

		'1F515'	=> '1F515.png',
		':bell_with_slash:'	=> '1F515.png',
		':no_bell:'	=> '1F515.png',

		'1F3BC'	=> '1F3BC.png',
		':musical_score:'	=> '1F3BC.png',

		'1F3B5'	=> '1F3B5.png',
		':musical_note:'	=> '1F3B5.png',

		'1F3B6'	=> '1F3B6.png',
		':musical_notes:'	=> '1F3B6.png',

		'1F399'	=> '1F399.png',
		':studio_microphone:'	=> '1F399.png',

		'1F39A'	=> '1F39A.png',
		':level_slider:'	=> '1F39A.png',

		'1F39B'	=> '1F39B.png',
		':control_knobs:'	=> '1F39B.png',

		'1F3A4'	=> '1F3A4.png',
		':microphone:'	=> '1F3A4.png',

		'1F3A7'	=> '1F3A7.png',
		':headphone:'	=> '1F3A7.png',

		'1F4FB'	=> '1F4FB.png',
		':radio:'	=> '1F4FB.png',

		'1F3B7'	=> '1F3B7.png',
		':saxophone:'	=> '1F3B7.png',

		'1FA97'	=> '1FA97.png',
		':accordion:'	=> '1FA97.png',

		'1F3B8'	=> '1F3B8.png',
		':guitar:'	=> '1F3B8.png',

		'1F3B9'	=> '1F3B9.png',
		':musical_keyboard:'	=> '1F3B9.png',

		'1F3BA'	=> '1F3BA.png',
		':trumpet:'	=> '1F3BA.png',

		'1F3BB'	=> '1F3BB.png',
		':violin:'	=> '1F3BB.png',

		'1FA95'	=> '1FA95.png',
		':banjo:'	=> '1FA95.png',

		'1F941'	=> '1F941.png',
		':drum:'	=> '1F941.png',

		'1FA98'	=> '1FA98.png',
		':long_drum:'	=> '1FA98.png',

		'1F4F1'	=> '1F4F1.png',
		':mobile_phone:'	=> '1F4F1.png',
		':iphone:'	=> '1F4F1.png',

		'1F4F2'	=> '1F4F2.png',
		':mobile_phone_with_arrow:'	=> '1F4F2.png',
		':calling:'	=> '1F4F2.png',

		'260E'	=> '260E.png',
		':telephone:'	=> '260E.png',
		':phone:'	=> '260E.png',

		'1F4DE'	=> '1F4DE.png',
		':telephone_receiver:'	=> '1F4DE.png',

		'1F4DF'	=> '1F4DF.png',
		':pager:'	=> '1F4DF.png',

		'1F4E0'	=> '1F4E0.png',
		':fax_machine:'	=> '1F4E0.png',
		':fax:'	=> '1F4E0.png',

		'1F50B'	=> '1F50B.png',
		':battery:'	=> '1F50B.png',

		'1F50C'	=> '1F50C.png',
		':electric_plug:'	=> '1F50C.png',

		'1F4BB'	=> '1F4BB.png',
		':laptop:'	=> '1F4BB.png',
		':computer:'	=> '1F4BB.png',

		'1F5A5'	=> '1F5A5.png',
		':desktop_computer:'	=> '1F5A5.png',

		'1F5A8'	=> '1F5A8.png',
		':printer:'	=> '1F5A8.png',

		'2328'	=> '2328.png',
		':keyboard:'	=> '2328.png',

		'1F5B1'	=> '1F5B1.png',
		':computer_mouse:'	=> '1F5B1.png',

		'1F5B2'	=> '1F5B2.png',
		':trackball:'	=> '1F5B2.png',

		'1F4BD'	=> '1F4BD.png',
		':computer_disk:'	=> '1F4BD.png',

		'1F4BE'	=> '1F4BE.png',
		':floppy_disk:'	=> '1F4BE.png',

		'1F4BF'	=> '1F4BF.png',
		':optical_disk:'	=> '1F4BF.png',

		'1F4C0'	=> '1F4C0.png',
		':dvd:'	=> '1F4C0.png',

		'1F9EE'	=> '1F9EE.png',
		':abacus:'	=> '1F9EE.png',

		'1F3A5'	=> '1F3A5.png',
		':movie_camera:'	=> '1F3A5.png',

		'1F39E'	=> '1F39E.png',
		':film_frames:'	=> '1F39E.png',

		'1F4FD'	=> '1F4FD.png',
		':film_projector:'	=> '1F4FD.png',

		'1F3AC'	=> '1F3AC.png',
		':clapper_board:'	=> '1F3AC.png',

		'1F4FA'	=> '1F4FA.png',
		':television:'	=> '1F4FA.png',
		':tv:'	=> '1F4FA.png',

		'1F4F7'	=> '1F4F7.png',
		':camera:'	=> '1F4F7.png',

		'1F4F8'	=> '1F4F8.png',
		':camera_with_flash:'	=> '1F4F8.png',

		'1F4F9'	=> '1F4F9.png',
		':video_camera:'	=> '1F4F9.png',

		'1F4FC'	=> '1F4FC.png',
		':videocassette:'	=> '1F4FC.png',
		':vhs:'	=> '1F4FC.png',

		'1F50D'	=> '1F50D.png',
		':magnifying_glass_tilted_left:'	=> '1F50D.png',
		':mag:'	=> '1F50D.png',

		'1F50E'	=> '1F50E.png',
		':magnifying_glass_tilted_right:'	=> '1F50E.png',
		':mag_right:'	=> '1F50E.png',

		'1F56F'	=> '1F56F.png',
		':candle:'	=> '1F56F.png',

		':idea:'	=> '1F4A1.png',
		':ide:'	=> '1F4A1.png',
		':tips:'	=> '1F4A1.png',
		'o*'	=> '1F4A1.png',
		'1F4A1'	=> '1F4A1.png',
		':light_bulb:'	=> '1F4A1.png',
		':bulb:'	=> '1F4A1.png',

		'1F526'	=> '1F526.png',
		':flashlight:'	=> '1F526.png',

		'1F3EE'	=> '1F3EE.png',
		':red_paper_lantern:'	=> '1F3EE.png',

		'1FA94'	=> '1FA94.png',
		':diya_lamp:'	=> '1FA94.png',

		'1F4D4'	=> '1F4D4.png',
		':notebook_with_decorative_cover:'	=> '1F4D4.png',

		'1F4D5'	=> '1F4D5.png',
		':closed_book:'	=> '1F4D5.png',

		'1F4D6'	=> '1F4D6.png',
		':open_book:'	=> '1F4D6.png',

		'1F4D7'	=> '1F4D7.png',
		':green_book:'	=> '1F4D7.png',

		'1F4D8'	=> '1F4D8.png',
		':blue_book:'	=> '1F4D8.png',

		'1F4D9'	=> '1F4D9.png',
		':orange_book:'	=> '1F4D9.png',

		'1F4DA'	=> '1F4DA.png',
		':books:'	=> '1F4DA.png',

		'1F4D3'	=> '1F4D3.png',
		':notebook:'	=> '1F4D3.png',

		'1F4D2'	=> '1F4D2.png',
		':ledger:'	=> '1F4D2.png',

		'1F4C3'	=> '1F4C3.png',
		':page_with_curl:'	=> '1F4C3.png',

		'1F4DC'	=> '1F4DC.png',
		':scroll:'	=> '1F4DC.png',

		'1F4C4'	=> '1F4C4.png',
		':page_facing_up:'	=> '1F4C4.png',

		'1F4F0'	=> '1F4F0.png',
		':newspaper:'	=> '1F4F0.png',

		'1F5DE'	=> '1F5DE.png',
		':rolled_up_newspaper:'	=> '1F5DE.png',

		'1F4D1'	=> '1F4D1.png',
		':bookmark_tabs:'	=> '1F4D1.png',

		'1F516'	=> '1F516.png',
		':bookmark:'	=> '1F516.png',

		'1F3F7'	=> '1F3F7.png',
		':label:'	=> '1F3F7.png',

		'1F4B0'	=> '1F4B0.png',
		':money_bag:'	=> '1F4B0.png',

		'1FA99'	=> '1FA99.png',
		':coin:'	=> '1FA99.png',

		'1F4B4'	=> '1F4B4.png',
		':yen_banknote:'	=> '1F4B4.png',
		':yen:'	=> '1F4B4.png',

		'1F4B5'	=> '1F4B5.png',
		':dollar_banknote:'	=> '1F4B5.png',
		':dollar:'	=> '1F4B5.png',

		'1F4B6'	=> '1F4B6.png',
		':euro_banknote:'	=> '1F4B6.png',
		':euro:'	=> '1F4B6.png',

		'1F4B7'	=> '1F4B7.png',
		':pound_banknote:'	=> '1F4B7.png',
		':pound:'	=> '1F4B7.png',

		'1F4B8'	=> '1F4B8.png',
		':money_with_wings:'	=> '1F4B8.png',

		'1F4B3'	=> '1F4B3.png',
		':credit_card:'	=> '1F4B3.png',

		'1F9FE'	=> '1F9FE.png',
		':receipt:'	=> '1F9FE.png',

		'1F4B9'	=> '1F4B9.png',
		':chart_increasing_with_yen:'	=> '1F4B9.png',

		'2709'	=> '2709.png',
		':envelope:'	=> '2709.png',

		'1F4E7'	=> '1F4E7.png',
		':email:'	=> '1F4E7.png',
		':e-mail:'	=> '1F4E7.png',

		'1F4E8'	=> '1F4E8.png',
		':incoming_envelope:'	=> '1F4E8.png',

		'1F4E9'	=> '1F4E9.png',
		':envelope_with_arrow:'	=> '1F4E9.png',

		'1F4E4'	=> '1F4E4.png',
		':outbox_tray:'	=> '1F4E4.png',

		'1F4E5'	=> '1F4E5.png',
		':inbox_tray:'	=> '1F4E5.png',

		'1F4E6'	=> '1F4E6.png',
		':package:'	=> '1F4E6.png',

		'1F4EB'	=> '1F4EB.png',
		':closed_mailbox_with_raised_flag:'	=> '1F4EB.png',
		':mailbox:'	=> '1F4EB.png',

		'1F4EA'	=> '1F4EA.png',
		':closed_mailbox_with_lowered_flag:'	=> '1F4EA.png',
		':mailbox_closed:'	=> '1F4EA.png',

		'1F4EC'	=> '1F4EC.png',
		':open_mailbox_with_raised_flag:'	=> '1F4EC.png',
		':mailbox_with_mail:'	=> '1F4EC.png',

		'1F4ED'	=> '1F4ED.png',
		':open_mailbox_with_lowered_flag:'	=> '1F4ED.png',
		':mailbox_with_no_mail:'	=> '1F4ED.png',

		'1F4EE'	=> '1F4EE.png',
		':postbox:'	=> '1F4EE.png',

		'1F5F3'	=> '1F5F3.png',
		':ballot_box_with_ballot:'	=> '1F5F3.png',

		'270F'	=> '270F.png',
		':pencil:'	=> '270F.png',

		'2712'	=> '2712.png',
		':black_nib:'	=> '2712.png',

		'1F58B'	=> '1F58B.png',
		':fountain_pen:'	=> '1F58B.png',

		'1F58A'	=> '1F58A.png',
		':pen:'	=> '1F58A.png',

		'1F58C'	=> '1F58C.png',
		':paintbrush:'	=> '1F58C.png',

		'1F58D'	=> '1F58D.png',
		':crayon:'	=> '1F58D.png',

		'1F4DD'	=> '1F4DD.png',
		':memo:'	=> '1F4DD.png',

		'1F4BC'	=> '1F4BC.png',
		':briefcase:'	=> '1F4BC.png',

		'1F4C1'	=> '1F4C1.png',
		':file_folder:'	=> '1F4C1.png',

		'1F4C2'	=> '1F4C2.png',
		':open_file_folder:'	=> '1F4C2.png',

		'1F5C2'	=> '1F5C2.png',
		':card_index_dividers:'	=> '1F5C2.png',

		'1F4C5'	=> '1F4C5.png',
		':calendar:'	=> '1F4C5.png',

		'1F4C6'	=> '1F4C6.png',
		':tear_off_calendar:'	=> '1F4C6.png',

		'1F5D2'	=> '1F5D2.png',
		':spiral_notepad:'	=> '1F5D2.png',

		'1F5D3'	=> '1F5D3.png',
		':spiral_calendar:'	=> '1F5D3.png',
		':date:'	=> '1F5D3.png',

		'1F4C7'	=> '1F4C7.png',
		':card_index:'	=> '1F4C7.png',

		'1F4C8'	=> '1F4C8.png',
		':chart_increasing:'	=> '1F4C8.png',

		'1F4C9'	=> '1F4C9.png',
		':chart_decreasing:'	=> '1F4C9.png',

		'1F4CA'	=> '1F4CA.png',
		':bar_chart:'	=> '1F4CA.png',

		'1F4CB'	=> '1F4CB.png',
		':clipboard:'	=> '1F4CB.png',

		'1F4CC'	=> '1F4CC.png',
		':pushpin:'	=> '1F4CC.png',

		'1F4CD'	=> '1F4CD.png',
		':round_pushpin:'	=> '1F4CD.png',

		'1F4CE'	=> '1F4CE.png',
		':paperclip:'	=> '1F4CE.png',

		'1F587'	=> '1F587.png',
		':linked_paperclips:'	=> '1F587.png',

		'1F4CF'	=> '1F4CF.png',
		':straight_ruler:'	=> '1F4CF.png',

		'1F4D0'	=> '1F4D0.png',
		':triangular_ruler:'	=> '1F4D0.png',

		'2702'	=> '2702.png',
		':scissors:'	=> '2702.png',

		'1F5C3'	=> '1F5C3.png',
		':card_file_box:'	=> '1F5C3.png',

		'1F5C4'	=> '1F5C4.png',
		':file_cabinet:'	=> '1F5C4.png',

		'1F5D1'	=> '1F5D1.png',
		':wastebasket:'	=> '1F5D1.png',

		'1F512'	=> '1F512.png',
		':locked:'	=> '1F512.png',
		':lock:'	=> '1F512.png',

		'1F513'	=> '1F513.png',
		':unlocked:'	=> '1F513.png',
		':unlock:'	=> '1F513.png',

		'1F50F'	=> '1F50F.png',
		':locked_with_pen:'	=> '1F50F.png',
		':lock_with_ink_pen:'	=> '1F50F.png',

		'1F510'	=> '1F510.png',
		':locked_with_key:'	=> '1F510.png',
		':closed_lock_with_key:'	=> '1F510.png',

		'1F511'	=> '1F511.png',
		':key:'	=> '1F511.png',

		'1F5DD'	=> '1F5DD.png',
		':old_key:'	=> '1F5DD.png',

		'1F528'	=> '1F528.png',
		':hammer:'	=> '1F528.png',

		'1FA93'	=> '1FA93.png',
		':axe:'	=> '1FA93.png',

		'26CF'	=> '26CF.png',
		':pick:'	=> '26CF.png',

		'2692'	=> '2692.png',
		':hammer_and_pick:'	=> '2692.png',

		'1F6E0'	=> '1F6E0.png',
		':hammer_and_wrench:'	=> '1F6E0.png',

		'1F5E1'	=> '1F5E1.png',
		':dagger:'	=> '1F5E1.png',

		'2694'	=> '2694.png',
		':crossed_swords:'	=> '2694.png',

		'1F4A3'	=> '1F4A3.png',
		':bomb:'	=> '1F4A3.png',

		'1FA83'	=> '1FA83.png',
		':boomerang:'	=> '1FA83.png',

		'1F3F9'	=> '1F3F9.png',
		'bow_and_arrow:'	=> '1F3F9.png',

		'1F6E1'	=> '1F6E1.png',
		':shield:'	=> '1F6E1.png',

		'1FA9A'	=> '1FA9A.png',
		':carpentry_saw:'	=> '1FA9A.png',

		'1F527'	=> '1F527.png',
		':wrench:'	=> '1F527.png',

		'1FA9B'	=> '1FA9B.png',
		':screwdriver:'	=> '1FA9B.png',

		'1F529'	=> '1F529.png',
		':nut_and_bolt:'	=> '1F529.png',

		'2699'	=> '2699.png',
		':gear:'	=> '2699.png',

		'1F5DC'	=> '1F5DC.png',
		':clamp:'	=> '1F5DC.png',

		'2696'	=> '2696.png',
		':balance_scale:'	=> '2696.png',

		'1F9AF'	=> '1F9AF.png',
		':white_cane:'	=> '1F9AF.png',

		'1F517'	=> '1F517.png',
		':link:'	=> '1F517.png',

		'26D3'	=> '26D3.png',
		':chains:'	=> '26D3.png',

		'1FA9D'	=> '1FA9D.png',
		':hook:'	=> '1FA9D.png',

		'1F9F0'	=> '1F9F0.png',
		':toolbox:'	=> '1F9F0.png',

		'1F9F2'	=> '1F9F2.png',
		':magnet:'	=> '1F9F2.png',

		'1FA9C'	=> '1FA9C.png',
		':ladder:'	=> '1FA9C.png',

		'2697'	=> '2697.png',
		':alembic:'	=> '2697.png',

		'1F9EA'	=> '1F9EA.png',
		':test_tube:'	=> '1F9EA.png',

		'1F9EB'	=> '1F9EB.png',
		':petri_dish:'	=> '1F9EB.png',

		'1F9EC'	=> '1F9EC.png',
		':dna:'	=> '1F9EC.png',

		'1F52C'	=> '1F52C.png',
		':microscope:'	=> '1F52C.png',

		'1F52D'	=> '1F52D.png',
		':telescope:'	=> '1F52D.png',

		'1F4E1'	=> '1F4E1.png',
		':satellite_antenna:'	=> '1F4E1.png',

		'1F489'	=> '1F489.png',
		':syringe:'	=> '1F489.png',

		'1FA78'	=> '1FA78.png',
		':drop_of_blood:'	=> '1FA78.png',

		'1F48A'	=> '1F48A.png',
		':pill:'	=> '1F48A.png',

		'1FA79'	=> '1FA79.png',
		':adhesive_bandage:'	=> '1FA79.png',

		'1FA7A'	=> '1FA7A.png',
		':stethoscope:'	=> '1FA7A.png',

		'1F6AA'	=> '1F6AA.png',
		':door:'	=> '1F6AA.png',

		'1F6D7'	=> '1F6D7.png',
		':elevator:'	=> '1F6D7.png',

		'1FA9E'	=> '1FA9E.png',
		':mirror:'	=> '1FA9E.png',

		'1FA9F'	=> '1FA9F.png',
		':window:'	=> '1FA9F.png',

		'1F6CF'	=> '1F6CF.png',
		':bed:'	=> '1F6CF.png',

		'1F6CB'	=> '1F6CB.png',
		':couch_and_lamp:'	=> '1F6CB.png',

		'1FA91'	=> '1FA91.png',
		':chair:'	=> '1FA91.png',

		'1F6BD'	=> '1F6BD.png',
		':toilet:'	=> '1F6BD.png',

		'1FAA0'	=> '1FAA0.png',
		':plunger:'	=> '1FAA0.png',

		'1F6BF'	=> '1F6BF.png',
		':shower:'	=> '1F6BF.png',

		'1F6C1'	=> '1F6C1.png',
		':bathtub:'	=> '1F6C1.png',

		'1FAA4'	=> '1FAA4.png',
		':mouse_trap:'	=> '1FAA4.png',

		'1FA92'	=> '1FA92.png',
		':razor:'	=> '1FA92.png',

		'1F9F4'	=> '1F9F4.png',
		':lotion_bottle:'	=> '1F9F4.png',

		'1F9F7'	=> '1F9F7.png',
		':safety_pin:'	=> '1F9F7.png',

		'1F9F9'	=> '1F9F9.png',
		':broom:'	=> '1F9F9.png',

		'1F9FA'	=> '1F9FA.png',
		':basket:'	=> '1F9FA.png',

		'1F9FB'	=> '1F9FB.png',
		':roll_of_paper:'	=> '1F9FB.png',

		'1FAA3'	=> '1FAA3.png',
		':bucket:'	=> '1FAA3.png',

		'1F9FC'	=> '1F9FC.png',
		':soap:'	=> '1F9FC.png',

		'1FAA5'	=> '1FAA5.png',
		':toothbrush:'	=> '1FAA5.png',

		'1F9FD'	=> '1F9FD.png',
		':sponge:'	=> '1F9FD.png',

		'1F9EF'	=> '1F9EF.png',
		':fire_extinguisher:'	=> '1F9EF.png',

		'1F6D2'	=> '1F6D2.png',
		':shopping_cart:'	=> '1F6D2.png',

		':~i'	=> '1F6AC.png',
		'1F6AC'	=> '1F6AC.png',
		':cigarette:'	=> '1F6AC.png',
		':smoking:'	=> '1F6AC.png',

		'26B0'	=> '26B0.png',
		':coffin:'	=> '26B0.png',

		'1FAA6'	=> '1FAA6.png',
		':headstone:'	=> '1FAA6.png',

		'26B1'	=> '26B1.png',
		':funeral_urn:'	=> '26B1.png',

		'1F9FF'	=> '1F9FF.png',
		':nazar_amulet:'	=> '1F9FF.png',

		'1F5FF'	=> '1F5FF.png',
		':moai:'	=> '1F5FF.png',

		'1FAA7'	=> '1FAA7.png',
		':placard:'	=> '1FAA7.png',

		'1F3E7'	=> '1F3E7.png',
		':atm_sign:'	=> '1F3E7.png',
		':atm:'	=> '1F3E7.png',

		'1F6AE'	=> '1F6AE.png',
		':litter_in_bin_sign:'	=> '1F6AE.png',

		'1F6B0'	=> '1F6B0.png',
		':potable_water:'	=> '1F6B0.png',

		'267F'	=> '267F.png',
		':wheelchair_symbol:'	=> '267F.png',

		'1F6B9'	=> '1F6B9.png',
		':mens_room:'	=> '1F6B9.png',

		'1F6BA'	=> '1F6BA.png',
		':womens_room:'	=> '1F6BA.png',

		'1F6BB'	=> '1F6BB.png',
		':restroom:'	=> '1F6BB.png',

		'1F6BC'	=> '1F6BC.png',
		':baby_symbol:'	=> '1F6BC.png',

		'1F6BE'	=> '1F6BE.png',
		':water_closet:'	=> '1F6BE.png',

		'1F6C2'	=> '1F6C2.png',
		':passport_control:'	=> '1F6C2.png',

		'1F6C3'	=> '1F6C3.png',
		':customs:'	=> '1F6C3.png',

		'1F6C4'	=> '1F6C4.png',
		':baggage_claim:'	=> '1F6C4.png',

		'1F6C5'	=> '1F6C5.png',
		':left_luggage:'	=> '1F6C5.png',

		':!:'	=> '26A0.png',
		':!!:'	=> '26A0.png',
		'26A0'	=> '26A0.png',
		':warning:'	=> '26A0.png',

		'1F6B8'	=> '1F6B8.png',
		':children_crossing:'	=> '1F6B8.png',

		'26D4'	=> '26D4.png',
		':no_entry:'	=> '26D4.png',

		'1F6AB'	=> '1F6AB.png',
		':prohibited:'	=> '1F6AB.png',

		'1F6B3'	=> '1F6B3.png',
		':no_bicycles:'	=> '1F6B3.png',

		'1F6AD'	=> '1F6AD.png',
		':no_smoking:'	=> '1F6AD.png',

		'1F6AF'	=> '1F6AF.png',
		':no_littering:'	=> '1F6AF.png',

		'1F6B1'	=> '1F6B1.png',
		':non_potable_water:'	=> '1F6B1.png',

		'1F6B7'	=> '1F6B7.png',
		':no_pedestrians:'	=> '1F6B7.png',

		'1F4F5'	=> '1F4F5.png',
		':no_mobile_phones:'	=> '1F4F5.png',

		'1F51E'	=> '1F51E.png',
		':no_one_under_eighteen:'	=> '1F51E.png',

		'2622'	=> '2622.png',
		':radioactive:'	=> '2622.png',

		'2623'	=> '2623.png',
		':biohazard:'	=> '2623.png',

		'2B06'	=> '2B06.png',
		':up_arrow:'	=> '2B06.png',

		'2197'	=> '2197.png',
		':up_right_arrow:'	=> '2197.png',

		'>>'	=> '27A1.png',
		'27A1'	=> '27A1.png',
		':right_arrow:'	=> '27A1.png',
		':go-next:'	=> '27A1.png',

		'2198'	=> '2198.png',
		':down_right_arrow:'	=> '2198.png',

		'2B07'	=> '2B07.png',
		':down_arrow:'	=> '2B07.png',

		'2199'	=> '2199.png',
		':down_left_arrow:'	=> '2199.png',

		'2B05'	=> '2B05.png',
		':left_arrow:'	=> '2B05.png',

		'2196'	=> '2196.png',
		':up_left_arrow:'	=> '2196.png',

		'2195'	=> '2195.png',
		':up_down_arrow:'	=> '2195.png',

		'2194'	=> '2194.png',
		':left_right_arrow:'	=> '2194.png',

		'21A9'	=> '21A9.png',
		':right_arrow_curving_left:'	=> '21A9.png',

		'21AA'	=> '21AA.png',
		':left_arrow_curving_right:'	=> '21AA.png',

		'2934'	=> '2934.png',
		':right_arrow_curving_up:'	=> '2934.png',

		'2935'	=> '2935.png',
		':right_arrow_curving_down:'	=> '2935.png',

		'1F503'	=> '1F503.png',
		':clockwise_vertical_arrows:'	=> '1F503.png',

		'1F504'	=> '1F504.png',
		':counterclockwise_arrows_button:'	=> '1F504.png',

		'1F519'	=> '1F519.png',
		':back_arrow:'	=> '1F519.png',

		'1F51A'	=> '1F51A.png',
		':end_arrow:'	=> '1F51A.png',

		'1F51B'	=> '1F51B.png',
		':on_arrow:'	=> '1F51B.png',

		'1F51C'	=> '1F51C.png',
		':soon_arrow:'	=> '1F51C.png',

		'1F51D'	=> '1F51D.png',
		':top_arrow:'	=> '1F51D.png',

		'1F6D0'	=> '1F6D0.png',
		':place_of_worship:'	=> '1F6D0.png',

		'269B'	=> '269B.png',
		':atom_symbol:'	=> '269B.png',

		'1F549'	=> '1F549.png',
		':om:'	=> '1F549.png',

		'2721'	=> '2721.png',
		':star_of_david:'	=> '2721.png',

		'2638'	=> '2638.png',
		':wheel_of_dharma:'	=> '2638.png',

		'262F'	=> '262F.png',
		':yin_yang:'	=> '262F.png',

		'271D'	=> '271D.png',
		':latin_cross:'	=> '271D.png',

		'2626'	=> '2626.png',
		':orthodox_cross:'	=> '2626.png',

		'262A'	=> '262A.png',
		':star_and_crescent:'	=> '262A.png',

		'262E'	=> '262E.png',
		':peace_symbol:'	=> '262E.png',

		'1F54E'	=> '1F54E.png',
		':menorah:'	=> '1F54E.png',

		'1F52F'	=> '1F52F.png',
		':dotted_six_pointed_star:'	=> '1F52F.png',

		'2648'	=> '2648.png',
		':aries:'	=> '2648.png',

		'2649'	=> '2649.png',
		':taurus:'	=> '2649.png',

		'264A'	=> '264A.png',
		':gemini:'	=> '264A.png',

		'264B'	=> '264B.png',
		':cancer:'	=> '264B.png',

		'264C'	=> '264C.png',
		':leo:'	=> '264C.png',

		'264D'	=> '264D.png',
		':virgo:'	=> '264D.png',

		'264E'	=> '264E.png',
		':libra:'	=> '264E.png',

		'264F'	=> '264F.png',
		':scorpio:'	=> '264F.png',

		'2650'	=> '2650.png',
		':sagittarius:'	=> '2650.png',

		'2651'	=> '2651.png',
		':capricorn:'	=> '2651.png',

		'2652'	=> '2652.png',
		':aquarius:'	=> '2652.png',

		'2653'	=> '2653.png',
		':pisces:'	=> '2653.png',

		'26CE'	=> '26CE.png',
		':ophiuchus:'	=> '26CE.png',

		'1F500'	=> '1F500.png',
		':shuffle_tracks_button:'	=> '1F500.png',

		'1F501'	=> '1F501.png',
		':repeat_button:'	=> '1F501.png',

		'1F502'	=> '1F502.png',
		':repeat_single_button:'	=> '1F502.png',

		'25B6'	=> '25B6.png',
		':play_button:'	=> '25B6.png',

		'23E9'	=> '23E9.png',
		':fast_forward_button:'	=> '23E9.png',

		'23ED'	=> '23ED.png',
		':next_track_button:'	=> '23ED.png',

		'23EF'	=> '23EF.png',
		':play_or_pause_button:'	=> '23EF.png',

		'25C0'	=> '25C0.png',
		':reverse_button:'	=> '25C0.png',

		'23EA'	=> '23EA.png',
		':fast_reverse_button:'	=> '23EA.png',

		'23EE'	=> '23EE.png',
		':last_track_button:'	=> '23EE.png',

		'1F53C'	=> '1F53C.png',
		':upwards button:'	=> '1F53C.png',

		'23EB'	=> '23EB.png',
		':fast_up_button:'	=> '23EB.png',

		'1F53D'	=> '1F53D.png',
		':downwards_button:'	=> '1F53D.png',

		'23EC'	=> '23EC.png',
		':fast_down_button:'	=> '23EC.png',

		'23F8'	=> '23F8.png',
		':pause_button:'	=> '23F8.png',

		'23F9'	=> '23F9.png',
		':stop_button:'	=> '23F9.png',

		'23FA'	=> '23FA.png',
		':record_button:'	=> '23FA.png',

		'23CF'	=> '23CF.png',
		':eject_button:'	=> '23CF.png',

		'1F3A6'	=> '1F3A6.png',
		':cinema:'	=> '1F3A6.png',

		'1F505'	=> '1F505.png',
		':dim_button:'	=> '1F505.png',

		'1F506'	=> '1F506.png',
		':bright_button:'	=> '1F506.png',

		'1F4F6'	=> '1F4F6.png',
		':antenna_bars:'	=> '1F4F6.png',

		'1F4F3'	=> '1F4F3.png',
		':vibration_mode:'	=> '1F4F3.png',

		'1F4F4'	=> '1F4F4.png',
		':mobile_phone_off:'	=> '1F4F4.png',

		'2640'	=> '2640.png',
		':female_sign:'	=> '2640.png',

		'2642'	=> '2642.png',
		':male_sign:'	=> '2642.png',

		'26A7'	=> '26A7.png',
		':transgender_symbol:'	=> '26A7.png',

		'2716'	=> '2716.png',
		':multiply:'	=> '2716.png',
		':heavy_multiplication_x:'	=> '2716.png',

		'2795'	=> '2795.png',
		':plus:'	=> '2795.png',
		':heavy_plus_sign:'	=> '2795.png',

		'2796'	=> '2796.png',
		':minus:'	=> '2796.png',
		':heavy_minus_sign:'	=> '2796.png',

		'2797'	=> '2797.png',
		':divide:'	=> '2797.png',
		':heavy_division_sign:'	=> '2797.png',

		'1F7F0'	=> '1F7F0.png',
		':heavy_equals_sign:'	=> '1F7F0.png',
		':equals:'	=> '1F7F0.png',

		'267E'	=> '267E.png',
		':infinity:'	=> '267E.png',

		'203C'	=> '203C.png',
		':double_exclamation_mark:'	=> '203C.png',
		':bangbang:'	=> '203C.png',

		'2049'	=> '2049.png',
		':exclamation_question_mark:'	=> '2049.png',
		':interrobang:'	=> '2049.png',

		':?'	=> '2753.png',
		':-?'	=> '2753.png',
		'2753'	=> '2753.png',
		':help:'	=> '2753.png',
		':red_question_mark:'	=> '2753.png',
		':question:'	=> '2753.png',

		'2754'	=> '2754.png',
		':white_question_mark:'	=> '2754.png',

		'2755'	=> '2755.png',
		':white_exclamation_mark:'	=> '2755.png',

		'2757'	=> '2757.png',
		':red_exclamation_mark:'	=> '2757.png',
		':exclamation:'	=> '2757.png',

		'3030'	=> '3030.png',
		':wavy_dash:'	=> '3030.png',

		'1F4B1'	=> '1F4B1.png',
		':currency_exchange:'	=> '1F4B1.png',

		'1F4B2'	=> '1F4B2.png',
		':heavy_dollar_sign:'	=> '1F4B2.png',

		'2695'	=> '2695.png',
		':medical_symbol:'	=> '2695.png',

		'267B'	=> '267B.png',
		':recycling_symbol:'	=> '267B.png',

		'269C'	=> '269C.png',
		':fleur_de_lis:'	=> '269C.png',

		'1F531'	=> '1F531.png',
		':trident_emblem:'	=> '1F531.png',

		'1F4DB'	=> '1F4DB.png',
		':name_badge:'	=> '1F4DB.png',

		'1F530'	=> '1F530.png',
		':japanese_symbol_for_beginner:'	=> '1F530.png',

		'2B55'	=> '2B55.png',
		':hollow_red_circle:'	=> '2B55.png',
		':o:'	=> '2B55.png',

		'2705'	=> '2705.png',
		':check_mark_button:'	=> '2705.png',

		'2611'	=> '2611.png',
		':check_box_with_check:'	=> '2611.png',

		'2714'	=> '2714.png',
		':check_mark:'	=> '2714.png',

		'274C'	=> '274C.png',
		':cross_mark:'	=> '274C.png',
		':x:'	=> '274C.png',

		'274E'	=> '274E.png',
		':cross_mark_button:'	=> '274E.png',

		'27B0'	=> '27B0.png',
		':curly_loop:'	=> '27B0.png',

		'27BF'	=> '27BF.png',
		':double_curly_loop:'	=> '27BF.png',

		'303D'	=> '303D.png',
		':part_alternation_mark:'	=> '303D.png',

		'2733'	=> '2733.png',
		':eight_spoked_asterisk:'	=> '2733.png',

		'2734'	=> '2734.png',
		':eight_pointed_star:'	=> '2734.png',

		'2747'	=> '2747.png',
		':sparkle:'	=> '2747.png',

		'00A9'	=> '00A9.png',
		':copyright:'	=> '00A9.png',

		'00AE'	=> '00AE.png',
		':registered:'	=> '00AE.png',

		'2122'	=> '2122.png',
		':trade_mark:'	=> '2122.png',
		':tm:'	=> '2122.png',

		'1F520'	=> '1F520.png',
		':input_latin_uppercase:'	=> '1F520.png',
		':capital_abcd:'	=> '1F520.png',

		'1F521'	=> '1F521.png',
		':input_latin_lowercase:'	=> '1F521.png',
		':abcd:'	=> '1F521.png',

		'1F522'	=> '1F522.png',
		':input_numbers:'	=> '1F522.png',
		':1234:'	=> '1F522.png',

		'1F523'	=> '1F523.png',
		':input_symbols:'	=> '1F523.png',

		'1F524'	=> '1F524.png',
		':input_latin_letters:'	=> '1F524.png',
		':abc:'	=> '1F524.png',

		'1F170'	=> '1F170.png',
		':a_button_blood_type:'	=> '1F170.png',
		':a:'	=> '1F170.png',

		'1F18E'	=> '1F18E.png',
		':ab_button_blood_type:'	=> '1F18E.png',
		':ab:'	=> '1F18E.png',

		'1F171'	=> '1F171.png',
		':b_button_blood_type:'	=> '1F171.png',
		':b:'	=> '1F171.png',

		'1F191'	=> '1F191.png',
		':cl_button:'	=> '1F191.png',
		':cl:'	=> '1F191.png',

		'1F192'	=> '1F192.png',
		':cool_button:'	=> '1F192.png',
		':cool:'	=> '1F192.png',

		'1F193'	=> '1F193.png',
		':free_button:'	=> '1F193.png',
		':free:'	=> '1F193.png',

		'2139'	=> '2139.png',
		':information:'	=> '2139.png',
		':information_source:'	=> '2139.png',

		'1F194'	=> '1F194.png',
		':id_button:'	=> '1F194.png',
		':id:'	=> '1F194.png',

		'24C2'	=> '24C2.png',
		':circled_m:'	=> '24C2.png',

		'1F195'	=> '1F195.png',
		':new_button:'	=> '1F195.png',
		':new:'	=> '1F195.png',

		'1F196'	=> '1F196.png',
		':ng_button:'	=> '1F196.png',
		':ng:'	=> '1F196.png',

		'1F17E'	=> '1F17E.png',
		':o_button_blood_type:'	=> '1F17E.png',
		':o2:'	=> '1F17E.png',

		'1F197'	=> '1F197.png',
		':ok_button:'	=> '1F197.png',
		':ok:'	=> '1F197.png',

		'1F17F'	=> '1F17F.png',
		':p_button:'	=> '1F17F.png',
		':parking:'	=> '1F17F.png',

		'1F198'	=> '1F198.png',
		':sos_button:'	=> '1F198.png',
		':sos:'	=> '1F198.png',

		'1F199'	=> '1F199.png',
		':up_button:'	=> '1F199.png',
		':up:'	=> '1F199.png',

		'1F19A'	=> '1F19A.png',
		':vs_button:'	=> '1F19A.png',
		':vs:'	=> '1F19A.png',

		'1F534'	=> '1F534.png',
		':red_circle:'	=> '1F534.png',

		'1F7E0'	=> '1F7E0.png',
		':orange_circle:'	=> '1F7E0.png',

		'1F7E1'	=> '1F7E1.png',
		':yellow_circle:'	=> '1F7E1.png',

		'1F7E2'	=> '1F7E2.png',
		':green_circle:'	=> '1F7E2.png',

		'1F535'	=> '1F535.png',
		':blue_circle:'	=> '1F535.png',

		'1F7E3'	=> '1F7E3.png',
		':purple_circle:'	=> '1F7E3.png',

		'1F7E4'	=> '1F7E4.png',
		':brown_circle:'	=> '1F7E4.png',

		'26AB'	=> '26AB.png',
		':black_circle:'	=> '26AB.png',

		'26AA'	=> '26AA.png',
		':white_circle:'	=> '26AA.png',

		'1F7E5'	=> '1F7E5.png',
		':red_square:'	=> '1F7E5.png',

		'1F7E7'	=> '1F7E7.png',
		':orange_square:'	=> '1F7E7.png',

		'1F7E8'	=> '1F7E8.png',
		':yellow_square:'	=> '1F7E8.png',

		'1F7E9'	=> '1F7E9.png',
		':green_square:'	=> '1F7E9.png',

		'1F7E6'	=> '1F7E6.png',
		':blue_square:'	=> '1F7E6.png',

		'1F7EA'	=> '1F7EA.png',
		':purple_square:'	=> '1F7EA.png',

		'1F7EB'	=> '1F7EB.png',
		':brown_square:'	=> '1F7EB.png',

		'2B1B'	=> '2B1B.png',
		':black_large_square:'	=> '2B1B.png',

		'2B1C'	=> '2B1C.png',
		':white_large_square:'	=> '2B1C.png',

		'25FC'	=> '25FC.png',
		':black_medium_square:'	=> '25FC.png',

		'25FB'	=> '25FB.png',
		':white_medium_square:'	=> '25FB.png',

		'25FE'	=> '25FE.png',
		':black_medium_small_square:'	=> '25FE.png',

		'25FD'	=> '25FD.png',
		':white_medium_small_square:'	=> '25FD.png',

		'25AA'	=> '25AA.png',
		':black_small_square:'	=> '25AA.png',

		'25AB'	=> '25AB.png',
		':white_small_square:'	=> '25AB.png',

		'1F536'	=> '1F536.png',
		':large_orange_diamond:'	=> '1F536.png',

		'1F537'	=> '1F537.png',
		':large_blue_diamond:'	=> '1F537.png',

		'1F538'	=> '1F538.png',
		':small_orange_diamond:'	=> '1F538.png',

		'1F539'	=> '1F539.png',
		':small_blue_diamond:'	=> '1F539.png',

		'1F53A'	=> '1F53A.png',
		':red_triangle_pointed_up:'	=> '1F53A.png',

		'1F53B'	=> '1F53B.png',
		':red_triangle_pointed_down:'	=> '1F53B.png',

		'1F4A0'	=> '1F4A0.png',
		':diamond_with_a_dot:'	=> '1F4A0.png',

		'1F518'	=> '1F518.png',
		':radio_button:'	=> '1F518.png',

		'1F533'	=> '1F533.png',
		':white_square_button:'	=> '1F533.png',

		'1F532'	=> '1F532.png',
		':black_square_button:'	=> '1F532.png',

		'1F3C1'	=> '1F3C1.png',
		':chequered_flag:'	=> '1F3C1.png',

		'1F6A9'	=> '1F6A9.png',
		':triangular_flag:'	=> '1F6A9.png',

		'1F38C'	=> '1F38C.png',
		':crossed_flags:'	=> '1F38C.png',

		'1F3F4'	=> '1F3F4.png',
		':black_flag:'	=> '1F3F4.png',

		'1F3F3'	=> '1F3F3.png',
		':white_flag:'	=> '1F3F3.png',

		'1F1EA'	=> '1F1EA.png',
		':flag_germany:'	=> '1F1EA.png',

		'1F1FA'	=> '1F1FA.png',
		':flag_european_union:'	=> '1F1FA.png',

		'E007F'	=> 'E007F.png',
		':flag_england:'	=> 'E007F.png',

	);

	$ed = EMOTICONS_DIR;

	foreach ($EMOTICONS as $emo => $img) {
		$emostring = str_replace(
			//[" $emo "," $emo","$emo "],
			[" $emo "," $emo","$emo "], /* when surrounded by spaces or at the end of a line */
			"<img src=\"{$ed}{$img}\" class=\"emoticon\" alt=\"{$emo}\" title=\"{$emo}\">",
			$emostring
		);
	}

	return $emostring;

}

add_action('wp_head', 'plugin_emoticons', 0);
function plugin_emoticons() {
$pdir = plugin_geturl('emoticons');
echo '
		<!-- beginning of Google Noto Emoticons -->
		<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/emoticons.css">
		<!-- ending of Google Noto Emoticons -->';
}
 
  /* register to the hook */
add_filter('the_content','plugin_emoticons_filter');
  /* register for emoticon in comments */
add_filter('comment_text','plugin_emoticons_filter');
  /* register for the excerpt of a post */
add_filter('the_excerpt', 'plugin_emoticons_filter');
 
?>
