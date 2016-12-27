<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
* ==================== */

/**
 * share global
 *
 * @author  Roffun
 * @copyright Copyright (c) 2015 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('share', 'plug');
Resources::linkFileFooter($cfg['plugins_dir'] . '/share/js/goodshare.min.js');
Resources::embedFooter('$(document).ready(function(){$(".goodshare").css("display","block");$(".goodshare [data-type=toggle]").click(function(){$(".goodshare .hidden").toggle();});$(".goodshare .sh-close").click(function(){$(".goodshare .hidden").toggle();});});');
