<?php

namespace DOMAssembly\HTML\Attr\CoordsAttr {

    use DOMAssembly\HTML\Attr\CoordsAttr;

    trait CoordsTrait
    {
        /**
         * @param float $x
         * @param float $y
         * @return $this
         */
        public function addCoord(
            float $x,
            float $y
        )
        {
            $coords = $this->get(CoordsAttr::NAME) ?? '';
            $positions = explode(',', $coords);
            array_push($positions, var_export($x, true), var_export($y, true));
            $coords = implode(',', $positions);

            $document = $this->getDocument();
            $attr = CoordsAttr::of($document, $coords);

            return $this->set($attr);
        }

        /**
         * @param string[] $values
         * @return $this
         */
        public function addCoords(
            array $values
        )
        {
            foreach ($values as $value) {
                $this->addCoord(...$value);
            }

            return $this;
        }
    }
}