window.addEvent("domready", function (event) {$$(".button").each(function (item, index) {function myFunction() {

            var id = this.get('id');
            var id_bright = id + '_bright';
            var id_dark = id + '_dark';

            var myFirstElement = new Element('a', {

                id: id_dark,
                href: this.get('href'),
                'class': 'button',
                html: this.get('html'),
                title: this.get('title'),
                styles: this.getStyles('display', 'height', 'width', 'background-image', 'float', 'position')

            });
            var mySecondElement = new Element('a', {

                id: id_bright,
                href: this.get('href'),
                'class': 'button',
                html: this.get('html'),
                title: this.get('title'),
                styles: this.getStyles('display', 'height', 'width', 'background-image', 'float', 'position')
            });
            myFirstElement.setStyles({
                'opacity': '1',
                'position': 'absolute'
            });
            mySecondElement.setStyles({
                'position': 'absolute',
                'background-position': '0 -30px',
                'opacity': '0'
            });
            var myThirdElement = new Element('div#' + id + '_wrapper');
            myThirdElement.setStyles({
                'background-color': 'black',
                'height': '35px',
                'width': this.getStyle('width'),
                'float': 'left',
                'position': this.getStyle('position'),
                'left': this.getStyle('left'),
				'top': this.getStyle('top'),
				'right': this.getStyle('right')
            });
            
        

            myThirdElement.addEvents({
                mouseover: function() {
                 myFirstElement.fade('out');
                    mySecondElement.fade('in');
                    

                },
                mouseout: function() {
                    myFirstElement.fade('in');
                    mySecondElement.fade('out');

                }
            });


            myFirstElement.replaces(this);
            myThirdElement.wraps(myFirstElement);
            mySecondElement.inject(myThirdElement);

            
        }
        var myBoundF = myFunction.bind(item);
        myBoundF();});});