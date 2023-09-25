<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'gh_svg_crop',
            'SvgCropDemo',
            'SVG Crop Demo'
        );
    }
);
