<?php

namespace A\B\C;

class Name extends Extended implements Countable, IName
{
    public function name()
    {
        __FILE__;
        PHP_VERSION;
        XYZ;
        user_defined();
        phpversion();
        error_reporting(E_ALL);
        $_SERVER['DOCUMENT_ROOT'];
        $_GET['x'];
        $_POST['x'];
        $x = array("x" => "y", ["x" => "y"]);
        parent::a();
        self::class;
        self::$x;
        self::a();
        static::$x;
        static::a();
        $this->x;
        $this->a();
        $this->$x();
        $this->a()->c()->d();
        Abcd::$x;
        Abcd::X;
        echo X::class;
        $x = new X();
        $x = new self();
        $x = new static();
        $abc->a();
        $abc::a();
        $abc::$x;
        $abc->$x();
        $this->x = array_merge($this->y, $z);
        $a = isset($this->b) ? $this->b->c('d') : new X();
    }
}




