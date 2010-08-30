<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>MochaUI - A Web Applications User Interface Library</title>
	<link rel="stylesheet" href="../css/content.css" type="text/css" />
	<link rel="stylesheet" href="../css/ui.css" type="text/css" />
	<!--[if IE]>
		<script type="text/javascript" src="scripts/excanvas-compressed.js"></script>		
	<![endif]-->
	
	<script type="text/javascript" src="../scripts/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="../scripts/mootools-1.2-more.js"></script>	
	<script type="text/javascript" src="../scripts/mocha.js"></script>
	<script type="text/javascript" src="../scripts/mocha-init.js"></script>
	<script>
	
		var mywindowWindow = function(){
			MochaUI.Desktop = new MochaUI.Desktop();
			MochaUI.Dock = new MochaUI.Dock();
			
			new MochaUI.Window({
				minimizable : true,
				title: 'My Window',
				loadMethod: 'xhr',
				contentURL: '../pages/lipsum.html',
				width: 340,
				height: 150
			});
		}
		
		window.addEvent('domready', function(){
			mywindowWindow();
		});	
	</script>
</head>
<body>
<div id="desktop">
<div id="desktopHeader">
<div id="desktopNavbar">
	<ul>
		<li><a class="returnFalse" href="">Examples</a>	
			<ul>
				<li><a id="ajaxpageLinkCheck" href="pages/lipsum.html">Ajax/XHR Demo</a></li>
				<li><a id="jsonLink" href="data/json-windows-data.js">Json Demo</a></li>
				<li><a id="youtubeLinkCheck" href="pages/youtube.html">Iframe: YouTube</a></li>
				<li><a id="slideshareLinkCheck" href="pages/slideshare.html">Iframe: Slideshare</a></li>
				<li><a id="accordiantestLinkCheck" href="pages/accordian-demo.html">Accordian</a></li>
				<li><a id="clockLinkCheck" href="plugins/coolclock/">Widget: Clock</a></li>
				<li><a id="parametricsLinkCheck" href="plugins/parametrics/">Window Parametrics</a></li>
				<li class="divider"><a class="returnFalse arrow-right" href="">Tests</a>
					<ul>
						<li><a id="windoweventsLinkCheck" href="pages/events.html">Window Events</a></li>
						<li><a id="containertestLinkCheck" href="pages/lipsum.html">Container Test</a></li>
						<li><a id="iframetestLinkCheck" href="pages/iframetest.html">Iframe Test</a></li>
						<li><a id="noCanvasLinkCheck" href="pages/lipsum.html">No Canvas Body</a></li>
					</ul>
				</li>
				<li class="divider"><a class="returnFalse arrow-right" href="">Starters</a>
					<ul>
						<li><a target="_blank" href="demo-virtual-desktop.html">Virtual Desktop</a></li>
						<li><a target="_blank" href="demo-fixed-width.html">Fixed Width</a></li>
						<li><a target="_blank" href="demo-no-toolbars.html">No Toolbars</a></li>
						<li><a target="_blank" href="demo-no-desktop.html">No Desktop</a></li>
						<li><a target="_blank" href="demo-modal-only.html">Modal Only</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a class="returnFalse" href="">View</a>
			<ul>
				<li><a id="cascadeLink" href="">Cascade Windows</a></li>
				<li><a id="tileLink" href="">Tile Windows</a></li>
				<li><a id="minimizeLink" href="">Minimize All Windows</a></li>
				<li><a id="closeLink" href="">Close All Windows</a></li>
			</ul>
		</li>
		<li><a class="returnFalse" href="">Tools</a>
			<ul>
				<li><a id="builderLinkCheck" href="plugins/windowform/">Window Builder</a></li>
			</ul>
		</li>
		<li>
			<a class="returnFalse" href="">Workspace</a>
			<ul>
				<li><a id="saveWorkspaceLink" href="">Save Workspace</a></li>
				<li><a id="loadWorkspaceLink" href="">Load Workspace</a></li>
			</ul>
		</li>
		<li><a class="returnFalse" href="">Help</a>
			<ul>
				<li><a id="featuresLinkCheck" href="pages/features.html">Features</a></li>
				<li class="divider"><a target="_blank" href="http://mochaui.com/docs/">Documentation</a></li>
				<li class="divider"><a id="aboutLink" href="pages/about.html">About</a></li>
			</ul>
		</li>
	</ul>	
<div class="toolbox divider2">
	<div id="spinnerWrapper"><div id="spinner"></div></div>		
</div>

<div class="toolbox divider2">
	<img src="images/icons/cog.gif" onclick="MochaUI.notification('Do Something');" width="16" height="16" alt="" />
	<img src="images/icons/windows.gif" onclick="MochaUI.notification('Do Something');" width="16" height="16" alt="" />
	<img src="images/icons/sheet.gif" onclick="MochaUI.notification('Do Something');" width="16" height="16" alt="" />
</div>	
	
</div><!-- desktopNavbar end -->
</div><!-- desktopHeader end -->

<div id="dockWrapper">
	<div id="dock">
		<div id="dockPlacement"></div>
		<div id="dockAutoHide"></div>
		<div id="dockSort"><div id="dockClear" class="clear"></div></div>
	</div>
</div>

<div id="pageWrapper"></div>

<div id="desktopFooterWrapper">
	<div id="desktopFooter">
		&copy; 2007-2008 <a target="_blank" href="http://greghoustondesign.com/">Greg Houston</a> - MIT License
	</div>
</div>

</div><!-- desktop end -->

</body>
</html>