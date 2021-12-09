$(document).ready(function(){
    new WOW().init();
    console.log($(document).width())
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