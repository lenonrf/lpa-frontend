<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Block;

Class Block_22_Option extends BlockOptionAbstract
{
    protected $default_number_post = 6;
    protected $show_excerpt = false;
    protected $default_ajax_post = 3;

    public function get_module_name()
    {
        return esc_html__('JNews - Module 22', 'jnews');
    }

	public function set_style_option()
	{
		$this->set_boxed_option();
		parent::set_style_option();
	}
}