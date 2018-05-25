$(document).ready(function() {
    window.onscroll = function() { makeHeaderSticky() };

    var fireflyHeader = document.querySelector(".ft__header-container");
    var stickyOffset = fireflyHeader.offsetTop;

    function makeHeaderSticky() {
        if( window.pageYOffset > stickyOffset ){
            fireflyHeader.classList.add("sticky");
        } else {
            fireflyHeader.classList.remove("sticky");
        }
    }
});