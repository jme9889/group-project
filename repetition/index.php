<?php
    $pageTitle = "Repetition";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="paragraph">
                    <h1>The CRAPsite - Repetition</h1>
                    <p id="rep1">Some generic text here about Repetition</p>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2" id="subhead1">A header</h2>
                    <p id="rep2">text</p>
                    <ul>
                        <li>Stuff</li>
                        <li>Stuff</li>
                        <li>Stuff</li>
                    </ul>
                    <ol>
                        <li>Stuff</li>
                        <li>Stuff</li>
                        <li>Stuff</li>
                    </ol>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2" id="subhead2">A header</h2>
                    <p id="rep3">text</p>
                    <ol>
                        <li>Stuff</li>
                        <li>Stuff</li>
                        <li>Stuff</li>
                    </ol>
                    <ul>
                        <li>Stuff</li>
                        <li>Stuff</li>
                        <li>Stuff</li>
                    </ul>
                </section>

                <!-- Paige, please try and get whatever content you write here split into 3 paragraphs (keep the containers below).
                 Just copy/paste the paragraph section above, same kinda style as the homepage -->

                 <!--Try and include 1 or 2 images/graphics from the ones Katiya had-->

                <!--Two of the paragraphs have 2 lists (a ul and an ol). They user's gonna switch between the two, so make sure the two
                in the same paragraph have the same content-->
            </div>
            
        </div>

        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix the Repetition!</h2>
                    <h3>Use the controls below to fix the repetition of this page!</h3>
                </section>

                <div class="control-section">
                    <p>Ensure font style repetition in the body paragraphs!</p>
                    <section class="change">
                        <section class="paragraph-change">
                            <h4>First Paragraph:</h4>
                            <select class="dropdown" id="text-font1" name="text-font1">
                                <option value="arial" id="arial1">Arial</option>
                                <option value="Georgia" id="georgia1">Georgia</option>
                                <option value="Trebuchet MS" id="trebuchet1">Trebuchet MS</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second Paragraph:</h4>
                            <select class="dropdown" id="text-font2" name="text-font2">
                                <option value="Georgia" id="georgia2">Georgia</option>
                                <option value="arial" id="arial2">Arial</option>
                                <option value="Trebuchet MS" id="trebuchet2">Trebuchet MS</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Third Paragraph:</h4>
                            <select class="dropdown" id="text-font3" name="text-font3">
                                <option value="Trebuchet MS" id="trebuchet3">Trebuchet MS</option>
                                <option value="arial" id="arial3">Arial</option>
                                <option value="Georgia" id="georgia3">Georgia</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <p>Fix the color repetition for the two subheaders!</p>
                    <section class="change" id="color-change">
                        <section class="paragraph-change">
                            <h4>First Subheader:</h4>
                            <select class="dropdown" id="color1" name="color1">
                                <option value="yellow" id="yellow1">Yellow</option>
                                <option value="black" id="black1">Black</option>
                                <option value="white" id="white1">White</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second Subheader:</h4>
                            <select class="dropdown" id="color2" name="color2">
                                <option value="black" id="black2">Black</option>
                                <option value="yellow" id="yellow2">Yellow</option>
                                <option value="white" id="white2">White</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <p>Fix the repetition for the two list!</p>
                    <section class="change" id="list-change">
                        <section class="paragraph-change">
                            <h4>First List:</h4>
                            <select class="dropdown" id="list1" name="list1">
                                <option value="ul" id="ul1">Unordered</option>
                                <option value="ol" id="ol1">Ordered</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second List:</h4>
                            <select class="dropdown" id="list2" name="list2">
                                <option value="ol" id="ol2">Ordered</option>
                                <option value="ul" id="ul1">Undordered</option>
                            </select>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </main>  
<?php
    include("../assets/inc/footer.inc.php");
?>