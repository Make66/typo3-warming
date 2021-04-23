<?php

defined('TYPO3') or die();

/*
 * This file is part of the TYPO3 CMS extension "cache_warmup".
 *
 * Copyright (C) 2021 Elias Häußler <elias@haeussler.dev>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

$GLOBALS['SiteConfiguration']['site']['columns']['xml_sitemap_path'] = [
    'label' => 'LLL:EXT:cache_warmup/Resources/Private/Language/locallang_db.xlf:sites.xml_sitemap_path.label',
    'description' => 'LLL:EXT:cache_warmup/Resources/Private/Language/locallang_db.xlf:sites.xml_sitemap_path.description',
    'config' => [
        'type' => 'input',
        'valuePicker' => [
            'items' => [
                [
                    \EliasHaeussler\Typo3CacheWarmup\Utility\SitemapUtility::DEFAULT_XML_SITEMAP_PATH,
                    \EliasHaeussler\Typo3CacheWarmup\Utility\SitemapUtility::DEFAULT_XML_SITEMAP_PATH,
                ],
            ],
        ],
        'eval' => 'trim',
    ],
];

$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = str_replace(
    'base,',
    'base, xml_sitemap_path,',
    $GLOBALS['SiteConfiguration']['site']['types']['0']['showitem']
);
