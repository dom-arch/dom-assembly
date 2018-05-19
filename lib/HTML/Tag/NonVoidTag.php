<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\DOM;
    use DOMAssembly\HTML\EmbeddableInterface;
    use DOMAssembly\HTML\NonVoidInterface;
    use DOMAssembly\HTML\Tag;
    use DOMAssembly\HTML\Text;

    abstract class NonVoidTag
        extends Tag
        implements NonVoidInterface
    {
        /**
         * @param EmbeddableInterface $ref_node
         * @return $this
         */
        public function replace(
            EmbeddableInterface $ref_node
        )
        {
            $node = $ref_node->getNode();
            $node->parentNode->replaceChild($this->getNode(), $node);

            return $this;
        }

        /**
         * @return Tag[]|Text
         */
        public function getChildren()
        {
            $children = [];
            $node = $this->getNode();
            $nodes = $node->childNodes;
            $length = $nodes->length;

            for ($i = 0; $i < $length; $i += 1) {
                $children[] = $nodes->item($i)->getAssembly();
            }

            return $children;
        }

        /**
         * @return Tag|Text
         */
        public function getFirstChild()
        {
            /**
             * @var DOM\Element|DOM\Text|null $node
             */
            $node = $this->getNode()->firstChild;

            if ($node) {
                return $node->getAssembly();
            }

            return null;
        }

        /**
         * @return Tag|Text
         */
        public function getLastChild()
        {
            /**
             * @var DOM\Element|DOM\Text|null $node
             */
            $node = $this->getNode()->lastChild;

            if ($node) {
                return $node->getAssembly();
            }

            return null;
        }
    }
}