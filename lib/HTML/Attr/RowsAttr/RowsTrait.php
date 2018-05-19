<?php

namespace DOMAssembly\HTML\Attr\RowsAttr {

    use DOMAssembly\HTML\Attr\RowsAttr;

    trait RowsTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setRows(
            int $value
        )
        {
            $document = $this->getDocument();
            $attr = RowsAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}