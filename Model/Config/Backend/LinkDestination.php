<?php


namespace Nubix\CookieNotification\Model\Config\Backend;

class LinkDestination implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $destination = array();

        $destination[] = [
            'value' => 1,
            'label' => __('Same Frame')
        ];
        $destination[] = [
            'value' => 2,
            'label' => __('New Window')
        ];

        return $destination;
    }
}
