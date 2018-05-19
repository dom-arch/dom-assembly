<?php

namespace DOMAssembly\HTML\Attr\PatternAttr {

    use DOMAssembly\HTML\Attr\PatternAttr;

    trait PatternTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setPattern(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = PatternAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}