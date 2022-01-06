$(document).ready(function(){
    new WOW().init();
    navbarAnimation();
    setTimeout(() => {
        navbarOccurs()
    }, 1000);
    if($(document).width() < 768){
        showWelcomeMenus()
    }
})

function showWelcomeMenus(){
    let menus = $("#welcome .target");
    menus.each((i, menu) => {
        menu = $(menu);
        menu.on("click", function(){
            console.log(menu.height())
            if(menu.height() == 34){
                console.log("here")
                menu.height("calc(100%)");
            } else {
                menu.height("34");
            }
        })
    })
}

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
function navbarAction(){
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
function navbarOccurs(){
    $(".navbar").css({
        "transform": "translateX(calc(0%))"
    })
}