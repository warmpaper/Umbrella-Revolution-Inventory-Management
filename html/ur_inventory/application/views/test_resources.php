		<header class="bar bar-nav">
		  <h1 class="title"><a href="#popover"><?php echo $resources;?></a></h1>
		</header>
		
		<!-- title pop over to choose district -->
		<div id="popover" class="popover">
		  <header class="bar bar-nav">
			<h1 class="title">Popover title</h1>
		  </header>
		</div>
		
		<div id="cata1" class="content">
			<ul class="table-view">
			  <li class="table-view-cell">
				<a class="navigate-right" href="test/resource/food">
				  餅乾&nbsp;&nbsp;<img src="<?php echo base_url("assets/img/bar/full_bar.jpg");?>"/>
				</a>
			  </li>
			  <li class="table-view-cell">
				<a class="navigate-right" href="test/resource/drink">
				  著片&nbsp;&nbsp;<img src="<?php echo base_url("assets/img/bar/half_bar.jpg");?>"/>
				</a>
			  </li>
			  <li class="table-view-cell">
				<a class="navigate-right" href="test/resource/tools">
				  朱古力&nbsp;&nbsp;<img src="<?php echo base_url("assets/img/bar/half_bar.jpg");?>"/>
				</a>
			  </li>
			  <li class="table-view-cell">
				<a class="navigate-right" href="test/resource/firstaid">
				  能量棒&nbsp;&nbsp;<img src="<?php echo base_url("assets/img/bar/full_bar.jpg");?>"/>
				</a>
			  </li>
			</ul>
		</div>
		<style>
			#cata1{
				background-color:black !important;
			}
			
			#cata1 img{
				margin: auto;
				width: 50%;
				margin-left:10px;
			}
			
			.table-view{
				margin-top:0px !important;
			}
		
			.table-view-cell{
				font-size: 20pt;
				/*
				background-color:#FFD400 !important;
				*/
				background-color:white !important;
				/*
				background-size: 80% auto;
				backgorund-position:middle middle;
				*/
				border-color:black;
			}
			
			.table-view-cell a{
				color:black;
				font-weight:bold;
			
			}
			
		</style>
