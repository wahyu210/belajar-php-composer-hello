<?php
namespace MochamadWahyu\Belajar;
class Customer
{
    public function __construct(private string $name)
    {

    }
    public function sayhello(string $name)
    {
        return "hello $name, my name is $this->name";
    }
}