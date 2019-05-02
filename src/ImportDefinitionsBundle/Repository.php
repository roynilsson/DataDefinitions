<?php
/**
 * Import Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016-2018 w-vision AG (https://www.w-vision.ch)
 * @license    https://github.com/w-vision/ImportDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace ImportDefinitionsBundle;

use CoreShop\Bundle\ResourceBundle\Pimcore\PimcoreRepository;

class Repository extends PimcoreRepository
{
    /**
     * @param string $name
     * @return object|null
     */
    public function getByName($name)
    {
        $class = $this->metadata->getClass('model');

        if (!method_exists($class, 'getByName')) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Class %s has no getByName function',
                    $class
                )
            );
        }

        return $class::getByName($name);
    }
}
