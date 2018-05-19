<?php

namespace DOMAssembly\HTML\Attr\SelectedAttr {

    use DOMAssembly\HTML\Attr\SelectedAttr;

    trait SelectedTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setSelected(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = SelectedAttr::of($document, SelectedAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(SelectedAttr::NAME);
        }
    }
}