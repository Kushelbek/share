<?php

/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * share rc
 *
 * @author  WebRomen
 * @copyright Copyright (C) 2015 - today: WebRomen | https://github.com/WebRomen/share
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');
if ($cfg['jquery'] && $cfg['turnajax'] && $cfg['plugin']['share']['css']) {
   Resources::addFile($cfg['plugins_dir'] . '/share/css/share.css');
}