<?php

/**
 * @category    Genmato
 * @package     Genmato_RemboursInvoice
 * @copyright   Copyright (c) 2015 Genmato BV (https://genmato.com)
 */
class Genmato_RemboursInvoice_Block_Invoice_Form extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('genmato/invoice/form.phtml');
    }

    public function showInputForm()
    {
        return Mage::getStoreConfigFlag('payment/invoice/input_po', Mage::app()->getStore());
    }
}