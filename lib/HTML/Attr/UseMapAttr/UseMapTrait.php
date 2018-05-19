<?php

namespace DOMAssembly\HTML\Attr\UseMapAttr {

    use DOMAssembly\HTML\Attr\UseMapAttr;
    use DOMAssembly\HTML\Tag\MapContainerTag;

    trait UseMapTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setUseMap(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = UseMapAttr::of($document, $value);

            return $this->set($attr);
        }

        public function setUseMapFromMap(
            MapContainerTag $map
        )
        {
            return $this->setUseMap('#' . $map->getId());
        }
    }
}