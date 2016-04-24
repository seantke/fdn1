<?php include("../partials/_header.php"); ?>
    <main class="home">
        <div class="row">
            <div class="column" data-magellan-target="home">
                <div class="orbit new-stuff" role="region" aria-label="Newest technology" data-orbit data-auto-play="false">
                    <ul class="orbit-container">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                        <li class="is-active orbit-slide">
                            <img class="orbit-image" src="/fdn1/img/road.jpg" alt="On The Road">
                            <figcaption class="orbit-caption">On the Road</figcaption>
                        </li>
                        <li class="is-active orbit-slide">
                            <img class="orbit-image" src="/fdn1/img/road.jpg" alt="On The Road">
                            <figcaption class="orbit-caption">I'm on the road</figcaption>
                        </li>
                        <li class="is-active orbit-slide">
                            <img class="orbit-image" src="/fdn1/img/road.jpg" alt="On The Road">
                            <figcaption class="orbit-caption">Nobody beside me</figcaption>
                        </li>
                    </ul>
                    <nav class="orbit-bullets">
                        <button data-slide="0" class="is-active"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row info">
            <div class="column small-expand callout success">
                <h4>Contact Service Desk</h4>
                <h6>Call Us</h6>
                <ul>
                    <li>Internal: x45555</li>
                    <li>Local: 905-803-5777</li>
                    <li>Toll Free: 1-800-661-4347</li>
                </ul>
                <a class="button primary" href="mailto:servicedeskcanada@astrazeneca.com">Email Us</a>
            </div>
            <div id="chatter" class="column">
            </div>
        </div>
    </main>
<?php include "../partials/_footer.php"; ?>
