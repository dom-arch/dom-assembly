<?php

namespace DOMAssembly\HTML\Attr\IdAttr {

    use DOMAssembly\HTML\Attr\IdAttr;

    trait IdTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setId(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = IdAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return string|null
         */
        public function getId()
        {
            return $this->get(IdAttr::NAME);
        }
    }
}