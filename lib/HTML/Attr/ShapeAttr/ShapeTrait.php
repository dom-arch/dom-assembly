<?php

namespace DOMAssembly\HTML\Attr\ShapeAttr {

    use DOMAssembly\HTML\Attr\ShapeAttr;

    trait ShapeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setShape(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = ShapeAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setShapeDefault()
        {
            return $this->setShape(ShapeAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setShapeCircle()
        {
            return $this->setShape(ShapeAttr::VALUE_CIRCLE);
        }

        /**
         * @return $this
         */
        public function setShapePoly()
        {
            return $this->setShape(ShapeAttr::VALUE_POLY);
        }

        /**
         * @return $this
         */
        public function setShapeRect()
        {
            return $this->setShape(ShapeAttr::VALUE_RECT);
        }
    }
}