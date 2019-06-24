<?php
declare(strict_types=1);

namespace zen\types;

use \InvalidArgumentException;

class PositiveInteger implements PositiveIntegerInterface
{
    private $integer;

    public function __construct(int $input)
    {
        if(!$input > 0){
            if($input === 0){
                throw new InvalidArgumentException("Given value '$input' is zero and can not be accepted as a positive integer", 1001);
            }
            if($input < 0){
                throw new InvalidArgumentException("Given value '$input' is negative and can not be accepted as a positive integer", 1002);
            }
        }

        $this->integer = $input;
    }

    public function value(): int
    {
        return $this->integer;
    }
}