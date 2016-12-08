<?php
/**
 * share functions
 *
 * @author  Roffun
 * @copyright Copyright (C) 2015 - today: Roffun | https://webcot.net/cotonti/extensions/share-plugin
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_langfile('share', 'plug');

function share()
{
        global $cfg;
        if ($cfg['jquery'])
        {
                $t = new XTemplate(cot_tplfile('share', 'plug'));
                if ($cfg['plugin']['share']['sh_counter'])
                {
                        $t->assign(array(
                                'SHARE_GP_COUNTER' => '<q data-counter="gp"></q>',
                                'SHARE_VK_COUNTER' => '<q data-counter="vk"></q>',
                                'SHARE_FB_COUNTER' => '<q data-counter="fb"></q>',
                                'SHARE_MR_COUNTER' => '<q data-counter="mr"></q>',
                                'SHARE_LI_COUNTER' => '<q data-counter="li"></q>',
                                'SHARE_OK_COUNTER' => '<q data-counter="ok"></q>',
                                'SHARE_TM_COUNTER' => '<q data-counter="tm"></q>',
                                'SHARE_PT_COUNTER' => '<q data-counter="pt"></q>',
                                'SHARE_RD_COUNTER' => '<q data-counter="rd"></q>',
                                'SHARE_SU_COUNTER' => '<q data-counter="su"></q>',
                                'SHARE_PO_COUNTER' => '<q data-counter="po"></q>',
                                'SHARE_BF_COUNTER' => '<q data-counter="bf"></q>',
                                'SHARE_XI_COUNTER' => '<q data-counter="xi"></q>'));
                }
                $t->assign(array('SHARE_MESSAGERS' => $cfg['plugin']['share']['sh_messagers'],'SHARE_SIZE' => 'sh-' . $cfg['plugin']['share']['sh_size']));
                $t->parse('MAIN');

                return $t->text('MAIN');
        }

}
$share = share();
