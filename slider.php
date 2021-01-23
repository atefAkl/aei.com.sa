<?php


class Slider
{
    public $imgsUrls = [];
    public $titles = [];
    public $captions = [];
    public $sourcePost;
    public $sourceFiles;

    public function __construct(Array $files, Array $post)
    {
        $this->sourcePost = $post;
        $this->sourceFiles = $files;
    }


}