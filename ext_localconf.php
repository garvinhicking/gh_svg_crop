<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'gh_svg_crop',
            'SvgCropDemo',
            [
                \GarvinHicking\SvgCrop\Controller\DummyController::class => 'list'
            ],
            // non-cacheable actions
            [
                \GarvinHicking\SvgCrop\Controller\DummyController::class => 'list'
            ]
        );
    }
);
