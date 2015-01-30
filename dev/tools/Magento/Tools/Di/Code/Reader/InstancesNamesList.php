<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Tools\Di\Code\Reader;

/**
 * Interface InstancesNamesList
 *
 * @package Magento\Tools\Di\Code\Reader
 */
interface InstancesNamesList {

    /**
     * Retrieves list of classes for given path
     *
     * @param $path
     *
     * @return array
     */
    public function getList($path);
}