<?php

namespace DOMAssembly\HTML\Attr\RoleAttr {

    use DOMAssembly\HTML\Attr\RoleAttr;

    trait RoleTrait
    {
        /**
         * @param $value
         * @return $this
         */
        public function setRole(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = RoleAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}