<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_SupTwgSss_Node_Expression_Binary_Matches extends Twig_SupTwgSss_Node_Expression_Binary
{
    public function compile(Twig_SupTwgSss_Compiler $compiler)
    {
        $compiler
            ->raw('preg_match(')
            ->subcompile($this->getNode('right'))
            ->raw(', ')
            ->subcompile($this->getNode('left'))
            ->raw(')')
        ;
    }

    public function operator(Twig_SupTwgSss_Compiler $compiler)
    {
        return $compiler->raw('');
    }
}
