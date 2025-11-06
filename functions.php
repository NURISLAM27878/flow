<?php
/**
 * Enqueue all CSS and JS files from the theme's /assets directory (recursively).
 *
 * Place this in your theme's functions.php. It will:
 *  - find all .css and .js files under /assets
 *  - register and enqueue them with a handle based on their path
 *  - use file modification time as the version for cache-busting
 *  - load JS in the footer
 */

if ( ! function_exists( 'flow_enqueue_all_assets' ) ) {
    function flow_enqueue_all_assets() {
        $theme_dir = get_stylesheet_directory();       // full path on disk
        $theme_uri = get_stylesheet_directory_uri();   // URL

        $assets_dir = $theme_dir . '/assets';
        if ( ! is_dir( $assets_dir ) ) {
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator( $assets_dir, RecursiveDirectoryIterator::SKIP_DOTS ),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ( $iterator as $file ) {
            if ( ! $file->isFile() ) {
                continue;
            }

            $ext = strtolower( pathinfo( $file->getFilename(), PATHINFO_EXTENSION ) );
            if ( $ext !== 'css' && $ext !== 'js' ) {
                continue;
            }

            // Build a relative path from theme root and corresponding URL
            $path_on_disk = $file->getPathname();
            $rel_path = str_replace( array( '\\', '/' ), '/', substr( $path_on_disk, strlen( $theme_dir ) ) ); // e.g. /assets/css/main.css
            $rel_path = ltrim( $rel_path, '/' );
            $file_url = trailingslashit( $theme_uri ) . $rel_path;

            // Create a safe handle: prefix + sanitized relative path (slashes -> dashes)
            $handle = 'flow-' . sanitize_key( str_replace( '/', '-', $rel_path ) );

            // Use filemtime for versioning if available
            $ver = @filemtime( $path_on_disk ) ?: null;

            if ( $ext === 'css' ) {
                wp_enqueue_style( $handle, $file_url, array(), $ver );
            } else { // js
                // load in footer by default; no default deps
                wp_enqueue_script( $handle, $file_url, array(), $ver, true );
            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'flow_enqueue_all_assets', 20 );
}