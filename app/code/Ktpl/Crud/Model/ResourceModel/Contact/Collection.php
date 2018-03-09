<?php

namespace Krish\Employee\Model\ResourceModel\Contact;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Krish\Employee\Model\Contact', 'Krish\Employee\Model\ResourceModel\Contact');
    }
}
