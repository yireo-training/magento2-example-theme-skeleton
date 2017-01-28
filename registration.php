<?php
/**
 * TestThemeSkeleton theme for Magento
 *
 * @package     Yireo_TestThemeSkeleton
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     OSL
 */

use Magento\Framework\Component\ComponentRegistrar;

$themeDir = basename(__DIR__);
ComponentRegistrar::register(
    ComponentRegistrar::THEME,
    'frontend/Yireo/'.$themeDir,
    __DIR__
);
