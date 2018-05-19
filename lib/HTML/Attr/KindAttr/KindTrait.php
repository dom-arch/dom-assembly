<?php

namespace DOMAssembly\HTML\Attr\KindAttr {

    use DOMAssembly\HTML\Attr\KindAttr;

    trait KindTrait
    {
        /**
         * @param string $value
         *
         * @return $this
         */
        public function setKind(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = KindAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}