<?php
function get_component($name)
{
    if (file_exists(__DIR__ . '/components/' . $name . '.php')) {
        require __DIR__ . '/components/' . $name . '.php';
    }
}

function get_default_image()
{
    return bloginfo("template_url") . "/assets/default/default_image.jpg";
}

function asset($style)
{
    return bloginfo('template_url') . $style;
}

function clearPhoneNumber(?string $number): ?string
{
    return preg_replace('/[^0-9+]/', '', $number);
}
// Menü aktif etme
function register_my_menu()
{
    register_nav_menus(array(
        'header-menu' => 'Header Menü',
        'footer-menu-corporate' => 'Footer Menü kurumsal',
        'footer-menu-products' => 'Footer Menü Ürünler',
    ));
}

add_action('init', 'register_my_menu');

// Admin Paneli Oluşturma
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'menu_title' => 'Penta Panel',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'icon_url' => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyOTQuMTQgMjcwLjQyIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzFkMWQxYjtmaWxsLXJ1bGU6ZXZlbm9kZDt9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IkxheWVyXzIiIGRhdGEtbmFtZT0iTGF5ZXIgMiI+PGcgaWQ9ImthdG1hbl8xIiBkYXRhLW5hbWU9ImthdG1hbiAxIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zNi4wNSwwQTM2LDM2LDAsMCwwLDAsMzYuMDVWMjcwLjQySDI1OC4wOWEzNiwzNiwwLDAsMCwzNi4wNS0zNi4wNVYwWk0yNjkuMTYsMjQ1LjQ0SDI1VjI1SDI2OS4xNloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik03Ni43NywxMjcuNTJIMjQ4LjYyVjQxLjcxSDQ0LjcxdjE4OEg3Ni43N1ptMTQ4LTU4LjkzdjMyLjE0aC0xNDhWNjguNTlaIi8+PHBvbHlnb24gY2xhc3M9ImNscy0xIiBwb2ludHM9IjIxMC40NyAxMzguMjYgMTY0LjY5IDE3Ny40OSAxMjYuNDIgMTM5Ljc2IDg1IDEzOS43NiAxNjkuODcgMjI5Ljk0IDIxNy42IDIyOS42NyAxODUuMDggMTk3LjYgMjQ4LjYyIDEzOC4yNiAyMTAuNDcgMTM4LjI2Ii8+PC9nPjwvZz48L3N2Zz4=",
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Genel Ayarlar',
        'menu_title' => 'Genel Ayarlar',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Menü Ayarları',
        'menu_title' => 'Menü Ayarları',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'İletişim Ayarları',
        'menu_title' => 'İletişim Ayarları',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Form Embed Ayarları',
        'menu_title' => 'Form Embed Ayarları',
        'parent_slug' => 'theme-general-settings',
    ));
}


// Thumbnailleri aktif et
add_theme_support('post-thumbnails');
// Thumbnailleri aktif et

function prefix_remove_comments_tl()
{
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'prefix_remove_comments_tl');


function my_custom_pagination_base(): void
{
    global $wp_rewrite;
    $wp_rewrite->pagination_base = 'sayfa';
    $wp_rewrite->flush_rules();
}

add_action('init', 'my_custom_pagination_base', 1);



function customPagination($maxShow = 3)
{
    global $wp_query;
    if ($wp_query->max_num_pages <= 1) return null;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    $html = '<ul>';
    $html .= '<li><a href="' . get_pagenum_link(max($paged - 1, 1)) . '"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14"><g transform="translate(60.779 16.545) rotate(180)"><path class="fill" d="M7,0l7,8H0Z" transform="translate(60.779 2.545) rotate(90)" fill="#424448"></path></g></svg></a></li>';
    $minPage = ($max - $paged) > $maxShow ? $paged : ($paged - (max($maxShow - ($max - $paged), 1)));
    $maxPage = $paged < $max ? $minPage + $maxShow : $paged;
    for ($i = $minPage; $i <= $maxPage; $i++) {
        if ($i < 1) continue;
        $html .= '<li><a class="' . ($i == $paged ? 'active' : '') . '" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
    }
    $html .= '<li><a href="' . get_pagenum_link(min($paged + 1, $max)) . '"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14"><g transform="translate(-52.779 -2.545)"><path class="fill" d="M7,0l7,8H0Z" transform="translate(60.779 2.545) rotate(90)" fill="#424448"></path></g></svg></a></li>';
    $html .= '</ul>';
    return $html;
}


add_filter('wpcf7_autop_or_not', '__return_false');
