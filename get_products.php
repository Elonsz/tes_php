<?php
include_once 'db.php';

if (!function_exists('getSectionTitle')) {
    function getSectionTitle($cat_name) {
        $titles = [
            'Indonesia'    => 'Nusantara Wonders',
            'Asia'         => 'Asian Treasure',
            'Eropa'        => 'Captivating Europe',
            'Europe'       => 'Captivating Europe',
            'Timur Tengah' => 'Middle East Charm',
            'Middle East'  => 'Middle East Charm',
            'Amerika'      => 'America Adventures',
            'America'      => 'America Adventures',
        ];
        return $titles[$cat_name] ?? $cat_name;
    }
}

$active_cat = isset($_GET['cat']) ? (int)$_GET['cat'] : 0;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$search_sql = '';
if ($search !== '') {
    $search_value = strtolower($conn->real_escape_string($search));
    $search_value = str_replace(['\\', '%', '_'], ['\\\\', '\\%', '\\_'], $search_value);
    $search_sql = " AND LOWER(product_name) LIKE '%{$search_value}%'";
}

// 1. Ambil data kategori untuk referensi
$all_categories = [];
$cat_res = $conn->query("SELECT * FROM tb_category ORDER BY category_id ASC");
while ($c = $cat_res->fetch_assoc()) {
    $all_categories[$c['category_id']] = $c['category_name'];
}

// 2. Ambil produk untuk katalog bawah (Semua wilayah selalu muncul)
$res_all = $conn->query("SELECT * FROM tb_product WHERE product_status = 1{$search_sql} ORDER BY data_created DESC");
$all_products_by_cat = [];
while ($p = $res_all->fetch_assoc()) {
    $all_products_by_cat[$p['category_id']][] = $p;
}

// 3. Ambil produk untuk Unggulan (Hanya ini yang berubah saat filter)
if ($active_cat === 0) {
    $res_feat = $conn->query("SELECT * FROM tb_product WHERE product_status = 1{$search_sql} ORDER BY data_created DESC");
} else {
    $res_feat = $conn->query("SELECT * FROM tb_product WHERE product_status = 1 AND category_id = $active_cat{$search_sql} ORDER BY data_created DESC");
}
$featured_items = [];
while ($f = $res_feat->fetch_assoc()) { $featured_items[] = $f; }

?>

<!-- ====== FEATURED SECTION (Dynamic) ====== -->
<div class="section-block">
    <h2 class="section-title">
        Featured Destinations<?= ($active_cat !== 0 && isset($all_categories[$active_cat])) ? " in " . htmlspecialchars($all_categories[$active_cat]) : "" ?>
    </h2>
    <?php if (count($featured_items) > 0): ?>
        <div class="featured-grid">
            <?php foreach ($featured_items as $i => $f): ?>
                <div class="feat-card <?= ($i === 0) ? 'feat-large' : 'feat-small' ?>" data-name="<?= strtolower(htmlspecialchars($f['product_name'])) ?>">
                    <img src="produk/<?= htmlspecialchars($f['product_image']) ?>" alt="<?= htmlspecialchars($f['product_name']) ?>">
                    <div class="feat-overlay"></div>
                    <div class="feat-info">
                        <h3><?= htmlspecialchars($f['product_name']) ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p style="text-align:center; padding: 20px; color: #888;">No featured destinations are available for this category.</p>
    <?php endif; ?>
</div>

<?php if (count($featured_items) === 0 && count($all_products_by_cat) === 0): ?>
    <p style="text-align:center; padding: 20px; color: #888;">No destinations match your search.</p>
<?php endif; ?>

<hr style="border: 0; border-top: 1px solid #eee; margin: 40px 0;">

<!-- ====== CATALOG SECTION (Static - All Regions) ====== -->
<?php foreach ($all_products_by_cat as $c_id => $items): ?>
    <div class="section-block">
        <span class="section-label"><?= strtoupper($all_categories[$c_id] ?? 'Destination') ?></span>
        <h2 class="section-title"><?= getSectionTitle($all_categories[$c_id] ?? '') ?></h2>
        <div class="card-grid">
            <?php foreach ($items as $item): ?>
                <a href="detail.php?id=<?= $item['product_id'] ?>" class="dest-card" data-name="<?= strtolower(htmlspecialchars($item['product_name'])) ?>">
                    <div class="card-img-wrap">
                        <img src="produk/<?= htmlspecialchars($item['product_image']) ?>">
                    </div>
                    <div class="card-label">
                        <span class="card-name"><?= htmlspecialchars($item['product_name']) ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>