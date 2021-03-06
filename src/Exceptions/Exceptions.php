<?php

/**
 * A collection of Exception classes. 
 *
 * PHP version 5.3
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Exceptions
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   GIT: $Id$
 * @link      http://pear.php.net/package/PGraph
 * @since     File available since Release 1.0
 */

include "PGraphException.php";


/**
 * Exception thrown if a vertex doesn't exist.
 * 
 * @category  PGraphNoVertexException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphNoVertexException extends PGraphException
{

    /**
     * Constructor to create the NoVertexException.
     * 
     * @param mixed $args The arguments to be embedded into
     *                    the Exception message.
     */
    public function __construct($args)
    {
        parent::__construct($args, self::NO_VERTEX);
    }

}

/**
 * Exception thrown if an edge between 
 * certain vertices doesn't exist.
 * 
 * @category  PGraphNoEdgeException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphNoEdgeException extends PGraphException
{

    /**
     * Constructor to create the NoEdgeException.
     * 
     * @param mixed $args The arguments to be embedded into
     *                    the Exception message.
     */    
    public function __construct($args)
    {
        parent::__construct($args, self::NO_EDGE);
    }

}

/**
 * Exception thrown if an edge between two vertices
 * exists.
 * 
 * @category  PGraphEdgeExistsException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphEdgeExistsException extends PGraphException
{

    /**
     * Constructor to create the EdgeExistsException.
     * 
     * @param mixed $args The arguments to be embedded into
     *                    the Exception message.
     */    
    public function __construct($args)
    {
        parent::__construct($args, self::EDGE_EXISTS);
    }

}

/**
 * Exception thrown if a vertex exists.
 * 
 * @category  PGraphVertexExistsException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphVertexExistsException extends PGraphException
{
    /**
     * Constructor to create the VertexExistsException.
     * 
     * @param mixed $args The arguments to be embedded into
     *                    the Exception message.
     */
    public function __construct($args)
    {
        parent::__construct($args, self::VERTEX_EXISTS);
    }    
}

/**
 * Exception thrown if there is no path
 * betwee two vertices.
 * 
 * @category  PGraphNoPathException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphNoPathException extends PGraphException
{
    
    /**
     * Constructor to create the NoPathException.
     * 
     * @param mixed $args The arguments to be embedded into
     *                    the Exception message.
     */
    public function __construct($args)
    {
        parent::__construct($args, self::NO_PATH);
    }    
}

/**
 * Exception thrown if the parameter passed has an invalid
 * type.
 * 
 * @category  PGraphInvalidTypeException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphInvalidTypeException extends PGraphException
{
    /**
     * Constructor to create the InvalidTypeException.
     */
    public function __construct()
    {
        $emptyArr = array();
        parent::__construct($emptyArr, self::BAD_TYPE);
    }
}

/**
 * Exception thrown if a graph contains a negative cycle.
 * 
 * @category  PGraphNegativeCycleException
 * @package   PGraph
 * @author    Vilius Zaikauskas <zaikaus1@gmail.com>
 * @copyright 2013 Vilius Zaikauskas
 * @license   http://vzaikauskas.com/licenses/MIT.txt MIT
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PGraph
 * @since     Class available since Release 1.0
 */
class PGraphNegativeCycleException extends PGraphException
{
    /**
     * Constructor to create the NegativeCycleException.
     */
    public function __construct()
    {
        $emptyArr = array();
        parent::__construct($emptyArr, self::NEG_CYCLE);
    }
}

