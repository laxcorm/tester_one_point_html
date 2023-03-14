<?php
class Tags
{

    public $children = [];
    public $tag;
    public $attributes = [];
    public $is_child = false;

    public function __construct(string $tag, array $attributes = [])
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
    }

    public function setChildren($tag)
    {
        if (gettype($tag) == "object") {
            if (get_class($tag) == "Tags") {
                $tag->is_child = true;
            }
        }
        $this->children[] = $tag;
    }

    public function tags()
    {
        $str = "<" . $this->tag;

        if (!empty($this->attributes)) {
            foreach ($this->attributes as $key => $value) {

                $str .= " $key=\"$value\"";
            }
        }

        $str .= ">";
        if (!empty($this->children)) {
            foreach ($this->children as $value) {
                if (is_string($value)) {
                    $str .= $value;
                }
                if (gettype($value) == "object") {
                    if (get_class($value) == "Tags") {
                        $str .= $value->tags();
                    }
                }
            }
        }
        $str .= "</$this->tag>";
        return $str;
    }


    public function __toString()
    {
        return $this->tags();
    }

    public function __destruct()
    {
        if (!$this->is_child) {
            echo $this;
        }
    }
}


$span = new Tags('span', ['style'=>'color:green']);
$span -> setChildren("It's first string");
$b = new Tags('b');
$b->setChildren('Just text');
$div=new Tags('div', ['style'=>'color:red']);
$div->setChildren($b);



