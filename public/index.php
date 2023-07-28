<?php 
$_ROOT = str_replace("public", "resources", $_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
    <?php readfile($_ROOT."/html/head/data.php");?>
    <body onload="loaded();">
        <div class="loading" id="loading">
            <img src="https://annexd.com/api/delivery/icon/?alias=devon">
        </div>
        <div class="header">
            <div class="option" onclick="window.location.href='/'">
                <img src="https://annexd.com/api/delivery/icon/?alias=devon">
            </div>
            <div class="grow"></div>
            <div class="option" onclick="update_navigation();">
                <img src="https://annexd.com/api/delivery/icon/?alias=bars">
            </div>
        </div>
        <div class="navigation" id="navigation">
            <div class="option" onclick="window.location.href='/'">
                <span>Home</span>
            </div>
            <div class="option" onclick="window.location.href='/knowledge/'">
                <span>Knowledge</span>
            </div>
        </div>
        <div class="intro">
            <div class="title">
                <span>Hey, I'm Devon Edwards</span>
            </div>
            <div class="text">
                <span>Web-Designer, UX-Designer, UI-Designer, and Database Manager</span>
            </div>
        </div>
        <div class="projects">
            <div class="title">
                <span>Projects</span>
            </div>
            <div class="text">
                <span>#Dream Maker</span>
            </div>
            <div class="options">
                <div class="option" onclick="window.open('https://osbeorn.net', '_blank')">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=osbeorn">
                    </div>
                    <div class="text">
                        <span>Osbeorn Collective LLC {Post-Alpha}</span>
                    </div>
                </div>
                <div class="option" onclick="window.open('https://annexd.com', '_blank')">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=annexd">
                    </div>
                    <div class="text">
                        <span>Annexd CDN {Post-Alpha}</span>
                    </div>
                </div>
                <div class="option"> <!-- onclick="window.open('https://mantcdn.com', '_blank')" -->
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=mantacdn">
                    </div>
                    <div class="text">
                        <span>Manta CDN {Pre-Alpha}</span>
                    </div>
                </div>
                <div class="option"> <!-- onclick="window.open('https://hexcloud.us', '_blank')" -->
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=hexcloud">
                    </div>
                    <div class="text">
                        <span>Hexcloud CDN {Suspended}</span>
                    </div>
                </div>
                <div class="option">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=gtirrigation">
                    </div>
                    <div class="text">
                        <span>GT Irrigation {Pre-Alpha}</span>
                    </div>
                </div>
                <div class="option" onclick="window.open('https://southernstoragebuildings.net', '_blank')">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=southernstoragebuildings">
                    </div>
                    <div class="text">
                        <span>Southern Storage Buildings {Alpha}</span>
                    </div>
                </div>
                <div class="option">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=diamondchaseauto">
                    </div>
                    <div class="text">
                        <span>Diamond Chase Auto {WIP}</span>
                    </div>
                </div>
                <div class="option">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=cashforcars">
                    </div>
                    <div class="text">
                        <span>Cash For Cars {WIP}</span>
                    </div>
                </div>
                <div class="option">
                    <div class="icon">
                        <img src="https://annexd.com/api/delivery/icon/?alias=cfhsbands">
                    </div>
                    <div class="text">
                        <span>CFHS Bands {WIP}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright" onclick="window.open('https://osbeorn.net/', '_blank');">
                <span>Osbeorn Collective LLC &copy; 2023-<?php echo(date("Y"));?></span>
            </div>
        </div>
    <script>
        update_navigation();
    </script>
    </body>
</html>
