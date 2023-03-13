<?php
class Custom_Walker_Category extends Walker_Category {
  public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
    // Restores the more descriptive, specific name for use within this method.
    $category = $data_object;

    /** This filter is documented in wp-includes/category-template.php */
    $cat_name = apply_filters( 'list_cats', esc_attr( $category->name ), $category );

    // Don't generate an element if the category name is empty.
    if ( '' === $cat_name ) {
      return;
    }

    $atts         = array();
    $atts['href'] = get_term_link( $category );

    if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
      /**
       * Filters the category description for display.
       *
       * @since 1.2.0
       *
       * @param string  $description Category description.
       * @param WP_Term $category    Category object.
       */
      $atts['title'] = strip_tags( apply_filters( 'category_description', $category->description, $category ) );
    }

    /**
     * Filters the HTML attributes applied to a category list item's anchor element.
     *
     * @since 5.2.0
     *
     * @param array   $atts {
     *     The HTML attributes applied to the list item's `<a>` element, empty strings are ignored.
     *
     *     @type string $href  The href attribute.
     *     @type string $title The title attribute.
     * }
     * @param WP_Term $category          Term data object.
     * @param int     $depth             Depth of category, used for padding.
     * @param array   $args              An array of arguments.
     * @param int     $current_object_id ID of the current category.
     */
    $atts = apply_filters( 'category_list_link_attributes', $atts, $category, $depth, $args, $current_object_id );

    $attributes = '';
    foreach ( $atts as $attr => $value ) {
      if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
        $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    $link = sprintf(
      '<a%s><p class="blog-aside-category-name">%s</p></a>',
      $attributes,
      $cat_name
    );

    if ( ! empty( $args['show_count'] ) ) {
      $link = sprintf(
        '<a%s>
          <p class="blog-aside-category-name">%s</p>
          <p class="blog-aside-category-number">%s</p>
        </a>',
        $attributes,
        $cat_name,
        ' (' . number_format_i18n( $category->count ) . ')'
      );
    }
    if ( 'list' === $args['style'] ) {
      $output     .= "\t<li";
      $css_classes = array(
        'cat-item',
        'cat-item-' . $category->term_id,
      );

      if ( ! empty( $args['current_category'] ) ) {
        // 'current_category' can be an array, so we use `get_terms()`.
        $_current_terms = get_terms(
          array(
            'taxonomy'   => $category->taxonomy,
            'include'    => $args['current_category'],
            'hide_empty' => false,
          )
        );

        foreach ( $_current_terms as $_current_term ) {
          if ( $category->term_id == $_current_term->term_id ) {
            $css_classes[] = 'current-cat';
            $link          = str_replace( '<a', '<a aria-current="page"', $link );
          } elseif ( $category->term_id == $_current_term->parent ) {
            $css_classes[] = 'current-cat-parent';
          }
          while ( $_current_term->parent ) {
            if ( $category->term_id == $_current_term->parent ) {
              $css_classes[] = 'current-cat-ancestor';
              break;
            }
            $_current_term = get_term( $_current_term->parent, $category->taxonomy );
          }
        }
      }

      /**
       * Filters the list of CSS classes to include with each category in the list.
       *
       * @since 4.2.0
       *
       * @see wp_list_categories()
       *
       * @param string[] $css_classes An array of CSS classes to be applied to each list item.
       * @param WP_Term  $category    Category data object.
       * @param int      $depth       Depth of page, used for padding.
       * @param array    $args        An array of wp_list_categories() arguments.
       */
      $css_classes = implode( ' ', apply_filters( 'category_css_class', $css_classes, $category, $depth, $args ) );
      $css_classes = $css_classes ? ' class="' . esc_attr( $css_classes ) . '"' : '';

      $output .= $css_classes;
      $output .= ">$link\n";
    } elseif ( isset( $args['separator'] ) ) {
      $output .= "\t$link" . $args['separator'] . "\n";
    } else {
      $output .= "\t$link<br />\n";
    }
  }
}
