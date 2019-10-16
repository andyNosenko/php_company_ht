<?php


class C implements Countable
{
    private $arr;
    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */

    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }



    public function count(): int
    {
        // TODO: Implement count() method.
        return count($this->arr);
    }
}

$c = new C([1,2,3,5]);
echo count($c);