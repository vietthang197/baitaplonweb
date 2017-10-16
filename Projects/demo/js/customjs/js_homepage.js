
{
    var i=0;
    var arr = $('.gallery h5');
    for(i=0;i<arr.length;i++){
        if(arr[i].textContent.length>40){
            arr[i].setAttribute('title',arr[i].textContent);
            var sub = arr[i].textContent.substring(0,38);
            arr[i].innerText = sub+"...";
        }
    }




    function hides(){
        $('#make').hide(500);
    }
    function showdivtrai(){
        $('#make').show(500);
    }
}


function show_album(id) {
    location.href = '/html/showalbumanh.php';
}

$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});