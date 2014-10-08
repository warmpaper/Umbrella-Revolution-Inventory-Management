		<header class="bar bar-nav">
		  <h1 class="title"><a href="#popover">CHOOSE DISTRICT</a></h1>
		  <a class="icon icon-search pull-right"></a>
		</header>
		<div id="landing" class="content">		
			<ul class="table-view">
			  <li class="table-view-cell">
				<a href="<?php echo base_url("test/listing/MongKok");?>" data-ignore="push">
				 旺角
				</a>
			  </li>
			  <li class="table-view-cell">
				<a href="<?php echo base_url("test/listing/Admirity");?>" data-ignore="push">
				  金鐘
				</a>
			  </li>
			  <li class="table-view-cell">
				<a href="<?php echo base_url("test/listing/CausewayBay");?>" data-ignore="push">
				  銅鑼灣
				</a>
			  </li>
			</ul>
		</div>
		<style>
			#landing{
				background-color:black !important;
			}
		
			.table-view{
				margin-top:0px !important;
			}
		
			.table-view-cell{
				text-align:center;
				padding:0px !important;
				font-size: 20pt;
				background-color:#FFD400 !important;
				border-color:black;
			}
			
			.table-view-cell a{
				margin:0px !important;
				padding:10vh 0px 10vh 0px !important;
				color:black;
				font-weight:bold;
			}
			
		</style>