<div class="main">

    <!-- -------Section--1-------- -->

    <section class="main_notes">


        <!-- ---------------------------speechSection------------------------------------- -->
        <select id="voices" class="speech" style="display: none;">
        </select>

        <!-- <div class="d-flex mt-4 text-light"> -->
        <div class="speech" style="display: none;">
            <div>
                <p class="lead">Volume</p>
                <input type="range" min="0" max="1" value="1" step="0.1" id="volume" />
                <span id="volume-label" class="ms-2">1</span>
            </div>
            <div class="mx-5">
                <p class="lead">Rate</p>
                <input type="range" min="0.1" max="10" value="1" id="rate" step="0.1" />
                <span id="rate-label" class="ms-2">1</span>
            </div>
            <div>
                <p class="lead">Pitch</p>
                <input type="range" min="0" max="2" value="1" step="0.1" id="pitch" />
                <span id="pitch-label" class="ms-2">1</span>
            </div>
        </div>

        <div class="play_buttons speech">
            <ul>

                <li id="start"><img src="https://img.icons8.com/material-rounded/25/000000/play--v3.png"/></li>
                <li id="pause"><img src="https://img.icons8.com/fluency-systems-filled/17/000000/pause.png"/></li>
                <li id="resume"><img src="https://img.icons8.com/ios-glyphs/19/000000/memories.png"/></li>
                <li id="cancel"><img src="https://img.icons8.com/fluency-systems-regular/19/000000/stop.png"/></li>

            </ul>
        </div>


<!-- -----------------------------notes with speech tech--------------------------------- -->

        <div class="notes" id="speechSection">

<!-- --------------------------controls-----------------------  -->
        <div class="controls" style="display: flex;">
            
            <div id="navigation_controls" style="padding:0px 5px;margin-right:20px;">
                <button class="next_prev btn" id="go_previous">&laquo; Previous</button>
                <input  id="current_page" value="1" type="number" />
                <button class="next_prev btn" id="go_next">Next &raquo;</button>
            </div>
            
            <div id="zoom_controls">
                <button class="plus_minus btn" id="zoom_out">−</button>
                <button class="plus_minus btn" id="zoom_in">+</button>
            </div>
            
        </div>


            <div id="my_pdf_viewer" style="overflow:scroll;">
                <div id="canvas_container" style="display: flex;justify-content:center;">
                    <canvas id="pdf_renderer" style="margin-top:-10px;"></canvas>
                </div>

            </div>

            <script>
                var myState = {
                    pdf: null,
                    currentPage: 1,
                    zoom: 1
                }

                pdfjsLib.getDocument('<?php echo "branches/$branch/$theSemester/syllabus.pdf"; ?>').then((pdf) => {

                    myState.pdf = pdf;
                    render();

                });

                function render() {
                    myState.pdf.getPage(myState.currentPage).then((page) => {

                        var canvas = document.getElementById("pdf_renderer");
                        var ctx = canvas.getContext('2d');

                        var viewport = page.getViewport(myState.zoom);

                        canvas.width = viewport.width;
                        canvas.height = viewport.height;

                        page.render({
                            canvasContext: ctx,
                            viewport: viewport
                        });
                    });
                }

                document.getElementById('go_previous').addEventListener('click', (e) => {
                    if (myState.pdf == null || myState.currentPage == 1)
                        return;
                    myState.currentPage -= 1;
                    document.getElementById("current_page").value = myState.currentPage;
                    render();
                });

                document.getElementById('go_next').addEventListener('click', (e) => {
                    if (myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages)
                        return;
                    myState.currentPage += 1;
                    document.getElementById("current_page").value = myState.currentPage;
                    render();
                });

                document.getElementById('current_page').addEventListener('keypress', (e) => {
                    if (myState.pdf == null) return;

                    // Get key code
                    var code = (e.keyCode ? e.keyCode : e.which);

                    // If key code matches that of the Enter key
                    if (code == 13) {
                        var desiredPage =
                            document.getElementById('current_page').valueAsNumber;

                        if (desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
                            myState.currentPage = desiredPage;
                            document.getElementById("current_page").value = desiredPage;
                            render();
                        }
                    }
                });

                document.getElementById('zoom_in').addEventListener('click', (e) => {
                    if (myState.pdf == null) return;
                    myState.zoom += 0.1;
                    render();
                });

                document.getElementById('zoom_out').addEventListener('click', (e) => {
                    if (myState.pdf == null) return;
                    myState.zoom -= 0.1;
                    render();
                });
            </script>


        </div>

    </section>


    <!-- ----------Section-2-advt------ -->
    <section class="advt_right">
        Advertise

        <div class="box">

        </div>
        <div class="box">

        </div>
        <div class="box">

        </div>
    </section>
</div>