<?php
/**
 * Mutagenesis
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/mutateme/blob/rewrite/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Mutagenesis
 * @package    Mutagenesis
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/mutateme/blob/rewrite/LICENSE New BSD License
 */

require_once 'Mutagenesis/Mutation/OperatorComparisonNotEqual.php';

class Mutagenesis_Mutation_OperatorComparisonNotEqualTest extends PHPUnit_Framework_TestCase
{

    public function testReturnsTokenEquivalentToOperatorComparisonEqual()
    {
        $mutation = new \Mutagenesis\Mutation\BooleanAnd;
        $in = array(10 => array(T_CONSTANT_ENCAPSED_STRING, "DAVEDAVEDAVE"));

        list($code, $string) = $mutation->getMutation($in, 10);
        $this->assertEquals(T_CONSTANT_ENCAPSED_STRING, $code);
        $this->assertNotEquals("DAVEDAVEDAVE", $string);
        $this->assertType("string", $string);
    }

}
