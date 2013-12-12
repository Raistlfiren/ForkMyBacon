<?php


namespace ForkMyBacon\Bacon;


class Bacon implements BaconInterface {

    public function cutsOfBacon(array $type = array())
    {
        return $type;
    }

    public function wheresMyBacon(array $where = array())
    {
        return $where;
    }

    public function baconDish(array $dish = array())
    {
        return $dish;
    }

    public function baconNutrients(array $nutrients = array())
    {
        return $nutrients;
    }

} 