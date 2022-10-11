<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
		<lastmod><?php echo date("Y-m-d", time());?></lastmod>
        <changefreq>daily</changefreq>
    </url>

    <!-- Sitemap -->
    <?php foreach($menus as $menu) { ?>
    <url>
		
        <loc><?php echo base_url($menu['link'].$menu['url']); ?></loc>
        <priority>0.5</priority>
		<lastmod><?php echo date("Y-m-d", time());?></lastmod>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>

    <?php foreach($products as $product) { ?>
    <url>
        <loc><?php echo base_url($product['id'].'-'.$product['seo']) ?></loc>
        <priority>0.5</priority>
		<lastmod><?php echo date("Y-m-d", time());?></lastmod>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>

    <?php foreach($news as $new) { ?>
    <url>
        <loc><?php echo base_url('tin-tuc/'.$new['id'].'-'.$new['seo']); ?></loc>
        <priority>0.5</priority>
		<lastmod><?php echo date("Y-m-d", time());?></lastmod>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>

</urlset>