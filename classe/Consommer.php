<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 11:51
 */

trait Consommer
{
protected $charge;

    /**
     * @return mixed
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * @param mixed $charge
     */
    public function nbCharge($charge): void
    {
       return $this->nombrecharge;
    }
}