<?php
namespace Ktpl\Grid\Model;

use Magento\Framework\Data\OptionSourceInterface;

class Gender implements OptionSourceInterface
{
    /**
     * Get Grid row status type labels array.
     * @return array
     */
    public function getGenderArray()
    {
        $options = ['1' => __('Male'),'2' => __('Female')];
        return $options;
    }

    /**
     * Get Grid row status labels array with empty value for option element.
     *
     * @return array
     */
    public function getAllOptions()
    {
        $res = $this->getOptions();
        array_unshift($res, ['value' => '', 'label' => '']);
        return $res;
    }

    /**
     * Get Grid row type array for option element.
     * @return array
     */
    public function getOptions()
    {
        $res = [];
        foreach ($this->getOptionArray() as $index => $value) {
            $res[] = ['value' => $index, 'label' => $value];
        }
        return $res;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}
