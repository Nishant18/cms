<!--header-->
<?php
include('header.php');
?>




<!--pg1 dynamic data with sidebar-->
<div class="container" id="pg1-dydata">
    <div class="row">
        <div class="col-md-8 mt-2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            At a glance
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <span class="h1">Inline Header 1 Class</span>
                                    <span class="h2">Inline Header 2 Class</span>
                                    <h1>This is an example of <small>small</small> header text</h1>
                                    <p class="lead">This is an example of a lead paragraph element.</p>
                                    <p>
                                    <span class="h6">
                                        The Tarnetar fair is held on Bhadarva Sud Pancham i.e. the day of Rishi Panchami. The people of the Panchal region consider Tarnetar as sacred as Ganga and Haridwar. They believe not going very far and immersing the bones of their dead relatives in ponds at Tarnetar is as holy as Maa Ganga.

                                        On the same day of the Tarnetar fair, a flag of 52 yards is hoisted on the temple of Trinetreshwar Mahadev.
                                    </span>
                                    </p>
                                    <!-- inline elements -->
                                   
                                    <p>
                                        This is an example of <mark>highlighted</mark> text.<br>
                                        This is an example of <del>deleted</del> text.<br>
                                        This is an example of <s>strikethrough</s> text.<br>
                                        This is an example of <ins>inserted</ins> text.<br>
                                        This is an example of <u>underlined</u> text.<br>
                                        This is an example of <small>small</small> text.<br>
                                        This is an example of <i>italicized</i> text.<br>
                                        This is an example of <b>bold</b> text.<br>
                                    </p>

                                    <!-- inline elements -->
                                    <p class="text-left">This text is aligned left.</p>
                                    <p class="text-center">This text is centered.</p>
                                    <p class="text-right">This text is aligned right.</p>
                                    <p class="text-justified">This text is justified.</p>
                                    <p class="text-nowrap">This text has no wrap.</p>

                                    <!-- character casing -->
                                    <p class="text-lowercase">THIS IS LOWERCASE TEXT.</p>
                                    <p class="text-lowercase">this is uppercase text.</p>
                                    <p class="text-capitalize">this is capitalized text.</p>

                                    <!-- blockquotes -->
                                    <blockquote>
                                        <p>This is an example of a block quote.</p>
                                        <footer><cite title="Source Title">Example Source</cite></footer>
                                    </blockquote>
                                    <blockquote class="blockquote-reverse">
                                        <p>This is an example of a reverse block quote.</p>
                                        <footer><cite title="Source Title">Example Source</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 mt-2">
            <div class="card rounded-5 overflow-auto" id="sidebar" style="height: auto;">
                <?php
                include('sidebar.php');
                ?>
            </div>
        </div>
    </div>
</div>


<!--footer-->