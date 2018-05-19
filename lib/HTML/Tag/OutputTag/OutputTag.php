<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\ForAttr;
    use DOMAssembly\HTML\Attr\ForAttr\ForTrait;
    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Tag;

    class OutputTag
        extends InlineContainerTag
    {
        use ForTrait;
        use FormTrait;
        use NameTrait;

        const NAME = 'output';

        /**
         * @param Tag $tag
         * @return $this
         */
        public function addForFromTag(
            Tag $tag
        )
        {
            $id = $tag->getId();
            $value = $this->get(ForAttr::NAME);
            $ids = explode(' ', $value);

            if (!in_array($id, $ids)) {
                $ids[] = $id;
                $value = implode(' ', $ids);
            }

            return $this->setFor($value);
        }

        /**
         * @param Tag[] $tags
         * @return $this
         */
        public function addForFromTags(
            array $tags
        )
        {
            foreach ($tags as $tag) {
                $this->addForFromTag($tag);
            }

            return $this;
        }
    }
}