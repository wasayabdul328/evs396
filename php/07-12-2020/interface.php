<?php

interface Car
{

    public function getName();
}

interface Vechile
{
    public function myName();
}


class Honda implements Car, Vechile
{

    public function getName()
    {
    }

    public function myName()
    {
    }
}

class Civic implements Car
{
    public function getName()
    {
    }
}


