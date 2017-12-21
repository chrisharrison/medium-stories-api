<?php

declare(strict_types=1);

namespace ChrisHarrison\Medium;

use Funeralzone\ValueObjects\CompositeTrait;
use Funeralzone\ValueObjects\ValueObject;

final class Story implements ValueObject
{
    use CompositeTrait;

    private $title;
    private $link;
    private $categories;
    private $publishedTime;
    private $updatedTime;
    private $content;

    public function __construct(
        Title $title,
        Link $link,
        Categories $categories,
        PublishedTime $publishedTime,
        UpdatedTime $updatedTime,
        Content $content
    )
    {
        $this->title = $title;
        $this->link = $link;
        $this->categories = $categories;
        $this->publishedTime = $publishedTime;
        $this->updatedTime = $updatedTime;
        $this->content = $content;
    }

    public static function fromNative($native)
    {
        return new static(
            Title::fromNative($native['title']),
            Link::fromNative($native['link']),
            Categories::fromNative($native['categories']),
            PublishedTime::fromNative($native['publishedTime']),
            UpdatedTime::fromNative($native['updatedTime']),
            Content::fromNative($native['content'])
        );
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    public function getLink(): Link
    {
        return $this->link;
    }

    public function getCategories(): Categories
    {
        return $this->categories;
    }

    public function getPublishedTime(): PublishedTime
    {
        return $this->publishedTime;
    }

    public function getUpdatedTime(): UpdatedTime
    {
        return $this->updatedTime;
    }

    public function getContent(): Content
    {
        return $this->content;
    }
}
