<?php

class CountryRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct(Country::class);
    }

}