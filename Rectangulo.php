<?php


class rectangulo
{
    private float $base;
    private float $altura;

// validamos dentro del contructor como vimos en Java
    public function __construct($base, $altura)
    {
        if ($base <= 0) {
            throw new InvalidArgumentException("La base $base no puede ser menor o igual que 0");
        }
        if ($altura <= 0) {
            throw new InvalidArgumentException("La altura $altura no puede ser menor o igual que 0");
        }

        $this->base = $base;
        $this->altura = $altura;
    }

    /* Getters */
    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getBase(): float
    {
        return $this->base;
    }

    /* Setters*/

    public function setBase( float $base)
    {
        if ($base <= 0) {
            throw new InvalidArgumentException("La base $base no puede ser menor o igual que 0");
        }
        $this->base = $base;
    }

    public function setAltura(float $altura)
    {
        if ($altura <= 0) {
            throw new InvalidArgumentException("La altura $altura no puede ser menor o igual que 0");
        }
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->base * $this->altura;
    }

}


try {
    $rectangulo = new rectangulo(-6, -10);
    echo $rectangulo->calcularArea();
} catch (exception $e) {
    echo $e->getMessage();
}

?>