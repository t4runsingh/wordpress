Tips.implement({
	position: function(element){
		var pos = element.getPosition();
		var center = (element.offsetWidth / 2) - (this.toolTip.offsetWidth / 2);
		this.toolTip.setStyles({
			'left': pos.x + this.options.offsets.x + ((this.options.centered) ?  center : 0),
			'top': pos.y + this.options.offsets.y
		});
	}
});

window.addEvent('domready', function() {
	new Tips('.roktips', {
		'className': 'rok',
		'fixed': true,
		'offsets': {x: 0, y: -50},
		'centered': true,
		initialize: function() {
			this.fx = new Fx.Styles(this.toolTip, {duration: 200, wait: false}).set({'opacity': 0});
		},
		onShow: function(tip) {
			this.top = tip.getStyle('top').toInt();
			this.fx.start({
				'opacity': 1,
				'top': [this.top - 10, this.top]
			});
		},
		onHide: function(tip) {
			this.fx.start({
				'opacity': 0,
				'top': [this.top, this.top + 10]
			});
		}
	});
});