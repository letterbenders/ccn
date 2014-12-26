setHeight('.features-3__item__text');


window.onresize = function() {
     setHeight('.features-3__item__text');
};


function setHeight(column) {
var maxHeight = 0;
    //Get all the element with class = case-content
    column = $(column);
    //Loop all the column
    column.each(function() {
		$(this).height('auto');
        //Store the highest value
        if($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    });
    //Set the height
    column.height(maxHeight);
}

$(function () {
    $('.expander').simpleexpand({'hideMode':'fadeToggle'});
});

var container = document.querySelector('.masonry__items');
var selection = document.querySelector('.masonry__items') !== null;

if (selection) {
    // initialize Masonry
    var msnry = new Masonry( container );

    imagesLoaded( container, function() {
        // layout Masonry again after all images have loaded
        msnry.layout();
    });
} 