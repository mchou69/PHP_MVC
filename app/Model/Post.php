<?php


class Post
{
    private $id;
    private $title;
    private $created;

    /**
     * Post constructor.
     * @param $id
     * @param $title
     * @param $created
     */
    public function __construct($id, $title, $created)
    {
        $this->id = $id;
        $this->title = $title;
        $this->created = $created;
    }

    public function __toString()
    {
        return $this->title;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created): void
    {
        $this->created = $created;
    }



}