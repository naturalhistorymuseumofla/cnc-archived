<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 13.07.2017
 * Time: 9:38
 */

class tds_title3 extends tds_api {

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

		$unique_block_class_hover = '.' . $unique_style_class . ':hover';
		if ( ! empty( $this->unique_block_class ) ) {
			$unique_block_class_hover = '.' . $this->unique_block_class . ':hover .' . $unique_style_class;
		}

		$raw_css =
			"<style>

				/* @title_color_solid */
				.$unique_style_class .tdm-title {
					color: @title_color_solid;
				}
				/* @title_color_gradient */
				.$unique_style_class .tdm-title {
					@title_color_gradient
					-webkit-background-clip: text;
					-webkit-text-fill-color: transparent;
				}
				.td-md-is-ios .$unique_style_class .tdm-title {
					-webkit-text-fill-color: initial;
				}
				html[class*='ie'] .$unique_style_class .tdm-title,
				.td-md-is-ios .$unique_style_class .tdm-title {
					color: @title_color_gradient_1;
				}

				/* @hover_title_color */
				body $unique_block_class_hover .tdm-title {
					color: @hover_title_color;
				}
				$unique_block_class_hover .tdm-title {
					cursor: default;
				}
				/* @hover_gradient */
				body $unique_block_class_hover .tdm-title {
					-webkit-text-fill-color: unset;
					background: transparent;
					transition: none;
				}

				/* @line_color */
				.$unique_style_class .tdm-title-line:after {
					background: @line_color;
				}
				/* @line_color_gradient */
				.$unique_style_class .tdm-title-line:after {
					@line_color_gradient
				}
				/* @hover_line_color */
				$unique_block_class_hover .tdm-title-line:after {
					background: @hover_line_color;
				}
				/* @hover_line_color_gradient */
				$unique_block_class_hover .tdm-title-line:after {
					@hover_line_color_gradient
				}

				/* @line_width */
				.$unique_style_class .tdm-title-line  {
					width: @line_width;
				}
				/* @hover_line_width */
				$unique_block_class_hover .tdm-title-line  {
					width: @hover_line_width;
				}
				/* @line_height */
				.$unique_style_class .tdm-title-line:after  {
					height: @line_height;
				}
				/* @line_space */
				.$unique_style_class .tdm-title-line  {
					height: @line_space;
				}
				/* @line_alignment */
				.$unique_style_class .tdm-title-line:after   {
					bottom: @line_alignment;
				}
				
				/* @subtitle_space */
				.$unique_style_class .tdm-title-sub  {
					margin-bottom: @subtitle_space;
				}
				/* @subtitle_color */
				.$unique_style_class .tdm-title-sub {
					color: @subtitle_color;
				}
				/* @hover_subtitle_color */
				$unique_block_class_hover .tdm-title-sub {
					color: @hover_subtitle_color;
				}

			</style>";

		$td_css_compiler = new td_css_compiler( $raw_css );
        $td_css_compiler->load_setting_raw( 'line_width', $this->get_style_att( 'line_width' ) );
        $td_css_compiler->load_setting_raw( 'line_height', 1 . 'px');
        $td_css_compiler->load_setting_raw( 'line_space', $this->get_style_att( 'line_space' ) );
        $td_css_compiler->load_setting_raw( 'line_alignment', $this->get_style_att( 'line_alignment' ) );
        $td_css_compiler->load_setting_raw( 'subtitle_space', 12 . 'px' );
        $td_css_compiler->load_setting_raw( 'subtitle_color', $this->get_style_att( 'subtitle_color' ) );
		$td_css_compiler->load_setting_raw( 'hover_subtitle_color', $this->get_style_att( 'hover_subtitle_color' ) );
		$td_css_compiler->load_setting_raw( 'hover_line_width', $this->get_style_att( 'hover_line_width' ) );

		$hover_title_color = $this->get_style_att( 'hover_title_color' );
		$td_css_compiler->load_setting_raw( 'hover_title_color', $hover_title_color );
		if ( !empty ($hover_title_color ) ) {
			$td_css_compiler->load_setting_raw( 'hover_gradient', 1 );
		}

		// text color
		td_block::load_color_settings( $this, $td_css_compiler, 'title_color', 'title_color_solid', 'title_color_gradient', 'title_color_gradient_1' );

        // line gradient
        td_block::load_color_settings( $this, $td_css_compiler, 'line_color', 'line_color', 'line_color_gradient' );

        // hover line gradient
        td_block::load_color_settings( $this, $td_css_compiler, 'hover_line_color', 'hover_line_color', 'hover_line_color_gradient' );

        // line width
        $td_line_width =$this->get_style_att( 'line_width' );
        if ( is_numeric( $td_line_width ) ) {
            $td_css_compiler->load_setting_raw( 'line_width', $td_line_width . 'px' );
        }

		// hover line width
		$td_hover_line_width =$this->get_style_att( 'hover_line_width' );
		if ( is_numeric( $td_hover_line_width ) ) {
			$td_css_compiler->load_setting_raw( 'hover_line_width', $td_hover_line_width . 'px' );
		}

        // line height
        $td_line_height = $this->get_style_att( 'line_height' );
        if ( is_numeric( $td_line_height ) ) {
            $td_css_compiler->load_setting_raw( 'line_height', $td_line_height . 'px' );
        }

        // line space
        $td_line_space = $this->get_style_att( 'line_space' );
        if( $td_line_space != '' ) {
            if ( is_numeric( $td_line_space ) ) {
                $td_css_compiler->load_setting_raw( 'line_space', $td_line_space . 'px' );
            }
        }

        // line alignment
        $td_line_alignment = $this->get_style_att('line_alignment' );
        if ( is_numeric( $td_line_alignment ) ) {
            $td_css_compiler->load_setting_raw( 'line_alignment', $td_line_alignment . '%' );
        }

        // subtitle space
        $td_subtitle_space = $this->get_style_att( 'subtitle_space' );
        if( $td_subtitle_space != '' ) {
            if ( is_numeric( $td_subtitle_space ) ) {
                $td_css_compiler->load_setting_raw( 'subtitle_space', $td_subtitle_space . 'px' );
            }
        }

		$compiled_css    = $td_css_compiler->compile_css();

		return $compiled_css;
	}

	function render( $index_style = '' ) {
		if ( ! empty( $index_style ) ) {
			$this->index_style = $index_style;
		}
        $this->unique_style_class = td_global::td_generate_unique_id();

		$title_tag = $this->get_shortcode_att( 'title_tag' );
		$title_size = $this->get_shortcode_att( 'title_size' );
		$title_text = rawurldecode( base64_decode( strip_tags( $this->get_shortcode_att( 'title_text' ) ) ) );
        $subtitle_position = $this->get_style_att( 'subtitle_position' );
		$subtitle_text = $this->get_style_att( 'subtitle_text' );

		$subtitle_position_class = '';
		if ( !empty( $subtitle_position ) ) {
            $subtitle_position_class = 'tdm-subtitle-above';
        }

		$buffy = PHP_EOL . '<style>' . PHP_EOL . $this->get_css() . PHP_EOL . '</style>';

        $buffy .= '<div class="' . tds_api::get_group_style( __CLASS__ ) . ' ' . $this->get_class_style(__CLASS__) . ' ' . $subtitle_position_class . ' td-fix-index ' . $this->unique_style_class . '">';
            if ( !empty( $subtitle_position ) ) {
                $buffy .= '<div class="tdm-title-sub">' . $subtitle_text . '</div>';
                $buffy .= '<div class="tdm-title-line"></div>';
            }

            $buffy .= '<' . $title_tag . ' class="tdm-title ' . $title_size . '">' . $title_text . '</' . $title_tag . '>';

            if ( empty( $subtitle_position ) ) {
                $buffy .= '<div class="tdm-title-line"></div>';
                $buffy .= '<div class="tdm-title-sub">' . $subtitle_text . '</div>';
            }
        $buffy .= '</div>';


		return $buffy;
	}

	function get_style_att( $att_name, $find_in_shortcode = false ) {
		if ( ! $find_in_shortcode ) {
			return $this->get_att( $att_name, __CLASS__, $this->index_style );
		}
		$key = $this->get_att_name( $att_name, __CLASS__, $this->index_style );
		if ( isset( $atts[ $key ] ) ) {
			return $atts[ $key ];
		}
		return $this->get_att( $att_name );
	}

	function get_atts() {
		return $this->atts;
	}
}