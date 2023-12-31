<?php
class tdm_block_image_info_box extends td_block {

	protected $shortcode_atts = array(); //the atts used for rendering the current block
	private $unique_block_class;

	public function get_custom_css() {
		// $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
		$unique_block_class = $this->block_uid . '_rand';

		$raw_css =
			"<style>
				/* @background_solid */
				.$unique_block_class .td-block-row .tdm-image-box:before {
					background-color: @background_solid;
				}
				/* @background_gradient */
				.$unique_block_class .td-block-row .tdm-image-box:before {
					@background_gradient
				}
                /* @box_title_color */
                .$unique_block_class .tdm-title-md {
					color: @box_title_color;
                }
                /* @box_description_color */
                .$unique_block_class .tdm-image-description p {
					color: @box_description_color;
                }

                /* @box_border */
                .$unique_block_class .tdm-image-border span {
					background-color: @box_border;
                }

                /* @hover_background_solid */
				.$unique_block_class:hover .td-block-row .tdm-image-box:before {
					background-color: @hover_background_solid;
				}
				/* @hover_background_gradient */
				.$unique_block_class:hover .td-block-row .tdm-image-box:before {
					@hover_background_gradient
				}
                /* @hover_box_title_color */
                .$unique_block_class:hover .tdm-title-md {
					color: @hover_box_title_color;
                }
                /* @hover_box_description_color */
                .$unique_block_class:hover .tdm-image-description p {
					color: @hover_box_description_color;
                }

                /* @hover_box_border */
                .$unique_block_class:hover .tdm-image-border span {
					background-color: @hover_box_border;
                }
			</style>";

		$td_css_compiler = new td_css_compiler( $raw_css );

		$td_css_compiler->load_setting_raw( 'box_title_color', $this->get_shortcode_att( 'box_title_color' ) );
		$td_css_compiler->load_setting_raw( 'box_description_color', $this->get_shortcode_att( 'box_description_color' ) );
		$td_css_compiler->load_setting_raw( 'box_border', $this->get_shortcode_att( 'box_border' ) );
		$td_css_compiler->load_setting_raw( 'hover_box_title_color', $this->get_shortcode_att( 'hover_box_title_color' ) );
		$td_css_compiler->load_setting_raw( 'hover_box_description_color', $this->get_shortcode_att( 'hover_box_description_color' ) );
		$td_css_compiler->load_setting_raw( 'hover_box_border', $this->get_shortcode_att( 'hover_box_border' ) );

		// background
		td_block::load_color_settings( $this, $td_css_compiler, 'box_overlay', 'background_solid', 'background_gradient' );
		td_block::load_color_settings( $this, $td_css_compiler, 'hover_box_overlay', 'hover_background_solid', 'hover_background_gradient' );

		$compiled_css = $td_css_compiler->compile_css();

		return $compiled_css;
	}



	function render($atts, $content = null) {
		parent::render($atts);

		// $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
		$this->unique_block_class = $this->block_uid . '_rand';

		$this->shortcode_atts = shortcode_atts(
			array_merge(
				td_api_multi_purpose::get_mapped_atts( __CLASS__ ),
				tds_api::get_style_group_params( 'tds_button' ))
			, $atts);

		$box_style = $this->get_shortcode_att( 'box_style' );
		$box_height = $this->get_shortcode_att( 'box_height' );
		$box_content_align_horizontal = $this->get_shortcode_att( 'box_content_align_horizontal' );
		$box_content_align_vertical = $this->get_shortcode_att( 'box_content_align_vertical' );

		$box_title = $this->get_shortcode_att( 'box_title' );
		$box_description = rawurldecode( base64_decode( strip_tags( $this->get_shortcode_att( 'box_description' ) ) ) );
		$box_custom_url = $this->get_shortcode_att( 'box_custom_url' );
		$box_open_in_new_window = $this->get_shortcode_att( 'box_open_in_new_window' );
		$box_image = $this->get_shortcode_att( 'box_image' );
		$button_text = $this->get_shortcode_att( 'button_text' );
		$btn_size = $this->get_shortcode_att( 'button_size' );


		// additional classes
		$additional_classes = array();

		// content align horizontal
		if ( ! empty( $box_content_align_horizontal ) ) {
			$additional_classes[] = 'tdm-' . $box_content_align_horizontal;
		}

		// content align vertical
		if( ! empty( $box_content_align_vertical ) ) {
			$additional_classes[] = 'tdm-' . $box_content_align_vertical;
		}

		// height
		$height = '';
		if( ! empty( $box_height ) ) {
			if ( is_numeric( $box_height ) ) {
				$height = ' height: ' . $box_height . 'px';
			} else if ( strpos( $box_height, '%') == true ) {
				$height = ' height: auto; padding-bottom: ' . $box_height . ';';
			} else {
				$height = ' height: ' . $box_height;
			}
		}

		// box style
		if ( ! empty( $box_style ) ) {
			$additional_classes[] = 'td-image-info-box-' . $box_style;
		} else {
			$additional_classes[] = 'td-image-info-box-style-1';
		}

		$buffy = '';
		$buffy .= '<div class="tdm_block ' . $this->get_block_classes($additional_classes) . ' tdm-mobile-full" ' . $this->get_block_html_atts() . '>';

			//get the block css
			$buffy .= $this->get_block_css();

			$buffy .= '<div class="td-block-width">';
				$buffy .= '<div class="td-block-row">';
					$buffy .= '<div class="td-block-span12 tdm-col">';

						$target = '';
						$no_custom_url = 'a';
						$with_button = '';

						if ( '' !== $box_open_in_new_window ) { $target = ' target="_blank" '; }
						if ( '' !== $button_text ) { $with_button = 'tdm-with-button ' . $btn_size . '-used'; }

						$link_data = 'href="' . $box_custom_url . '" ' . $target . ' rel="bookmark" title="' . $box_title . '"';

						if ( '' == $box_custom_url ) {
							$no_custom_url = 'div';
							$link_data = '';
						}

						$buffy .= '<div class="tdm-image-wrap ' . $with_button . '">';
							$buffy .= '<div class="tdm-image-border"><span class="tdm-image-border0"></span><span class="tdm-image-border1"></span><span class="tdm-image-border2"></span></div>';
							$buffy .= '<' . $no_custom_url . ' class="tdm-image-box" style="background-image: url(\'' . wp_get_attachment_url($box_image) . '\'); ' . $height . '" ' . $link_data . '></' . $no_custom_url . '>';
							$buffy .= '<div class="tdm-image-description">';
								$buffy .= '<h3 class="tdm-title-md">' . $box_title . '</h3>';
								$buffy .= '<div class="tdm-image-meta">';
									$buffy .= '<p>' . $box_description . '</p>';

									// Button
									$tds_button = $this->get_shortcode_att('tds_button');
									if ( empty( $tds_button ) ) {
										$tds_button = td_util::get_option( 'tds_button', 'tds_button1' );
									}
									$tds_button_instance = new $tds_button( $this->shortcode_atts );
									$buffy .= $tds_button_instance->render();

								$buffy .= '</div>';
							$buffy .= '</div>';
						$buffy .= '</div>';
					$buffy .= '</div>';
					$buffy .= '<div class="clearfix"></div>';
				$buffy .= '</div>';
			$buffy .= '</div>';
		$buffy .= '</div>'; // tdm_block

		return $buffy;
	}
}