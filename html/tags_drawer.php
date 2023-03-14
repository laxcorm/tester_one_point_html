<?php
/* 
function tags_drawer($tags = [])
{
    if(is_string($tags)){
        return $tags;
    }
    $str = '';
    foreach ($tags as $key => $value) {

        if (is_string($key) && is_array($value)) {
            //$str .= ( $key . tags_marker($value) . $key);
            $str .=  "<div class=\"$key\">" . tags_drawer($value) . "</div>";
        } 
        elseif(is_int($key) && is_array($value)){
            $tag = array_shift($value);

            $tag_end = ($tag == "input") ? ">" : ">". tags_drawer(array_pop($value))."</".$tag.">" ;//доделать

            $tag="<". $tag;
                 foreach($value as $attb=>$val)

            {
                if(is_int($attb)){
                    $tag .= " $val";
                    continue;
                }
                $tag .= " $attb=\"$val\"";
                //$str .= "<input type = \"". $value['type'] ."\">";
            }
            $tag .= $tag_end;
            $str .= $tag;
        }
        else {
            $str .= "<div class=\"$value\"></div>";
        }
    }
    return $str;
} */

/*
function tags_drawer($tags)
{
    $str = '';

    if (is_string($tags)) {
        $str .= $tags;
    } elseif (is_array($tags)) {
        foreach ($tags as $key => $value) {

            if (is_string($key) && is_array($value)
            ) {

                $str .=  "<div class=\"$key\">" . ($value ? tags_drawer($value) : '') . "</div>";
            } elseif (is_int($key) && is_array($value)) {
                $tag = array_shift($value);

                $tag_end = ($tag == "input") ? ">" : ">" . tags_drawer(array_pop($value)) . "</" . $tag . ">";

                $tag = "<" . $tag;
                foreach ($value as $attb => $val) {
                    if (is_int($attb)) {
                        $tag .= " $val";
                        continue;
                    }
                    $tag .= " $attb=\"$val\"";
                }
                $tag .= $tag_end;
                $str .= $tag;
            }elseif (is_int($key) && is_string($value)){
                tags_drawer($value);
            }
        }
    }
    return $str;
}
*/

function merge($external){
    $output =[];
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
            //$in_tags = array_pop($value);//для инпута не делать
            $tag_end = ($tag == "input") ? ">" : (">" .  ($in_tags = array_pop($value)) ? tags_drawer(merge($in_tags)) : '' . "</" . $tag . ">");

            $tag = "<" . $tag;
            foreach ($value as $attb => $val) {
                if (is_int($attb)) {
                    $tag .= " $val";
                    continue;
                }
                $tag .= " $attb=\"$val\"";
            }
            $tag .= $tag_end;
            $str .= $tag;
        } elseif (is_int($key) && is_string($value)) {
            $str .= $value;
        }
    }
    return $str;
}

// [['name' => $name],['Monako'],[['data']]];
// ['name' => $name, 'Monako', ['data']];