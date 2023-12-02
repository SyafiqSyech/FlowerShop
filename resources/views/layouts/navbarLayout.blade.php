<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--========== WEBSITE LOGO =========-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
    <title>The Herb Shop &copy;</title>
</head>

<body>
    <!--==================== TRUE HEADER ====================-->
    <nav class="header__true hidden" id="headerTrue">
        <div class="navtrue__shop-name" id="navTrueShopName">
            <svg width="80" height="90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="navTrueShopLogo" fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.3009 21.5081L4.36608 21.1823L5.14819 20.889C6.14756 20.4762 6.75587 19.7375 6.97313 18.673L8.56994 10.1023C8.74375 9.18984 8.92841 8.17961 9.12394 7.07161C9.3412 5.94189 9.54759 4.82304 9.74312 3.71504C9.93864 2.58532 10.1124 1.56423 10.2645 0.651761H8.86324C8.08112 0.651761 7.40764 0.792976 6.84278 1.07541C6.27792 1.35784 5.76737 1.81407 5.31113 2.44411L2.70409 5.99621H2.37821L3.58397 0H21.6378L20.5949 5.99621H20.2691L19.0633 2.70481C18.5854 1.33611 17.5968 0.651761 16.0978 0.651761H14.7617L12.7412 11.3732C12.524 12.4812 12.2958 13.6761 12.0569 14.9579C11.8396 16.218 11.6224 17.4455 11.4051 18.6404C11.2096 19.7701 11.6332 20.5522 12.676 20.9867L13.0997 21.1823L13.0345 21.5081H4.3009ZM19.5728 21.5081L19.6379 21.1823L20.4526 20.9216C21.1044 20.6391 21.4846 20.172 21.5932 19.5203L23.3856 10.1023C23.6028 8.92914 23.8418 7.62561 24.1025 6.19174C24.3632 4.73614 24.6022 3.36744 24.8194 2.08564C24.9498 1.32525 24.6456 0.803839 23.907 0.521408L23.4181 0.325881L23.4833 0H31.5L31.4348 0.325881L30.5875 0.586586C29.8489 0.84729 29.4144 1.34697 29.284 2.08564L27.8175 10.1023H35.8994C36.0297 9.38537 36.1709 8.57067 36.323 7.6582C36.4968 6.74573 36.6598 5.81154 36.8118 4.85562C36.9857 3.89971 37.1377 3.00897 37.2681 2.1834C37.3984 1.35784 37.0834 0.792976 36.323 0.488821L35.8342 0.325881L35.8994 0H43.916L43.8509 0.325881L43.0688 0.586586C42.3518 0.84729 41.9173 1.34697 41.7652 2.08564L40.0055 11.3732C39.7882 12.5899 39.5601 13.8717 39.3211 15.2186C39.0821 16.5439 38.8323 17.9669 38.5716 19.4877C38.463 20.1829 38.7237 20.65 39.3537 20.889L40.1032 21.1823L40.0381 21.5081H31.9236L31.9888 21.1823L32.9339 20.8564C33.5639 20.6391 33.9441 20.2046 34.0744 19.5529L35.7364 10.7541H27.6546C27.4156 11.9924 27.1549 13.372 26.8725 14.8928C26.6118 16.3918 26.3511 17.9343 26.0904 19.5203C25.9817 20.1938 26.2316 20.6608 26.8399 20.9216L27.4591 21.1823L27.3939 21.5081H19.5728ZM42.4226 21.5081L42.4878 21.1823L43.1069 20.9867C43.8891 20.6826 44.3453 20.1394 44.4757 19.3573L46.2354 10.1023C46.4527 8.95086 46.6808 7.67993 46.9198 6.2895C47.1587 4.87735 47.3869 3.54124 47.6041 2.28117C47.7562 1.41215 47.4194 0.814701 46.5939 0.488821L46.268 0.325881L46.3332 0H61.0304L60.2157 5.67033H59.8898L59.2381 2.67222C59.086 1.97701 58.8144 1.46646 58.4234 1.14058C58.0323 0.814702 57.4566 0.651761 56.6962 0.651761H52.4271L50.6348 10.1023H53.6329C54.6105 10.1023 55.3492 9.71125 55.8489 8.92914L56.9243 7.29973H57.2502L56.077 13.5241H55.7511L55.3601 12.2205C55.0776 11.2429 54.4259 10.7541 53.4048 10.7541H50.5044C50.222 12.34 49.9179 14.0129 49.592 15.7726C49.2661 17.5324 48.9728 19.227 48.7121 20.8564H53.9588C54.6323 20.8564 55.208 20.726 55.686 20.4653C56.1639 20.1829 56.631 19.7158 57.0872 19.064L59.2706 15.8378H59.5965L58.293 21.5081H42.4226ZM0 55.5625L0.0651762 55.2366L0.879878 54.9759C1.53164 54.6935 1.91183 54.2264 2.02046 53.5746L3.81281 44.1567C4.03006 42.9835 4.26904 41.68 4.52974 40.2461C4.79045 38.7905 5.02943 37.4218 5.24668 36.14C5.37703 35.3796 5.07288 34.8582 4.33422 34.5758L3.84539 34.3803L3.91057 34.0544H11.9272L11.8621 34.3803L11.0148 34.641C10.2761 34.9017 9.8416 35.4013 9.71125 36.14L8.24479 44.1567H16.3266C16.457 43.4397 16.5982 42.625 16.7503 41.7126C16.9241 40.8001 17.087 39.8659 17.2391 38.91C17.4129 37.9541 17.565 37.0633 17.6953 36.2378C17.8257 35.4122 17.5107 34.8473 16.7503 34.5432L16.2615 34.3803L16.3266 34.0544H24.3433L24.2781 34.3803L23.496 34.641C22.7791 34.9017 22.3446 35.4013 22.1925 36.14L20.4327 45.4276C20.2155 46.6442 19.9874 47.926 19.7484 49.273C19.5094 50.5983 19.2596 52.0213 18.9989 53.542C18.8902 54.2373 19.1509 54.7044 19.781 54.9433L20.5305 55.2366L20.4653 55.5625H12.3509L12.4161 55.2366L13.3611 54.9107C13.9912 54.6935 14.3713 54.259 14.5017 53.6072L16.1637 44.8084H8.08185C7.84287 46.0468 7.58216 47.4263 7.29973 48.9471C7.03903 50.4462 6.77832 51.9887 6.51762 53.5746C6.40899 54.2481 6.65883 54.7152 7.26714 54.9759L7.88632 55.2366L7.82114 55.5625H0ZM22.8498 55.5625L22.915 55.2366L23.5342 55.0411C24.3163 54.7369 24.7725 54.1938 24.9029 53.4117L26.6627 44.1567C26.8799 43.0052 27.108 41.7343 27.347 40.3439C27.586 38.9317 27.8141 37.5956 28.0314 36.3355C28.1834 35.4665 27.8467 34.8691 27.0211 34.5432L26.6952 34.3803L26.7604 34.0544H41.4576L40.6429 39.7247H40.3171L39.6653 36.7266C39.5132 36.0314 39.2417 35.5208 38.8506 35.195C38.4595 34.8691 37.8838 34.7061 37.1234 34.7061H32.8544L31.062 44.1567H34.0602C35.0378 44.1567 35.7765 43.7656 36.2761 42.9835L37.3515 41.3541H37.6774L36.5043 47.5784H36.1784L35.7873 46.2749C35.5049 45.2973 34.8531 44.8084 33.832 44.8084H30.9317C30.6493 46.3944 30.3451 48.0672 30.0192 49.827C29.6933 51.5868 29.4001 53.2813 29.1394 54.9107H34.386C35.0595 54.9107 35.6352 54.7804 36.1132 54.5197C36.5912 54.2373 37.0583 53.7702 37.5145 53.1184L39.6979 49.8922H40.0238L38.7202 55.5625H22.8498ZM40.8942 55.5625L40.9594 55.2366L41.4808 55.0411C42.3498 54.6935 42.8604 54.0852 43.0125 53.2162L44.707 44.1567C44.9243 42.9183 45.1524 41.6365 45.3914 40.3113C45.6304 38.9643 45.8585 37.6499 46.0757 36.3681C46.2495 35.4774 45.9128 34.8582 45.0655 34.5106L44.7396 34.3803L44.8048 34.0544H53.017C55.472 34.0544 57.286 34.5106 58.4592 35.4231C59.6324 36.3138 60.219 37.5304 60.219 39.0729C60.219 40.3982 59.7627 41.5714 58.8503 42.5924C57.9378 43.6135 56.6343 44.3739 54.9397 44.8736L58.2637 53.3465C58.6113 54.1721 59.1544 54.7587 59.8931 55.1063L60.1212 55.2366L60.0234 55.5625H54.1902L50.8988 45.6557H48.8131C48.5959 46.7854 48.3786 47.9803 48.1614 49.2404C47.9441 50.5005 47.716 51.8366 47.477 53.2488C47.3249 54.1178 47.6617 54.7152 48.4873 55.0411L48.8783 55.2366L48.8131 55.5625H40.8942ZM48.9435 45.004H50.5729C52.3326 44.9605 53.647 44.4282 54.516 43.4072C55.4068 42.3643 55.8522 40.9522 55.8522 39.1707C55.8522 36.1943 54.6138 34.7061 52.1371 34.7061H50.8988L48.9435 45.004ZM61.2618 55.5625L61.3595 55.2366L61.9461 54.9107C62.3806 54.6935 62.6957 54.4545 62.8912 54.1938C63.1084 53.9114 63.2605 53.542 63.3474 53.0858L65.0746 44.1567C65.3136 42.9401 65.5417 41.68 65.7589 40.3765C65.9979 39.0512 66.226 37.7586 66.4433 36.4985C66.5954 35.6295 66.2586 34.9777 65.4331 34.5432L65.1072 34.3803L65.1723 34.0544H73.0261C74.7424 34.0544 76.1111 34.2825 77.1322 34.7387C78.1533 35.195 78.8811 35.7924 79.3156 36.5311C79.7718 37.2697 79.9999 38.0627 79.9999 38.91C79.9999 39.7138 79.7501 40.4959 79.2504 41.2563C78.7507 41.995 77.9903 42.625 76.9692 43.1464C75.9481 43.6679 74.6663 44.0046 73.1238 44.1567C74.6663 44.3305 75.9156 44.689 76.8715 45.2321C77.8274 45.7752 78.5226 46.427 78.9571 47.1874C79.4133 47.9478 79.6415 48.7516 79.6415 49.5989C79.6415 50.62 79.3264 51.5868 78.6964 52.4992C78.0664 53.4117 77.0561 54.1504 75.6657 54.7152C74.297 55.2801 72.4938 55.5625 70.2561 55.5625H61.2618ZM69.5392 43.896H70.6797C72.3091 43.896 73.5366 43.4615 74.3622 42.5924C75.1878 41.7017 75.6005 40.4416 75.6005 38.8122C75.6005 37.487 75.3072 36.4768 74.7207 35.7815C74.1558 35.0646 73.3085 34.7061 72.1788 34.7061H71.2663L69.5392 43.896ZM67.5513 54.9107H69.474C71.3858 54.9107 72.8088 54.3676 73.743 53.2813C74.6989 52.1733 75.1769 50.7503 75.1769 49.0123C75.1769 46.0359 73.743 44.5477 70.8753 44.5477H69.3762L69.2133 45.4276C68.9526 47.0136 68.6701 48.5995 68.366 50.1855C68.0835 51.7714 67.812 53.3465 67.5513 54.9107ZM3.5521 89.4544C4.6601 89.7368 5.77895 89.878 6.90867 89.878C8.49463 89.878 9.89592 89.6065 11.1125 89.0633C12.3509 88.5202 13.3177 87.7598 14.0129 86.7822C14.7081 85.7828 15.0557 84.5879 15.0557 83.1975C15.0557 82.0243 14.719 80.938 14.0455 79.9387C13.3937 78.9176 12.2097 77.777 10.4934 76.5169C9.18984 75.5827 8.28824 74.7354 7.78855 73.9751C7.28887 73.2147 7.03903 72.3674 7.03903 71.4332C7.03903 70.3469 7.41922 69.4779 8.17961 68.8261C8.96172 68.1744 9.91764 67.8485 11.0474 67.8485C12.1988 67.8485 13.057 68.1309 13.6218 68.6958C14.1867 69.2389 14.6429 70.0862 14.9905 71.2377L15.6423 73.3885H15.9682L16.8806 68.8261C16.1637 68.3265 15.2621 67.9354 14.1758 67.653C13.1113 67.3488 12.0359 67.1967 10.9496 67.1967C9.47227 67.1967 8.14702 67.4683 6.97385 68.0114C5.8224 68.5328 4.9208 69.2824 4.26904 70.26C3.61728 71.2159 3.2914 72.3348 3.2914 73.6166C3.2914 74.3553 3.41089 75.0831 3.64987 75.8C3.88884 76.5169 4.32335 77.2447 4.95339 77.9834C5.58343 78.7221 6.48503 79.515 7.6582 80.3623C8.61412 81.0358 9.33106 81.6441 9.80901 82.1873C10.3087 82.7304 10.6454 83.2518 10.8192 83.7515C10.993 84.2512 11.0799 84.7834 11.0799 85.3483C11.0799 86.4128 10.6998 87.3253 9.93937 88.0857C9.2007 88.8461 8.19047 89.2263 6.90867 89.2263C5.75723 89.2263 4.87735 88.9764 4.26904 88.4768C3.68245 87.9771 3.2045 87.195 2.83516 86.1304L1.89011 83.4582H1.56423L0.782114 88.2486C1.5425 88.77 2.46583 89.172 3.5521 89.4544ZM16.1046 88.9656L16.0394 89.2915H23.8606L23.9258 88.9656L23.3066 88.7049C22.6983 88.4442 22.4484 87.9771 22.5571 87.3036C22.8178 85.7176 23.0785 84.1751 23.3392 82.6761C23.6216 81.1553 23.8823 79.7757 24.1213 78.5374H32.2031L30.5411 87.3362C30.4108 87.9879 30.0306 88.4224 29.4006 88.6397L28.4555 88.9656L28.3903 89.2915H36.5048L36.5699 88.9656L35.8204 88.6723C35.1904 88.4333 34.9297 87.9662 35.0383 87.271C35.299 85.7502 35.5488 84.3272 35.7878 83.002C36.0268 81.655 36.2549 80.3732 36.4722 79.1566L38.2319 69.869C38.384 69.1303 38.8185 68.6306 39.5355 68.3699L40.3176 68.1092L40.3827 67.7833H32.3661L32.3009 68.1092L32.7897 68.2721C33.5501 68.5763 33.8651 69.1412 33.7348 69.9667C33.6044 70.7923 33.4524 71.683 33.2785 72.6389C33.1265 73.5949 32.9635 74.5291 32.7897 75.4415C32.6376 76.354 32.4964 77.1687 32.3661 77.8856H24.2842L25.7507 69.869C25.8811 69.1303 26.3156 68.6306 27.0542 68.3699L27.9015 68.1092L27.9667 67.7833H19.95L19.8848 68.1092L20.3737 68.3047C21.1123 68.5872 21.4165 69.1086 21.2861 69.869C21.0689 71.1508 20.8299 72.5195 20.5692 73.9751C20.3085 75.4089 20.0695 76.7125 19.8523 77.8856L18.0599 87.3036C17.9513 87.9553 17.5711 88.4224 16.9193 88.7049L16.1046 88.9656ZM44.1103 88.8352C45.3269 89.5087 46.7173 89.8455 48.2815 89.8455C50.1282 89.8455 51.7902 89.487 53.2675 88.77C54.7666 88.0314 56.0375 87.032 57.0803 85.7719C58.1449 84.4901 58.9596 83.0237 59.5244 81.3725C60.0893 79.7214 60.3717 77.9834 60.3717 76.1585C60.3717 74.3335 60.035 72.7584 59.3615 71.4332C58.688 70.0862 57.743 69.0543 56.5263 68.3373C55.3097 67.5987 53.8867 67.2293 52.2573 67.2293C50.4324 67.2293 48.7704 67.5987 47.2713 68.3373C45.794 69.076 44.523 70.0862 43.4585 71.368C42.4157 72.6498 41.6118 74.1054 41.047 75.7348C40.4821 77.3642 40.1997 79.0805 40.1997 80.8837C40.1997 82.8607 40.5473 84.5119 41.2425 85.8371C41.9377 87.1624 42.8936 88.1617 44.1103 88.8352ZM51.3774 88.1183C50.5084 88.8352 49.5851 89.1937 48.6074 89.1937C47.2604 89.1937 46.2719 88.5419 45.6419 87.2384C45.0336 85.9349 44.7294 84.0665 44.7294 81.6333C44.7294 79.7431 44.925 77.9725 45.316 76.3214C45.7071 74.6485 46.2394 73.1821 46.9128 71.922C47.5863 70.6619 48.3684 69.6734 49.2592 68.9565C50.1499 68.2396 51.095 67.8811 52.0943 67.8811C53.4413 67.8811 54.3972 68.522 54.9621 69.8038C55.527 71.0856 55.8094 72.9214 55.8094 75.3112C55.8094 77.2013 55.6139 78.9936 55.2228 80.6882C54.8535 82.3611 54.3321 83.8384 53.6586 85.1202C53.0068 86.3803 52.2464 87.3796 51.3774 88.1183ZM60.1502 88.9656L60.085 89.2915H68.1343L68.1995 88.9656L67.8084 88.8678C66.8742 88.5419 66.4832 87.8793 66.6353 86.8799C66.8308 85.8154 67.0154 84.7617 67.1892 83.7189C67.3848 82.6543 67.5694 81.6876 67.7432 80.8186H69.1771C71.3931 80.8186 73.2289 80.4927 74.6845 79.8409C76.1618 79.1674 77.259 78.2875 77.9759 77.2013C78.7146 76.0933 79.0839 74.9092 79.0839 73.6492C79.0839 71.8894 78.443 70.4773 77.1612 69.4127C75.9011 68.3265 73.8698 67.7833 71.0672 67.7833H63.963L63.8979 68.1092L64.2237 68.2396C65.071 68.5654 65.4186 69.1737 65.2666 70.0645C65.0059 71.5853 64.7669 72.9757 64.5496 74.2358C64.3324 75.4741 64.1042 76.6907 63.8653 77.8856L62.1707 86.9451C61.9969 87.8793 61.4429 88.5093 60.5087 88.8352L60.1502 88.9656ZM69.0794 80.1668H67.8736L68.9816 74.3009C69.3509 72.3456 69.7094 70.3904 70.057 68.4351H70.8391C72.0557 68.4351 72.9899 68.8696 73.6417 69.7386C74.2935 70.6076 74.6193 71.8568 74.6193 73.4862C74.6193 75.5719 74.1088 77.2121 73.0877 78.407C72.0666 79.5802 70.7305 80.1668 69.0794 80.1668Z"
                    fill="black" />
            </svg>
        </div>

        <div class="navtrue__list-right" id="navTrueListRight">
            <a href="{{ route('cart') }}"><i class="ri-shopping-cart-line"></i></a>
            <a href="{{ route('account') }}"><i class="ri-user-line"></i></a>
            <a onclick="toggleDiv('dropdown')"><i class="ri-menu-line"></i></a>
        </div>
    </nav>

    <!--==================== DROPDOWN ====================-->
    <div id="dropdown" class="dropdown" style="display: none;">
        <div class="dropdown__container">
            <nav class="dropdown__header" id="dropdown-header">
                <div class="dropdown__header-left">
                    <div class="dHeader__shop-name">
                        <p class="dHeader__the">THE</p>
                        <p class="dHeader__herb">HERB</p>
                        <p class="dHeader__shop">SHOP</p>
                    </div>
                </div>

                <div class="dropdown__header-right">
                    <div class="dHeader__cart">
                        <a href="{{ route('cart') }}"><i class="ri-shopping-cart-line"></i></a>
                    </div>

                    <div class="dHeader__account">
                        <a href="{{ route('account') }}"><i class="ri-user-line"></i></a>
                    </div>

                    <div class="dHeader__menu" id="dHeader-menu">
                        <i class="ri-close-line" id="dHeader-close"></i>
                    </div>
                </div>
            </nav>

            <div class="drowdown__content-main">
                <div class="dropdown__left">
                    <div class="dropdown__left-up">
                        <a href="{{ route('home') }}" class="dropdown__home">HOME</a>
                    </div>

                    <div class="dropdown__left-mid">
                        <a href="{{ route('herbs') }}" class="dropdown__herbs">HERBS</a>

                        <p class="dropdown__herbs-sub">ALCHEMICAL</p>
                        <p class="dropdown__herbs-sub">MAGICAL</p>
                        <p class="dropdown__herbs-sub">HEALING</p>
                    </div>

                    <div class="dropdown__left-bot">
                        <a href="{{ route('contact') }}" class="dropdown__contact">CONTACT</a>
                    </div>
                </div>

                <div class="dropdown__right">

                </div>
            </div>

            <div class="dropdown__footer">
                <div class="dropdown__footer-left">
                    <div class="dropdown__footer__ig">
                        <a href="" class="dropdown__footer__ig-link">
                            <img src="{{ asset('img/icon/ri_instagram-fill.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>

                    <div class="dropdown__footer__twit">
                        <a href="" class="dropdown__footer__twit-link">
                            <img src="{{ asset('img/icon/twitter-icon.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>

                    <div class="dropdown__footer__linkedin">
                        <a href="" class="dropdown__footer__linked-link">
                            <img src="{{ asset('img/icon/ri_linkedin-fill.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>

                    <div class="dropdown__footer__discord">
                        <a href="" class="dropdown__footer__dc-link">
                            <img src="{{ asset('img/icon/ri_discord-fill.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>
                </div>

                <div class="dropdown__footer-right">
                    <div class="dropdown__footer__button-os-container">
                        <button class="dropdown__footer__os-btn button">
                            Our Story
                            <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div>
        @yield('content')
    </div>

    <!--========== SCROLL UP ==========-->
    <a href="#home" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>

    <!--=============== OPEN DROPDOWN ===============-->
    <script>
        function toggleDiv(divId) {
            var div = document.getElementById(divId)
            if (div.style.display === 'none' || div.style.display === '') {
                div.style.display = 'block'
            } else {
                div.style.display = 'none'
            }
        }
    </script>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/landing-page.js') }}"></script>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
