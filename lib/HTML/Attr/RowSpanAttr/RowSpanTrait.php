<?php

namespace DOMAssembly\HTML\Attr\RowSpanAttr {

    use DOMAssembly\HTML\Attr\RowSpanAttr;

    trait RowSpanTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setRowSpan(
            int $value
        )
        {
            $document = $this->getDocument();
            $attr = RowSpanAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}