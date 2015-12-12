/**
 * Created by zacharyrosenthal on 12/5/15.
 */

var data = {
    slide: 0,
    last: 12
};

function setImgSrc() {
    document.getElementById('img-holder').src = "http://127.0.0.1:8080/assets/img/" + data.slide + ".jpg";
}

/**
 *
 * @param id
 * takes a DOM button id and disables the button
 */
function disableButton(id) {
    document.getElementById(id).disabled = true;
}
/**
 *
 * @param id
 * takes a DOM button id and enables the button
 */
function enableButton(id) {
    document.getElementById(id).disabled = false;
}
/**
 * display last slide
 */
function lastSlide() {

    data.slide = data.last;
    setImgSrc();
    disableButton("next");
    enableButton("previous");
}
/**
 * display first slide
 */
function firstSlide() {
    data.slide = 0;
    setImgSrc();
    disableButton("previous");
    enableButton("next");
}
/**
 *
 * @param direction
 * iterate to next or previous slide
 * direction  = -1 -> go back a slide
 * direction  = 1 -> go forward a slide
 */
function iterImg(direction) {
    data.slide = data.slide + direction;
    /*if data.slide is 0 we simply call firstSlide()
     if data.slide is the last slide we cal lastSlide()
     else we display slide number {data.slide}
     */
    if(!data.slide) {
        firstSlide();
    }
    else if(data.slide == data.last) {
        lastSlide();
    }
    else {
        setImgSrc();
        enableButton("previous");
        enableButton("next");
    }
}