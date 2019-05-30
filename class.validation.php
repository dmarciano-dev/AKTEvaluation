<?php
declare(strict_types=1);

namespace atk;

class Phone
{
    private $phone = "";

    /**
     * Phone constructor.
     * @param string $input
     */
    public function __construct(string $input)
    {
        // internal validation is done upon creation
        // if validation fails, leave it defaulted
        if ($this->isValidPhoneNumber($input)) {
            $this->phone = $input;
        }
    }

    /**
     * @return string - full phone number
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**,
     * @return string
     */
    public function getAreaCode(): string
    {
        return substr($this->phone, -10, 3);
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return substr($this->phone, -7, 3);
    }

    /**
     * @return string
     */
    public function getLineNumber(): string
    {
        return substr($this->phone, -4);
    }

    /**
     * @param string $phone - number to validate
     * @return bool - return true if it is valid
     * @note assumes number is sanitized
     */
    private function isValidPhoneNumber(string $phone): bool
    {
        // standard number length or no area code
        return strlen($phone) === 10 || strlen($phone) === 7;
    }
}
