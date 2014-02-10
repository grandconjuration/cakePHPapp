function myFunction() {

					var id = this.get('id');
					var id_bright = id + '_bright';
					var id_dark = id + '_dark';

					var myFirstElement = new Element('a', {

						id : id_dark,
						href : this.get('href'),
						'class' : this.get('class'),
						html : this.get('html'),
						title : this.get('title'),
						styles : this.getStyles('display', 'height', 'width',
								'background-image', 'float', 'position')

					});
					var mySecondElement = new Element('a', {

						id : id_bright,
						href : this.get('href'),
						'class' : this.get('class'),
						html : this.get('html'),
						title : this.get('title'),
						styles : this.getStyles('display', 'height', 'width',
								'background-image', 'float', 'position')
					});
					myFirstElement.setStyles( {
						'opacity' : '1',
						'position' : 'absolute'
					});
					mySecondElement.setStyles( {
						'position' : 'absolute',
						'background-position' : 'left bottom',
						'opacity' : '0'
					});
					var myThirdElement = new Element('div#' + id + '_wrapper');
					myThirdElement.setStyles( {
						'background-color' : this.getStyle('background-color'),
						'height' : this.getStyle('height'),
						'width' : this.getStyle('width'),
						'float' : this.getStyle('float'),
						'position' : this.getStyle('position'),
						'left' : this.getStyle('left'),
						'top' : this.getStyle('top'),
						'right' : this.getStyle('right'),
						'bottom' : this.getStyle('bottom'),  
						'margin' : this.getStyle('margin')
					});

					myThirdElement.addEvents( {
						mouseover : function() {
							mySecondElement.fade('in');

						},
						mouseout : function() {
						
							mySecondElement.fade('out');

						}
					});

					myFirstElement.replaces(this);
					myThirdElement.wraps(myFirstElement);
					mySecondElement.inject(myThirdElement);

				}

window.addEvent('domready', function() {

	$$('.button').each(
			function(el) {
			
				var myBoundF = myFunction.bind(el);
				myBoundF();

			});

	
});