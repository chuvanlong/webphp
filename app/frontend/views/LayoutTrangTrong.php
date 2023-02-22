<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/libs/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="../template/css/style.css">
    <title>Thanh niên tình nguyện Haui
    </title>
    <link href="../template/images/comon/logo_tntn.png" rel="shortcut icon" type="image/png">
</head>

<body>
    <div id="app">
        <?php include "Views/HeaderView.php"; ?>
        <main>
        <?php echo $contentMvc; ?>
        </main>
    </div>
</body>


<!-- vue core -->
<script src="../template/js/vue.js"></script>
<script src="../template/js/httpVueLoader.js"></script>
<!-- end vue core -->

<script src="../template/js/jquery-3.4.1.js"></script>
<script src="../template/libs/swiper/swiper-bundle.js"></script>
<script src="../template/libs/bootstrap/popper.min.js"></script>
<script src="../template/libs/bootstrap/bootstrap.min.js"></script>
<script src="../template/libs/gsap/gsap.min.js"></script>
<script src="../template/js/main.js"></script>
<script>
    var app = new Vue({
        el: "#app",
        components: {
            myheader: httpVueLoader("../template/vue_components/header.vue"),
        },
        mounted() {
            this.$nextTick(() => {

                $(window).bind("load", function () {

                    // Home Banner
                    var homeswipper = new Swiper("#homeswipper .mySwiper", {
                        slidesPerView: 1,
                        speed: 1500,
                        autoplay: {
                            delay: 5000,
                        },
                        navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        dynamicBullets: true,
                    },
                    });
                    var categorymonths = new Swiper("#categorymonths .mySwiper", {
                        slidesPerView: 1,
                        speed: 1500,
                        autoplay: {
                            delay: 5000,
                        },
                        navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        dynamicBullets: true,
                    },
                    });

                    // Home events               

                    iconInterval();
                    fixedsocialPopup();
                    triggerFixedEle();
                })
            });
        },
    });
</script>

</html>