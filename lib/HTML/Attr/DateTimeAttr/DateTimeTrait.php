<?php

namespace DOMAssembly\HTML\Attr\DateTimeAttr {

    use DOMAssembly\HTML\Attr\DateTimeAttr;

    trait DateTimeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setDateTime(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = DateTimeAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}