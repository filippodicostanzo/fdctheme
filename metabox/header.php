<?php
function fdctheme_meta_box_header($post)
{
    ?>
    <div>

        <div class="setting_text">
            <label for=" meta-box-checkbox">Show Title Page</label>
        </div>
        <div class="setting_input">
            <?php
            $checkbox_value = get_post_meta($post->ID, "title-page-enable", true);

            if ($checkbox_value == "") {
                ?>
                <input name="title-page-enable" type="checkbox" value="true">
                <?php
            } else if ($checkbox_value == "true") {
                ?>
                <input name="title-page-enable" type="checkbox" value="true" checked>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}

function add_fdctheme_meta_box_header()
{
    add_meta_box("fdctheme-meta-box-header", "FDC Theme Header Options", "fdctheme_meta_box_header", "page", "normal");
}

add_action("add_meta_boxes", "add_fdctheme_meta_box_header");


function save_fdctheme_meta_box_header($post_id, $post)
{
    if (!current_user_can("edit_post", $post_id))
        return $post_id;

    if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "page";
    if ($slug != $post->post_type)
        return $post_id;

    $title_page_enable= "";

    if (isset($_POST["title-page-enable"])) {
        $title_page_enable = $_POST["title-page-enable"];
    }
    update_post_meta($post_id, "title-page-enable", $title_page_enable);
}

add_action("save_post", "save_fdctheme_meta_box_header", 10, 2);