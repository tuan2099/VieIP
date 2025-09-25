<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<style>
    .custom_bg1 {
      background-color: transparent;
      background-image: linear-gradient(210deg, #FFFFFF00 33%, #FFFFFF45 190%);
    }

    .custom_blur {
      background-image: linear-gradient(227deg, #06969724 3%, #ae634717 51%, #ff003726 97%);
      background-blend-mode: normal;
      --f2w-order: 0;
      filter: blur(25px);
      border-radius: 542.8px;
      width: 1509px;
      height: 1002px;
      position: absolute;
      top: 0;
      left: -72px;
    }

    .custom_bg_text {
      background-image: linear-gradient(130deg, #3e8579 15%, #cf572e 47%, #de3d4a 97%);
      border-radius: 50%;
    }

    .entry-content figure.wp-block-image {
      height: auto !important;       /* gỡ height:100% */
      max-height: none !important;   /* phòng khi có max-height */
      align-self: auto;              /* nếu figure nằm trong flex container */
    }
  </style>
<body class="bg-[#0b0b15] text-white" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
        /* header for page */
        if (function_exists('vexa_header_layout')) {
            vexa_header_layout();
        }
        else{
            get_template_part('inc/header/header', 'default');
        }
    ?>