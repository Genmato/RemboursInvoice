<?php

class Genmato_RemboursInvoice_Model_Method_Invoice extends Genmato_Payment_Model_Method_Abstract
{

    protected $_code = 'invoice';
    protected $_formBlockType = 'genmato_remboursinvoice/invoice_form';
    protected $_infoBlockType = 'genmato_remboursinvoice/invoice_info';

    /**
     * Assign data to info model instance
     *
     * @param   mixed $data
     *
     * @return  Mage_Payment_Model_Method_Purchaseorder
     */
    public function assignData($data)
    {
        if (!($data instanceof Varien_Object)) {
            $data = new Varien_Object($data);
        }

        $this->getInfoInstance()->setPoNumber($data->getPoNumber());
        return $this;
    }
}