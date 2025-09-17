function honey_shop_open_tab(evt, cityName) {
    var honey_shop_i, honey_shop_tabcontent, honey_shop_tablinks;
    honey_shop_tabcontent = document.getElementsByClassName("tabcontent");
    for (honey_shop_i = 0; honey_shop_i < honey_shop_tabcontent.length; honey_shop_i++) {
        honey_shop_tabcontent[honey_shop_i].style.display = "none";
    }
    honey_shop_tablinks = document.getElementsByClassName("tablinks");
    for (honey_shop_i = 0; honey_shop_i < honey_shop_tablinks.length; honey_shop_i++) {
        honey_shop_tablinks[honey_shop_i].className = honey_shop_tablinks[honey_shop_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});