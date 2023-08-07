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
                            <p> If you think you are prepared to walk out of your mundane experience and free-fall into a whirlwind of colors, romance and music, then head for the Tarnetar Fair.

                                Based on the legend of Draupadi's swayamvara, this fair is a celebration of ethnic Gujarat’s folk-dance, music, costumes and the arts, centered around young tribal men and women seeking marriage partners. But even for those not interested in finding a spouse, the romance and excitement in the air are captivating, and every year the fair seems only to grow in popularity, attracting visitors and tourists from Gujarat, elsewhere in India, and even abroad.

                                Here the many colorful costumes, glittering ornaments and free-spirited movements of folk dances, all combine to create a memorable scene. As the dancers surge in waves of circular movement, the incessant throbbing of the drums keeps them moving in unison, and the drum beats continue throughout the day even as the dancers change from one group to the next. Many kinds of folk dances are performed; by far the most popular is the raas, in which dancers hold sticks to clack against those of other dancers. As many as one to two hundred women perform rasadas in a single circle, to the beats of four drums at a time and the tunes ofjodia pavas (double flutes). You may also see people break out into a spontaneous hudo.

                                Rabari women of nearby Zalawad perform the famous circular folk dance called rahado. Their marital status is indicated clearly by their costumes; a black zimi (skirt) means she is married. But if a woman is wearing a red zimi, it means she has not yet tied the knot, probably seeking a husband. The potential husbands seeking brides are elegantly dressed in colorful dhotis, artistically designed waistcoats and a head-cloth twisted at an angle, moving about the fairground at Tarnetar with striking umbrellas, advertising the bachelorhood they are keen to relinquish.

                                Numerous sadhus and bhajan mandlis (religious music groups) are engrossed in singing continuously, accompanied by folk instruments.

                                The Tarnetar Mela covers a large part of the Tarnetar village with a huge number of stalls put up to sell beautiful local handicrafts unavailable elsewhere, along with ethnic jewelery, statues of deities and traditional attire with tiny mirrors embroidered into the clothing. There are also merry-go-round rides, photographers stalls, magic shows and tattoo artists who attract a large variety of visitors.

                                Don’t miss the special packages and tented accommodations offered by the office of Gujarat tourism.</p>
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