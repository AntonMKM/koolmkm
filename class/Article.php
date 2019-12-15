<?php

class Article
{

    private $id;
    private $title;
    private $content;
    private $date;
    private $author;
    private $img;

    public function __construct(array $data = null)
    {
        if ($data) {
            $this->init($data);
        }
    }

    public function init(array $data)
    {
        foreach ($data as $index => $value) {
            $method = "set" . ucfirst($index);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setId($id)
    {
        $this->id = ($id);
    }

    public function setTitle($title)
    {
        $this->title = ($title);
    }

    public function setContent($content)
    {
        $this->content = ($content);
    }

    public function setDate($date)
    {
        $this->date = ($date);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }
}
