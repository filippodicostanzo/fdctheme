<?php
if ( ! class_exists( 'Prefix_Separator_Control' ) ) {
    return null;
}
/**
 * Class Prefix_Separator_Control
 *
 * Custom control to display separator
 */
class Prefix_Separator_Control extends WP_Customize_Control {
    public function render_content() {
        ?>
        <label> <br>
            <hr>
            <br> </label>
        <?php
    }
}