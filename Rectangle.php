<?php


class Rectangle
{
public int $width;
public int $height;

    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // tinh dien tich
    public function getArea(): int {
        return $this->height * $this->width;
    }

    //tinh chu vi

    public function  getPerimeter(): int{
        return (($this->width + $this->height) * 2);
    }

    public function display(): string{
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

$rectangle = new Rectangle(30,40);
echo $rectangle->display();