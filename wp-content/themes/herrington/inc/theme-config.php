<?php if(!function_exists('herrington_configs')){
    function herrington_configs($value){
        $configs = [
            'theme_colors' => [
                'primary'   => [
                    'title' => esc_html__('Primary', 'herrington'), 
                    'value' => herrington()->get_opt('primary_color', '#121c27')
                ],
                'secondary'   => [
                    'title' => esc_html__('Secondary', 'herrington'), 
                    'value' => herrington()->get_opt('secondary_color', '#0a1119')
                ],
                'third'   => [
                    'title' => esc_html__('Third', 'herrington'), 
                    'value' => herrington()->get_opt('third_color', '#4b535d')
                ],
                'body_bg'   => [
                    'title' => esc_html__('Body Background Color', 'herrington'), 
                    'value' => herrington()->get_opt('body_bg_color', '#fff')
                ]
            ],
               
        ];
        return $configs[$value];
    }
}
if(!function_exists('herrington_inline_styles')) {
    function herrington_inline_styles() {  
        
        $theme_colors      = herrington_configs('theme_colors');
        //$link_color        = herrington_configs('link');
        //$gradient_color    = herrington_configs('gradient');
        ob_start();
        echo ':root{';
            
            foreach ($theme_colors as $color => $value) {
                printf('--%1$s-color: %2$s;', str_replace('#', '',$color),  $value['value']);
            }
            foreach ($theme_colors as $color => $value) {
                printf('--%1$s-color-rgb: %2$s;', str_replace('#', '',$color),  herrington_hex_rgb($value['value']));
            }
            // foreach ($link_color as $color => $value) {
            //     printf('--link-%1$s: %2$s;', $color, $value);
            // }
            // foreach ($gradient_color as $color => $value) {
            //     printf('--gradient-%1$s: %2$s;', $color, $value);
            //}
        echo '}';

        return ob_get_clean();
         
    }
}
 