<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2014 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @package    Isotope
 * @link       http://isotopeecommerce.org
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

namespace Isotope\Interfaces;

/**
 * Documents print a collection
 */
interface IsotopeDocument
{

    /**
     * Generate the document and send it to browser
     * @param   IsotopeProductCollection
     */
    public function outputToBrowser(IsotopeProductCollection $objCollection);

    /**
     * Generate the document and store it to a given path
     * @param   IsotopeProductCollection
     * @param   string Absolute path to the directory the file should be stored in
     * @return  string Absolute path to the file
     */
    public function outputToFile(IsotopeProductCollection $objCollection, $strDirectoryPath);
}
