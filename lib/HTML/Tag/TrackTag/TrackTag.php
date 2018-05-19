<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DefaultAttr\DefaultTrait;
    use DOMAssembly\HTML\Attr\KindAttr\KindTrait;
    use DOMAssembly\HTML\Attr\LabelAttr\LabelTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\SrcLangAttr\SrcLangTrait;

    class TrackTag
        extends VoidTag
    {
        use DefaultTrait;
        use KindTrait;
        use LabelTrait;
        use SrcTrait;
        use SrcLangTrait;

        const
        NAME = 'track',
        KIND_CAPTIONS = 'captions',
        KIND_CHAPTERS = 'chapters',
        KIND_DESCRIPTIONS = 'descriptions',
        KIND_METADATA = 'metadata',
        KIND_SUBTITLES = 'subtitles',
        KIND_DEFAULT = TrackTag::KIND_METADATA;

        /**
         * @return $this
         */
        public function setKindDefault()
        {
            return $this->setKind(static::KIND_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setKindCaptions()
        {
            return $this->setKind(static::KIND_CAPTIONS);
        }

        /**
         * @return $this
         */
        public function setKindChapters()
        {
            return $this->setKind(static::KIND_CHAPTERS);
        }

        /**
         * @return $this
         */
        public function setKindDescriptions()
        {
            return $this->setKind(static::KIND_DESCRIPTIONS);
        }

        /**
         * @return $this
         */
        public function setKindMetadata()
        {
            return $this->setKind(static::KIND_METADATA);
        }

        /**
         * @return $this
         */
        public function setKindSubtitles()
        {
            return $this->setKind(static::KIND_SUBTITLES);
        }
    }
}