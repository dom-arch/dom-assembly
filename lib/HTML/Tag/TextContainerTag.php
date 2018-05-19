<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Text;

    class TextContainerTag
        extends NonVoidTag
    {
        /**
         * @param Text $node
         * @return $this
         */
        public function append(
            Text $node
        )
        {
            $child = $node->getNode();
            $this->getNode()->appendChild($child);

            return $this;
        }

        /**
         * @param Text $node
         * @param Text|null $ref_node
         * @return $this
         */
        public function insert(
            Text $node,
            Text $ref_node = null
        )
        {
            if ($ref_node) {
                $child = $node->getNode();
                $ref_child = $ref_node->getNode();
                $this->getNode()->insertBefore($child, $ref_child);
            } else {
                $this->append($node);
            }

            return $this;
        }

        /**
         * @param Text $node
         * @param Text|null $ref_node
         * @return $this
         */
        public function after(
            Text $node,
            Text $ref_node = null
        )
        {
            if (!$ref_node || !$ref_node->nextNode()) {
                return $this->append($node);
            }

            return $this->insert($node, $ref_node->nextNode());
        }

    }
}