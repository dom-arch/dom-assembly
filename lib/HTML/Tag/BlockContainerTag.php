<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\EmbeddableInterface;

    class BlockContainerTag
        extends NonVoidTag
    {
        /**
         * @param EmbeddableInterface $node
         * @return $this
         */
        public function append(
            EmbeddableInterface $node
        )
        {
            $child = $node->getNode();
            $this->getNode()->appendChild($child);

            return $this;
        }

        /**
         * @param EmbeddableInterface $node
         * @param EmbeddableInterface|null $ref_node
         * @return $this
         */
        public function insert(
            EmbeddableInterface $node,
            EmbeddableInterface $ref_node = null
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
         * @param EmbeddableInterface $node
         * @param EmbeddableInterface|null $ref_node
         * @return $this
         */
        public function after(
            EmbeddableInterface $node,
            EmbeddableInterface $ref_node = null
        )
        {
            if (!$ref_node || !$ref_node->nextNode()) {
                return $this->append($node);
            }

            return $this->insert($node, $ref_node->nextNode());
        }

    }
}