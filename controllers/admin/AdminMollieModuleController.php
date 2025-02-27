<?php
/**
 * Mollie       https://www.mollie.nl
 *
 * @author      Mollie B.V. <info@mollie.nl>
 * @copyright   Mollie B.V.
 * @license     https://github.com/mollie/PrestaShop/blob/master/LICENSE.md
 *
 * @see        https://github.com/mollie/PrestaShop
 * @codingStandardsIgnoreStart
 */
class AdminMollieModuleController extends ModuleAdminController
{
    public function init()
    {
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminMollieSettings'));
    }
}
