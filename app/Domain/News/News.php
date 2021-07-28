<?php

namespace App\Domain\News;

use App\Domain\DateTime;
use App\Domain\Link;

class News
{
    private string $title;
    private DateTime $pubDate;
    private Link $link;

    public function __construct(string $title, DateTime $pubDate, Link $link)
    {
        $this->title = $title;
        $this->pubDate = $pubDate;
        $this->link = $link;
    }

    /**
     * Get the value of title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title.
     */
    public function setTitle(string $title): News
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of pubDate.
     */
    public function getPubDate(): DateTime
    {
        return $this->pubDate;
    }

    /**
     * Set the value of pubDate.
     */
    public function setPubDate(DateTime $pubDate): News
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    /**
     * Get the value of link.
     */
    public function getlink(): Link
    {
        return $this->link;
    }

    /**
     * Set the value of link.
     */
    public function setlink(Link $link): News
    {
        $this->link = $link;

        return $this;
    }
}
