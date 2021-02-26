<?php

class Point
{

    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function swapPoints(Point $p1, Point $p2): void
    {
        $p1X = $p1->getX();
        $p1Y = $p1->getY();

        $p1->setX($p2->getX());
        $p1->setY($p2->getY());

        $p2->setX($p1X);
        $p2->setY($p1Y);
    }

    function getX(): int
    {
        return $this->x;
    }

    function getY(): int
    {
        return $this->y;
    }

    function setX(int $x): void
    {
        $this->x = $x;
    }

    function setY(int $y): void
    {
        $this->y = $y;
    }

}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

$p1->swapPoints($p1, $p2);

echo "(" . $p1->getX() . ", " . $p1->getY() . ")";
echo PHP_EOL;
echo "(" . $p2->getX() . ", " . $p2->getY() . ")";