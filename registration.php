<?php
/**
 * ExampleThemeSkeleton theme for Magento
 *
 * @package     Yireo_ExampleThemeSkeleton
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2018 Yireo (https://www.yireo.com/)
 * @license     OSL
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::THEME,
    'frontend/Yireo/example',
    __DIR__
);
