<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>


<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>http://127.0.0.1:8000/sitemap/posts</loc>
        <lastmod>{{ $articles->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>http://127.0.0.1:8000/sitemap/categories</loc>
        <lastmod>{{ $articles->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>http://127.0.0.1:8000/sitemap/blogs</loc>
        <lastmod>{{ $blogs->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
</sitemapindex>
