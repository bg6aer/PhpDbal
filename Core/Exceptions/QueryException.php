<?php
/**
 * Created by PhpStorm.
 * User: Iriven
 * Date: 16/07/2016
 * Time: 13:34
 */

namespace Iriven\Core\Exceptions;


class QueryException extends \Exception
{
    /**
     * @param string $alias
     * @param array  $registeredAliases
     *
     * @param $alias
     * @param $registeredAliases
     * @return QueryException
     */
    static public function unknownAlias($alias, $registeredAliases)
    {
        return new self("The given alias '" . $alias . "' is not part of " .
            "any FROM or JOIN clause table. The currently registered " .
            "aliases are: " . implode(", ", $registeredAliases) . ".");
    }

    /**
     * @param $alias
     * @param $registeredAliases
     * @return QueryException
     */
    static public function nonUniqueAlias($alias, $registeredAliases)
    {
        return new self("The given alias '" . $alias . "' is not unique " .
            "in FROM and JOIN clause table. The currently registered " .
            "aliases are: " . implode(", ", $registeredAliases) . ".");
    }
}
