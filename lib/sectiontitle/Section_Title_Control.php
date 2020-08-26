<?php
if ( ! class_exists( 'Section_Title_Control' ) ) {
    return null;
}
/**
 * Class Section_Title_Control
 *
 * Custom control to display separator
 */
class Section_Title_Control extends WP_Customize_Control {
    public $divider = 'boolean';
    public function render_content() {


        ?>

        <?php if ($this->divider) {
        ?><hr><?php
        }
        ?>
        <h1 style="font-weight: bold; text-align: center"><?=$this->label?></h1>
        <?php
    }
}