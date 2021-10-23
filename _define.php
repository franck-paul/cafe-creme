<?php
/**
 * @brief cafe-creme, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'Café Crème',                      // Name
    'Structure Aorakit-1B de Kozlika', // Description
    'Franck Paul',                     // Author
    '1.7',                             // Version
    [
        'requires' => [['core', '2.19']], // Dependencies
        'type'     => 'theme',            // Type

        'details'    => 'https://open-time.net/?q=cafe-creme',       // Details URL
        'support'    => 'https://github.com/franck-paul/cafe-creme', // Support URL
        'repository' => 'https://raw.githubusercontent.com/franck-paul/cafe-creme/main/dcstore.xml'
    ]
);
