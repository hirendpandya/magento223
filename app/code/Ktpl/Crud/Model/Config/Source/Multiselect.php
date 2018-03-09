<?php

namespace Krish\Employee\Model\Config\Source;

class Multiselect implements \Magento\Framework\Option\ArrayInterface
{

	public function toOptionArray()
    {
        return [
            ['value' => 'Ahmedabad', 'label' => __('Ahmedabad')],
            ['value' => 'Surat', 'label' => __('Surat')],
            ['value' => 'Rajkot', 'label' => __('Rajkot')],
        ];
    }
}