<?php

namespace Krish\Employee\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface as ArrayInterface;

class Status implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            0 => [
                'label' => 'Enable',
                'value' => '1'
            ],
            1 => [
                'label' => 'Desable',
                'value' => '0'
            ],
        ];

        return $options;
    }
} 