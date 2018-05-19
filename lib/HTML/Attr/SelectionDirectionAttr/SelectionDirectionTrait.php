<?php

namespace DOMAssembly\HTML\Attr\SelectionDirectionAttr {

    use DOMAssembly\HTML\Attr\SelectionDirectionAttr;

    trait SelectionDirectionTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setSelectionDirection(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = SelectionDirectionAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setSelectionDirectionBackward()
        {
            $document = $this->getDocument();
            $attr = SelectionDirectionAttr::of($document, SelectionDirectionAttr::VALUE_BACKWARD);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setSelectionDirectionForward()
        {
            $document = $this->getDocument();
            $attr = SelectionDirectionAttr::of($document, SelectionDirectionAttr::VALUE_FORWARD);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setSelectionDirectionNone()
        {
            $document = $this->getDocument();
            $attr = SelectionDirectionAttr::of($document, SelectionDirectionAttr::VALUE_NONE);

            return $this->set($attr);
        }
    }
}