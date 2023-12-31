<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 13.07.2017
 * Time: 9:38
 */

class tds_icon_box1 extends tds_api {

    public $icon_style;
    private $unique_block_class;
    private $unique_style_class;

    private $atts = array();
    private $index_style;

    function __construct( $atts, $unique_block_class = '', $index_style = '') {
        $this->atts = $atts;
        $this->unique_block_class = $unique_block_class;
        $this->index_style = $index_style;
    }

	private function get_css() {

        $unique_style_class = $this->unique_style_class;
        $unique_block_class = $this->unique_block_class;

		$raw_css =
			"<style>
							
				/* @title_top_space */
				.$unique_style_class .tds-title {
				    margin-top: @title_top_space;
				}
				
				/* @title_bottom_space */
				.$unique_style_class .tds-title {
				    margin-bottom: @title_bottom_space;
				}
				
				/* @description_bottom_space */
				.$unique_style_class .tdm-descr {
				    margin-bottom: @description_bottom_space;				  
				}
				
				/* @icon_box_description_color */
				.$unique_style_class .tdm-descr {
				    color: @icon_box_description_color;			  
				}
				
				/* @icon_box_hover_description_color */
				.$unique_block_class:hover .tdm-descr {
				    color: @icon_box_hover_description_color;			  
				}

			</style>";


		$td_css_compiler = new td_css_compiler( $raw_css );

        $td_css_compiler->load_setting_raw( 'title_top_space', $this->get_style_att( 'title_top_space' )  . 'px' );
        $td_css_compiler->load_setting_raw( 'title_bottom_space', $this->get_style_att( 'title_bottom_space' )  . 'px' );
        $td_css_compiler->load_setting_raw( 'description_bottom_space', $this->get_style_att( 'description_bottom_space' ) . 'px' );
        $td_css_compiler->load_setting_raw( 'icon_box_description_color', $this->get_style_att( 'icon_box_description_color' ));
        $td_css_compiler->load_setting_raw( 'icon_box_hover_description_color', $this->get_style_att( 'icon_box_hover_description_color' ));

        $compiled_css = $td_css_compiler->compile_css();

		return $compiled_css;
	}

    function render( $index_style = '' ) {
        if ( ! empty( $index_style ) ) {
            $this->index_style = $index_style;
        }

        $this->unique_style_class = td_global::td_generate_unique_id();

        $buffy = PHP_EOL . '<style>' . PHP_EOL . $this->get_css() . PHP_EOL . '</style>';

        $buffy .= '<div class="' . tds_api::get_group_style( __CLASS__ ) . ' ' . $this->get_class_style(__CLASS__) . ' ' . 'td-fix-index' . ' ' . $this->unique_style_class . '">';

            // Icon
            $tds_icon = $this->get_shortcode_att('tds_icon');
            if ( empty( $tds_icon ) ) {
                $tds_icon = td_util::get_option( 'tds_icon', 'tds_icon1');
            }
            $this->icon_style = new $tds_icon( $this->atts, $this->unique_block_class );
            $buffy .= $this->icon_style->render();

            // Title
            $tds_title = $this->get_shortcode_att('tds_title');
            if ( empty( $tds_title ) ) {
                $tds_title = td_util::get_option( 'tds_title', 'tds_title1');
            }
            $tds_title_instance = new $tds_title( $this->atts, $this->unique_block_class );
            $buffy .= $tds_title_instance->render();

            // Description
            $description = rawurldecode( base64_decode( strip_tags( $this->get_shortcode_att('description') ) ) );
            $buffy .= '<p class="tdm-descr td-fix-index">' . $description . '</p>';

            // Button
            $button_text = $this->get_shortcode_att('button_text');
            if ( !empty( $button_text ) ) {

                // Get button_style_id
                $tds_button = $this->get_shortcode_att('tds_button');
                if ( empty( $tds_button ) ) {
                    $tds_button = td_util::get_option( 'tds_button', 'tds_button1');
                }
                $tds_button_instance = new $tds_button( $this->atts );
                $buffy .= $tds_button_instance->render();
            }

            //url on icon box
	        $icon_box_url = $this->get_style_att( 'icon_box_url' );
            if ( !empty( $icon_box_url ) ) {
                // with link
                $target_blank = '';
	            $open_in_new_window = $this->get_style_att( 'open_in_new_window' );
                if  ( !empty( $open_in_new_window ) ) {
                    $target_blank = 'target="_blank"';
                }
                $buffy .= '<a href="' . $this->get_style_att( 'icon_box_url' ) . '" class="icon_box_url_wrap" ' . $target_blank . '> </a>';
            }

        $buffy .= '</div>';

		return $buffy;
	}

    function get_style_att( $att_name ) {
        return $this->get_att( $att_name ,__CLASS__, $this->index_style );
    }

    function get_atts() {
        return $this->atts;
    }
}