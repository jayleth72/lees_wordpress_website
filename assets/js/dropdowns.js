// Code generating dropdowns

$(function() {

    // stores dropdown list items
    // the html page linking from drop down list has to be named after items in this list
    // For example Lee's-Gallery links to a Lee's Gallery.html page
    var listItems = ["Lee's-Gallery", 'Dream-Surfer', 'Your-Point-of-View', "Get-Outta-my-Hair", "It's-all-in-my-Hand"];

    // Get the dopdown list.
    var formMessages = $('#gallery-dropdown');
    var listString = "";

    $.each(listItems, function (index, value) {
     
        // create dropdown list linking items in listItems array to corresponding html page
        listString += "<li><a href= " + value + ".html>" + value.replace(/-/g, " "); + "</a></li>";
  
    });

    $('#gallery-dropdown').html(listString);
});