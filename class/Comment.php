<?php

class Comment
{

    private $id;
    private $id_article;
    private $login;
    private $comment;
    private $date_comment;

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

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId_article()
    {
        return $this->id_article;
    }

    public function setId_article($id_article)
    {
        $this->id_article = $id_article;
    }
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getDate_comment()
    {
        return $this->date_comment;
    }

    public function setDate_comment($date_comment)
    {
        $this->date_comment = $date_comment;
    }
}
