<?php

namespace DOMAssembly\HTML\Attr\DraggableAttr {

    use DOMAssembly\HTML\Attr\DraggableAttr;

    trait DraggableTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setDraggable(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = DraggableAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}