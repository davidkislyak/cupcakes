<?php
    function arrToCheckbox($arr) {
        $return = '';

        foreach ($arr as $key=>$value) {
            $output = '<div class="form-check">';
            $output .= '<input class="form-check-input" type="checkbox" value="'.$key.'" id="'.$key.'" name="flavors[]">';
            $output .= '<label class="form-check-label" for="'.$key.'">';
            $output .= $value.'</label></div>';
            $return .= $output;
        }

        return $return;
    }