<?php

namespace Namespace;

class AClass extends Extended implements Countable {
    public function () {
        func();
        $this->x = array_merge($this->y, $z);
    }
}
        __FILE__;
        PHP_VERSION;
        phpversion();
        USER_CONSTANT;
        $_SERVER['DOCUMENT_ROOT'];
        User::class;
        User::CONSTANT;
        User::$x;
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
        $x = array("x" => "y", ["x" => "y"]);
        $x = new X();
        $x = new self();
        $x = new static();
        $abc->a();
        $abc::a();
        $abc::$x;
        $abc->$x();
        $this->x = array_merge($this->y, $z);
        $a = isset($this->b) ? $this->b->c('d') : new X();

        // string interpolation
        echo "x $x";
        echo "x ${$x}";
        echo "x $x[0]";
        echo "x $x[xyz]";
        echo "x $x->y";
        echo "{$x} {$x->y} {$x['y']}";
        echo "x {$x->$y}";
        echo "x {$x->{$y[1]}} z";
        $x = <<<EOT
        <div>
            <p>$x</p>
            <p>${x}</p>
            <p>{$x}</p>
            <p>{ $x }</p>
            <p>{$x[1]}</p>
            <p>{$x['y']}</p>
            <p>$x->y</p>
            <p>{$x->y}</p>
            <p>{$x->y[1]}</p>
            <p>{$x->y()}</p>
            <p>{$x->y()->z()}</p>
        </div>
EOT;


    }
}
