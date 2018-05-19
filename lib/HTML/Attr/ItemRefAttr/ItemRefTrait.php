<?php

namespace DOMAssembly\HTML\Attr\ItemRefAttr {

    use DOMAssembly\HTML\Attr\ItemRefAttr;

    trait ItemRefTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function addItemRef(
            string $value
        )
        {
            $ref = $this->get(ItemRefAttr::NAME) ?? '';
            $ids = explode(' ', $ref);

            if (!in_array($value, $ids)) {
                $ids[] = $value;
                $ref = implode(' ', $ids);
            }

            $document = $this->getDocument();
            $attr = ItemRefAttr::of($document, $ref);

            return $this->set($attr);
        }

        /**
         * @param string[] $values
         * @return $this
         */
        public function addItemRefs(
            array $values
        )
        {
            foreach ($values as $value) {
                $this->addItemRef($value);
            }

            return $this;
        }
    }
}