var count_elements_avto = 7,
current_element_avto = 0,
width_avto = 390,
height_avto = 200,
duration_avto = 700;

var screen_avto = $('#screen-avto');

screen_avto.width(width_avto * count_elements_avto);

function move_screen_avto (x) {
current_element_avto = (current_element_avto + x) % count_elements_avto;
if (current_element_avto < 0) {current_element_avto += count_elements_avto;}
screen_avto.animate({
	marginLeft: - width_avto * current_element_avto
}, duration_avto);
}

$("#prev-avto").click(function () {
	move_screen_avto(-1);
})
$("#next-avto").click(function () {
	move_screen_avto(1);
})


var count_elements_avto_media = 7,
current_element_avto_media = 0,
width_avto_media = 320,
height_avto_media = 200,
duration_avto_media = 700;

var screen_avto_media = $('#screen-avto-media');

screen_avto_media.width(width_avto_media * count_elements_avto_media);

function move_screen_avto_media (x) {
current_element_avto_media = (current_element_avto_media + x) % count_elements_avto_media;
if (current_element_avto_media < 0) {current_element_avto_media += count_elements_avto_media;}
screen_avto_media.animate({
	marginLeft: - width_avto_media * current_element_avto_media
}, duration_avto_media);
}

$("#prev-avto-media").click(function () {
	move_screen_avto_media(-1);
})
$("#next-avto-media").click(function () {
	move_screen_avto_media(1);
})


var count_elements_avto_media_800 = 9,
current_element_avto_media_800 = 0,
width_avto_media_800 = 300,
height_avto_media_800 = 200,
duration_avto_media_800 = 700;

var screen_avto_media_800 = $('#screen-avto-media-800');

screen_avto_media_800.width(width_avto_media_800 * count_elements_avto_media_800);

function move_screen_avto_media_800 (x) {
current_element_avto_media_800 = (current_element_avto_media_800 + x) % count_elements_avto_media_800;
if (current_element_avto_media_800 < 0) {current_element_avto_media_800 += count_elements_avto_media_800;}
screen_avto_media_800.animate({
	marginLeft: - width_avto_media_800 * current_element_avto_media_800
}, duration_avto_media_800);
}

$("#prev-avto-media-800").click(function () {
	move_screen_avto_media_800(-1);
})
$("#next-avto-media-800").click(function () {
	move_screen_avto_media_800(1);
})