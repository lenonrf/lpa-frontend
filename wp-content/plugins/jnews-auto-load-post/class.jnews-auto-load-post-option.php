<?php
/**
 * @author : Jegtheme
 */

/**
 * Class Theme JNews Option
 */
Class JNews_Auto_Load_Post_Option
{
    /**
     * @var JNews_Gallery_Option
     */
    private static $instance;

    /**
     * @var Jeg\Customizer
     */
    private $customizer;

    /**
     * @return JNews_Gallery_Option
     */
    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
        if(class_exists('Jeg\Customizer'))
        {
            $this->customizer = Jeg\Customizer::getInstance();

            $this->set_section();
        }
    }

    public function set_section()
    {
        $this->customizer->add_section(array(
            'id' => 'jnews_autoload_section',
            'title' => esc_html__('Auto Load Scroll Post Option', 'jnews-auto-load-post'),
            'panel' => 'jnews_single_post_panel',
            'priority' => 200,
            'type' => 'jnews-lazy-section',
        ));
    }
}
