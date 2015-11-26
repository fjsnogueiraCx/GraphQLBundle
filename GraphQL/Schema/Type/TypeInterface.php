<?php
/**
 * Date: 26.11.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\GraphQLBundle\GraphQL\Schema\Type;


interface TypeInterface
{
    /**
     * @param null  $value
     * @param array $args
     * @param null  $parent
     *
     * @return mixed
     */
    public function resolve($value = null, $args = [], $parent = null);
}