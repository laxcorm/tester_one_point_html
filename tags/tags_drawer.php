<?php
function merge($external)
{
    $output = [];
    foreach ($external as $inner) {
        $output = array_merge($output, $inner);
    }
    return $output;
}

function tags_drawer($tags)
{
    $str = '';

    foreach ($tags as $key => $value) {
        if (is_string($key) && is_array($value)) {

            $str .=  "<div" . ($key != '' ? " class=\"$key\">" : ">") . ($value ? tags_drawer($value) : '') . "</div>";
        } elseif (is_int($key) && is_array($value)) {
            $tag = array_shift($value);
            $tag_end = ">";
                if($tag != "input"){
                $in_tags = array_pop($value);
                if($in_tags)
                {$tag_end .=   $in_tags ? tags_drawer(merge($in_tags)) : '';
                $tag_end .= "</" . $tag . ">";}
            }else{
                $tag_end .= "</" . $tag . ">";
            }
            $tag = "<" . $tag;
            if($value != [])// тут перепроверить
            {foreach ($value as $attb => $val) {
                if (is_int($attb)) {
                    $tag .= " $val";
                    continue;
                }
                $tag .= " $attb=\"$val\"";
            }
            }
            $tag .= $tag_end;
            $str .= $tag;
        } elseif (is_int($key) && is_string($value)) {
            $str .= $value;
        }
    }
    return $str;
}