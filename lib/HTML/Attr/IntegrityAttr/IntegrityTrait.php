<?php

namespace DOMAssembly\HTML\Attr\IntegrityAttr {

    use DOMAssembly\HTML\Attr\IntegrityAttr;

    trait IntegrityTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setIntegrity(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = IntegrityAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}