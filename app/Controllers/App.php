<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo.png';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getBanner()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/bannerbg.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getImageBanner()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/bannerimg.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIconThreeCol1()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/solution1.svg';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIconThreeCol2()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/solution2.svg';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIconThreeCol3()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/store.svg';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getImageModule()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/connecting.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIcon1()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/aperity.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIcon2()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/craftbrew.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIcon3()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/moderntimes.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIcon4()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/untappd.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIcon5()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/provi.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getIcon6()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/salsify.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getService1()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/service1.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getService2()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/service2.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getService3()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/service3.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getTheLatest()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/newsimg.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSixIcon1()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/logo1.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSixIcon2()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/logo2.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSixIcon3()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/logo3.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSixIcon4()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/logo4.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSixIcon5()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/logo5.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSixIcon6()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/logo6.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getFooterLogo()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/banner_footer.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getFooterBanner()
    {
        $banner = get_field('ns_banner_image', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/footer.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    /**
     * Get Main Menu
     */
    public static function getMainNav()
    {
        $location = 'primary_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeHeaderMenu(),
                'menu_class' => 'main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
                lg:flex-row lg:justify-end',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    /**
     * Get Footer Menu
     */
    public static function getFooterNav()
    {
        $location = 'footer_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                ITEMS_WRAP => '%3$s',
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeFooterMenu(),
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    public static function getNameModule($num)
    {
        //code 
        $name = "Module".$num ; 
        return $name ;
    }
}
