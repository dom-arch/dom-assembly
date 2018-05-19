<?php

namespace DOMAssembly\HTML\Attr\ClassAttr {

    use DOMAssembly\HTML\Attr\ClassAttr;

    trait ClassTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function addClass(
            string $value
        )
        {
            $class = $this->get(ClassAttr::NAME) ?? '';
            $classes = explode(' ', $class);

            if (!in_array($value, $classes)) {
                $classes[] = $value;
                $class = implode(' ', $classes);
            }

            $document = $this->getDocument();
            $attr = ClassAttr::of($document, $class);

            return $this->set($attr);
        }

        /**
         * @param string[] $values
         * @return $this
         */
        public function addClasses(
            array $values
        )
        {
            foreach ($values as $value) {
                $this->addClass($value);
            }

            return $this;
        }
    }
}