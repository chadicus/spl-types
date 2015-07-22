<?php
namespace Chadicus\Spl\Types;

/**
 * Defines the base AbstractEnum class.
 */
abstract class AbstractEnum
{
    /**
     * String value of enum.
     *
     * @var string
     */
    private $value;

    /**
     * Construct a new AbstractEnum object.
     *
     * @param string $value The string value of the enum.
     */
    final private function __construct($value)
    {
        $this->value = strtolower($value);
    }

    /**
     * Returns the string value of the enum.
     *
     * @return string
     */
    final public function __toString()
    {
        return $this->value;
    }

    /**
     * Returns a new instance of the AbstractEnum class.
     *
     * @param string $name      The string value of the enum.
     * @param array  $arguments Unused.
     *
     * @return AbstractEnum
     *
     * @throws \UnexpectedValueException Thrown if $name is not a defined Enum constant.
     */
    final public static function __callStatic($name, array $arguments)
    {
        $class = get_called_class();
        if (defined("{$class}::" . strtoupper($name))) {
            return new static($name);
        }

        throw new \UnexpectedValueException("'{$name}' is not a valid {$class}");
    }
}
