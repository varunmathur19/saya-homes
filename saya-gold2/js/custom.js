(function(){
    var activeLink = document.querySelector('.navbar .nav-link.active');
    var underline = document.querySelector('.active_underline');

    setActiveUnderline(activeLink, underline);

    var menu_link = document.querySelector('.navbar-nav');
    var menu_linkList = document.querySelectorAll('.navbar-nav .nav-link');

    menu_linkList.forEach(item=>{
        item.addEventListener("mouseover", function( event ) {
            var selectedWidth = event.target.offsetWidth;
            var newleftpos = event.target.offsetLeft;
            underline.style.left = newleftpos+'px';
            underline.style.width = selectedWidth+'px';
        });
    })

    // menu_link.addEventListener("mouseover", function( event ) {
    //     var selectedWidth = event.target.offsetWidth;
    //     var newleftpos = event.target.offsetLeft;
    //     underline.style.left = newleftpos+'px';
    //     underline.style.width = selectedWidth+'px';
    // });

    // menu_link.addEventListener("mouseout", function( event ) {   
    //     underline.style.left = activeLink.offsetLeft+'px';
    // });

    menu_linkList.forEach(item=>{
        item.addEventListener("mouseout", function( event ) {
            underline.style.left = activeLink.offsetLeft+'px';
        });
    })

    var menu_link_anchor = document.querySelectorAll('.navbar-nav .nav-link');


    Array.from(menu_link_anchor).forEach(link => {
        link.addEventListener("click", function(event){
        event.preventDefault();
        
        Array.from(menu_linkList).forEach(linkList => {
            linkList.classList.remove('active');
        });
        
        // event.target.parentNode.classList.add('active');
        event.target.classList.add('active');
        
        activeLink = document.querySelector('.navbar-nav .nav-link.active');
        underline = document.querySelector('.active_underline');

        setActiveUnderline(activeLink, underline);
        });
    });

    function setActiveUnderline(activeLink, underline){
        underline.style.left = activeLink.offsetLeft+'px';
        underline.style.width = activeLink.offsetWidth+'px';
    };
})()