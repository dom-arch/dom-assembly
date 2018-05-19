<?php

namespace DOMAssembly\HTML\Attr\NameAttr {

    use DOMAssembly\HTML\Attr\NameAttr;

    trait NameTrait
    {
        /**
         * @param string ...$names
         * @return $this
         */
        public function setName(
            ...$names
        )
        {
            $name = array_reduce($names, function ($carry, $item) {
                return !strlen($carry)
                    ? $item
                    : $carry . '[' . $item . ']';
            });

            $document = $this->getDocument();
            $attr = NameAttr::of($document, $name);

            return $this->set($attr);
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->get(NameAttr::NAME);
        }
    }
}