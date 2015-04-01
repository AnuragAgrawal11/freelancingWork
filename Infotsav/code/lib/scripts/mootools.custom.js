/*******************************************************\
  Mootools is used for: 
 	 - the vertical and horizontal homepage Slideshow
 	 - the drop down menu
 	 
/*******************************************************/

// Gallery Slider
window.addEvent('domready', function(){
    var data = ['analyst.jpg', 'akraman.jpg', 'brouhaha.jpg', 'bullfight.jpg', 'chakravyuh.jpg', 'codewars.jpg', 'codeweavers.jpg', 'enigma.jpg', 'forex.jpg', 'LaIngenious.jpg', 'Sameeksha.jpg', 'StockSutra.jpg', 'trovetrace.jpg', 'tycoon.jpg', 'webmania.jpg' , 'witch.jpg',];
    var myShow = new Slideshow('show', data, { captions: true, controller: true, hu: 'pictures/slider/', thumbnails: true });
});

//Drop down menu
window.addEvent('domready', function() {			
	var myMenu = new MenuMatic();
});

/* ------------------------------------------------------------------------------------------------------------------------------------
Script: Slideshow.js
	Slideshow - A javascript class for Mootools to stream and animate the presentation of images on your website.

License:
	MIT-style license.

Copyright:
	Copyright (c) 2008 [Aeron Glemann](http://www.electricprism.com/aeron/).

Dependencies:
	Mootools 1.2 Core: Fx.Morph, Fx.Tween, Selectors, Element.Dimensions.
	Mootools 1.2 More: Assets.
---------------------------------------------------------------------------------------------------------------------------------------*/

Slideshow = new Class({
	Implements: [Chain, Events, Options],
	
	options: {/*
		onComplete: $empty,
		onEnd: $empty,
		onStart: $empty,*/
		captions: false,
		center: true,
		classes: [],
		controller: false,
		delay: 2000,
		duration: 1000,
		fast: false,
		height: false,
		href: '',
		hu: '',
		linked: false,
		loader: {'animate': ['images/loader.gif', 12]},
		loop: true,
		match: /\?slide=(\d+)$/,
		overlap: true,
		paused: false,
		properties: ['href', 'rel', 'rev', 'title'],
		random: false,
		replace: [/(\.[^\.]+)$/, '_thumb$1'],
		resize: 'width',
		slide: 0,
		thumbnails: false,
		titles: true,
		transition: function(p){return -(Math.cos(Math.PI * p) - 1) / 2;},
		width: false
	},
	
/**
Constructor: initialize
	Creates an instance of the Slideshow class.
	
Arguments:
	element - (element) The wrapper element.
	data - (array or object) The images and optional thumbnails, captions and links for the show.
	options - (object) The options below.
	
Syntax:
	var myShow = new Slideshow(element, data, options);
*/

	initialize: function(el, data, options){	
		this.setOptions(options);
		this.slideshow = $(el);
		if (!this.slideshow) 
			return;
		this.slideshow.set('styles', {'display': 'block', 'position': 'relative', 'z-index': 0});
		var match = window.location.href.match(this.options.match);
		this.slide = (this.options.match && match) ? match[1].toInt() : this.options.slide;
		this.counter = this.delay = this.transition = 0;
		this.direction = 'left';
		this.paused = false;
		if (!this.options.overlap)
			this.options.duration *= 2;
		var anchor = this.slideshow.getElement('a') || new Element('a');
		if (!this.options.href)
			this.options.href = anchor.get('href') || '';
		if (this.options.hu.length && !this.options.hu.test(/\/$/)) 
			this.options.hu += '/';
		if (this.options.fast === true)
			this.options.fast = 2;
			
		// styles
		
		var keys = ['slideshow', 'first', 'prev', 'play', 'pause', 'next', 'last', 'images', 'captions', 'controller', 'thumbnails', 'hidden', 'visible', 'inactive', 'active', 'loader'];
		var values = keys.map(function(key, i){
			return this.options.classes[i] || key;
		}, this);
		this.classes = values.associate(keys);
		this.classes.get = function(){
			var str = '.' + this.slideshow;
			for (var i = 0, l = arguments.length; i < l; i++)
				str += ('-' + this[arguments[i]]);
			return str;
		}.bind(this.classes);
			
		// data	
			
		if (!data){
			this.options.hu = '';
			data = {};
			var thumbnails = this.slideshow.getElements(this.classes.get('thumbnails') + ' img');
			this.slideshow.getElements(this.classes.get('images') + ' img').each(function(img, i){
				var src = img.get('src');
				var caption = $pick(img.get('alt'), img.get('title'), '');
				var parent = img.getParent();
				var properties = (parent.get('tag') == 'a') ? parent.getProperties : {};
				var href = img.getParent().get('href') || '';
				var thumbnail = (thumbnails[i]) ? thumbnails[i].get('src') : '';
				data[src] = {'caption': caption, 'href': href, 'thumbnail': thumbnail};
			});
		}
		var loaded = this.load(data);
		if (!loaded)
			return; 
		
		// events
		
		this.events = $H({'keydown': [], 'keyup': [], 'mousemove': []});
		var keyup = function(e){
			switch(e.key){
				case 'left': 
					this.prev(e.shift); break;
				case 'right': 
					this.next(e.shift); break;
				case 'p': 
					this.pause(); break;
			}
		}.bind(this);		
		this.events.keyup.push(keyup);
		document.addEvent('keyup', keyup);

		// required elements
			
		var el = this.slideshow.getElement(this.classes.get('images'));
		var images = (el) ? el.empty() : new Element('div', {'class': this.classes.get('images').substr(1)}).inject(this.slideshow);
		var div = images.getSize();
		this.height = this.options.height || div.y;		
		this.width = this.options.width || div.x;
		images.set({'styles': {'display': 'block', 'height': this.height, 'overflow': 'hidden', 'position': 'relative', 'width': this.width}});
		this.slideshow.store('images', images);
		this.a = this.image = this.slideshow.getElement('img') || new Element('img');
		if (Browser.Engine.trident && Browser.Engine.version > 4)
			this.a.style.msInterpolationMode = 'bicubic';
		this.a.set('styles', {'display': 'none', 'position': 'absolute', 'zIndex': 1});
		this.b = this.a.clone();
		[this.a, this.b].each(function(img){
			anchor.clone().cloneEvents(anchor).grab(img).inject(images);
		});
		
		// optional elements
		
		if (this.options.captions)
 			this._captions();
		if (this.options.controller)
			this._controller();
		if (this.options.loader)
 			this._loader();
		if (this.options.thumbnails)
			this._thumbnails();
			
		// begin show
		
		this._preload();
	},
	
/**
Public method: go
	Jump directly to a slide in the show.

Arguments:
	n - (integer) The index number of the image to jump to, 0 being the first image in the show.
	
Syntax:
	myShow.go(n);	
*/

	go: function(n, direction){
		if ((this.slide - 1 + this.data.images.length) % this.data.images.length == n || $time() < this.transition)
			return;		
		$clear(this.timer);
		this.delay = 0;		
		this.direction = (direction) ? direction : ((n < this.slide) ? 'right' : 'left');
		this.slide = n;
		if (this.preloader) 
			this.preloader = this.preloader.destroy();
		this._preload(this.options.fast == 2 || (this.options.fast == 1 && this.paused));
	},

/**
Public method: first
	Goes to the first image in the show.

Syntax:
	myShow.first();	
*/

	first: function(){
		this.prev(true); 
	},

/**
Public method: prev
	Goes to the previous image in the show.

Syntax:
	myShow.prev();	
*/

	prev: function(first){
		var n = 0;
		if (!first){
			if (this.options.random){
				
				// if it's a random show get the previous slide from the showed array

				if (this.showed.i < 2)
					return;
				this.showed.i -= 2;
				n = this.showed.array[this.showed.i];
			}
			else
				n = (this.slide - 2 + this.data.images.length) % this.data.images.length;									
		}
		this.go(n, 'right');
	},

/**
Public method: pause
	Toggles play / pause state of the show.

Arguments:
	p - (undefined, 1 or 0) Call pause with no arguments to toggle the pause state. Call pause(1) to force pause, or pause(0) to force play.

Syntax:
	myShow.pause(p);	
*/

	pause: function(p){
		if ($chk(p))
			this.paused = (p) ? false : true;
		if (this.paused){
			this.paused = false;
			this.delay = this.transition = 0;		
			this.timer = this._preload.delay(100, this);
			[this.a, this.b].each(function(img){
				['morph', 'tween'].each(function(p){
					if (this.retrieve(p)) this.get(p).resume();
				}, img);
			});
			if (this.options.controller)
				this.slideshow.getElement('.' + this.classes.pause).removeClass(this.classes.play);
		} 
		else {
			this.paused = true;
			this.delay = Number.MAX_VALUE;
			this.transition = 0;
			$clear(this.timer);
			[this.a, this.b].each(function(img){
				['morph', 'tween'].each(function(p){
					if (this.retrieve(p)) this.get(p).pause();
				}, img);
			});
			if (this.options.controller)
				this.slideshow.getElement('.' + this.classes.pause).addClass(this.classes.play);
		}
	},
	
/**
Public method: next
	Goes to the next image in the show.

Syntax:
	myShow.next();	
*/

	next: function(last){
		var n = (last) ? this.data.images.length - 1 : this.slide;
		this.go(n, 'left');
	},

/**
Public method: last
	Goes to the last image in the show.

Syntax:
	myShow.last();	
*/

	last: function(){
		this.next(true); 
	},

/**
Public method: load
	Loads a new data set into the show: will stop the current show, rewind and rebuild thumbnails if applicable.

Arguments:
	data - (array or object) The images and optional thumbnails, captions and links for the show.

Syntax:
	myShow.load(data);
*/

	load: function(data){
		this.firstrun = true;
		this.showed = {'array': [], 'i': 0};
		if ($type(data) == 'array'){
			this.options.captions = false;			
			data = new Array(data.length).associate(data.map(function(image, i){ return image + '?' + i })); 
		}
		this.data = {'images': [], 'captions': [], 'hrefs': [], 'thumbnails': []};
		for (var image in data){
			var obj = data[image] || {};
			var caption = (obj.caption) ? obj.caption.trim() : '';
			var href = (obj.href) ? obj.href.trim() : ((this.options.linked) ? this.options.hu + image : this.options.href);
			var thumbnail = (obj.thumbnail) ? obj.thumbnail.trim() : image.replace(this.options.replace[0], this.options.replace[1]);
			this.data.images.push(image);
			this.data.captions.push(caption);
			this.data.hrefs.push(href);
			this.data.thumbnails.push(thumbnail);
		}
		if (this.options.random)
			this.slide = $random(0, this.data.images.length - 1);
		
		// only run when data is loaded dynamically into an existing slideshow instance
		
		if (this.options.thumbnails && this.slideshow.retrieve('thumbnails'))
			this._thumbnails();
		if (this.slideshow.retrieve('images')){
			[this.a, this.b].each(function(img){
				['morph', 'tween'].each(function(p){
					if (this.retrieve(p)) this.get(p).cancel();
				}, img);
			});
			this.slide = this.transition = 0;
			this.go(0);		
		}
		return this.data.images.length;
	},
	
/**
Public method: destroy
	Destroys a Slideshow instance.

Arguments:
	p - (string) The images and optional thumbnails, captions and links for the show.

Syntax:
	myShow.destroy(p);
*/

	destroy: function(p){
		this.events.each(function(array, e){
			array.each(function(fn){ document.removeEvent(e, fn); });
		});
		this.pause(1);
		if (this.options.loader)
			$clear(this.slideshow.retrieve('loader').retrieve('timer'));		
		if (this.options.thumbnails)
			$clear(this.slideshow.retrieve('thumbnails').retrieve('timer'));
		this.slideshow.uid = Native.UID++;
		if (p)
			this.slideshow[p]();
	},
	
/**
Private method: preload
	Preloads the next slide in the show, once loaded triggers the show, updates captions, thumbnails, etc.
*/

	_preload: function(fast){
		if (!this.preloader)
		 	this.preloader = new Asset.image(this.options.hu + this.data.images[this.slide], {'onload': function(){
				this.store('loaded', true);
			}});	
		if (this.preloader.retrieve('loaded') && $time() > this.delay && $time() > this.transition){
			if (this.stopped){
				if (this.options.captions)
					this.slideshow.retrieve('captions').get('morph').cancel().start(this.classes.get('captions', 'hidden'));
				this.pause(1);
				if (this.end)
					this.fireEvent('end');
				this.stopped = this.end = false;
				return;				
			}					
			this.image = (this.counter % 2) ? this.b : this.a;
			this.image.set('styles', {'display': 'block', 'height': 'auto', 'visibility': 'hidden', 'width': 'auto', 'zIndex': this.counter});
			['src', 'height', 'width'].each(function(prop){
				this.image.set(prop, this.preloader.get(prop));
			}, this);
			this._resize(this.image);
			this._center(this.image);
			var anchor = this.image.getParent();
			if (this.data.hrefs[this.slide])
				anchor.set('href', this.data.hrefs[this.slide]);			
			else
				anchor.erase('href');
			var text = (this.data.captions[this.slide])
				? this.data.captions[this.slide].replace(/<.+?>/gm, '').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, "'") 
				: '';
			this.image.set('alt', text);		
			if (this.options.titles)
				anchor.set('title', text);
			if (this.options.loader)
				this.slideshow.retrieve('loader').fireEvent('hide');
			if (this.options.captions)
				this.slideshow.retrieve('captions').fireEvent('update', fast);				
			if (this.options.thumbnails)
				this.slideshow.retrieve('thumbnails').fireEvent('update', fast); 			
			this._show(fast);
			this._loaded();
		} 
		else {
			if ($time() > this.delay && this.options.loader)
				this.slideshow.retrieve('loader').fireEvent('show');
			this.timer = (this.paused && this.preloader.retrieve('loaded')) ? null : this._preload.delay(100, this, fast); 
		}
	},

/**
Private method: show
	Does the slideshow effect.
*/

	_show: function(fast){
		if (!this.image.retrieve('morph')){
			var options = (this.options.overlap) ? {'duration': this.options.duration, 'link': 'cancel'} : {'duration': this.options.duration / 2, 'link': 'chain'};
			$$(this.a, this.b).set('morph', $merge(options, {'onStart': this._start.bind(this), 'onComplete': this._complete.bind(this), 'transition': this.options.transition}));
		}
		var hidden = this.classes.get('images', ((this.direction == 'left') ? 'next' : 'prev'));
		var visible = this.classes.get('images', 'visible');
		var img = (this.counter % 2) ? this.a : this.b;
		if (fast){			
			img.get('morph').cancel().set(hidden);
			this.image.get('morph').cancel().set(visible); 			
		} 
		else {
			if (this.options.overlap){
				img.get('morph').set(visible);
				this.image.get('morph').set(hidden).start(visible);
			} 
			else	{
				var fn = function(hidden, visible){
					this.image.get('morph').set(hidden).start(visible);
				}.pass([hidden, visible], this);
				hidden = this.classes.get('images', ((this.direction == 'left') ? 'prev' : 'next'));
				img.get('morph').set(visible).start(hidden).chain(fn);
			}
		}
	},
	
/**
Private method: loaded
	Run after the current image has been loaded, sets up the next image to be shown.
*/

	_loaded: function(){
		this.counter++;
		this.delay = (this.paused) ? Number.MAX_VALUE : $time() + this.options.duration + this.options.delay;
		this.direction = 'left';
		this.transition = (this.options.fast == 2 || (this.options.fast == 1 && this.paused)) ? 0 : $time() + this.options.duration;			
		if (this.slide + 1 == this.data.images.length && !this.options.loop && !this.options.random)
			this.stopped = this.end = true;			
		if (this.options.random){
			this.showed.i++;
			if (this.showed.i >= this.showed.array.length){
				var n = this.slide;
				if (this.showed.array.getLast() != n) this.showed.array.push(n);
				while (this.slide == n)
					this.slide = $random(0, this.data.images.length - 1);				
			}
			else
				this.slide = this.showed.array[this.showed.i];
		}
		else
			this.slide = (this.slide + 1) % this.data.images.length;
		if (this.image.getStyle('visibility') != 'visible')
			(function(){ this.image.setStyle('visibility', 'visible'); }).delay(1, this);			
		if (this.preloader) 
			this.preloader = this.preloader.destroy();
		this._preload();
	},

/**
Private method: center
	Center an image.
*/

	_center: function(img){
		if (this.options.center){
			var size = img.getSize();
			img.set('styles', {'left': (size.x - this.width) / -2, 'top': (size.y - this.height) / -2});
		}
	},

/**
Private method: resize
	Resizes an image.
*/

	_resize: function(img){
		if (this.options.resize){
			var h = this.preloader.get('height'), w = this.preloader.get('width');
			var dh = this.height / h, dw = this.width / w, d;
			if (this.options.resize == 'length')
				d = (dh > dw) ? dw : dh;
			else
				d = (dh > dw) ? dh : dw;
			img.set('styles', {height: Math.ceil(h * d), width: Math.ceil(w * d)});
		}	
	},

/**
Private method: start
	Callback on start of slide change.
*/

	_start: function(){		
		this.fireEvent('start');
	},

/**
Private method: complete
	Callback on start of slide change.
*/

	_complete: function(){
		if (this.firstrun && this.options.paused){
			this.firstrun = false;
			this.pause(1);
		}
		this.fireEvent('complete');
	},

/**
Private method: captions
	Builds the optional caption element, adds interactivity.
	This method can safely be removed if the captions option is not enabled.
*/

	_captions: function(){
 		if (this.options.captions === true) 
 			this.options.captions = {};
		var el = this.slideshow.getElement(this.classes.get('captions'));
		var captions = (el) ? el.empty() : new Element('div', {'class': this.classes.get('captions').substr(1)}).inject(this.slideshow);
		captions.set({
			'events': {
				'update': function(fast){	
					var captions = this.slideshow.retrieve('captions');
					var empty = (this.data.captions[this.slide] === '');
					if (fast){
						var p = (empty) ? 'hidden' : 'visible';
						captions.set('html', this.data.captions[this.slide]).get('morph').cancel().set(this.classes.get('captions', p));
					}
					else {
						var fn = (empty) ? $empty : function(n){
							this.slideshow.retrieve('captions').set('html', this.data.captions[n]).morph(this.classes.get('captions', 'visible'))
						}.pass(this.slide, this);		
						captions.get('morph').cancel().start(this.classes.get('captions', 'hidden')).chain(fn);
					}
				}.bind(this)
			},
			'morph': $merge(this.options.captions, {'link': 'chain'})
		});
		this.slideshow.store('captions', captions);
	},

/**
Private method: controller
	Builds the optional controller element, adds interactivity.
	This method can safely be removed if the controller option is not enabled.
*/

	_controller: function(){
 		if (this.options.controller === true)
 			this.options.controller = {};
		var el = this.slideshow.getElement(this.classes.get('controller'));
		var controller = (el) ? el.empty() : new Element('div', {'class': this.classes.get('controller').substr(1)}).inject(this.slideshow);
		var ul = new Element('ul').inject(controller);
		$H({'first': 'Shift + Leftwards Arrow', 'prev': 'Leftwards Arrow', 'pause': 'P', 'next': 'Rightwards Arrow', 'last': 'Shift + Rightwards Arrow'}).each(function(accesskey, action){
			var li = new Element('li', {
				'class': (action == 'pause' && this.options.paused) ? this.classes.play + ' ' + this.classes[action] : this.classes[action]
			}).inject(ul);
			var a = this.slideshow.retrieve(action, new Element('a', {
				'title': ((action == 'pause') ? this.classes.play.capitalize() + ' / ' : '') + this.classes[action].capitalize() + ' [' + accesskey + ']'				
			}).inject(li));
			a.set('events', {
				'click': function(action){this[action]();}.pass(action, this),
				'mouseenter': function(active){this.addClass(active);}.pass(this.classes.active, a),
				'mouseleave': function(active){this.removeClass(active);}.pass(this.classes.active, a)
			});		
		}, this);
		controller.set({
			'events': {
				'hide': function(hidden){  
					if (!this.retrieve('hidden'))
						this.store('hidden', true).morph(hidden);
				}.pass(this.classes.get('controller', 'hidden'), controller),
				'show': function(visible){  
					if (this.retrieve('hidden'))
						this.store('hidden', false).morph(visible);
				}.pass(this.classes.get('controller', 'visible'), controller)
			},
			'morph': $merge(this.options.controller, {'link': 'cancel'})
		}).store('hidden', false);
		var keydown = function(e){
			if (['left', 'right', 'p'].contains(e.key)){
				var controller = this.slideshow.retrieve('controller');
				if (controller.retrieve('hidden'))
					controller.get('morph').set(this.classes.get('controller', 'visible')); 			
				switch(e.key){
					case 'left': 
						this.slideshow.retrieve((e.shift) ? 'first' : 'prev').fireEvent('mouseenter'); break;
					case 'right':
						this.slideshow.retrieve((e.shift) ? 'last' : 'next').fireEvent('mouseenter'); break;
					default:
						this.slideshow.retrieve('pause').fireEvent('mouseenter'); break;
				}
			}
		}.bind(this);
		this.events.keydown.push(keydown);
		var keyup = function(e){
			if (['left', 'right', 'p'].contains(e.key)){
				var controller = this.slideshow.retrieve('controller');
				if (controller.retrieve('hidden'))
					controller.store('hidden', false).fireEvent('hide'); 
				switch(e.key){
					case 'left': 
						this.slideshow.retrieve((e.shift) ? 'first' : 'prev').fireEvent('mouseleave'); break;
					case 'right': 
						this.slideshow.retrieve((e.shift) ? 'last' : 'next').fireEvent('mouseleave'); break;
					default:
						this.slideshow.retrieve('pause').fireEvent('mouseleave'); break;
				}
			}
		}.bind(this);
		this.events.keyup.push(keyup);
		var mousemove = function(e){
			var images = this.slideshow.retrieve('images').getCoordinates();
			if (e.page.x > images.left && e.page.x < images.right && e.page.y > images.top && e.page.y < images.bottom)
				this.slideshow.retrieve('controller').fireEvent('show');
			else
				this.slideshow.retrieve('controller').fireEvent('hide');
		}.bind(this);
		this.events.mousemove.push(mousemove);
		document.addEvents({'keydown': keydown, 'keyup': keyup, 'mousemove': mousemove});
		this.slideshow.retrieve('controller', controller).fireEvent('hide');
	},

/**
Private method: loader
	Builds the optional loader element, adds interactivity.
	This method can safely be removed if the loader option is not enabled.
*/

	_loader: function(){
 		if (this.options.loader === true) 
 			this.options.loader = {};
		var loader = new Element('div', {
			'class': this.classes.get('loader').substr(1),				
			'morph': $merge(this.options.loader, {'link': 'cancel'})
		}).store('hidden', false).store('i', 1).inject(this.slideshow.retrieve('images'));
		if (this.options.loader.animate){
			for (var i = 0; i < this.options.loader.animate[1]; i++)
				img = new Asset.image(this.options.loader.animate[0].replace(/#/, i));
			if (Browser.Engine.trident4 && this.options.loader.animate[0].contains('png'))
				loader.setStyle('backgroundImage', 'none');					
		}
		loader.set('events', {
			'animate': function(){  
				var loader = this.slideshow.retrieve('loader');				
				var i = (loader.retrieve('i').toInt() + 1) % this.options.loader.animate[1];
				loader.store('i', i);
				var img = this.options.loader.animate[0].replace(/#/, i);
				if (Browser.Engine.trident4 && this.options.loader.animate[0].contains('png'))
					loader.style.filter = 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="' + img + '", sizingMethod="scale")';
				else 
					loader.setStyle('backgroundImage', 'url(' + img + ')');
			}.bind(this),
			'hide': function(){  
				var loader = this.slideshow.retrieve('loader');
				if (!loader.retrieve('hidden')){
					loader.store('hidden', true).morph(this.classes.get('loader', 'hidden'));
					if (this.options.loader.animate)
						$clear(loader.retrieve('timer'));					
				}
			}.bind(this),
			'show': function(){  
				var loader = this.slideshow.retrieve('loader');
				if (loader.retrieve('hidden')){
					loader.store('hidden', false).morph(this.classes.get('loader', 'visible'));
					if (this.options.loader.animate)
						loader.store('timer', function(){this.fireEvent('animate');}.periodical(50, loader));
				}
			}.bind(this)
		});
		this.slideshow.retrieve('loader', loader).fireEvent('hide');
	},
	
/**
Private method: thumbnails
	Builds the optional thumbnails element, adds interactivity.
	This method can safely be removed if the thumbnails option is not enabled.
*/

	_thumbnails: function(){
 		if (this.options.thumbnails === true) 
 			this.options.thumbnails = {}; 
		var el = this.slideshow.getElement(this.classes.get('thumbnails'));
		var thumbnails = (el) ? el.empty() : new Element('div', {'class': this.classes.get('thumbnails').substr(1)}).inject(this.slideshow);
		thumbnails.setStyle('overflow', 'hidden');
		var ul = new Element('ul', {'tween': {'link': 'cancel'}}).inject(thumbnails);
		this.data.thumbnails.each(function(thumbnail, i){
			var li = new Element('li').inject(ul);
			var a = new Element('a', {
				'events': {
					'click': function(i){
						this.go(i); 
						return false; 
					}.pass(i, this),
					'loaded': function(){
						this.data.thumbnails.pop();
						if (!this.data.thumbnails.length){
							var div = thumbnails.getCoordinates();
							var props = thumbnails.retrieve('props');			
							var limit = 0, pos = props[1], size = props[2];		
							thumbnails.getElements('li').each(function(li){			
								var li = li.getCoordinates();		
								if (li[pos] > limit) limit = li[pos];
							}, this);			
							thumbnails.store('limit', div[size] + div[props[0]] - limit);
						}
					}.bind(this)
				},
				'href': this.options.hu + this.data.images[i],
				'morph': $merge(this.options.thumbnails, {'link': 'cancel'})
			}).inject(li);
			if (this.data.captions[i] && this.options.titles)
				a.set('title', this.data.captions[i].replace(/<.+?>/gm, '').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, "'"));
			var img = new Asset.image(this.options.hu + thumbnail, {
				'onload': function(){this.fireEvent('loaded');}.bind(a) 
			}).inject(a);
		}, this);
		thumbnails.set('events', {
			'scroll': function(n, fast){
				var div = this.getCoordinates();
				var ul = this.getElement('ul').getPosition();
				var props = this.retrieve('props');
				var axis = props[3], delta, pos = props[0], size = props[2], value;				
				var tween = this.getElement('ul').get('tween', {'property': pos});	
				if ($chk(n)){
					var li = this.getElements('li')[n].getCoordinates();
					delta = div[pos] + (div[size] / 1) - (li[size] / 1) - li[pos]	
					value = (ul[axis] - div[pos] + delta).limit(this.retrieve('limit'), 0);
					if (fast)	
						tween.set(value);
					else						 
						tween.start(value);
				}
				else{
					var area = div[props[2]] / 3, page = this.retrieve('page'), velocity = -0.2;			
					if (page[axis] < (div[pos] + area))
						delta = (page[axis] - div[pos] - area) * velocity;
					else if (page[axis] > (div[pos] + div[size] - area))
						delta = (page[axis] - div[pos] - div[size] + area) * velocity;			
					if (delta){			
						value = (ul[axis] - div[pos] + delta).limit(this.retrieve('limit'), 0);
						tween.set(value);
					}
				}				
			}.bind(thumbnails),
			'update': function(fast){
				var thumbnails = this.slideshow.retrieve('thumbnails');
				thumbnails.getElements('a').each(function(a, i){	
					if (i == this.slide){
						if (!a.retrieve('active', false)){
							a.store('active', true);
							var active = this.classes.get('thumbnails', 'active');							
							if (fast) a.get('morph').set(active);
							else a.morph(active);
						}
					} 
					else {
						if (a.retrieve('active', true)){
							a.store('active', false);
							var inactive = this.classes.get('thumbnails', 'inactive');						
							if (fast) a.get('morph').set(inactive);
							else a.morph(inactive);
						}
					}
				}, this);
				if (!thumbnails.retrieve('mouseover'))
					thumbnails.fireEvent('scroll', [this.slide, fast]);
			}.bind(this)
		})
		var div = thumbnails.getCoordinates();
		thumbnails.store('props', (div.height > div.width) ? ['top', 'bottom', 'height', 'y'] : ['left', 'right', 'width', 'x']);
		var mousemove = function(e){
			var div = this.getCoordinates();
			if (e.page.x > div.left && e.page.x < div.right && e.page.y > div.top && e.page.y < div.bottom){
				this.store('page', e.page);			
				if (!this.retrieve('mouseover')){
					this.store('mouseover', true);
					this.store('timer', function(){this.fireEvent('scroll');}.periodical(50, this));
				}
			}
			else {
				if (this.retrieve('mouseover')){
					this.store('mouseover', false);				
					$clear(this.retrieve('timer'));
				}
			}
		}.bind(thumbnails);
		this.events.mousemove.push(mousemove);
		document.addEvent('mousemove', mousemove);
		this.slideshow.store('thumbnails', thumbnails);
	}
});		

/*---------------------------------------------------------------------------------------------------------------------------------------
 * menuMatic 
 * @version 0.68.3 (beta)
 * @author Jason J. Jaeger | greengeckodesign.com
 * @copyright 2008 Jason John Jaeger
 * @license MIT-style License
 *			Permission is hereby granted, free of charge, to any person obtaining a copy
 *			of this software and associated documentation files (the "Software"), to deal
 *			in the Software without restriction, including without limitation the rights
 *			to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *			copies of the Software, and to permit persons to whom the Software is
 *			furnished to do so, subject to the following conditions:
 *	
 *			The above copyright notice and this permission notice shall be included in
 *			all copies or substantial portions of the Software.
 *	
 *			THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *			IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *			FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *			AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *			LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *			OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *			THE SOFTWARE.
 ---------------------------------------------------------------------------------------------------------------------------------------*/	
var MenuMatic=new Class({Implements:Options,options:{id:"nav",subMenusContainerId:"subMenusContainer",effect:"slide & fade",duration:600,physics:Fx.Transitions.Pow.easeOut,hideDelay:1000,stretchMainMenu:false,matchWidthMode:false,orientation:"horizontal",direction:{x:"right",y:"down"},tweakInitial:{x:0,y:0},tweakSubsequent:{x:0,y:0},center:false,opacity:95,mmbFocusedClassName:null,mmbClassName:null,killDivider:null,fixHasLayoutBug:false,onHideAllSubMenusNow_begin:(function(){}),onHideAllSubMenusNow_complete:(function(){}),onInit_begin:(function(){}),onInit_complete:(function(){})},hideAllMenusTimeout:null,allSubMenus:[],subMenuZindex:1,initialize:function(B){this.setOptions(B);this.options.onInit_begin();if(this.options.opacity>99){this.options.opacity=99.9}this.options.opacity=this.options.opacity/100;Element.implement({getId:function(){if(!this.id){var E=this.get("tag")+"-"+$time();while($(E)){E=this.get("tag")+"-"+$time()}this.id=E}return this.id}});this.options.direction.x=this.options.direction.x.toLowerCase();this.options.direction.y=this.options.direction.y.toLowerCase();if(this.options.direction.x==="right"){this.options.direction.xInverse="left"}else{if(this.options.direction.x==="left"){this.options.direction.xInverse="right"}}if(this.options.direction.y==="up"){this.options.direction.yInverse="down"}else{if(this.options.direction.y==="down"){this.options.direction.yInverse="up"}}var A=$(this.options.id).getElements("a");A.each(function(F,E){F.store("parentLinks",F.getParent().getParents("li").getFirst("a"));F.store("parentLinks",F.retrieve("parentLinks").erase(F.retrieve("parentLinks").getFirst()));F.store("childMenu",F.getNext("ul")||F.getNext("ol"));theSubMenuType="subsequent";if($(F.getParent("ul")||F.getParent("ol")).id===this.options.id){theSubMenuType="initial"}F.store("subMenuType",theSubMenuType);if(theSubMenuType==="initial"&&$(F.getNext("ul")||F.getNext("ol"))){F.addClass("mainMenuParentBtn")}else{if($(F.getNext("ul")||F.getNext("ol"))){F.addClass("subMenuParentBtn")}}}.bind(this));var D=new Element("div",{id:this.options.subMenusContainerId}).inject($(document.body),"bottom");$(this.options.id).getElements("ul, ol").each(function(F,E){new Element("div",{"class":"smOW"}).inject(D).grab(F)}.bind(this));D.getElements("a").set("tabindex","-1");A.each(function(G,E){if(!G.retrieve("childMenu")){return }G.store("childMenu",G.retrieve("childMenu").getParent("div"));this.allSubMenus.include(G.retrieve("childMenu"));G.store("parentSubMenus",G.retrieve("parentLinks").retrieve("childMenu"));var F=new MenuMaticSubMenu(this.options,this,G)}.bind(this));var C=$(this.options.id).getElements("a").filter(function(F,E){return !F.retrieve("childMenu")});C.each(function(F,E){F.addEvents({mouseenter:function(G){this.hideAllSubMenusNow();if(this.options.mmbClassName&&this.options.mmbFocusedClassName){$(F).retrieve("btnMorph",new Fx.Morph(F,{duration:(this.options.duration/2),transition:this.options.physics,link:"cancel"})).start(this.options.mmbFocusedClassName)}}.bind(this),focus:function(G){this.hideAllSubMenusNow();if(this.options.mmbClassName&&this.options.mmbFocusedClassName){$(F).retrieve("btnMorph",new Fx.Morph(F,{duration:(this.options.duration/2),transition:this.options.physics,link:"cancel"})).start(this.options.mmbFocusedClassName)}}.bind(this),mouseleave:function(G){if(this.options.mmbClassName&&this.options.mmbFocusedClassName){$(F).retrieve("btnMorph",new Fx.Morph(F,{duration:(this.options.duration*5),transition:this.options.physics,link:"cancel"})).start(this.options.mmbClassName)}}.bind(this),blur:function(G){if(this.options.mmbClassName&&this.options.mmbFocusedClassName){$(F).retrieve("btnMorph",new Fx.Morph(F,{duration:(this.options.duration*5),transition:this.options.physics,link:"cancel"})).start(this.options.mmbClassName)}}.bind(this),keydown:function(H){var G=new Event(H);if(H.key==="up"||H.key==="down"||H.key==="left"||H.key==="right"){H.stop()}if(H.key==="left"&&this.options.orientation==="horizontal"||H.key==="up"&&this.options.orientation==="vertical"){if(F.getParent("li").getPrevious("li")){F.getParent("li").getPrevious("li").getFirst("a").focus()}else{F.getParent("li").getParent().getLast("li").getFirst("a").focus()}}else{if(H.key==="right"&&this.options.orientation==="horizontal"||H.key==="down"&&this.options.orientation==="vertical"){if(F.getParent("li").getNext("li")){F.getParent("li").getNext("li").getFirst("a").focus()}else{F.getParent("li").getParent().getFirst("li").getFirst("a").focus()}}}}.bind(this)})},this);this.stretch();this.killDivider();this.center();this.fixHasLayoutBug();this.options.onInit_complete()},fixHasLayoutBug:function(){if(Browser.Engine.trident&&this.options.fixHasLayoutBug){$(this.options.id).getParents().setStyle("zoom",1);$(this.options.id).setStyle("zoom",1);$(this.options.id).getChildren().setStyle("zoom",1);$(this.options.subMenusContainerId).setStyle("zoom",1);$(this.options.subMenusContainerId).getChildren().setStyle("zoom",1)}},center:function(){if(!this.options.center){return }$(this.options.id).setStyles({left:"50%","margin-left":-($(this.options.id).getSize().x/2)})},stretch:function(){if(this.options.stretchMainMenu&&this.options.orientation==="horizontal"){var C=parseFloat($(this.options.id).getCoordinates().width);var D=0;var B=$(this.options.id).getElements("a");B.setStyles({"padding-left":0,"padding-right":0});B.each(function(F,E){D+=F.getSize().x}.bind(this));if(C<D){return }var A=(C-D)/B.length;B.each(function(F,E){F.setStyle("width",F.getSize().x+A)}.bind(this));B.getLast().setStyle("width",B.getLast().getSize().x-1)}},killDivider:function(){if(this.options.killDivider&&this.options.killDivider.toLowerCase()==="first"){$($(this.options.id).getElements("li")[0]).setStyles({background:"none"})}else{if(this.options.killDivider&&this.options.killDivider.toLowerCase()==="last"){$($(this.options.id).getElements("li").getLast()).setStyles({background:"none"})}}},hideAllSubMenusNow:function(){this.options.onHideAllSubMenusNow_begin();$clear(this.hideAllMenusTimeout);$$(this.allSubMenus).fireEvent("hide");this.options.onHideAllSubMenusNow_complete()}});var MenuMaticSubMenu=new Class({Implements:Options,Extends:MenuMatic,options:{onSubMenuInit_begin:(function(A){}),onSubMenuInit_complete:(function(A){}),onMatchWidth_begin:(function(A){}),onMatchWidth_complete:(function(A){}),onHideSubMenu_begin:(function(A){}),onHideSubMenu_complete:(function(A){}),onHideOtherSubMenus_begin:(function(A){}),onHideOtherSubMenus_complete:(function(A){}),onHideAllSubMenus_begin:(function(A){}),onHideAllSubMenus_complete:(function(A){}),onPositionSubMenu_begin:(function(A){}),onPositionSubMenu_complete:(function(A){}),onShowSubMenu_begin:(function(A){}),onShowSubMenu_complete:(function(A){})},root:null,btn:null,hidden:true,myEffect:null,initialize:function(B,A,C){this.setOptions(B);this.root=A;this.btn=C;this.childMenu=this.btn.retrieve("childMenu");this.subMenuType=this.btn.retrieve("subMenuType");this.childMenu=this.btn.retrieve("childMenu");this.parentSubMenus=$$(this.btn.retrieve("parentSubMenus"));this.parentLinks=$$(this.btn.retrieve("parentLinks"));this.parentSubMenu=$(this.parentSubMenus[0]);if(this.parentSubMenu){this.parentSubMenu=this.parentSubMenu.retrieve("class")}this.childMenu.store("class",this);this.btn.store("class",this);this.childMenu.store("status","closed");this.options.onSubMenuInit_begin(this);this.childMenu.addEvent("hide",function(){this.hideSubMenu()}.bind(this));this.childMenu.addEvent("show",function(){this.showSubMenu()}.bind(this));if(this.options.effect){this.myEffect=new Fx.Morph($(this.childMenu).getFirst(),{duration:this.options.duration,transition:this.options.physics,link:"cancel"})}if(this.options.effect==="slide"||this.options.effect==="slide & fade"){if(this.subMenuType=="initial"&&this.options.orientation==="horizontal"){this.childMenu.getFirst().setStyle("margin-top","0")}else{this.childMenu.getFirst().setStyle("margin-left","0")}}else{if(this.options.effect==="fade"||this.options.effect==="slide & fade"){this.childMenu.getFirst().setStyle("opacity",0)}}if(this.options.effect!="fade"&&this.options.effect!="slide & fade"){this.childMenu.getFirst().setStyle("opacity",this.options.opacity)}var D=$(this.childMenu).getElements("a").filter(function(F,E){return !F.retrieve("childMenu")});D.each(function(F,E){$(F).addClass("subMenuBtn");F.addEvents({mouseenter:function(G){this.childMenu.fireEvent("show");this.cancellHideAllSubMenus();this.hideOtherSubMenus()}.bind(this),focus:function(G){this.childMenu.fireEvent("show");this.cancellHideAllSubMenus();this.hideOtherSubMenus()}.bind(this),mouseleave:function(G){this.cancellHideAllSubMenus();this.hideAllSubMenus()}.bind(this),blur:function(G){this.cancellHideAllSubMenus();this.hideAllSubMenus()}.bind(this),keydown:function(H){var G=new Event(H);if(H.key==="up"||H.key==="down"||H.key==="left"||H.key==="right"||H.key==="tab"){H.stop()}if(H.key==="up"){if(F.getParent("li").getPrevious("li")){F.getParent("li").getPrevious("li").getFirst("a").focus()}else{if(this.options.direction.y==="down"){this.btn.focus()}else{if(this.options.direction.y==="up"){F.getParent("li").getParent().getLast("li").getFirst("a").focus()}}}}else{if(H.key==="down"){if(F.getParent("li").getNext("li")){F.getParent("li").getNext("li").getFirst("a").focus()}else{if(this.options.direction.y==="down"){F.getParent("li").getParent().getFirst("li").getFirst("a").focus()}else{if(this.options.direction.y==="up"){this.btn.focus()}}}}else{if(H.key===this.options.direction.xInverse){this.btn.focus()}}}}.bind(this)})},this);$(this.btn).removeClass("subMenuBtn");if(this.subMenuType=="initial"){this.btn.addClass("mainParentBtn")}else{this.btn.addClass("subParentBtn")}$(this.btn).addEvents({mouseenter:function(E){this.cancellHideAllSubMenus();this.hideOtherSubMenus();this.showSubMenu();if(this.subMenuType==="initial"&&this.options.mmbClassName&&this.options.mmbFocusedClassName){$(this.btn).retrieve("btnMorph",new Fx.Morph($(this.btn),{duration:(this.options.duration/2),transition:this.options.physics,link:"cancel"})).start(this.options.mmbFocusedClassName)}}.bind(this),focus:function(E){this.cancellHideAllSubMenus();this.hideOtherSubMenus();this.showSubMenu();if(this.subMenuType==="initial"&&this.options.mmbClassName&&this.options.mmbFocusedClassName){$(this.btn).retrieve("btnMorph",new Fx.Morph($(this.btn),{duration:(this.options.duration/2),transition:this.options.physics,link:"cancel"})).start(this.options.mmbFocusedClassName)}}.bind(this),mouseleave:function(E){this.cancellHideAllSubMenus();this.hideAllSubMenus()}.bind(this),blur:function(E){this.cancellHideAllSubMenus();this.hideAllSubMenus()}.bind(this),keydown:function(E){E=new Event(E);if(E.key==="up"||E.key==="down"||E.key==="left"||E.key==="right"){E.stop()}if(!this.parentSubMenu){if(this.options.orientation==="horizontal"&&E.key===this.options.direction.y||this.options.orientation==="vertical"&&E.key===this.options.direction.x){if(this.options.direction.y==="down"){this.childMenu.getFirst().getFirst("li").getFirst("a").focus()}else{if(this.options.direction.y==="up"){this.childMenu.getFirst().getLast("li").getFirst("a").focus()}}}else{if(this.options.orientation==="horizontal"&&E.key==="left"||this.options.orientation==="vertical"&&E.key===this.options.direction.yInverse){if(this.btn.getParent().getPrevious()){this.btn.getParent().getPrevious().getFirst().focus()}else{this.btn.getParent().getParent().getLast().getFirst().focus()}}else{if(this.options.orientation==="horizontal"&&E.key==="right"||this.options.orientation==="vertical"&&E.key===this.options.direction.y){if(this.btn.getParent().getNext()){this.btn.getParent().getNext().getFirst().focus()}else{this.btn.getParent().getParent().getFirst().getFirst().focus()}}}}}else{if(E.key==="tab"){E.stop()}if(E.key==="up"){if(this.btn.getParent("li").getPrevious("li")){this.btn.getParent("li").getPrevious("li").getFirst("a").focus()}else{if(this.options.direction.y==="down"){this.parentSubMenu.btn.focus()}else{if(this.options.direction.y==="up"){this.btn.getParent("li").getParent().getLast("li").getFirst("a").focus()}}}}else{if(E.key==="down"){if(this.btn.getParent("li").getNext("li")){this.btn.getParent("li").getNext("li").getFirst("a").focus()}else{if(this.options.direction.y==="down"){this.btn.getParent("li").getParent().getFirst("li").getFirst("a").focus()}else{if(this.options.direction.y==="up"){this.parentSubMenu.btn.focus()}}}}else{if(E.key===this.options.direction.xInverse){this.parentSubMenu.btn.focus()}else{if(E.key===this.options.direction.x){if(this.options.direction.y==="down"){this.childMenu.getFirst().getFirst("li").getFirst("a").focus()}else{if(this.options.direction.y==="up"){}}}}}}}}.bind(this)});this.options.onSubMenuInit_complete(this)},matchWidth:function(){if(this.widthMatched||!this.options.matchWidthMode||this.subMenuType==="subsequent"){return }this.options.onMatchWidth_begin(this);var A=this.btn.getCoordinates().width;$(this.childMenu).getElements("a").each(function(E,D){var C=parseFloat($(this.childMenu).getFirst().getStyle("border-left-width"))+parseFloat($(this.childMenu).getFirst().getStyle("border-right-width"));var B=parseFloat(E.getStyle("padding-left"))+parseFloat(E.getStyle("padding-right"));var F=C+B;if(A>E.getCoordinates().width){E.setStyle("width",A-F);E.setStyle("margin-right",-C)}}.bind(this));this.width=this.childMenu.getFirst().getCoordinates().width;this.widthMatched=true;this.options.onMatchWidth_complete(this)},hideSubMenu:function(){if(this.childMenu.retrieve("status")==="closed"){return }this.options.onHideSubMenu_begin(this);if(this.subMenuType=="initial"){if(this.options.mmbClassName&&this.options.mmbFocusedClassName){$(this.btn).retrieve("btnMorph",new Fx.Morph($(this.btn),{duration:(this.options.duration),transition:this.options.physics,link:"cancel"})).start(this.options.mmbClassName).chain(function(){$(this.btn).removeClass("mainMenuParentBtnFocused");$(this.btn).addClass("mainMenuParentBtn")}.bind(this))}else{$(this.btn).removeClass("mainMenuParentBtnFocused");$(this.btn).addClass("mainMenuParentBtn")}}else{$(this.btn).removeClass("subMenuParentBtnFocused");$(this.btn).addClass("subMenuParentBtn")}this.childMenu.setStyle("z-index",1);if(this.options.effect&&this.options.effect.toLowerCase()==="slide"){if(this.subMenuType=="initial"&&this.options.orientation==="horizontal"&&this.options.direction.y==="down"){this.myEffect.start({"margin-top":-this.height}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.subMenuType=="initial"&&this.options.orientation==="horizontal"&&this.options.direction.y==="up"){this.myEffect.start({"margin-top":this.height}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.options.direction.x==="right"){this.myEffect.start({"margin-left":-this.width}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.options.direction.x==="left"){this.myEffect.start({"margin-left":this.width}).chain(function(){this.childMenu.style.display="none"}.bind(this))}}}}}else{if(this.options.effect=="fade"){this.myEffect.start({opacity:0}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.options.effect=="slide & fade"){if(this.subMenuType=="initial"&&this.options.orientation==="horizontal"&&this.options.direction.y==="down"){this.myEffect.start({"margin-top":-this.height,opacity:0}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.subMenuType=="initial"&&this.options.orientation==="horizontal"&&this.options.direction.y==="up"){this.myEffect.start({"margin-top":this.height,opacity:0}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.options.direction.x==="right"){this.myEffect.start({"margin-left":-this.width,opacity:0}).chain(function(){this.childMenu.style.display="none"}.bind(this))}else{if(this.options.direction.x==="left"){this.myEffect.start({"margin-left":this.width,opacity:0}).chain(function(){this.childMenu.style.display="none"}.bind(this))}}}}}else{this.childMenu.style.display="none"}}}this.childMenu.store("status","closed");this.options.onHideSubMenu_complete(this)},hideOtherSubMenus:function(){this.options.onHideOtherSubMenus_begin(this);if(!this.btn.retrieve("otherSubMenus")){this.btn.store("otherSubMenus",$$(this.root.allSubMenus.filter(function(A){return !this.btn.retrieve("parentSubMenus").contains(A)&&A!=this.childMenu}.bind(this))))}this.parentSubMenus.fireEvent("show");this.btn.retrieve("otherSubMenus").fireEvent("hide");this.options.onHideOtherSubMenus_complete(this)},hideAllSubMenus:function(){this.options.onHideAllSubMenus_begin(this);$clear(this.root.hideAllMenusTimeout);this.root.hideAllMenusTimeout=(function(){$clear(this.hideAllMenusTimeout);$$(this.root.allSubMenus).fireEvent("hide")}).bind(this).delay(this.options.hideDelay);this.options.onHideAllSubMenus_complete(this)},cancellHideAllSubMenus:function(){$clear(this.root.hideAllMenusTimeout)},showSubMenu:function(A){if(this.childMenu.retrieve("status")==="open"){return }this.options.onShowSubMenu_begin(this);if(this.subMenuType=="initial"){$(this.btn).removeClass("mainMenuParentBtn");$(this.btn).addClass("mainMenuParentBtnFocused")}else{$(this.btn).removeClass("subMenuParentBtn");$(this.btn).addClass("subMenuParentBtnFocused")}this.root.subMenuZindex++;this.childMenu.setStyles({display:"block",visibility:"hidden","z-index":this.root.subMenuZindex});if(!this.width||!this.height){this.width=this.childMenu.getFirst().getCoordinates().width;this.height=this.childMenu.getFirst().getCoordinates().height;this.childMenu.setStyle("height",this.height,"border");if(this.options.effect==="slide"||this.options.effect==="slide & fade"){if(this.subMenuType=="initial"&&this.options.orientation==="horizontal"){this.childMenu.getFirst().setStyle("margin-top","0");if(this.options.direction.y==="down"){this.myEffect.set({"margin-top":-this.height})}else{if(this.options.direction.y==="up"){this.myEffect.set({"margin-top":this.height})}}}else{if(this.options.direction.x==="left"){this.myEffect.set({"margin-left":this.width})}else{this.myEffect.set({"margin-left":-this.width})}}}}this.matchWidth();this.positionSubMenu();if(this.options.effect==="slide"){this.childMenu.setStyles({display:"block",visibility:"visible"});if(this.subMenuType==="initial"&&this.options.orientation==="horizontal"){if(A){this.myEffect.set({"margin-top":0}).chain(function(){this.showSubMenuComplete()}.bind(this))}else{this.myEffect.start({"margin-top":0}).chain(function(){this.showSubMenuComplete()}.bind(this))}}else{if(A){this.myEffect.set({"margin-left":0}).chain(function(){this.showSubMenuComplete()}.bind(this))}else{this.myEffect.start({"margin-left":0}).chain(function(){this.showSubMenuComplete()}.bind(this))}}}else{if(this.options.effect==="fade"){if(A){this.myEffect.set({opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}else{this.myEffect.start({opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}}else{if(this.options.effect=="slide & fade"){this.childMenu.setStyles({display:"block",visibility:"visible"});this.childMenu.getFirst().setStyles({left:0});if(this.subMenuType==="initial"&&this.options.orientation==="horizontal"){if(A){this.myEffect.set({"margin-top":0,opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}else{this.myEffect.start({"margin-top":0,opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}}else{if(A){if(this.options.direction.x==="right"){this.myEffect.set({"margin-left":0,opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}else{if(this.options.direction.x==="left"){this.myEffect.set({"margin-left":0,opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}}}else{if(this.options.direction.x==="right"){this.myEffect.set({"margin-left":-this.width,opacity:this.options.opacity});this.myEffect.start({"margin-left":0,opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}else{if(this.options.direction.x==="left"){this.myEffect.start({"margin-left":0,opacity:this.options.opacity}).chain(function(){this.showSubMenuComplete()}.bind(this))}}}}}else{this.childMenu.setStyles({display:"block",visibility:"visible"}).chain(function(){this.showSubMenuComplete(this)}.bind(this))}}}this.childMenu.store("status","open")},showSubMenuComplete:function(){this.options.onShowSubMenu_complete(this)},positionSubMenu:function(){this.options.onPositionSubMenu_begin(this);this.childMenu.setStyle("width",this.width);this.childMenu.getFirst().setStyle("width",this.width);if(this.subMenuType==="subsequent"){if(this.parentSubMenu&&this.options.direction.x!=this.parentSubMenu.options.direction.x){if(this.parentSubMenu.options.direction.x==="left"&&this.options.effect&&this.options.effect.contains("slide")){this.myEffect.set({"margin-left":this.width})}}this.options.direction.x=this.parentSubMenu.options.direction.x;this.options.direction.xInverse=this.parentSubMenu.options.direction.xInverse;this.options.direction.y=this.parentSubMenu.options.direction.y;this.options.direction.yInverse=this.parentSubMenu.options.direction.yInverse}var C;var A;if(this.subMenuType=="initial"){if(this.options.direction.y==="up"){if(this.options.orientation==="vertical"){C=this.btn.getCoordinates().bottom-this.height+this.options.tweakInitial.y}else{C=this.btn.getCoordinates().top-this.height+this.options.tweakInitial.y}this.childMenu.style.top=C+"px"}else{if(this.options.orientation=="horizontal"){this.childMenu.style.top=this.btn.getCoordinates().bottom+this.options.tweakInitial.y+"px"}else{if(this.options.orientation=="vertical"){C=this.btn.getPosition().y+this.options.tweakInitial.y;if((C+this.childMenu.getSize().y)>=$(document.body).getScrollSize().y){A=(C+this.childMenu.getSize().y)-$(document.body).getScrollSize().y;C=C-A-20}this.childMenu.style.top=C+"px"}}}if(this.options.orientation=="horizontal"){this.childMenu.style.left=this.btn.getPosition().x+this.options.tweakInitial.x+"px"}else{if(this.options.direction.x=="left"){this.childMenu.style.left=this.btn.getPosition().x-this.childMenu.getCoordinates().width+this.options.tweakInitial.x+"px"}else{if(this.options.direction.x=="right"){this.childMenu.style.left=this.btn.getCoordinates().right+this.options.tweakInitial.x+"px"}}}}else{if(this.subMenuType=="subsequent"){if(this.options.direction.y==="down"){if((this.btn.getCoordinates().top+this.options.tweakSubsequent.y+this.childMenu.getSize().y)>=$(document.body).getScrollSize().y){A=(this.btn.getCoordinates().top+this.options.tweakSubsequent.y+this.childMenu.getSize().y)-$(document.body).getScrollSize().y;this.childMenu.style.top=(this.btn.getCoordinates().top+this.options.tweakSubsequent.y)-A-20+"px"}else{this.childMenu.style.top=this.btn.getCoordinates().top+this.options.tweakSubsequent.y+"px"}}else{if(this.options.direction.y==="up"){if((this.btn.getCoordinates().bottom-this.height+this.options.tweakSubsequent.y)<1){this.options.direction.y="down";this.options.direction.yInverse="up";this.childMenu.style.top=this.btn.getCoordinates().top+this.options.tweakSubsequent.y+"px"}else{this.childMenu.style.top=this.btn.getCoordinates().bottom-this.height+this.options.tweakSubsequent.y+"px"}}}if(this.options.direction.x=="left"){this.childMenu.style.left=this.btn.getCoordinates().left-this.childMenu.getCoordinates().width+this.options.tweakSubsequent.x+"px";if(this.childMenu.getPosition().x<0){this.options.direction.x="right";this.options.direction.xInverse="left";this.childMenu.style.left=this.btn.getPosition().x+this.btn.getCoordinates().width+this.options.tweakSubsequent.x+"px";if(this.options.effect==="slide"||this.options.effect==="slide & fade"){this.myEffect.set({"margin-left":-this.width,opacity:this.options.opacity})}}}else{if(this.options.direction.x=="right"){this.childMenu.style.left=this.btn.getCoordinates().right+this.options.tweakSubsequent.x+"px";var D=this.childMenu.getCoordinates().right;var B=document.getCoordinates().width+window.getScroll().x;if(D>B){this.options.direction.x="left";this.options.direction.xInverse="right";this.childMenu.style.left=this.btn.getCoordinates().left-this.childMenu.getCoordinates().width+this.options.tweakSubsequent.x+"px";if(this.options.effect==="slide"||this.options.effect==="slide & fade"){this.myEffect.set({"margin-left":this.width,opacity:this.options.opacity})}}}}}}this.options.onPositionSubMenu_complete(this)}});