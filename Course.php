<?php 

class Course {
    // Properties
    public function __construct(
        protected string $title,
        protected string $subtitle,
        protected string $description,
        protected array $tags
    )
    {
        // Constructor logic can go here if needed
    }

    public function __getTitle()
    {
        return $this->title;
    }

    public function __getSubtitle()
    {
        return $this->subtitle;
    }

    public function __getDescription()
    {
        return $this->description;
    }

    public function __getTags()
    {
        return $this->tags;
    }

    public function addTag(string $tag): void
    {
        if (in_array($tag, $this->tags)) {
            return;

        }
        $this->tags[] = $tag;
    }
}