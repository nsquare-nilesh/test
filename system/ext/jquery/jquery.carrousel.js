/** 
 * Copyright (c) 2009 Sylvain Gougouzian (sylvain@gougouzian.fr)
 * MIT (http://www.opensource.org/licenses/mit-license.php) licensed.
 * GNU GPL (http://www.gnu.org/licenses/gpl.html) licensed.
 * jQuery carrousel v1.1.7 by Sylvain Gougouzian http://sylvain.gougouzian.fr
 */
jQuery(function($){$.fn.carrousel=function(options){var el=this.eq(0).data("carrousel");var opts=$.extend({},$.fn.carrousel.defaults,options);var ctrls=$.extend({},$.fn.carrousel.controls);var effects=$.extend({},$.fn.carrousel.effects);this.each(function(){el=new $carrousel(this,opts,ctrls,effects);});return opts.api?el:null;};$.carrousel=function(e,opts,ctrls,effects){this.e=$(e);$(e).css('position','relative').wrap('<div><div></div></div>');if(opts.continuous)$(e).html($(e).html()+$(e).html());var self=this;var tA=new Date();this.id=($(e).attr('id')!=""?'carrousel_'+tA.getTime():$(e).attr('id'));this.container=$(e).parent();this.container.parent().css('overflow','hidden').append("");$('a#'+this.id+'_prev').hide().click(function(){self._animate('prev');return false;});$('a#'+this.id+'_next').hide().click(function(){self._animate('next');return false;});this.aItems=null;this.nbItems=0;this.current=0;this.locked=false;this.block={width:0,height:0};this.margin={width:0,height:0};this.dep=0;this.timerMoving=null;this.opts=opts;this.controls=ctrls;this.effects=effects;this.direction=((opts.direction=='left')||(opts.direction=='top')?'next':'prev');this.pos=((opts.direction=='left')||(opts.direction=='right')?'left':'top');this.dir=((opts.direction=='right')||(opts.direction=='top')?-1:1);this.vertical=(this.pos=='left'?false:true);this._init();};var $carrousel=$.carrousel;$carrousel.fn=$carrousel.prototype={carrousel:'1.1.7'};$carrousel.fn.extend=$carrousel.extend=$.extend;$carrousel.fn.extend({_init:function(){var self=this;this.aItems=$('> li',this.e);this.nbItems=this.aItems.length;if(!this.opts.continuous)this.nbItems=this.nbItems*2;var item=this.aItems.eq(0);this.block.width=item.outerWidth(true);this.block.height=item.outerHeight(true);this.margin.width=this.block.width-item.outerWidth();this.margin.height=this.block.height-item.outerHeight();this.container.parent().addClass('carrousel').attr('id',this.id+'_div');var width=(this.vertical?1:parseInt(this.opts.dispNumber))*this.block.width;this.container.addClass('carrousel_carrousel').attr('id',this.id+'_carrousel').css({'overflow':'hidden','position':'relative'}).width(width+'px').height((this.vertical?parseInt(this.opts.dispNumber):1)*this.block.height+'px').parent().width(width+'px');$('ul > li > '+this.opts.mode,this.container).each(function(i){$(this).wrap('<div class="carrousel_item" rel="'+i+'"></div>');});this.e.css(this.pos,'0px').width(this.block.width*(this.vertical?1:this.nbItems));if(this.opts.stopOver){this.container.bind("mouseenter",function(evt){self.locked=true;});this.container.bind("mouseleave",function(evt){self.locked=false;if(self.opts.auto){this.timerMoving=setTimeout(function(){self._animate('next');},self.opts.dispTimeout);}});}if(this.legend=="mouseover"){$('.carrousel_item',this.container).css('cursor','pointer');for(var i=0;i<this.nbItems;i++){$eq=this.aItems.eq(i);$(this.opts.mode,$eq).bind("mouseenter",function(evt){$('div#'+self.id+'_legend').html($(this).attr('title'));});$(this.opts.mode,$eq).bind("mouseleave",function(evt){$('div#'+self.id+'_legend').html("");});}}if(this.legend=="always"){$('div#'+self.id+'_legend').html($(self.opts.mode,this.container).eq(this.realpos(this.current)).attr('title'));}var control=this.opts.controls.split(' ');for(var i=0;i<control.length;i++){if($.isFunction(this.controls[control[i]]))this.controls[control[i]](this);}if(this.opts.mode=='img'){$('.carrousel_item img',this.container).load(function(){$this=$(this);$this.parent().width($this.width()).height($this.height());});}var effect=this.opts.effects.split(' ');for(var i=0;i<effect.length;i++){if($.isFunction(this.effects.init[effect[i]]))this.effects.init[effect[i]](this);}if(self.opts.auto){setTimeout(function(){self._animate('next');},self.opts.dispTimeout);}},_animate:function(dir){dir=(dir==undefined?this.direction:dir);if(!this.locked){clearTimeout(this.timerMoving);this.locked=true;this.dep=this.dep==0?this.opts.scroll:this.dep;if(this.dir==-1){if(dir=="next"){dir="prev";}else if(dir=="prev"){dir="next";}}if(dir!='next'){this.dep*=-1;}var cont=true;if(!this.opts.continuous){if(dir=='next'){if(this.current==((this.nbItems/2)-this.opts.dispNumber)){cont=false;this.locked=false;}}else{if(this.current==0){cont=false;this.locked=false;}}}if(cont)this._beforeMoving();}},_beforeMoving:function(){var effect=this.opts.effects.split(' ');for(var i=0;i<effect.length;i++){if($.isFunction(this.effects.before[effect[i]]))this.effects.before[effect[i]](this,(this.dep<0?-1:1));}this._move();},_move:function(){var self=this;if($.isFunction(this.opts.move)){this.opts.move(this,function(){self._afterMoving();});}else{var self=this;var size=this.vertical?this.block.height:this.block.width;if(this.dep>0){while(parseInt(this.e.css(this.pos))<0){var item=$('> li:first',this.e);$('> li:first',this.e).remove();this.e.append(item);this.e.css(this.pos,parseInt(this.e.css(this.pos))+size);}}else{for(var i=0;i<Math.abs(this.dep);i++){var item=$('> li:last',this.e);$('> li:last',this.e).remove();this.e.prepend(item);}this.e.css(this.pos,parseInt(this.e.css(this.pos))+this.dep*size+'px');}var b=parseInt(this.e.css(this.pos));if(this.vertical){this.e.stop(true,true).animate({top:b-this.dep*this.block.height+'px'},this.opts.speed,this.opts.easing,function(){self._afterMoving();});}else{this.e.stop(true,true).animate({left:b-this.dep*this.block.width+'px'},this.opts.speed,this.opts.easing,function(){self._afterMoving();});}}},_afterMoving:function(){var self=this;this.current=this.current+this.dep;if(this.current==-1){this.current=this.nbItems-1;}else{if(this.current==this.nbItems){this.current=0;}else{this.current=this._realpos(this.current);}}if(this.legend=="always"){$('div#'+this.id+"_legend").html($(this.opts.mode,this.container).eq(this.realpos(this.current)).attr('title'));}this.dep=0;this.locked=false;var effect=this.opts.effects.split(' ');for(var i=0;i<effect.length;i++){if($.isFunction(this.effects.after[effect[i]]))this.effects.after[effect[i]](this);}for(var i=0;i<this.opts.callbacks.length;i++){this.opts.callbacks[i](this);}var control=this.opts.controls.split(' ');for(var i=0;i<control.length;i++){if($.isFunction(this.controls.callback[control[i]]))this.controls.callback[control[i]](this);}if(this.opts.auto){this.timerMoving=setTimeout(function(){self._animate('next');},this.opts.dispTimeout);}},_realpos:function(i){return(i<(this.nbItems/2)?i:(i-(this.nbItems/2)));},start:function(){if(!this.opts.auto){this.locked=false;this.opts.auto=true;this._animate('next');}return false;},stop:function(){clearTimeout(this.timerMoving);this.opts.auto=false;return false;},next:function(){this._animate('next');return false;},prev:function(){this._animate('prev');return false;},getCurrent:function(){return this._realpos(this.current);},moveTo:function(i){if(i>(this.nbItems/2)){i=(this.nbItems/2)-1;}this.dep=parseInt(i)-parseInt(this.current);if(this.dep!=0){this._animate('next');}return false;}});$.fn.carrousel.defaults={auto:true,infinite:true,controls:'button',effects:'',easing:'',continuous:true,speed:2000,direction:'right',scroll:1,dispTimeout:1000,stopOver:true,dispNumber:3,legend:'',mode:'img',htmlPrevButton:"prev",htmlNextButton:"next",callbacks:[],api:false};$.fn.carrousel.controls={button:function(carrousel){$("a#"+carrousel.id+'_prev').show();$("a#"+carrousel.id+"_next").show();},callback:{}};$.fn.carrousel.effects={init:{},before:{},after:{}};});
/** 
 * jQuery carrousel controls v1.1 by Sylvain Gougouzian http://sylvain.gougouzian.fr
 */
jQuery(function($){$.extend($.fn.carrousel.controls,{keys:function(carrousel){$(document).keydown(function(event){if((event.keyCode==39)||(event.keyCode==40)){carrousel._animate('next');}if((event.keyCode==37)||(event.keyCode==38)){carrousel._animate('prev');}});return false;},click:function(carrousel){for(var i=0;i<carrousel.nbItems;i++){$('> '+carrousel.opts.mode,carrousel.aItems.eq(i)).css('cursor','pointer').attr('rel',carrousel._realpos(i)).click(function(){carrousel.locked=false;carrousel.moveTo($(this).attr('rel'));return false;});}},index:function(carrousel){carrousel.container.parent().append('<ul id="'+carrousel.id+'_itemList" class="carrousel_itemList"></ul>');var h="";for(var i=0;i<carrousel.nbItems;i++){if(i<(carrousel.nbItems/2)){h+='<li id="'+carrousel.id+'_itemList_li" class="carrousel_itemList_li" rel="'+carrousel._realpos(i)+'">'+(i+1)+'</li>';}}$('ul#'+carrousel.id+'_itemList').html(h);$('li.carrousel_itemList_li').css('cursor','pointer').click(function(){carrousel.locked=false;carrousel.moveTo($(this).attr('rel'));return false;});},wheel:function(carrousel){carrousel.container.bind("mousewheel",function(event,delta){var dir=delta>0?'Up':'Down';if(dir=='Up'){carrousel._animate('next');}else{carrousel._animate('prev');}return false;});},mouseover:function(carrousel){carrousel.opts.callbacks[carrousel.opts.callbacks.length]=function(carrousel){if(carrousel.isMouseOver){carrousel._animate(mouseDirection(carrousel));}};carrousel.container.bind("mousemove",function(evt){carrousel.mouseX=evt.pageX;carrousel.mouseY=evt.pageY;});carrousel.container.bind("mouseenter",function(evt){carrousel.isMouseOver=true;carrousel.mouseX=evt.pageX;carrousel.mouseY=evt.pageY;carrousel._animate(mouseDirection(carrousel));return false;});carrousel.container.bind("mouseleave",function(){carrousel.isMouseOver=false;return false;});},iPhone:function(carrousel){$('.carrousel_item',carrousel.container).swipe({swipeLeft:function(){carrousel._animate('next');return false;},swipeRight:function(){carrousel._animate('prev');return false;},swipeUp:function(){carrousel._animate('next');return false;},swipeDown:function(){carrousel._animate('prev');return false;}});},slider:function(carrousel){carrousel.container.parent().append('<div id="'+carrousel.id+'_slider"></div>');$("#"+carrousel.id+"_slider",carrousel.container.parent()).slider({range:"max",min:0,max:((carrousel.nbItems)/2)-1,value:0,stop:function(event,ui){carrousel.moveTo(ui.value);}});}});$.extend($.fn.carrousel.controls.callback,{slider:function(carrousel){$("#"+carrousel.id+"_slider",carrousel.container.parent()).slider('value',carrousel.current);}});function mouseDirection(carrousel){var offset=carrousel.container.offset();if(carrousel.vertical){if((carrousel.mouseY>=parseInt(offset.top))&&(carrousel.mouseY<=parseInt((parseInt(offset.top)+parseInt(carrousel.container.height()))/2))){return'prev';}else{return'next';}}else{if((carrousel.mouseX>=parseInt(offset.left))&&(carrousel.mouseX<=parseInt((parseInt(offset.left)+parseInt(carrousel.container.width()))/2))){return'prev';}else{return'next';}}}});
/** 
 * jQuery carrousel effects v1.1.1 by Sylvain Gougouzian http://sylvain.gougouzian.fr
 */
jQuery(function($){$.extend($.fn.carrousel.effects.init,{corner:function(carrousel){$.fn.corner.defaults.useNative=false;$('.carrousel_item',carrousel.container).corner("10px");},reflection:function(carrousel){if(carrousel.vertical){carrousel.block.height*=1.33;$('.carrousel_item',carrousel.container).parent().height($('.carrousel_item',carrousel.container).parent().height()*1.33);}carrousel.container.height(parseInt(carrousel.container.height())*1.33);$('.carrousel_item > img').load(function(){reflect(this);});},relief:function(carrousel){carrousel.incrementPercent=parseInt(50/(parseInt(carrousel.opts.dispNumber)-3));$('.carrousel_item',carrousel.container).each(function(){var size=get3Dsize(carrousel,$(this).attr('rel'),0);$('> '+carrousel.opts.mode,this).load(function(){$(this).width(parseInt(carrousel.block.width*(size/100))+'px').height(parseInt(carrousel.block.height*(size/100))+'px');$(this).parent().width(parseInt(carrousel.block.width*(size/100))+'px').height(parseInt(carrousel.block.height*(size/100))+'px');});});},align:function(carrousel){if(carrousel.opts.mode=='img'){$('.carrousel_item img',carrousel.container).load(function(){alignItem($(this).parent(),carrousel);});}else{for(var i=0;i<carrousel.nbItems;i++){alignItem($('.carrousel_item',carrousel.aItems.eq(i)),carrousel);}}}});$.extend($.fn.carrousel.effects.before,{fade:function(carrousel){$('.carrousel_item',carrousel.container).fadeTo(parseInt(carrousel.opts.speed/2),0.5);},relief:function(carrousel,direction){var move=direction*(carrousel.dep==-1?carrousel.opts.scroll:carrousel.dep);$('.carrousel_item',carrousel.container).each(function(){var size=get3Dsize(carrousel,$(this).attr('rel'),move);var nWidth=parseInt(carrousel.block.width*size/100)+'px';var nHeight=parseInt(carrousel.block.height*size/100)+'px';$('.carrousel_item, .carrousel_item > '+carrousel.opts.mode,$(this).parent()).animate({width:nWidth,height:nHeight,left:carrousel._getAlignWidth(parseInt(nWidth)),top:carrousel._getAlignHeight(parseInt(nHeight))},carrousel.opts.speed);});}});function reflect(img){var $this=$(img);var w=parseInt($this.width());var h=parseInt($this.height());var r;if($.browser.msie){r=$("<img />").attr('src',$this.attr('src')).css({'width':w,'height':h,'margin-bottom':h-Math.floor(h*0.33),'filter':"flipv progid:DXImageTransform.Microsoft.Alpha(opacity=50, style=1, finishOpacity=0, startx=0, starty=0, finishx=0, finishy=33)"})[0];}else{r=$("<canvas />")[0];if(!r.getContext){return;}var f=r.getContext("2d");try{$(r).attr({'width':w,'height':Math.floor(h*0.33)});f.save();f.translate(0,h-1);f.scale(1,-1);f.drawImage(img,0,0,w,h);f.restore();f.globalCompositeOperation="destination-out";var i=f.createLinearGradient(0,0,0,Math.floor(h*0.33));i.addColorStop(0,"rgba(255, 255, 255, 0.5)");i.addColorStop(1,"rgba(255, 255, 255, 1.0)");f.fillStyle=i;f.rect(0,0,w,Math.floor(h*0.33));f.fill();}catch(e){return;}}$(r).css('display','block');$this.parent().css({width:w,height:h+Math.floor(h*0.33),overflow:"hidden"}).append($(r));return false;}function unreflect($this){var html=$this.parent().html();$this.parent().parent().html(html);return false;}$.extend($.fn.carrousel.effects.after,{fade:function(carrousel){$('.carrousel_item',carrousel.container).fadeTo(parseInt(carrousel.opts.speed/2),1.0);}});function get3Dsize(carrousel,i,add){var min=carrousel.current+add;if(min<0)min+=(carrousel.nbItems/2);min=carrousel._realpos(min);var max=parseInt(carrousel.opts.dispNumber)+min-1;max=carrousel._realpos(max);var moy=parseInt(carrousel.opts.dispNumber/2)+min;moy=carrousel._realpos(moy);var j=i;i=carrousel._realpos(i);var res=0;if((i==min)||(i==max)){res=50;}else{if(i==moy){res=100;}else{if(min<max){if((i>min)&&(i<max)){res=50+Math.abs(moy-i)*carrousel.incrementPercent;}else{res=50-carrousel.incrementPercent;}}else{if((i<(carrousel.nbItems/2))&&(i>min)){if(moy==0){moy=(carrousel.nbItems/2);}res=50+Math.abs(moy-i)*carrousel.incrementPercent;}else{if((i>=0)&&(i<max)){if(moy==((carrousel.nbItems/2)-1)){moy=1;}res=50+Math.abs(moy-i)*carrousel.incrementPercent;}else{res=50-carrousel.incrementPercent;}}}}}carrousel.aItems.eq(j).css('z-index',carrousel.opts.dispNumber-Math.abs(moy-i));return res;}function alignItem(item,carrousel){item.css({'top':getAlignHeight(parseInt($(carrousel.opts.mode,item).height())+carrousel.margin.height,carrousel),'left':getAlignWidth(parseInt($(carrousel.opts.mode,item).width())+carrousel.margin.width,carrousel),'position':'relative'});}function getAlignHeight(size,carrousel){var top=carrousel.block.height-size;if(carrousel.opts.align.indexOf('top')!=-1){return'0px';}if(carrousel.opts.align.indexOf('bottom')!=-1){return top+'px';}if(this.opts.align.indexOf('center')!=-1){return parseInt(top/2)+'px';}return'0px';}function getAlignWidth(size,carrousel){var left=carrousel.block.width-size;if(carrousel.opts.align.indexOf('left')!=-1){return'0px';}if(carrousel.opts.align.indexOf('right')!=-1){return left+'px';}if(carrousel.opts.align.indexOf('center')!=-1){return parseInt(left/2)+'px';}return'0px';}});
