<?php

namespace Nogara\SystemFields\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class CustomOptions implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'option1', 'label' => __('Option 1')],
            ['value' => 'option2', 'label' => __('Option 2')],
            ['value' => 'option3', 'label' => __('Option 3')],
        ];
    }
}
