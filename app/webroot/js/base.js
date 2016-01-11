$(document).ready(function() {
    // This command is used to initialize some elements and make them work properly
    $('#sidebar').simpleSidebar({
        opener: '.sidebar-button',
        wrapper: '#wrapper',
        sidebar: {
            align: 'left', //or 'right' - This option can be ignored, the sidebar will automatically align to right.
            closingLinks: '.close-sidebar'
        }
    });



var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++) {
    if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
        a[i].onclick=function() {
                window.location=this.getAttribute("href");
                return false; 
        }
    }
}

    
});

