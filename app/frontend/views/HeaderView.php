<template>
    <div class="header" style="background-image: url(../template/images/backgroud/vector_1908398.png);">
        <div class="header--inner">
            <div class="header-logo">
                <a href="index.php?controller=home" >
                    <img class="img-fluid no-scroll" src="../template/images/comon/logo_tntn.png" alt="">
                    <!-- <img class="img-fluid is-scroll" src="images/comon/logo_tntn.png" alt=""> -->
                </a>
            </div>
            <div class="header-content">
                <ul class="content-nav-list">
                    <li class="content-nav-item ">
                        <a href="index.php?controller=aboutus">Giới thiệu</a>
                    </li>
                    <li class="content-nav-item ">
                        <a href="index.php?controller=news ">Hoạt động</a>
                    </li>
                    <li class="content-nav-item ">
                        <a href="index.php?controller=typicalface">Gương mặt tiêu biểu</a> 
                    </li>
                    <li class="content-nav-item ">
                        <a href="index.php?controller=contact">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <?php if(isset($_SESSION["email"]) == false): ?>
            <div class="header-register">
                <button class="btn-register">
                <a href="index.php?controller=account&action=register">Nộp đơn ứng tuyển</a>
                </button>
                <button style="<?php echo ($_SESSION["btnn"]);?>" class="btn-login">
                    <a href="index.php?controller=account&action=login">Đăng nhập</a>
                </button>
            </div>
            <?php else: ?>
                <div class="header-register">
                <a href="javascrip:;">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.375 18.75C34.375 21.2364 33.3873 23.621 31.6291 25.3791C29.871 27.1373 27.4864 28.125 25 28.125C22.5136 28.125 20.129 27.1373 18.3709 25.3791C16.6127 23.621 15.625 21.2364 15.625 18.75C15.625 16.2636 16.6127 13.879 18.3709 12.1209C20.129 10.3627 22.5136 9.375 25 9.375C27.4864 9.375 29.871 10.3627 31.6291 12.1209C33.3873 13.879 34.375 16.2636 34.375 18.75Z" fill="#0C0F59"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25C0 18.3696 2.63392 12.0107 7.32233 7.32233C12.0107 2.63392 18.3696 0 25 0C31.6304 0 37.9893 2.63392 42.6777 7.32233C47.3661 12.0107 50 18.3696 50 25C50 31.6304 47.3661 37.9893 42.6777 42.6777C37.9893 47.3661 31.6304 50 25 50C18.3696 50 12.0107 47.3661 7.32233 42.6777C2.63392 37.9893 0 31.6304 0 25ZM25 3.125C20.8806 3.12522 16.8449 4.28863 13.3575 6.48134C9.87012 8.67404 7.07276 11.8069 5.28739 15.5194C3.50202 19.2318 2.80121 23.3729 3.26562 27.4661C3.73003 31.5593 5.34079 35.4382 7.9125 38.6562C10.1313 35.0812 15.0156 31.25 25 31.25C34.9844 31.25 39.8656 35.0781 42.0875 38.6562C44.6592 35.4382 46.27 31.5593 46.7344 27.4661C47.1988 23.3729 46.498 19.2318 44.7126 15.5194C42.9272 11.8069 40.1299 8.67404 36.6425 6.48134C33.1551 4.28863 29.1194 3.12522 25 3.125Z" fill="#0C0F59"/>
                    </svg>
                    <?php echo ($_SESSION["name"]);?>
                </a>
                <div class="menu-login show">
                    <ul>
                        <li>
                       
                            <a href="index.php?controller=personalinformation">
                                Thông tin cá nhân
                            </a>
                            
                        </li>
                        <li>
                            <a href="index.php?controller=report">
                                
                                Thông báo
                            </a>
                        </li>
                        <li>
                            <a href="index.php?controller=membergetlist">
                                
                                DS thành viên
                            </a>
                        </li>
                        <li>
                            <a href="index.php?controller=report&action=getfinance">
                                
                                Tài chính
                            </a>
                        </li>
                        <li>
                            <a href="index.php?controller=account&action=logout">
                                Đăng xuất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</template>