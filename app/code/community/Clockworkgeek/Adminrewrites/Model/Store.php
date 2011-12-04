<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Core
 * @copyright   Copyright (c) 2009 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Store model
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 * @category   Mage
 * @package    Mage_Core
 */
class Clockworkgeek_Adminrewrites_Model_Store extends Mage_Core_Model_Store
{
	const XML_PATH_ADMIN_REWRITES = 'admin/url/rewrites';

    /**
     * Remove script file name from url in case when server rewrites are enabled
     * Overwrite to re-enable in admin.
     * CAUTION! Rewrites were blocked in this case for a reason.
     *
     * @param   string $url
     * @return  string
     */
    protected function _updatePathUseRewrites($url)
    {
        if (($this->isAdmin() && !($this->getConfig(self::XML_PATH_ADMIN_REWRITES)))
            || !$this->getConfig(self::XML_PATH_USE_REWRITES)
            || !Mage::isInstalled()) {
            $url .= basename($_SERVER['SCRIPT_FILENAME']).'/';
        }
        return $url;
    }

}
