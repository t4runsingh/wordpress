window.addEvent('domready', function() {
	var generals = $$('.general-wrapper'), tabconts = $$('.roktabs-container-wrapper .tabcont'), tips = $$('.roktabs-top li');
	
	var fx = [];
	var generalFx = [];
	var heights = [];
	
	generals.each(function(general, i) {
		var tabbers = general.getElements('.tabbar .singletab');
		var mains = general.getElements('.main-general .inner-tabber');
		
		fx[i] = [];
		heights[i] = [];
		generalFx[i] = new Fx.Style(general.getParent().getParent(), 'height', {wait: false, duration: 250});
		tabbers.each(function(tab, j) {
			fx[i][j] = new Fx.Style(mains[j], 'opacity', {'wait': false, duration: 300}).set((!i && !j) ? 1 : 0);
			
			mains[j].setStyles({
				'opacity': (!j) ? 1 : 0,
				'position': 'absolute',
				'visibility': (!j) ? 'visible' : 'hidden'
			});
			var height = mains[j].getSize().size.y + tab.getParent().getStyle('height').toInt() + tab.getParent().getStyle('margin-bottom').toInt() + mains[j].getParent().getStyle('margin-bottom').toInt();
			
			heights[i][j] = height;
			
			if (!j && !i) {
				generalFx[i].start(height);
			};
			
			tab.addEvent('click', function(e) {
				e = new Event(e).stop();
				
				fx[i].each(function(efx, z) {
					if (j == z) {
						fx[i][z].start(1);
						generalFx[i].start(heights[i][z]);
					}
					else fx[i][z].start(0);
				});				
			});
		});
	});
	
	tips.each(function(tip, m) {
		tip.addEvent('click', function(e) {
			new Event(e).stop();
			var list = generals[m].getElements('.inner-tabber');
			var main = list.filter(function(el) {
				return el.getStyle('visibility') == 'visible';
			});
			var item = list.indexOf(main[0]);
			tabconts.setStyle('height', '');
			generalFx[m].start(heights[m][item]);
		});
	});
});