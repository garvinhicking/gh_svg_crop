<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function () {

    $cropVariantsSlider = [
        'cropVariants' => [
            'default' => [
                'disabled' => true,
            ],
        ]
    ];

    $GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['slider'] = [
        'title' => 'Slider',
        'cropArea' => [
            'x' => 0,
            'y' => 0,
            'width' => 20,
            'height' => 20,
        ],
        'allowedAspectRatios' => [
            '3.2:1' => [
                'title' => '3.2:1',
                'value' => 3.2,
            ],
            'NaN' => [ // free
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0,
            ],
        ],
    ];

    $pluginSignature = 'ghsvgcrop_svgcropdemo';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:gh_svg_crop/Configuration/FlexForms/Plugin.xml'
    );

})();

