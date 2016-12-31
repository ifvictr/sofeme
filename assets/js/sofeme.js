i("form").onchange = function(){
    var p =
        "background_color=" + e("#" + v("background_color")) +
        "&main_color=" + e("#" + v("main_color")) +
        "&border_color=" + e("#" + v("border_color")) +
        "&border_width=" + e(v("border_width")) +
        "&round=" + e(v("round")) +
        "&rotate=" + e(q("input[name='rotate']:checked").value);
    i("photo").src = "/avatar.php?" + p;
    // Set page hash to parameters, for easy sharing
    location.hash = p;
};
i("form").onsubmit = function(e){
    e.preventDefault();
};
window.onload = function(){
    // Set avatar parameters to those in the hash
    i("photo").src = "/avatar.php?" + location.hash.substring(1);
};
// Encode a 'v' for URL
function e(v){
    return encodeURIComponent(v);
}
// Get an element with id 'e'
function i(e){
    return document.getElementById(e);
}
// Get all elements that match 'e'
function q(e){
    return document.querySelector(e);
}
// Get the value of element 'e'
function v(e){
    return i(e).value;
}