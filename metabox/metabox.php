<?php
function custom_meta_box_markup($post)
{
    ?>
    <div>

        <div class="setting_text">
            <label for=" meta-box-select">Choose Revolution Slider</label>
        </div>
        <div class="setting_input">
            <select name="meta-box-select">
                <?php

                if (class_exists('RevSlider')) {
                    $sliders = fdc_get_sliders();
                } else {
                    $sliders = array();
                }

                ?>

                <?php
                foreach ($sliders as $key => $value) {
                    if ($value == get_post_meta($post->ID, "meta-box-select", true)) {
                        ?>
                        <option selected><?php echo $value; ?></option>
                        <?php
                    } else {
                        ?>
                        <option><?php echo $value; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <?php
}

function add_custom_meta_box()
{
    add_meta_box("custom-meta-box", "FDC Theme Select Slider", "custom_meta_box_markup", "page", "normal");
}

add_action("add_meta_boxes", "add_custom_meta_box");


function save_custom_meta_box($post_id, $post)
{
    if (!current_user_can("edit_post", $post_id))
        return $post_id;

    if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "page";
    if ($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";
    $meta_box_select_value = "";
    $meta_box_checkbox_value = "";

    if (isset($_POST["meta-box-text"])) {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

    if (isset($_POST["meta-box-select"])) {
        $meta_box_select_value = $_POST["meta-box-select"];
    }
    update_post_meta($post_id, "meta-box-select", $meta_box_select_value);

    if (isset($_POST["meta-box-checkbox"])) {
        $meta_box_checkbox_value = $_POST["meta-box-checkbox"];
    }
    update_post_meta($post_id, "meta-box-checkbox", $meta_box_checkbox_value);
}

add_action("save_post", "save_custom_meta_box", 10, 2);


function fdc_get_sliders()
{
    global $wpdb;

    $sliders = array(0 => __('-- Select --', 'fdctheme'));

    // check if Revolution Slider is activated

    if (function_exists('rev_slider_shortcode')) {

        // table prefix

        $table_prefix = $wpdb->prefix;

        $table_name = $table_prefix . "revslider_sliders";

        $rs5 = $wpdb->get_results("SHOW COLUMNS FROM $table_name LIKE 'type'");
        if ($rs5) {
            // Revolution Slider 5.x
            $array = $wpdb->get_results("SELECT * FROM $table_name WHERE type != 'template' ORDER BY title ASC");
        } else {
            // Revolution Slider 4.x
            $array = $wpdb->get_results("SELECT * FROM $table_name ORDER BY title ASC");
        }

        if (is_array($array)) {
            foreach ($array as $v) {
                $sliders[$v->alias] = $v->title;
            }
        }
    }

    return $sliders;
}