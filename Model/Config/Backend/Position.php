<?php


namespace Nubix\CookieNotification\Model\Config\Backend;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $position = array();

        $position[] = [
            'value' => 'top',
            'label' => __('Top')
        ];
        $position[] = [
            'value' => 'bottom',
            'label' => __('Bottom')
        ];

        return $position;
    }
}
