// Product Image Zoom function
$(document).ready(function() {

    const thumbnails = document.querySelectorAll('.product-image-thumbnail');
    const mainImage = document.querySelector('.product-image-main');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('mouseenter', () => {
            mainImage.src = thumbnail.src.replace('thumbnail', 'image'); // Replace thumbnail with full image source
        });
    });
  
$(document).mousemove(function(e) {
    var x = e.clientX; var y = e.clientY;
    var x = e.clientX; var y = e.clientY;
  
    var imgx1 = $('.product-image-main').offset().left;
    var imgx2 = $('.product-image-main').outerWidth() + imgx1;
    var imgy1 = $('.product-image-main').offset().top;
    var imgy2 = $('.product-image-main').outerHeight() + imgy1;
  
    if ( x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2 ) {
        $('#lens').show(); $('#result').show();
        imageZoom( $('.product-image-main'), $('#result'), $('#lens') );
    } else {
        $('#lens').hide(); $('#result').hide();
    }
    });
});
  
function imageZoom( img, result, lens ) {
    result.width( img.innerWidth() ); result.height( img.innerHeight() );
    lens.width( img.innerWidth() / 2 ); lens.height( img.innerHeight() / 2 );
  
    result.offset({ top: img.offset().top, left: img.offset().left + img.outerWidth() + 10 });
  
    var cx = img.innerWidth() / lens.innerWidth(); var cy = img.innerHeight() / lens.innerHeight();
  
    result.css('backgroundImage', 'url(' + img.attr('src') + ')');
    result.css('backgroundSize', img.width() * cx + 'px ' + img.height() * cy + 'px');
  
    lens.mousemove(function(e) { moveLens(e); });
    img.mousemove(function(e) { moveLens(e); });
    lens.on('touchmove', function() { moveLens(); })
    img.on('touchmove', function() { moveLens(); })
  
    function moveLens(e) {
        var x = e.clientX - lens.outerWidth() / 2;
        var y = e.clientY - lens.outerHeight() / 2;
        if ( x > img.outerWidth() + img.offset().left - lens.outerWidth() ) { x = img.outerWidth() + img.offset().left - lens.outerWidth(); }
        if ( x < img.offset().left ) { x = img.offset().left; }
        if ( y > img.outerHeight() + img.offset().top - lens.outerHeight() ) { y = img.outerHeight() + img.offset().top - lens.outerHeight(); }
        if ( y < img.offset().top ) { y = img.offset().top; }
        lens.offset({ top: y, left: x });
        result.css('backgroundPosition', '-' + ( x - img.offset().left ) * cx  + 'px -' + ( y - img.offset().top ) * cy + 'px');
    }
  }
  