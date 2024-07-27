<?php

class Car
{
    private string $color;
    private string $company;

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }


}