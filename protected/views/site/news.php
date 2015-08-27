<script src="http://cdnjs.gtimg.com/cdnjs/libs/wxmoment/0.0.2-beta1/wxmoment.min.js"></script>
<div class="news">
	<div class="news_content">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/UD/news_bg.png" width="100%" class="content_bg"/>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/UD/top.png" width="100%" class="content_top"/>
		<div class="video_con">
			<div id="WxMomentVideo" class="video">
			</div>	
		</div>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/UD/bottom.png" width="100%" class="content_btm"/>
	</div>	
</div>
<script type="text/javascript">
var video = new WxMoment.Video({
	vid: "h01636jwx0o",
	pic: "<?php echo Yii::app()->request->baseUrl; ?>/images/UD/1.jpg",
	isHtml5ControlAlwaysShow:1,
	onplay: function(){
		
	},
	onplaying: function(){
		
	},
	onpause:function(){
		
	},
	onallended:function(){
		
	}
});
</script>
