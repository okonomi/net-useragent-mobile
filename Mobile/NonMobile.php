<?php
//
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2003 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: KUBO Atsuhiro <kubo@isite.co.jp>                            |
// +----------------------------------------------------------------------+
//
// $Id: NonMobile.php,v 1.6 2003/11/14 07:09:49 kuboa Exp $
//

require_once(dirname(__FILE__) . '/Common.php');

/**
 * Non-Mobile Agent implementation
 *
 * Net_UserAgent_Mobile_NonMobile is a subclass of
 * {@link Net_UserAgent_Mobile_Common}, which implements non-mobile or
 * unimplemented user agents.
 *
 * SYNOPSIS:
 * <code>
 * require_once('Net/UserAgent/Mobile.php');
 *
 * $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/4.0';
 * $agent = &Net_UserAgent_Mobile::factory();
 * </code>
 *
 * @package  Net_UserAgent_Mobile
 * @category Networking
 * @author   KUBO Atsuhiro <kubo@isite.co.jp>
 * @access   public
 * @version  $Revision: 1.6 $
 * @see      Net_UserAgent_Mobile_Common
 */
class Net_UserAgent_Mobile_NonMobile extends Net_UserAgent_Mobile_Common
{

    /**#@+
     * @access public
     */

    // }}}
    // {{{ isNonMobile()

    /**
     * returns true
     *
     * @return boolean
     */
    function isNonMobile()
    {
        return true;
    }

    // }}}
    // {{{ parse()

    /**
     * parse HTTP_USER_AGENT string
     */
    function parse()
    {
        @list($this->name, $this->version) =
            explode('/', $this->getUserAgent());
    }

    /**#@-*/
}

/*
 * Local Variables:
 * mode: php
 * coding: iso-8859-1
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * indent-tabs-mode: nil
 * End:
 */
?>
