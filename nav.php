<style>
    nav{
        height: auto;
    }
    .nav{
        height: 90px;
        border-radius: 10px;
    }
    /* navbar */
    #sideopen_D{
        position:absolute;
        visibility: hidden;
        cursor: poLexend;
    }
    .sidebox_D{
        display: none;
        position:static;
        transition: all 2s ease-in-out;
        z-index:1;
    }
    #sideopen_D:checked ~ .sidebox_D{
        display: block;
        position: absolute;
        left:0;
        top: 100px;
        width:100%;
    }
    .sidebar_dropdown{
        padding: 1rem;
        border-radius: 10px;
        background-color: black;
        margin: 1rem;
        box-shadow: 1px 1px 5px gray;
        background-color:white;
    }
    .mblist{
        padding: 1rem;
    }
    .mblist:hover{
        border-bottom: 1px solid #0DC195;
    }
    .background_images{
        z-index: -1;
        inset:0;
        background-image: url("assets/Images/bg1.png");
        background-size: contain;
        background-repeat: no-repeat;
        transition: all .3 ease;
    }
    .navbarD{
        height: 100px;
        background-color: #04030A;
    }
    .navlistItem{
        color: #3F3F3F;
        font-family: Lexend;
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: -0.45px;
        opacity: 0.45;
    }
    .contact_D{
        padding: 13px 31px;
        border-radius: 40px;
        background: #766B5F;
        text-align: center;
        color: white;
    }
    .button_D{
        font-size: 16px;
        font-weight: 600;
        line-height: 19.36px;
        color: #04030A;
        background-color: #FFFFFF;
        border-radius: 11px;
        padding: .8rem 1.8rem;
    }

    /* navigation contact bar */
        .nav_contact_line{
        background: #0DC195;
        outline: 1px solid #0DC195;
    }
    .nav_contact{
        color: #FFF;
        font-family: Lexend;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 146.687%; /* 23.47px */
        letter-spacing: -0.16px;
    }
</style>
<nav class="lg:pt-6 pt-0 lg:px-16 px-0 ">
    <div class="py-5 bg-white nav px-6 h-full flex flex-row items-center">
        <div class="w-3/12 pl-8">
            <a href="/">
                <img width="75.966" alt="logo" height="50" src="./assets/Images/logo/logo.webp" />
            </a>
        </div>
        <div class="w-6/12 w-full md:flex hidden justify-center">
            <div class="navlist flex flex-row gap-14 justify-center">
                <div class="navlistItem"><a href="http://localhost/AHL">Home</a></div>
                <div class="navlistItem"><a href="app-development">App Devlopement</a></div>
                <div class="navlistItem"><a href="product-development">Product Development</a></div>
                <div class="navlistItem"><a href="company">Company</a></div>
            </div>
        </div>
        <div class="flex-1 h-full md:hidden flex">
            <label for="sideopen_D" class="flex items-center justify-end text-white flex  w-full text-2xl float-end">
                <img  width="30" height="30" src="./assets/Images/Icons/menu.png" />
            </label>
            <input type="checkbox" id="sideopen_D" />
            <div class="sidebox_D" id="sidebar_D">
                <div class="sidebar_dropdown">
                    <div class="navlistItem mblist"><a href="http://localhost/AHL">Home</a></div>
                    <div class="navlistItem mblist"><a href="app-development">App Development</a></div>
                    <div class="navlistItem mblist"><a href="product-development">Product Development</a></div>
                    <div class="navlistItem mblist"><a href="company">Company</a></div>
                    <div class="navlistItem mblist"><a href="contact-us">Contact</a></div>
                </div>
            </div>
        </div>
        <!-- contact -->
        <div class="md:flex w-3/12 hidden flex-row justify-end">
            <button class="px-7 py-2.5 border-white rounded-lg contact_D"><a href="contact-us">Contact</a></button>
        </div>
    </div>
</nav>
<script>
    function scrollMenu() {
        window.onscroll = function() {
            var nav = document.querySelector(".nav");
            var header=document.querySelector("nav");
            if(window.scrollY > 600){
                    nav.style.width="100%";
                    nav.style.left=0;
                    nav.style.position="fixed";
                    nav.style.zIndex="100";
                    nav.style.left=0;
                    nav.style.backgroundColor="white";
                    nav.style.height="auto";
                    nav.style.boxShadow="1px 1px 4px #0DC195";
                    nav.style.borderRadius=0;
                    header.style.padding=0;
            }
            if(window.scrollY < 500){
                if(window.innerWidth > 600) {
                        nav.style.width="100%";
                        nav.style.position="static";
                        nav.style.zIndex="0";
                        nav.style.borderRadius="10px";
                        header.style.padding="1.5rem 4rem 0 4rem";
                }else {
                        nav.style.width="100%";
                        nav.style.position="static";
                        nav.style.zIndex="0"; 
                        nav.style.borderRadius="10px";
                        header.style.padding="none";
                }
            }
        }
    }
    
</script>