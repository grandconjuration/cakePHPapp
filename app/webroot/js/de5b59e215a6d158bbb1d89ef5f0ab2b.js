window.addEvent("domready", function (event) {$$('.gallery a.ceraBox').cerabox({
	animation: 'ease',
	loaderAtItem: true,
	titleFormat: 'Afbeelding {number} / {total} - {title}',
	fixedPosition: true
});});