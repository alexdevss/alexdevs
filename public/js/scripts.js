$(document).ready(function(){
    console.log('%c ¿Qué estás noveleriando, entera@?', 'background: #222; color: #bada55');
    new WOW().init();
    if($(document).width() <= 820){
        mobileNavbar();
    } else {
        navbarAnimation();
        setTimeout(() => {
            navbarOccurs()
        }, 1000);

    }

    if(window.location.href.includes("contact")){
        $("#contactBtn").on("click", function(){
            $("#contactForm").submit();
        })
    }
})

function navbarAnimation(){
    $(".interactive-logo").on("click", function(e){
        e.stopPropagation();
        if($(window).width() > 768){
            if($(".navbar").hasClass("expanded")){
                $(".navbar").css({
                    transform : "translateX(calc(0% - 1500px))"
                })
                $(".navbar").removeClass("expanded");
                $(document).find("[data-logo='negative']").removeClass("showed").addClass("no-showed").css("z-index", "-1");
                $(document).find("[data-logo='positive']").removeClass("no-showed").addClass("showed").css("z-index", "9999");
            } else {
                $(".navbar").css({
                    transform : "translateX(calc(0%))"
                })
                $(document).find("[data-logo='positive']").removeClass("showed").addClass("no-showed").css("z-index", "-1");
                $(document).find("[data-logo='negative']").removeClass("no-showed").addClass("showed").css("z-index", "9999");
                $(".navbar").addClass("expanded");
            }
        }
    });
}
function navbarOccurs(mobile = false){
    if(mobile){
        $(".navbar").css({
            "transform": "translateY(calc(0%))"
        })
    }else{
        $(".navbar").css({
            "transform": "translateX(calc(0%))"
        })

    }
}

function mobileNavbar(){
    setTimeout(() => {
        navbarOccurs(true)
    }, 500);

    $(".navbar-toggler").on("click", function(e){
        let action = $(this).attr("data-action");
        if(action == "open"){            
            let navbarParent = $(this).parent().find(".navbar-collapse");
            let navbarList = $(this).parent().find(".navbar-nav");
            
            if($(document).width() <= 720){
                navbarParent.css({
                    height: "30vh",
                })            
            } else {
                navbarParent.css({
                    height: "20vh",
                })            
            }            
            navbarList.removeClass("d-none");
            setTimeout(() => {
                navbarList.css({
                    'opacity' : '1'
                })
            }, 250);
            
            $(this).attr("data-action", "close");
        } else {
            let navbarList = $(this).parent().find(".navbar-nav");
            let navbarParent = $(this).parent().find(".navbar-collapse");
            navbarList.css({
                'opacity' : '0'
            })
            setTimeout(() => {
                navbarList.removeClass("d-flex").addClass("d-none");
                navbarParent.css({
                    height: "0px",
                })
            }, 250);
            
            $(this).attr("data-action", "open");
        }
    })
}