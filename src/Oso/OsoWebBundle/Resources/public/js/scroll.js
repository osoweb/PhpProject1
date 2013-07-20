
$(window).load(function() {	
	var w = $(window).height();
	var eps = 360;
	var speed=600, easing='easeOutQuad';
	var container=780;
	var obj='#gallery';
	pos=0;
	new_d=0;
	ul=$(obj);
	setNew();
	var mouse_over=200;
	
	speed_move=speed*(~~(-max_pos/eps))*2.5;
	function move(d){
		if ((d==0)&&(new_d!=d)) {ul.stop(); pos=parseInt(ul.css('marginTop'));}
		if ((d>0)&&(pos<0)) {
			pos=0;
		}
		if ((d<0)&&(pos>max_pos)) { 
			pos=max_pos;
		}
		new_d=d;
		ul.stop().animate({marginTop:pos},speed_move, easing);
	}
	
	$(obj).mousemove(function(e){
		var d=0;
		if (e.pageY<=mouse_over) {d=1}
		if (e.pageY>=w-mouse_over) {d=-1}
		move (d);
		return false
	})
	$(obj).mousewheel(function(e,d){
		move (d);
		return false					  
	})
	$(window).resize(setNew);
	function setNew(){
		new_w=$(window).height();
		max_pos=-ul.height()+container-60;
		speed_move=speed*(~~(-max_pos/eps))*2.5;
		pos=0;
		ul.stop().animate({marginTop:pos},speed, easing);
	}
	
	
})
