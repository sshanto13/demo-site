$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('showIcons');
        //$('#sidebar').hide();
        //if($('#sidebar').toggleClass('showIcons')){
        $('.nav-link-text').toggleClass('dNone');
        $('.navbar-brand').toggleClass('dNone');
        $('.main-content').toggleClass('decrease-margin');        
    });
});