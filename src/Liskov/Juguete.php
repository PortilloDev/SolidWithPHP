
<?php 
// El objetivo de Liskov es que una Clase H extendida de P, entonces los objetos de P pueden ser sustituidos por objetos del tipo H.


// El objetivo del juguete es insertar figuras geometricas en los orificios que contienealos lados.
// Al tratar de insertar una figura en un orificio tenemos dos posibles resultados:
// 1. entro:verdadero
// 2. no entro:falso
// Para saber si una figura entra en el orificio,requerimos saber dos cosas:
// 1. El area de la fogira que queremos insertar
// 2. El area del orificio donde queremos insertar la figura

namespace App\Liskov;

class Jueguete
{
    protected $areas = [];

    public function insert(Figura $shape, $hole) :bool
    {
        return $shape->area <= $this->areas[$hole];
    }
}

abstract class figura
{
    abstract public function area(int $value):float;
}


class Ciruclo extends figura
{
    public function area(int $value):float
    {
        return M_PI * $value ^ 2;
    }
}

class Cuadrado extends figura
{
    public function area(int $value):float
    {
        return $value * $value;
    }
}