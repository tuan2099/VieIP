<?php
$logos = get_field('partner_logos'); // ACF Gallery

if ($logos && is_array($logos)) : ?>
<ul class="pt-12 pb-28 grid grid-cols-2 md:grid-cols-5 gap-5 place-items-center" aria-label="Trusted by partner logos">
  <?php foreach ($logos as $img) :
    // Chuẩn hoá dữ liệu ảnh
    $id = 0; $url = ''; $alt = '';

    if (is_array($img)) {                 // Gallery trả về Array
      $id  = isset($img['ID']) ? (int)$img['ID'] : 0;
      $url = $img['url'] ?? '';
      $alt = $img['alt'] ?? '';
    } elseif (is_numeric($img)) {         // Gallery trả về ID
      $id  = (int)$img;
      $url = wp_get_attachment_image_url($id, 'medium');
      $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
    } else {                              // Gallery trả về URL
      $url = (string)$img;
    }

    // Tạo thẻ <img> (ưu tiên ID để có srcset)
    if ($id) {
      $img_html = wp_get_attachment_image($id, 'medium', false, [
        'class' => 'max-h-11 w-auto object-contain opacity-80 hover:opacity-100 transition',
        'loading' => 'lazy',
        'alt' => $alt ?: 'Partner logo',
        'aria-label' => $alt ?: 'Partner logo',
      ]);
    } else {
      $img_html = sprintf(
        '<img src="%s" alt="%s" loading="lazy" class="max-h-11 w-auto object-contain opacity-80 hover:opacity-100 transition" />',
        esc_url($url),
        esc_attr($alt ?: 'Partner logo')
      );
    }
    ?>
    <li class="w-full flex justify-center items-center">
      <?php echo $img_html; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
