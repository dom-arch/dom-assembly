<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setRel(
            string $value = null
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = RelAttr::of($document, $value);

                return $this->set($attr);
            }

            return $this->del(RelAttr::NAME);
        }
    }
}