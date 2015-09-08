var base_url = 'http://172.16.71.230/realEyes/public/';

function getXml() {
    //console.debug('va a cambiar');
    $.ajax({
        type: "GET",
        url: base_url + "getXml",
        success: function(data) {
            console.log(data);
            
        },
        error: function(xhr, ajaxOptions, thrownError) {
            
        }
    });
}



$(document).ready(function() {
    
});