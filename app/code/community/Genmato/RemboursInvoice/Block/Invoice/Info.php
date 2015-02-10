<?php

/**
 * @category    Genmato
 * @package     Genmato_RemboursInvoice
 * @copyright   Copyright (c) 2015 Genmato BV (https://genmato.com)
 */
class Genmato_RemboursInvoice_Block_Invoice_Info extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('genmato/invoice/info.phtml');
    }

    public function toPdf()
    {
        $this->setTemplate('genmato/invoice/pdf/info.phtml');
        return $this->toHtml();
    }

    public function showInputForm()
    {
        return Mage::getStoreConfigFlag('payment/invoice/input_po', Mage::app()->getStore());
    }
}