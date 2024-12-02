<?php
    $pageTitle = "Quiz";

    include("../assets/inc/header.inc.php");
?>
   <main>
        <div class="single-column">
            <div class="column">
                <h1>The CRAPsite - Quiz</h1>
                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h1">Contrast</h2>
                    <p id="quiz-p1">Some generic text here about Contrast</p>

                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-1">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-1">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-1">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-1">
                </section>

                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h2">Repetition</h2>
                    <p id="quiz-p2">Some generic text here about Repetition</p>

                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-2">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-2">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-2">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-2">
                </section>

                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h3">Alignment</h2>
                    <p id="quiz-p3">Some generic text here about Alignment</p>

                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-3">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-3">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-3">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-3">
                </section>

                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h4">Proximity</h2>
                    <p id="quiz-p4">Some generic text here about Proximity</p>

                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-4">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-4">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-4">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-4">
                </section>

                <!-- Paige, please try and get whatever content you write here split into 4 paragraphs (keep the containers below).
                 Each paragraph here should just be generic stuff about Contrast, Repetition, Alignment, and Proximity again. -->

                 <!--Include 4 images/videos from the ones Katiya had. I have the placeholders there already for them, just use those
                 spots. If you add videos/s, replace the placeholder but keep the class name. All 4 images are on each paragraph b/c
                 the user will choose which ones are visible. There should be 1 image/video for each of the 4 principles (CRAP)-->
            </div>
        </div>

        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix This CRAP!</h2>
                    <h3>Use the controls below to fix the Contrast, Repetition, Alignment, and Proximity of this page!</h3>
                </section>

                <div class="control-section">
                <p><strong>Contrast:</strong><br>Adjust the body text color for proper contrast!</p>
                <div class="radio-row" id="quiz-text-color">
                    <label id="blue"><input type="radio" name="color-options" value="lightblue"> Light Blue</label>
                    <label id="red"><input type="radio" name="color-options" value="darkred"> Dark Red</label>
                    <label id="green"><input type="radio" name="color-options" value="greenyellow"> Green-Yellow</label>
                </div>
                <hr>

                <p>Which font weight has the best contrast for the headers?</p>
                <div class="radio-row" id="quiz-font-weight">
                    <label id="normal-quiz"><input type="radio" name="bold-options" value="normal"> Normal</label>
                    <label id="bold-quiz"><input type="radio" name="bold-options" value="bold"> Bold</label>
                    <label id="bolder-quiz"><input type="radio" name="bold-options" value="900"> Bolder</label>
                </div>
                <hr>

                <p><strong>Repetition:</strong><br>Ensure font repetition in the body paragraphs!</p>
                <section class="change" id="quiz-rep">
                    <section class="paragraph-change">
                        <h4>First Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-font1" name="quiz-text-font1">
                            <option value="Franklin Gothic Medium" id="franklin1">Franklin Gothic Medium</option>
                            <option value="Times New Roman" id="roman1">Times New Roman</option>
                            <option value="Verdana" id="verdana1">Verdana</option>
                            <option value="Gill Sans" id="gill1">Gill Sans</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Second Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-font2" name="quiz-text-font2">
                            <option value="Times New Roman" id="roman2">Times New Roman</option>
                            <option value="Verdana" id="verdana2">Verdana</option>
                            <option value="Gill Sans" id="gill2">Gill Sans</option>
                            <option value="Franklin Gothic Medium" id="franklin2">Franklin Gothic Medium</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Third Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-font3" name="quiz-text-font3">
                            <option value="Verdana" id="verdana3">Verdana</option>
                            <option value="Gill Sans" id="gill3">Gill Sans</option>
                            <option value="Franklin Gothic Medium" id="franklin3">Franklin Gothic Medium</option>
                            <option value="Times New Roman" id="roman3">Times New Roman</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Fourth Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-font4" name="quiz-text-font4">
                            <option value="Gill Sans" id="gill4">Gill Sans</option>
                            <option value="Franklin Gothic Medium" id="franklin4">Franklin Gothic Medium</option>
                            <option value="Times New Roman" id="roman4">Times New Roman</option>
                            <option value="Verdana" id="verdana4">Verdana</option>
                        </select>
                    </section>
                </section>
                <hr>

                <p>Fix the color repetition for the four subheaders!</p>
                <section class="change" id="quiz-rep">
                    <section class="paragraph-change">
                        <h4>First Subheader:</h4>
                        <select class="dropdown" id="quiz-color1" name="quiz-color1">
                            <option value="white" id="h-white1">White</option>
                            <option value="darkblue" id="h-blue1">Dark Blue</option>
                            <option value="purple" id="h-purple1">Purple</option>
                            <option value="orange" id="h-orange1">Orange</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Second Subheader:</h4>
                        <select class="dropdown" id="quiz-color2" name="quiz-color2">
                            <option value="darkblue" id="h-blue2">Dark Blue</option>
                            <option value="purple" id="h-purple2">Purple</option>
                            <option value="orange" id="h-orange2">Orange</option>
                            <option value="white" id="h-white2">White</option>
                        </select>
                    </section>

                     <section class="paragraph-change">
                        <h4>Third Subheader:</h4>
                        <select class="dropdown" id="quiz-color3" name="quiz-color3">
                            <option value="purple" id="h-purple2">Purple</option>
                            <option value="orange" id="h-orange2">Orange</option>
                            <option value="white" id="h-white2">White</option>
                            <option value="darkblue" id="h-blue2">Dark Blue</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Fourth Subheader:</h4>
                        <select class="dropdown" id="quiz-color4" name="quiz-color4">
                            <option value="orange" id="h-orange2">Orange</option>
                            <option value="white" id="h-white2">White</option>
                            <option value="darkblue" id="h-blue2">Dark Blue</option>
                            <option value="purple" id="h-purple2">Purple</option>
                        </select>
                    </section>
                </section>
                <hr>

                <p><strong>Alignment:</strong><br>Fix the alignment of the body paragraphs!</p>
                <section class="change" id="quiz-rep">
                    <section class="paragraph-change">
                        <h4>First Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-align1" name="quiz-text-align1">
                            <option value="left" id="quiz-left1">Left</option>
                            <option value="center" id="quiz-center1">Center</option>
                            <option value="right" id="quiz-right1">Right</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Second Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-align2" name="quiz-text-align2">
                            <option value="center" id="quiz-center2">Center</option>
                            <option value="right" id="quiz-right2">Right</option>
                            <option value="left" id="quiz-left2">Left</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Third Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-align3" name="quiz-text-align3">
                            <option value="right" id="quiz-right2">Right</option>
                            <option value="left" id="quiz-left2">Left</option>
                            <option value="center" id="quiz-center2">Center</option>
                        </select>
                    </section>

                    <section class="paragraph-change">
                        <h4>Fourth Paragraph:</h4>
                        <select class="dropdown" id="quiz-text-align4" name="quiz-text-align4">
                            <option value="left" id="quiz-left4">Left</option>
                            <option value="center" id="quiz-center4">Center</option>
                            <option value="right" id="quiz-right4">Right</option>
                        </select>
                    </section>
                </section>
                <hr>

                <p>Adjust the margin between the paragraphs!</p>
                <input type="range" id="quiz-margin-slider" class="slider" name="quiz-margin-slider" min="0" max="400" value="200">
                <div class="value-display">Selected value: <span id="quiz-slider-value">200</span></div>
                <hr>
                    
                <form action="index.php" method="post" onsubmit="gradeQuiz(event);">
                    <p><strong>Proximity:</strong><br>Choose one spot for each image (no repeats) for the best proximity!</p>
                    <img src="#" alt="Contrast" class="mini-quiz-graphic">

                    <section class="quiz-image-change">
                        <h4>First Image:</h4>
                        <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="mini-prox-graphic">
                        <select class="quiz-dropdown" id="quiz-img-prox1" name="quiz-img-prox1">
                            <option value="fourth" id="quiz-fourth1">Fourth</option>
                            <option value="first" id="quiz-first1">First</option>
                            <option value="second" id="quiz-second1">Second</option>
                            <option value="third" id="quiz-third1">Third</option>
                        </select>
                    </section>
                    <hr>
        
                    <img src="#" alt="Repetition" class="mini-quiz-graphic">

                    <section class="quiz-image-change">
                        <h4>Second Image:</h4>
                        <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="mini-prox-graphic">
                        <select class="quiz-dropdown" id="quiz-img-prox2" name="quiz-img-prox2">
                            <option value="third" id="quiz-third2">Third</option>
                            <option value="fourth" id="quiz-fourth2">Fourth</option>
                            <option value="first" id="quiz-first2">First</option>
                            <option value="second" id="quiz-second2">Second</option>
                        </select>
                    </section>
                    <hr>
        
                    <img src="#" alt="Alignment" class="mini-quiz-graphic">

                    <section class="quiz-image-change">
                        <h4>Third Image:</h4>
                        <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="mini-prox-graphic">
                        <select class="quiz-dropdown" id="quiz-img-prox3" name="quiz-img-prox3">
                            <option value="second" id="quiz-second3">Second</option>
                            <option value="third" id="quiz-third3">Third</option>
                            <option value="fourth" id="quiz-fourth3">Fourth</option>
                            <option value="first" id="quiz-first3">First</option>
                        </select>
                    </section>
                    <hr>
        
                    <img src="#" alt="Proximity" class="mini-quiz-graphic">

                    <section class="quiz-image-change">
                        <h4>Fourth Image:</h4>
                        <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="mini-prox-graphic">
                        <select class="quiz-dropdown" id="quiz-img-prox4" name="quiz-img-prox4">
                            <option value="first" id="quiz-first3">First</option>
                            <option value="second" id="quiz-second3">Second</option>
                            <option value="third" id="quiz-third3">Third</option>
                            <option value="fourth" id="quiz-fourth3">Fourth</option>
                        </select>
                    </section>
                    <hr>

                    <button type="submit" class="submit">Submit my Configuration!</button>
                    <p id="sub-p">View your Grade Below!</p>
                </form>
            </div>
        </div>
    </main>   
<?php
    include("../assets/inc/footer.inc.php");
?>