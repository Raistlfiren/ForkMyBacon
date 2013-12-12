<?php

namespace ForkMyBacon\Bacon;


interface BaconInterface {

    /**
     * How is that bacon cut! YUM YUM YUM!
     *
     * @param array $type
     * @return null
     */
    public function cutsOfBacon(array $type = array());

    /**
     * Where be your bacon from?
     *
     * @param array $where
     * @return null
     */
    public function wheresMyBacon(array $where = array());

    /**
     * What type of dish is that bacon
     *
     * @param array $dish
     * @return null
     */
    public function baconDish(array $dish = array());

    /**
     * All of those healthy nutrients that bacon have
     *
     * @param array $nutrients
     * @return null
     */
    public function baconNutrients(array $nutrients = array());

} 