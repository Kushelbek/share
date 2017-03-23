<?php

/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * share rc
 *
 * @author  Roffun
 * @copyright Copyright (c) 2015 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');
if ($cfg['jquery'] && $cfg['turnajax'] && $cfg['plugin']['share']['css']) {
   Resources::addFile($cfg['plugins_dir'] . '/share/css/share.css','css');
   Resources::addFile($cfg['plugins_dir'] . '/share/js/goodshare.min.js','js','99');
}
