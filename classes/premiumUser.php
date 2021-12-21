<?php

class PremiumUser extends User
{
    public $coupon;
    public $discount;

    function __construct($username, $name, $lastname, $email) {
        parent::__construct($username, $name, $lastname, $email);
    }

    public function setDiscount($coupon)
    {
        $this->coupon = $coupon;

        if ($coupon === 'standard') {
            $this->discount = 30;
        } elseif ($coupon === 'premium') {
            $this->discount = 15;
        } else {
            $this->discount = 0;
        }
    }
}