<?php
/**
 * @author : Jegtheme
 */

/**
 * Class Theme JNews Option
 */
Class JNews_Speed_Option
{
    /**
     * @var JNews_Speed_Option
     */
    private static $instance;

    /**
     * @var Jeg\Customizer
     */
    private $customizer;

    /**
     * @return JNews_Speed_Option
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
            'id'            => 'jnews_speed_section',
            'title'         => esc_html__( 'JNews : Speed Option' ,'jnews-speed' ),
            'description'   => esc_html__('JNews Speed Option','jnews-speed' ),
            'panel'         => '',
            'priority'      => 198,
            'type'          => 'jnews-lazy-section',
        ));
    }
}
