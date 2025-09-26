<?php
/**
 * Class Functions
 *
 * @package Tetloose-Theme
 **/

/**
 * Create css module + class names and attach to components
 **/
class Module {
    /** @var array<string> */
    private array $styles;

    /** @var array<string> */
    private array $class_names;

    /** @var array<string> */
    private array $inline_styles;

    /**
     * Public function Constructor
     *
     * @param array      $styles array of css module styles.
     * @param array      $class_names array of classnames.
     * @param array|null $inline_styles array of styles (optional).
     **/
    public function __construct( $styles = [], $class_names = [], $inline_styles = null ) {
        $this->styles        = $styles;
        $this->class_names   = $class_names;
        $this->inline_styles = $inline_styles ?? [];
    }

    /**
     * Public function css module styles
     **/
    public function styles() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->styles ) );
    }

    /**
     * Public function class names
     **/
    public function class_names() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->class_names ) );
    }

    /**
     * Public function inline_styles (optional)
     **/
    public function inline_styles() {
        if ( empty( $this->inline_styles ) ) {
            return '';
        }

        return implode( ' ', preg_replace( '/,+/', ',', $this->inline_styles ) );
    }
}
