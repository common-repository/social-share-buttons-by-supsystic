<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_SupTwgSss_Node_Expression_Binary_In extends Twig_SupTwgSss_Node_Expression_Binary
{
    public function compile(Twig_SupTwgSss_Compiler $compiler)
    {
        $compiler
            ->raw('Twig_SupTwgSss_in_filter(')
            ->subcompile($this->getNode('left'))
            ->raw(', ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Twig_SupTwgSss_Compiler $compiler)
    {
        return $compiler->raw('in');
    }
}
