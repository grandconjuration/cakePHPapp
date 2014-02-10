window.addEvent("domready", function (event) {$$('.gallery a.ceraBox').cerabox({
	animation: 'ease',
	loaderAtItem: true,
	titleFormat: 'Image {number} / {total} - {title}',
	fixedPosition: true
});});