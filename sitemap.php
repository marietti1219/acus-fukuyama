<?php
header('Content-Type: application/xml; charset=utf-8');

$api_key = 'wT9d8hwXj4s7ZTPdVI6bwcE7QDEkZ0ygpAw8';
$endpoint = 'https://acusfukuyama.microcms.io/api/v1/colum?limit=100&orders=-publishedAt&fields=id,publishedAt';

$context = stream_context_create([
  'http' => [
    'header' => 'X-MICROCMS-API-KEY: ' . $api_key
  ]
]);

$json = @file_get_contents($endpoint, false, $context);
$data = $json ? json_decode($json, true) : ['contents' => []];
$articles = $data['contents'] ?? [];

$static_pages = [
  ['loc' => 'https://acus-web.com', 'lastmod' => '2026-06-12', 'changefreq' => 'monthly', 'priority' => '1.0'],
  ['loc' => 'https://acus-web.com/menu.php', 'lastmod' => '2026-06-12', 'changefreq' => 'monthly', 'priority' => '0.9'],
  ['loc' => 'https://acus-web.com/staff.php', 'lastmod' => '2026-06-12', 'changefreq' => 'yearly', 'priority' => '0.7'],
  ['loc' => 'https://acus-web.com/access.php', 'lastmod' => '2026-06-12', 'changefreq' => 'yearly', 'priority' => '0.8'],
  ['loc' => 'https://acus-web.com/faq.php', 'lastmod' => '2026-06-12', 'changefreq' => 'monthly', 'priority' => '0.7'],
  ['loc' => 'https://acus-web.com/column/', 'lastmod' => '2026-06-12', 'changefreq' => 'weekly', 'priority' => '0.8'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($static_pages as $page) {
  echo "  <url>\n";
  echo "    <loc>{$page['loc']}</loc>\n";
  echo "    <lastmod>{$page['lastmod']}</lastmod>\n";
  echo "    <changefreq>{$page['changefreq']}</changefreq>\n";
  echo "    <priority>{$page['priority']}</priority>\n";
  echo "  </url>\n\n";
}

foreach ($articles as $article) {
  $id = htmlspecialchars($article['id']);
  $lastmod = substr($article['publishedAt'], 0, 10);
  echo "  <url>\n";
  echo "    <loc>https://acus-web.com/column/article.html?id={$id}</loc>\n";
  echo "    <lastmod>{$lastmod}</lastmod>\n";
  echo "    <changefreq>yearly</changefreq>\n";
  echo "    <priority>0.7</priority>\n";
  echo "  </url>\n\n";
}

echo '</urlset>';
?>
