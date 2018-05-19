<?php

namespace DOMAssembly\HTML\Attr\ColSpanAttr {

    use DOMAssembly\HTML\Attr\ColSpanAttr;

    trait ColSpanTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setColSpan(
            int $value
        )
        {
            $document = $this->getDocument();
            $attr = ColSpanAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}