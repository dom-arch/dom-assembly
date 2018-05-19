<?php

namespace DOMAssembly\HTML\Attr\ListAttr {

    use DOMAssembly\HTML\Attr\ListAttr;
    use DOMAssembly\HTML\Tag\DataListTag;

    trait ListTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setList(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = ListAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @param DataListTag $list
         * @return $this
         */
        public function setListFromDataList(
            DataListTag $list
        )
        {
            return $this->setList('#' . $list->getId());
        }
    }
}