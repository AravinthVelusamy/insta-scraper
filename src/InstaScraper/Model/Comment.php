<?php

namespace InstaScraper\Model;


class Comment
{
    public $id;
    public $text;
    public $createdAt;

    public $owner;

    function __construct()
    {
    }

    public static function fromApi($commentArray)
    {
        $instance = new self();
        $instance->id = $commentArray['id'];
        $instance->createdAt = $commentArray['created_at'];
        $instance->text = $commentArray['text'];
        $instance->owner = Account::fromComment($commentArray['owner']);
        return $instance;
    }

}
