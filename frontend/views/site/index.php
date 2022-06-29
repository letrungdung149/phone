<?php
/* @var $this yii\web\View */

use common\helper\MobileHelper;
use common\models\Item;
use common\models\Phone;
use common\models\Product;
use frontend\widgets\PhoneByCategoryWidget;
use frontend\widgets\SaleProductWidgets;
use yii\helpers\Url;

$this->title = 'GrabyShop';
/** @var  Product $sales */
/** @var  Product $trends */
/** @var  Product $bestSale */
/** @var  Product $populars */
?>
<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
	<!-- START REVOLUTION SLIDER 5.4.6.4 fullwidth mode -->
	<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.4">
		<ul>    <!-- SLIDE  -->
			<li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="revolution/assets/bg-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="revolution/assets/bg.jpg" alt="" title="bg" width="1500" height="717" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
				<!-- LAYERS -->

				<!-- LAYER NR. 1 -->
				<div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="['left','left','left','left']" data-hoffset="['930','643','484','222']" data-y="['top','top','top','top']" data-voffset="['41','41','32','224']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;">
					<img src="revolution/assets/mobile.png" alt=""  width="224" height="445" data-no-retina="">
				</div>

				<!-- LAYER NR. 2 -->
				<div class="tp-caption   tp-resizeme" id="slide-4-layer-2" data-x="['left','left','left','left']" data-hoffset="['401','121','81','35']" data-y="['top','top','top','top']" data-voffset="['196','206','146','146']" data-fontsize="['50','50','40','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Karla;">iPhone 7(Product)
				</div>

				<!-- LAYER NR. 3 -->
				<div class="tp-caption   tp-resizeme" id="slide-4-layer-3" data-x="['left','left','left','left']" data-hoffset="['812','528','410','282']" data-y="['top','top','top','top']" data-voffset="['195','208','153','154']" data-fontsize="['30','30','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">Red
				</div>

				<!-- LAYER NR. 4 -->
				<div class="tp-caption   tp-resizeme" id="slide-4-layer-4" data-x="['left','left','left','left']" data-hoffset="['402','122','86','38']" data-y="['top','top','top','top']" data-voffset="['261','271','198','198']" data-fontsize="['20','20','15','15']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;split&quot;:&quot;chars&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:2000,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Karla;">Best discounts available online
				</div>

				<!-- LAYER NR. 5 -->
				<div class="tp-caption   tp-resizeme" id="slide-4-layer-5" data-x="['left','left','left','left']" data-hoffset="['402','122','83','37']" data-y="['top','top','top','top']" data-voffset="['293','303','230','222']" data-fontsize="['35','35','30','25']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 35px; font-weight: 600; color: #ffffff; letter-spacing: 0;font-family:karla;">Upto 50% off
				</div>

				<!-- LAYER NR. 6 -->
				<div class="tp-caption rev-btn rev-hiddenicon " id="slide-4-layer-6" data-x="['left','left','left','left']" data-hoffset="['401','121','79','35']" data-y="['top','top','top','top']" data-voffset="['355','361','280','271']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[18,18,15,10]" data-paddingright="[35,35,35,30]" data-paddingbottom="[18,18,15,10]" data-paddingleft="[35,35,35,30]" style="z-index: 10; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); font-family:karla;background-color:rgb(255,60,32);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop now
					<i class="fa-icon-chevron-right"></i></div>

				<!-- LAYER NR. 7 -->
				<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-4-layer-7" data-x="['left','left','left','left']" data-hoffset="['403','122','82','35']" data-y="['top','top','top','top']" data-voffset="['136','145','95','105']" data-width="142" data-height="36" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgb(35,47,62);border-radius:50px 50px 50px 50px;"></div>

				<!-- LAYER NR. 8 -->
				<div class="tp-caption   tp-resizeme" id="slide-4-layer-8" data-x="['left','left','left','left']" data-hoffset="['433','152','112','65']" data-y="['top','top','top','top']" data-voffset="['143','152','102','112']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Pacifico;">Special Offer
				</div>
			</li>
			<!-- SLIDE  -->
			<li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/bg-2-100x50.png" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="revolution/assets/bg-2.png" alt="" title="bg-2" width="1500" height="717" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
				<!-- LAYERS -->

				<!-- LAYER NR. 9 -->
				<div class="tp-caption   tp-resizeme" id="slide-5-layer-2" data-x="['left','left','left','left']" data-hoffset="['421','121','81','39']" data-y="['top','top','top','top']" data-voffset="['179','166','126','104']" data-fontsize="['40','40','40','30']" data-lineheight="['50','50','50','40']" data-width="['520','520','481','304']" data-height="['none','none','none','101']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 520px; max-width: 520px; white-space: normal; font-size: 40px; line-height: 50px; font-weight: 100; color: #ffffff; letter-spacing: 0px;font-family:karla;">Samsung Double Door
					Refrigerator
				</div>

				<!-- LAYER NR. 10 -->
				<div class="tp-caption   tp-resizeme" id="slide-5-layer-5" data-x="['left','left','left','left']" data-hoffset="['422','122','83','39']" data-y="['top','top','top','top']" data-voffset="['296','283','240','192']" data-fontsize="['35','35','30','20']" data-fontweight="['500','500','600','400']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 35px; line-height: 35px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:karla;">Catch Upto 70% off*
				</div>

				<!-- LAYER NR. 11 -->
				<div class="tp-caption rev-btn rev-hiddenicon " id="slide-5-layer-6" data-x="['left','left','left','left']" data-hoffset="['421','121','79','38']" data-y="['top','top','top','top']" data-voffset="['348','341','290','241']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[18,18,15,10]" data-paddingright="[35,35,35,30]" data-paddingbottom="[18,18,15,10]" data-paddingleft="[35,35,35,30]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1);font-family:karla;background-color:rgb(255,60,32);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop now
					<i class="fa-icon-chevron-right"></i></div>

				<!-- LAYER NR. 12 -->
				<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-5-layer-7" data-x="['left','left','left','left']" data-hoffset="['423','122','82','35']" data-y="['top','top','top','top']" data-voffset="['119','105','75','55']" data-width="142" data-height="36" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgb(35,47,62);border-radius:50px 50px 50px 50px;"></div>

				<!-- LAYER NR. 13 -->
				<div class="tp-caption   tp-resizeme" id="slide-5-layer-8" data-x="['left','left','left','left']" data-hoffset="['452','150','112','65']" data-y="['top','top','top','top']" data-voffset="['126','112','82','62']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Roboto;">Populer Offer
				</div>

				<!-- LAYER NR. 14 -->
				<div class="tp-caption   tp-resizeme" id="slide-5-layer-9" data-x="['left','left','left','left']" data-hoffset="['951','638','474','193']" data-y="['top','top','top','top']" data-voffset="['75','77','56','208']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;">
					<img src="revolution/assets/product-2.png" alt="" data-ww="['355px','355px','280px','250px']" data-hh="['490px','490px','386px','344px']" width="355" height="490" data-no-retina="">
				</div>
			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<div class="container special-offer padd-80">
	<div class="col-md-12">
		<div class="tab-style">
			<!-- Nav tabs -->
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#onsale" aria-controls="onsale" role="tab" data-toggle="tab"> On Sale</a></li>
					<li role="presentation"><a href="#trending" aria-controls="trending" role="tab" data-toggle="tab">Trending</a></li>
					<li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="onsale">
					<?= SaleProductWidgets::widget(['type'=> SaleProductWidgets::TYPE_SALE]) ?>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="trending">
					<?= SaleProductWidgets::widget(['type'=> SaleProductWidgets::TYPE_TREND]) ?>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="popular">
					<?= SaleProductWidgets::widget(['type'=> SaleProductWidgets::TYPE_POPULAR]) ?>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

</div>
<div class="container-fluid best-seller padd-80">
	<div class="container best-product">
		<div class="tab-style">
			<div class="tab-structure">
				<h3>Best Sellers</h3>
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#apple" aria-controls="apple" role="tab" data-toggle="tab">Apple </a></li>
					<li role="presentation"><a href="#samsung" aria-controls="samsung" role="tab" data-toggle="tab">Samsung</a></li>
					<li role="presentation"><a href="#xiaomi" aria-controls="xiaomi" role="tab" data-toggle="tab">Xiaomi</a></li>
					<li role="presentation"><a href="#oppo" aria-controls="oppo" role="tab" data-toggle="tab">OPPO</a></li>
					<li role="presentation"><a href="#vsmart" aria-controls="computers" role="tab" data-toggle="tab">Vsmart</a></li>
					<li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="apple">
					<?= PhoneByCategoryWidget::widget(['category_id' => 511])?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="samsung">
					<?= PhoneByCategoryWidget::widget(['category_id' => 512])?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="xiaomi">
					<?= PhoneByCategoryWidget::widget(['category_id'=>513])?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="oppo">
					<?= PhoneByCategoryWidget::widget(['category_id' => 514])?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="vsmart">
					<?= PhoneByCategoryWidget::widget(['category_id' => 517])?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="accessories">
					<?= PhoneByCategoryWidget::widget(['category_id' => null])?>
				</div>

			</div>


		</div>
	</div>
</div>


<?php
$this->registerJs("
$('.product-hover').on('click', function () {
		var cart = $(\".flaticon-shopping-cart\");
        var imgtodragChile = $(this).parent();
        var id = imgtodragChile.parent().attr(\"data-id\");
        var imgtodrag = imgtodragChile.parent().find(\"img\").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect(\"shake\", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }
        $.ajax({
			type: \"POST\",
			cache: false,
			url: '". Url::to(['/ajax/add-to-cart']) . "&id='+id,
			dataType:\"json\",
			success:function(response){
				if(response.error === 1){
					alert(response.message);
				} else {
					$(\".cart-item\").html(response.html);
				}
			}
		});
    });
    
    $(document).on('click','.cart-item-list b a',function(){
		var parent = $(this).closest('.cart-item-list');
		var id = parent.attr('data-id');
		if(parent){
		    $.ajax({
			type: \"POST\",
			cache: false,
			url: '". Url::to(['/ajax/remove-to-cart']) . "&id='+id,
			dataType:\"json\",
			success:function(response){
				if(response.error === 1){
					alert(response.message);
				} else {
					$(\".cart-item\").html(response.html);
				}
			}
		});	
		}
	});
    
    ");
?>

