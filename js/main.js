(function(){
    //start
    //opening menu on mobile
    document.getElementById("side-menu").addEventListener("click", function(){
        let menuItems = document.getElementById("navbar-menu-items");
        if(menuItems.style.display === "none"){
            menuItems.style.display = "block"
        }
        else{
            menuItems.style.display = "none"
        }
    })
    //end
})();