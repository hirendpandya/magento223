<?php

namespace Ktpl\Grid\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Ktpl\Grid\Model\Grid',
            'Ktpl\Grid\Model\ResourceModel\Grid'
        );
    }
}
