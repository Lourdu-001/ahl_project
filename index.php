<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="app development page">
    <title>app development</title>

    <!--canonical-->
    <link rel="canonical" href="https://www.delfin.co.in?v=121" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico?v=123"  />

    <!-- lexend -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- tailwindcss cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        *{
            padding: 0;
            margin:0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Lexend', sans-serif;
        }
        /* header section */
        header{
            /* height: 1107.386px; */
            background-image: url("./assets/Images/app_development/banner_bg.webp");
            background-repeat: no-repeat;
            background-size:cover;
            background-color: #EBEBEB;
        }
        .header-content{
            height: calc(730px - 80px);
        }
        .header-title{
            color: #3F3F3F;
            text-align: left;
            font-family: Lexend;
            font-size: 52px;
            font-style: normal;
            font-weight: 500;
            line-height: 128.846%; /* 67px */
            letter-spacing: -1.56px;
        }
        .header-description{
            color: #505050;
            text-align: left;
            font-family: Lexend;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 155%; /* 31px */
            letter-spacing: -0.6px;
        }
        .gateway{
            color: #FFF;
            font-family: Lexend;
            font-size: 52px;
            font-style: normal;
            font-weight: 500;
            line-height: 128.846%;
            letter-spacing: -1.56px;
            background-color: #9D9D9D;
            padding: 2px 10px;
            border-radius: 10px;
        }
        .explore-more{
            padding: 13px 31px;
            border-radius: 40px;
            background: #9D9D9D;
            color: #FFF;
            font-family: Lexend;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .tower{
            top: -45%;
            right: -26%;
        }
        .banner_image{
            background-image:url("./assets/Images/app_development/header_banner.webp");
            height:87%;
            width:100%;
            background-size:contain;
            position:absolute;
            background-repeat:no-repeat;
            bottom:0;
            background-position:center;
        }
        .roll{
            background-image:url("./assets/Images/Icons/roll.webp");
            height:205.34px;
            width:205.34px;
            background-size:contain;
            position:absolute;
            background-repeat:no-repeat;
            top:15%;
            left:0;
        }
        .dotted_box{
            background-image:url("./assets/Images/Icons/box-icon.webp");
            height:133.61px;
            width:184.76px;
            background-size:contain;
            position:absolute;
            background-repeat:no-repeat;
            bottom:8%;
            right:0%;
            background-position: 88px 0;
        }
        /* digital innovation */
        .digital-innovation-title{
            font-family: Lexend;
            letter-spacing: 1.92px;
            color:#3F3F3F;
            font-weight: 400;
            font-size: 18px;
        }
        .digital-innovation-firstsection{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#3F3F3F;
            font-weight: 500;
            font-size: 40px;
        }
        .digital-innovation-secondsection{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#606060;
            font-weight: 400;
            font-size: 16px;
            line-height: 28.8px;
        }
        /* applications developments */
        .developments{
            background-color: #E9E9E9;
            border-radius:10px;
        }
        .application_title{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#3F3F3F;
            font-weight: 500;
            font-size: 20px;
            line-height: auto;
        }
        .application_content{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#606060;
            font-weight: 400;
            font-size: 13px;
            line-height: 23.8px;
        }
        .development-image1{
            background-image: url("./assets/Images/app_development/development_images/development_image1.webp");
            width:65px;
            height:65px;
            background-size:contain;
            background-repeat:no-repeat;
        }
        .development-image2{
            background-image: url("./assets/Images/app_development/development_images/development_image2.webp");
            width:65px;
            height:65px;
            background-size:contain;
            background-repeat:no-repeat;
        }
        .development-image3{
            background-image: url("./assets/Images/app_development/development_images/development_image3.webp");
            width:65px;
            height:65px;
            background-size:contain;
            background-repeat:no-repeat;
        }
        .development-image4{
            background-image: url("./assets/Images/app_development/development_images/development_image4.webp");
            width:65px;
            height:65px;
            background-size:contain;
            background-repeat:no-repeat;
        }
        /* bussiness requirement */
        .bussiness-requirement-inner-layer{
            background-color: #F3F3F3;
            border-radius: 10px;
        }
        .bussiness_count{
            font-family: Lexend;
            color:#766B5F;
            font-weight: 500;
            font-size: 55px;
        }
        .bussiness_title{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#606060;
            font-weight: 500;
            font-size: 22.38px;
        }
        .bussiness_content{
            font-family: Lexend;
            color:#FFFFFF;
            font-weight: regular;
            font-size: 18px; 
            position: absolute;
            bottom:-1rem;
            left:0;
            right:0;
            text-align:center;
        }
        .bussiness_content > div{
            display: inline;
            background-color:#766B5F;
            border-radius:50px;
        }
        /* our process */
        .our-process-subtitle{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#3F3F3F;
            font-weight: 500;
            font-size: 40px;
        }
        .our-process-description{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#606060;
            font-weight: 400;
            font-size: 16px;
        }
        .our-process-image{
            background-image:url("./assets/Images/app_development/centric_agile.webp");
            height:367.73px;
            width:100%;
            background-size:contain;
            background-repeat:no-repeat;
            background-position:center;
            margin-top: 3rem;
        }
        /* why ahl */
        .dream-apps{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#3F3F3F;
            font-weight: 500;
            font-size: 42.05px;
        }
        .dream-apps-content{
            font-family: Lexend;
            letter-spacing: -0.48px;
            color:#606060;
            font-weight: 400;
            font-size: 16.82px;
            line-height: 28.8px;
        }
        .why-ahl-image{
            background-image:url("./assets/Images/app_development/dream_apps.webp");
            height:405.14px;
            width:48%;
            background-size:contain;
            background-repeat:no-repeat;
            background-position:center;
        }
        /* let discuss */
        .let-discuss{
            background-color:#766B5F;
        }
        .let-discuss-layer{
            background-color:white;
            border-radius:10px;
        }
        .discuss-content{
            color: #3F3F3F;
            font-size: 45px;
            font-weight: 500;
            line-height: 50px;
        }
        .discuss_button{
            border-radius:50px;
            padding: 1rem 2rem;
            background-color: #766B5F;
            color: #FFFFFF;
            font-weight: 600;
            font-size: 21.68px;
        }
        @media (max-width: 600px) {
            .bussiness_content{
                position:relative;
                display:block;
                background-color: #766B5F;
                border-radius:10px;
            }
            .bussiness_content > div{
                background-color: transparent;
            }
            /* our process */
            .our-process-subtitle{
                font-size: 32px;
            }
            .our-process-image{
                height: 164px;
            }
            /* bussiness development */
            .bussiness_count{
                font-size: 50px;
            }
            .bussiness_title{
                font-size: 18px;
            }
            /* why ahl */
            .dream-apps {
                font-size: 32px;
            }
            .why-ahl-image{
                width:100%;
                height:350px;
            }
            /*let discuss*/
            .discuss-content{
                font-size: 32px;
            }
            .discuss_button{
                padding: .5rem 2rem;
                font-size:16px;
            }
        }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- header -->
        <header>
            <?php require "nav.php"; ?>

            <div class="header-content lg:px-16 px-8 relative">
                <div class="roll"></div>
                <div class="dotted_box lg:inline hidden"></div>
                <div class="header-layer h-full flex lg:flex-row flex-col items-center gap-10">
                    <div class="flex-1 h-full product-bg relative lg:block hidden">
                        <div class="banner_image"></div>
                    </div>
                    <div class="flex-1 flex flex-col justify-center">
                        <div class="header-title">Corporate-centric
                            <span class="gateway relative">
                                app
                                <svg class="absolute tower" width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="18.3412" height="18.3412" rx="4.92152" transform="matrix(-1 0 0 1 29.9688 0.374878)" fill="#9D9D9D"/>
                                    <rect width="8.58973" height="8.58973" rx="3.48374" transform="matrix(-1 0 0 1 9.53906 17.809)" fill="#9D9D9D"/>
                                </svg>
                            </span>&nbsp; development solutions
                        </div>
                        <div class="header-description pt-10 lg:px-0 lg:w-8/12 w-full">
                        Customized app development solutions catering to the specific needs and objectives of enterprises.
                        </div>
                        <div class="pt-10">
                            <button class="explore-more relative">
                                Get started
                                <svg class="ms-2 inline" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.667661 8.82523C0.369086 9.11233 0.359783 9.58711 0.646882 9.88568C0.933981 10.1843 1.40876 10.1936 1.70734 9.90646L0.667661 8.82523ZM10.5633 1.0861C10.5714 0.67197 10.2423 0.32967 9.82817 0.321555L3.07946 0.189319C2.66533 0.181204 2.32303 0.510348 2.31492 0.924482C2.3068 1.33862 2.63595 1.68092 3.05008 1.68903L9.04893 1.80657L8.93138 7.80542C8.92327 8.21956 9.25241 8.56186 9.66655 8.56997C10.0807 8.57809 10.423 8.24894 10.4311 7.83481L10.5633 1.0861ZM1.70734 9.90646L10.3333 1.61203L9.29364 0.530793L0.667661 8.82523L1.70734 9.90646Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <!-- digital innovation -->
            <div class="digital-innovation py-12 lg:py-24 lg:px-16 px-8 lg:gap-10 gap-16">
                <div class="digital-innovation-title">
                    Digital Innovation
                    <svg class="mt-3" width="301" height="4" viewBox="0 0 301 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.274902" y="0.0849609" width="300" height="3.0625" rx="1.53125" fill="#766B5F"/>
                    </svg>
                </div>
                <div class="degital-innovation-section flex lg:flex-row flex-col items-center">
                    <div class="digital-innovation-firstsection lg:w-6/12  lg:py-0 py-8">
                        Personalized Mobile Application Development for Digital Innovation
                    </div>
                    <div class="digital-innovation-secondsection flex-1">
                        With a team of skilled professionals, we specialize in building robust and scalable mobile applications that redefine industry norms in the mobile-first realm. Trust our mobile app development services to guide you through the ever-changing mobile landscape, ensuring you seize opportunities for maximum return on investment.
                    </div>
                </div>
            </div>
            <!-- application development -->
            <div class="application-development pb-16 lg:pb-36 lg:px-16 px-8 lg:gap-5 gap-8 grid lg:grid-cols-4 grid-cols-1">
                <div class="developments p-6 flex flex-col gap-8">
                    <div class="development-image1"></div>
                    <div class="application_title">Android Application Development</div>
                    <div class="application_content">Flutter development involves building cross-platform applications using the Dart programming language. With a single codebase, developers design and deploy apps </div>
                </div>
                <div class="developments p-6 flex flex-col gap-8">
                    <div class="development-image2"></div>
                    <div class="application_title">Android Application Development</div>
                    <div class="application_content">Flutter development involves building cross-platform applications using the Dart programming language. With a single codebase, developers design and deploy apps </div>
                </div>
                <div class="developments p-6 flex flex-col gap-8">
                    <div class="development-image3"></div>
                    <div class="application_title">Flutter Application Development</div>
                    <div class="application_content">Flutter development involves building cross-platform applications using the Dart programming language. With a single codebase, developers design and deploy apps </div>
                </div>
                <div class="developments p-6 flex flex-col gap-8">
                    <div class="development-image4"></div>
                    <div class="application_title">React Native Application Development</div>
                    <div class="application_content">Flutter development involves building cross-platform applications using the Dart programming language. With a single codebase, developers design and deploy apps </div>
                </div>
            </div>
            <!-- bussiness requirements -->
            <div class="bussiness-requirements pb-20 lg:pb-36 lg:px-16 px-8">
                <div class="lg:gap-0 gap-20 relative text-center bussiness-requirement-inner-layer py-20 lg:px-24 px-8 flex lg:flex-row flex-col justify-between items-center">
                    <div class="bussiness_models text-center">
                        <span class="bussiness_count">5+</span><br>
                        <span class="bussiness_title">Years of experiences</span>
                    </div>
                    <div class="bussiness_models text-center">
                        <span class="bussiness_count">1000+</span><br>
                        <span class="bussiness_title">Mobile App Developers</span>
                    </div>
                    <div class="bussiness_models text-center">
                        <span class="bussiness_count">250+</span><br>
                        <span class="bussiness_title">Successful clients</span>
                    </div>
                    <div class="bussiness_models text-center">
                        <span class="bussiness_count">200+</span><br>
                        <span class="bussiness_title">Projects delivered</span>
                    </div>
                    <div class="bussiness_content lg:py-0 py-4">
                        <div class="lg:py-4 py-0 px-0 lg:px-10 text-center">
                            Discuss your business requirements
                            <svg class="inline ms-2" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.972692 5.96178C0.461385 5.95176 0.0387659 6.35813 0.0287468 6.86944C0.0187284 7.38075 0.425104 7.80337 0.936412 7.81339L0.972692 5.96178ZM16.3683 7.8445C16.7369 7.49003 16.7484 6.90384 16.394 6.53521L10.6176 0.527976C10.2632 0.159342 9.67697 0.147856 9.30834 0.502322C8.9397 0.856787 8.92822 1.44297 9.28268 1.81161L14.4172 7.15137L9.07744 12.2859C8.70881 12.6404 8.69733 13.2266 9.05179 13.5952C9.40626 13.9638 9.99244 13.9753 10.3611 13.6208L16.3683 7.8445ZM0.936412 7.81339L15.7084 8.10283L15.7446 6.25122L0.972692 5.96178L0.936412 7.81339Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- our process -->
            <div class="our-process pb-20 lg:pb-36 lg:px-16 px-8">
                <div class="our-process-content-section flex flex-col gap-5">
                    <div class="digital-innovation-title flex flex-col justify-center items-start lg:items-center">
                        OUR PROCESS
                        <svg class="mt-3" width="100" height="4" viewBox="0 0 100 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="100" height="3.0625" rx="1.53125" fill="#766B5F"/>
                        </svg>
                    </div>
                    <div class="our-process-subtitle text-start lg:text-center">
                        Our Customer-Centric Agile Method
                    </div>
                    <div class="our-process-description text-start lg:text-center lg:px-36">
                        Embark on a customer-centric journey with Our Agile Method, where collaboration and flexibility converge for software development excellence. Swiftly respond to evolving needs, delivering tailored solutions that precisely align with customer expectations. Our iterative approach ensures a dynamic and collaborative path to digital success
                    </div>
                </div>
                <div class="our-process-image">

                </div>
            </div>
            <!-- why ahl -->
            <div class="why-ahl pb-24 lg:px-16 px-8 flex lg:flex-row flex-col">
                <div class="why-ahl-content flex-1 flex flex-col gap-6">
                    <div class="digital-innovation-title">
                        WHY AHL
                        <svg class="mt-3" width="84" height="4" viewBox="0 0 84 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.67395" width="83.4791" height="3.23614" rx="1.61807" fill="#766B5F"/>
                        </svg>
                    </div>
                    <div class="dream-apps">
                        Make your dream apps reality
                    </div>
                    <div class="dream-apps-content lg:w-11/12 w-full">
                        we have the expertise to handle software development projects of diverse complexity levels, making Appinventiv the right fit for your business needs. we have the expertise to handle software development projects of diverse complexity levels, making Appinventiv the right fit for your business needs.
                    </div>
                </div>
                <div class="why-ahl-image">

                </div>
            </div>
            <!-- let discuss -->
            <div class="let-discuss lg:px-16 px-8 py-20">
                <div class="let-discuss-layer flex lg:flex-row flex-col lg:p-20 p-8 items-center lg:gap-0 gap-10">
                    <div class="discuss-content lg:w-7/12 w-full">
                        Tailored App Development for Your Business Expansion
                    </div>
                    <div class="let-discuss-button flex-1 text-end">
                        <button class="discuss_button me-10">
                            Let discuss
                            <svg width="20" class="inline ml-2" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.83845 6.93676C1.27741 6.92576 0.813687 7.37166 0.802694 7.9327C0.791701 8.49374 1.2376 8.95746 1.79864 8.96845L1.83845 6.93676ZM18.7314 9.00259C19.1359 8.61365 19.1485 7.97045 18.7596 7.56596L12.4214 0.974473C12.0325 0.569986 11.3893 0.557383 10.9848 0.946323C10.5803 1.33526 10.5677 1.97846 10.9567 2.38295L16.5906 8.24205L10.7315 13.876C10.327 14.2649 10.3144 14.9081 10.7033 15.3126C11.0923 15.7171 11.7355 15.7297 12.1399 15.3407L18.7314 9.00259ZM1.79864 8.96845L18.0073 9.28605L18.0471 7.25435L1.83845 6.93676L1.79864 8.96845Z" fill="white"/>
                            </svg>  
                        </button>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php require "footer.php"; ?>
        </section>
    </div>
</body>
</html>
