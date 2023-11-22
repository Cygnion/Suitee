<?php

/**
 * Represent a model for tag instance in database. Extends Model.
 * @author Waterfox
 * @version 1.0
 */
class Tag extends Model
{
    public ?int $id; //Nullable because a new tag haven't an id
    public string $content; 

    public function __construct(string $content)
    {
        $this->content =$content;
    }

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}

?>