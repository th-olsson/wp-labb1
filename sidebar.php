<?php
// Get page data from slug so that pages can be excluded from wp_list_pages()
$undersida = get_page_by_path('undersida');
$undersida2 = get_page_by_path('undersida-2');
$undersida3 = get_page_by_path('undersida-3');
$undersida4 = get_page_by_path('undersida-4');
?>

<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <?php get_search_form() ?>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <?php wp_list_pages(
                    array(
                        'title_li' => '<h2>Sidor</h2>',
                        'exclude' => "$undersida->ID, $undersida2->ID, $undersida3->ID, $undersida4->ID",
                    )
                ); ?>
            </li>
            <li>
                <?php echo '<h2>Arkiv</h2>' ?>
                <?php wp_get_archives() ?>
            </li>
            <?php wp_list_categories(
                array(
                    'show_count' => '1',
                    'title_li' => '<h2>Kategorier</h2>',
                    'hide_title_if_empty' => '1'
                )
            ) ?>
        </ul>
    </div>
</aside>