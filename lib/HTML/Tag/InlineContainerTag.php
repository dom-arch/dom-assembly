<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\PhrasingInterface;
    use DOMAssembly\HTML\Text;

    class InlineContainerTag
        extends NonVoidTag
        implements PhrasingInterface
    {
        /**
         * @param PhrasingInterface $node
         * @return $this
         */
        public function append(
            PhrasingInterface $node
        )
        {
            $child = $node->getNode();
            $this->getNode()->appendChild($child);

            return $this;
        }

        /**
         * @param $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function appendText(
            $value,
            array $sprintf_params = null
        )
        {
            $text = $this->createText($value, $sprintf_params);

            return $this->append($text);
        }

        /**
         * @param PhrasingInterface $node
         * @param PhrasingInterface|null $ref_node
         * @return $this
         */
        public function insert(
            PhrasingInterface $node,
            PhrasingInterface $ref_node = null
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
         * @param $value
         * @param PhrasingInterface|null $ref_node
         * @param array|null $sprintf_params
         * @return $this
         */
        public function insertText(
            $value,
            PhrasingInterface $ref_node = null,
            array $sprintf_params = null
        )
        {
            $text = $this->createText($value, $sprintf_params);

            return $this->insert($text, $ref_node);
        }

        /**
         * @param PhrasingInterface $node
         * @param PhrasingInterface|null $ref_node
         * @return $this
         */
        public function after(
            PhrasingInterface $node,
            PhrasingInterface $ref_node = null
        )
        {
            if (!$ref_node || !$ref_node->nextNode()) {
                return $this->append($node);
            }

            return $this->insert($node, $ref_node->nextNode());
        }

        /**
         * @param $value
         * @param PhrasingInterface|null $ref_node
         * @param array|null $sprintf_params
         * @return $this
         */
        public function afterText(
            $value,
            PhrasingInterface $ref_node = null,
            array $sprintf_params = null
        )
        {
            $text = $this->createText($value, $sprintf_params);

            return $this->after($text, $ref_node);
        }

        /**
         * @param $value
         * @param array|null $sprintf_params
         * @return Text
         */
        private function createText(
            $value,
            array $sprintf_params = null
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();

            return Text::of($document, $value, $sprintf_params);
        }
    }
}