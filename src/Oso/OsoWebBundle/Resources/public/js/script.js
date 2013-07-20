$(document).ready(function() {
	// hover

      


      //oumar
      


	$('#menu > li > span, #menu > li > strong').css({opacity:0})
	
	$('#menu > li').hover(function(){						   
		$(this).find('strong').stop().animate({opacity:1})
		$(this).find('span').stop().animate({opacity:1})
	}, function(){
		if (!$(this).hasClass('active') && !$(this).hasClass('sfHover')) {
			$(this).find('span').stop().animate({opacity:0})		   
			$(this).find('strong').stop().animate({opacity:0})
		}
	})
	
	$('#icons a').hover(function(){
		$(this).find('img').css({width:10, height:'100%', top:-70, left:24}).stop().animate({width:'100%', height:'100%', top:0, left:0}, 600, 'easeOutBack')
	}, function(){
		
	})
	
	$('.button1 strong, .box1 strong').css({opacity:0})
	
	$('.button1, .box1').hover(function(){
		$(this).find('strong').stop().animate({opacity:1})						 
	}, function(){
		$(this).find('strong').stop().animate({opacity:0})						 
	})
	
	$('.link1 span').css({width:0})
	
	$('.link1').hover(function(){
		$(this).find('span').stop().animate({width:'100%'}, 600, 'easeOutCirc')					   
	}, function(){
		$(this).find('span').stop().animate({width:0}, 600, 'easeOutCirc')					   
	})
	
	
	$('ul#menu').superfish({
      delay:       600,
      animation:   {height:'show'},
      speed:       600,
      autoArrows:  false,
      dropShadows: false
    });
	
		
 });
$(window).load(function() {	
	//bg 
	
	$('#bgStretch').bgStretch({
			align:'leftTop'
	})
	
	
	// scroll
	$('.scroll').cScroll({
		duration:700,
		step:57,
		trackCl:'track',
		shuttleCl:'shuttle'
	})	
	
	
	
	
	//content switch
	var content=$('#content'),
		nav=$('.menu');
	nav.navs({
		useHash:true
	})	
	nav.navs(function(n, _){
		content.cont_sw(n);
		if (_.n!=0) {
			
		}
		$('#menu > li').eq(_.n).siblings().find('span').stop().animate({opacity:0})		   
		$('#menu > li').eq(_.n).siblings().find('strong').stop().animate({opacity:0})
		if (_.n!=-1) {
			$('#menu > li').eq(_.n).find('strong').stop().animate({opacity:1})
			$('#menu > li').eq(_.n).find('span').stop().animate({opacity:1})				
		}
	})
	content.cont_sw({
		showFu:function(){
			var _=this	
			$.when(_.li.find('.box')).then(function(){	
			$.when(_.li).then(function(){		
				if (_.n==0) {
					$('#icons').stop().animate({top:-250})
					$('#works').css({display:'block'}).stop().animate({opacity:1}, function(){$(this).css({opacity:'none'})})
				} else {
					$('#icons').stop().animate({top:36})	
					$('#works').stop().animate({opacity:0}, function(){$(this).css({display:'none'})})
				}
				if (_.next.attr('id')=='page_contacts') {
					$('#map').html('<iframe width="291" height="392" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=12+Square+des+Moulineaux,+Boulogne-Billancourt&amp;aq=0&amp;oq=12+Square+des+Moulineaux,+Boulogne-Billancourt,+France&amp;sll=46.75984,1.738281&amp;sspn=8.913052,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=12+Square+des+Moulineaux,+92100+Boulogne-Billancourt,+Hauts-De-Seine,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;ll=48.82875,2.251596&amp;output=embed"></iframe><br /><small><a href="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=12+Square+des+Moulineaux,+Boulogne-Billancourt&amp;aq=0&amp;oq=12+Square+des+Moulineaux,+Boulogne-Billancourt,+France&amp;sll=46.75984,1.738281&amp;sspn=8.913052,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=12+Square+des+Moulineaux,+92100+Boulogne-Billancourt,+Hauts-De-Seine,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;ll=48.82875,2.251596" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>');
				}
				_.next.css({display:'block'}).stop().animate({left:0, top:0, width:'100%', height:'100%'},600,'easeOutCirc', function(){
					_.next.find('.box').css({display:'block'}).stop().animate({opacity:1}, function(){
						$(this).css({opacity:'none'})
						$(this).parent().find('.left').stop().animate({opacity:1})
					})																												  
				});	
			});
			});
		},
		hideFu:function(){
			var _=this
			_.li.find('.box').stop().animate({opacity:0}, function(){
				$(this).css({display:'none'})
				_.li.stop().animate({left:335, top:252, width:0, height:0},600,'easeOutCirc', function(){
					_.li.css({display:'none'})
				})
			})
		},
		preFu:function(){
			var _=this
			_.li.css({position:'absolute', display:'none'});
		}
	})
	
	nav.navs(0)
	
	function centre() {
		var h=$(window).height();
		if (h>780) {
			m_top=~~((h-780)/2);
		} else {
			m_top=0
		}
		$('.container_24').stop().css({marginTop:m_top})
		$('#gallery').css({paddingTop:m_top})
	}
	
	
	
	//gallery 
	w_img=parseInt($('#gallery li').css('width'))+parseInt($('#gallery li').css('marginLeft'));
	
	num=$('#gallery_img a').length;
	num_li_prev=1;
	function set_width() {
		w=$(window).width();
		if (w<1010) { w=1010}
		num_li=~~((w-312)/w_img);
		if (num_li!=num_li_prev) {
			$('#gallery ul').html('')
			k=~~((num_li)/2)+(num_li%2);
			num_a=~~((num-k)/num_li);
			for (i=1;i<=num_li;i++) {
				$('#gallery ul').append('<li></li>')
				if (i%2==0) {$('#gallery ul li').eq(i-1).css({paddingTop:89})}
			}
			j=0;
			j2=2;
			k=1;
			for (i=1;i<=num;i++) {
				th=$('#gallery_img a').eq(i-1);
				k++;
				if (j>=num_li) {
					if (j2<=num_li) {
						$('#gallery ul li').eq(j2-1).append(th.clone());
						j2=j2+2;
					} else {
						if (j2%2==0) { j2=1 } else { j2=2}
						$('#gallery ul li').eq(j2-1).append(th.clone());
						j2=j2+2;
					}
				} else {
					$('#gallery ul li').eq(j).append(th.clone());
				}
				if ((k>num_a && (j+1)%2==0)||(k>num_a+1)) {k=1; j++;}
			}
			$('#gallery a').hover(function(){
				$(this).find('img').stop().animate({height:'110%', width:'110%', top:'-5%', left:'-5%'}, 600, 'easeOutBack')
				$(this).find('> span').stop().animate({height:'110%', width:'110%', top:'-5%', left:'-5%'}, 600, 'easeOutBack')						   
			}, function(){
				$(this).find('img').stop().animate({height:'100%', width:'100%', top:'0%', left:'0%'})		
				$(this).find('> span').stop().animate({height:'100%', width:'100%', top:'0%', left:'0%'})						   
			})
			$("a[data-gal=example_group]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'inside',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">'+ (title.length ? '' + title : '') + '</span>';
				}
			});
		}
		
	}
	$(window).resize(set_width);
	
	centre();
	$(window).resize(centre);
	
})
