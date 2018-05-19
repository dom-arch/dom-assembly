<?php

namespace DOMAssembly\HTML\Attr\SpanAttr {

    use DOMAssembly\HTML\Attr\SpanAttr;

    trait SpanTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setSpan(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = SpanAttr::of($document, $value);

            return $this->set($attr);
        }

        public function setSpanDefault()
        {
            return $this->setSpan(SpanAttr::VALUE_DEFAULT);
        }
    }
}