<?php
include __DIR__ . '/../config/config.php'; // Relative path to config.php

// Set page-specific metadata
$title = "$website" . " | Breweries of Bavaria & Franconia";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>

<div class="video-container">
        <video autoplay muted loop playsinline>
            <source src="/assets/images/bavarian-mountains.mp4" type="video/mp4">       
            Your browser does not support the video tag.
            </video>
        <div class="overlay-text">
            <h1>Beer & Food Lover's Tour of Bavaria & Franconia</h1>
            <div class="sepsm"></div>
            <div class="tac"><a href="#itinerary" class="button hidden-mobile">See the Itinerary</a></div>
        </div>
    </div>
<div class="sepmd hidden-mobile"></div>
<section class="page tal">
    <div class="page-content">
        <div class="row">
            <div class="col-12"><h2 id="itinerary">Beer & Food Lover's Tour Bavaria & Franconia</h2>
            <div class="sepxs"></div>
            <h4>Eat and Drink your way through the restaurants, breweries, and markets of southern Germany</h4>
            <h5>April 26th - May 5th 2025</h5>
                <div class="sepmd"></div>
                </div>
            <div class="col-md-7">
            <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/images/roast-pork.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/assets/images/bamberg-rathaus.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/assets/images/bergkaese.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="seplg"></div>
            <p>This tour of Bavaria and Franconia offers an unforgettable culinary and cultural adventure, blending iconic traditions with immersive experiences. Highlights include exclusive brewery tours showcasing the craftsmanship behind Germany's world-famous beers, a hands-on pretzel and Weisswurst-making class, and a delightful Lebkuchen baking class to savor the region's sweet heritage. Guests will revel in the lively atmosphere of Springfest in Munich, a festive celebration of Bavarian culture, and enjoy an extraordinary chef's dinner at the historic Schlenkerla Brewery in Bamberg. This dinner, curated by renowned Chef Wolfgang, combines innovative culinary artistry with the timeless flavors of Franconian smoked beer, creating a truly unique dining experience.</p>   
            <div class="seplg"></div>
                    <h2>Tour Details</h2>
                    <div class="sepmd"></div>
                    <div class="tour-box row tac">
                        <div class="row tac mb-4" style="align-items:flex-start !important;">
                            <div class="col-4"><i class="fa-solid fa-dollar-sign fa-3x fa-orange"></i><div class="sepsm"></div><h4>Price</h4><div class="sepxs"></div><p>$2,922 per person (based on double occupancy) $3,425 - for solo traveler</p></div>
                            <div class="col-4"><i class="fa-solid fa-calendar-days fa-3x fa-orange"></i><div class="sepsm"></div><h4>Dates</h4><div class="sepxs"></div><p>April 26th - May 5th 2025</p></div>
                            <div class="col-4"><i class="fa-solid fa-globe fa-3x fa-orange"></i><div class="sepsm"></div><h4>Location</h4><div class="sepxs"></div><p>Germany<br />Munich, Nuremberg, Bamberg</p></div>
                        </div>
                        <div class="row tac" style="align-items:flex-start !important;">
                            <div class="col-4"><i class="fa-solid fa-person-walking-luggage fa-3x fa-orange"></i><div class="sepsm"></div><h4>Activity Level</h4><div class="sepxs"></div><p>Walking, Train Commuting, Hiking (Optional)</p></div>
                            <div class="col-4"><i class="fa-solid fa-people-group fa-3x fa-orange"></i><div class="sepsm"></div><h4>Group Size</h4><div class="sepxs"></div><p>6 - 12 People</p></div>
                            <div class="col-4"><i class="fa-solid fa-location-dot fa-3x fa-orange"></i><div class="sepsm"></div><h4>Location</h4><div class="sepxs"></div><p>Germany</p></div>
                        </div>
                        
                    </div>            
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="shadow-box sticky-element">
                    <h4>Space is Limited!</h4>
                    <div class="sepsm"></div>
                    <p>This exclusive tour offers a perfect blend of regional flavors and cultural experiences, featuring immersive cooking classes, brewery tours, a tent reservation at Munich's Spring Fest - the little sibling to the famous Oktoberfest. Space is limited so don't hesitate to book today!</p>
                    <div class="sepsm"></div>
                    
                    <!-- Modal button --> 
                    <div class="tac"><button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Request More Information</button></div><br />
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header tac">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Have any Questions?</h1><br>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-header tac">
                            <h5 class="tac">Send Us a Message And We'll Get Back To You Shortly</h5>
                            </div>
                            <div class="modal-body">
                            <script src="https://www.cognitoforms.com/f/seamless.js" data-key="OI_LzSWKxkCZJEPTm45_yQ" data-form="1"></script>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                            </div>
                            </div>
                        </div>
                    </div> 
                    <i class="fa-solid fa-bed" style="margin-right: 10px;"></i>  <strong>Chef Curated Experiences</strong><br />
                    <i class="fa-solid fa-utensils" style="margin-right: 10px;"></i> <strong>Private Brewery Tours</strong><br />
                    <i class="fa-solid fa-person-walking-luggage" style="margin-right: 10px;"></i> <strong>Exclusive Chef Dinner</strong><br />
                    <div class="sepsm"></div>
                    <p>Have any questions?</p>
                    <div class="sepsm"></div>
                    <a href="mailto:info@savorgermany.com">Email us</a> or Call: <a href="tel:2672165877">(267) 216-5877</a>
                    <div class="sepsm"></div>
                </div>
                <div class="seplg"></div>
            </div>
        </div>
    </div>
</section>

                    
                    
<section class="page">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tac">Our tour starts in the heart of Bavaria - Munich, before venturing on to the Franconian region where we will experience the best beer in the region.</h3>
            </div>
            <div class="sepmd"></div>
            
                <img src="/assets/images/augustiner-beergarden.jpg" alt="Augustiner Beer Garden" class="w100">
                <div class="sepxl"></div>
                <div class="col-md-6">
                <h3>Highlights</h3>
                <h5>Food & Beer of Bavaria and Franconia</h5>
                <ul>
                    <li>8 days visiting restaurants, breweries, farmer's markets, and more with two award winning chefs</li>
                    <li>Enjoy the ambience and atmosphere of Munich's Spring Fest - the smaller sibling to Oktoberfest</li>
                    <li>Enjoy an exclusive dinner at a 600 year old Brauhaus, curated by chef Jeremy Nolen and Wolfgang Thiel of Schlenkerla</li>
                </ul>
                </div>
                <div class="col-md-6">
                <img src="/assets/images/munich-map-sm.webp" alt="Munich Map" class="w100">
            </div>
            <div class="seplg"></div>
            <div class="col-md-6">
                <h4 style="font-style:italic;">What's Included</h4>
                <ul>
                    <li>8 nights in 3-star and above hotels</li>
                    <li>Airport transfer from Munich Airport to Munich Hotel</li>
                    <li>Breakfast daily except day of arrival</li>
                    <li>Five (5) dinners including a special collaboration at Schlenkerla Brewery in Bamberg</li>
                    <li>Five (5) Lunches including at a brewery tour</li>
                    <li>Three (3) Brewery tours including the famous pilgrammage of Andechs Monastery</li>
                    <li>Pretzel & Sausage Making Class in Munich</li>
                    <li>Lebkuchen Baking Class in Nuremberg's famous Wicklein Bakery</li>
                    <li>Tent Reservation at Munich's Spring Fest (first liter of beer and a meal included)</li>
                    <li>All Taxes and Fees</li>
                    <li>All Transportation throughout the duration of the trip</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4 style="font-style:italic;">Not Included</h4>
                <ul>
                    <li>Flights to and from Munich (we are a fully licensed travel agency, flights can be added)</li>
                    <li>Travel Insurance (highly recommended)</li>
                    <li>Meals & Drinks during 'on-your-own' times.</li>
                    <li>Gratuities for local tour guides and instructors</li>
                </ul>
            </div>
            <div class="sepmd"></div>
        </div>
    </div>
</section>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 1: Saturday April 26th, 2025 | First Day In Munich</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">
                    Welcome to Munich! As soon as everyone arrives, we'll gather at Airbräu, the unique brewery right inside the Munich Airport. It's the perfect spot to kick off our trip with a quick welcome before we take the train into the city. After a short ride, we'll head to our hotel, Holiday Inn Munich City East, where you can drop off your luggage and get settled in.<br>
                        <span class="hidden-text">It's the perfect way to start your day before diving into more adventures.<br /><br />
                        The first day we'll take it easy during the day. Once our luggage is dropped off, you can relax at the hotel while the friendly staff readies your room or you can join us at the Viktualiemarkt, Munich's main farmer's market for some lunch and a leisurely stroll through the market stalls. The Viktualienmarkt, Munich's famous open-air market, is bustling with local vendors offering fresh produce, cheeses, meats, and Bavarian treats. This is a great opportunity to sample some authentic local flavors and get a taste of the city's vibrant food culture. After we've explored the amazing food and artisan vendors, we'll return to the hotel for check-in, and you'll have the rest of the afternoon free to explore Munich on your own. Whether it's a stroll through the old town, a visit to a museum, or simply relaxing at a café, the choice is yours.<br /><br />
                        In the evening, we'll come together for dinner at Augustiner Bräustuben, one of Munich's oldest and most beloved beer halls. You'll enjoy a traditional Bavarian meal paired with some of the finest beers brewed right on-site. It's the perfect way to end our first day in Germany!</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 2: Sunday April 27th, 2025 | Munich</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">
                    Day two kicks off with a classic Bavarian breakfast at Schneider Brauhaus, where you'll enjoy a traditional meal of Weisswurst (white sausage), fresh Brezn (pretzels), and a refreshing Weissbier (wheat beer). <br><br>
                        <span class="hidden-text">After breakfast, we'll hop on the train and head to Frühlingsfest, Munich's lively spring festival. Known as the “little sister” of Oktoberfest, Frühlingsfest offers all the fun of a traditional beer festival—tents with live music, delicious food, and of course, plenty of beer! We've reserved seats in one of the festival tents, so you can fully immerse yourself in the atmosphere of Bavarian culture and festivities.<br /><br />
                        In the evening, you're free to choose your own adventure! You can stay at Frühlingsfest and enjoy the rides, games, and live entertainment, or head back to Munich to explore more of the city. If you're up for some shopping, check out Kaufingerstraße, one of Munich's top shopping streets. For those interested in history and culture, consider visiting the Deutsches Museum or the Alte Pinakothek art museum. Whether you stay at the festival or explore on your own, Munich has plenty to offer!</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 3: Monday April 28th, 2025 | Munich to Bamberg</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">
                    Day three starts with a delicious breakfast at the hotel before we head off to the beautiful town of Bamberg, a UNESCO World Heritage site known for its rich beer heritage and stunning architecture. Once we arrive in Bamberg, we'll drop off our luggage at the hotel, right in the heart of the city. <br><br>
                        <span class="hidden-text">For lunch, we'll visit Brauerei Spezial, famous for its smoked beers and hearty Franconian cuisine. Afterward, we'll return to the hotel to check in, with a few hours to relax or explore Bamberg's picturesque streets before our evening plans.<br /><br />
                        In the late afternoon, we'll head to the renowned Schlenkerla brewery for a guided tour. Here, you'll learn all about Bamberg's legendary Rauchbier (smoked beer) and its brewing process. Following the tour, we'll enjoy a special Franconian dinner prepared by Chef Wolfgang Theil, in collaboration with Chef Jeremy Nolen. This unique dinner will showcase traditional local dishes paired with the region's best beers.<br /><br />
                        After dinner, the evening is yours to explore Bamberg further, perhaps visiting one of the many beer gardens or taking a nighttime stroll through the charming old town. Or, if you prefer, you can head back to Fässla for a relaxing evening at the brewery.</span>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 4: Tuesday April 29th, 2025 | Bamberg</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">Start the day with a hearty breakfast at the hotel in Bamberg, fueling up for an exciting day of exploration in the surrounding Franconian Tuscany. Known for its rolling hills, lush vineyards, and charming villages, this region is a hiker's paradise, offering both natural beauty and cultural treasures. With an array of guided hikes to choose from, each with its own unique flavor, you're in for a memorable experience tailored to your interests, whether you prefer an informative tour, a relaxing stroll, or a more challenging adventure. <br>
                        <span class="hidden-text">For those looking to learn about Franconian life, the Ellertalrunde is a popular choice. This trail includes a stop at a local farm, where you'll get a glimpse into traditional farming practices and hear about the area's rich agricultural heritage. Another option is a cultural hike in Strullendorf, where the guide shares fascinating stories of local legends, adding layers of history and folklore to the picturesque landscape.<br /><br />
                        If you're up for a taste of Bamberg's famous beer culture, the 13-Brauerei-Weg—led by a master brewer—is a perfect blend of nature and pleasure. This trail winds through villages, past family-run breweries, and offers a chance to learn about the art of brewing while enjoying scenic views and occasional tastings. For those seeking a more challenging route, the hike to Eulenstein or the Friesener Warte provides stunning panoramic views as a reward for the steeper climbs.<br /><br />
                        After a fulfilling day on the trails, you'll return to the hotel to relax and recharge. The evening is free for you to explore Bamberg on your own, perhaps strolling through its cobbled streets, enjoying a local meal, or simply savoring the charm of this UNESCO-listed city. Whatever you choose, this day will be a highlight in your Franconian journey.</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 5: Wednesday April 30th, 2025 | Bamberg to Nuremberg</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">Day five kicks off with breakfast at the hotel before we say goodbye to Bamberg and head to our next destination: the historic city of Nuremberg. Upon arrival, we'll drop off our luggage at the hotel and head out to explore the heart of the city.<br>
                        <span class="hidden-text">We'll take a leisurely walk around Nuremberg's main square, where you'll have the chance to try one of the city's famous Nürnberger sausage sandwiches from a charming little hut on the plaza. While there, we'll also stop to admire the iconic Schöner Brunnen (Beautiful Fountain), a Gothic masterpiece that's said to bring good luck to those who spin its golden ring.<br /><br />
                        Afterward, we'll check into the hotel and have some time to relax before our next adventure—a hands-on Lebkuchen baking class! You'll learn the secrets behind Nuremberg's world-famous gingerbread, a holiday tradition that has delighted people for centuries.<br /><br />
                        In the evening, we'll gather for dinner at Bratwursthäusle, a beloved institution in Nuremberg with roots dating back to the early 14th century. Situated next to the beautiful St. Sebaldus Church, Bratwursthäusle has long been celebrated for its authentic Nürnberger Rostbratwurst, a specialty that has captivated locals and visitors alike for centuries. These sausages are hand-made on-site from finely minced pork, seasoned with a signature blend of spices, and grilled to perfection over a beechwood fire—a traditional method that imparts a unique, smoky flavor.<br /><br />
                        The restaurant itself is steeped in history, with its rustic timbered walls, cozy interiors, and lively atmosphere reflecting the timeless charm of Nuremberg. Bratwursthäusle is not only a place to enjoy a meal but a portal into the city's culinary past, where centuries-old recipes are kept alive. Each sausage is typically served with tangy sauerkraut or potato salad, both prepared using traditional Franconian recipes that highlight the hearty flavors of the region. Dining here offers a true taste of Nuremberg's culinary heritage and a warm, inviting ambiance that feels both historic and authentically local.<br /><br />
                        After a day filled with local flavors and cultural experiences, this meal at Bratwursthäusle is the perfect way to unwind. You might choose to stay for an extra round, soaking in the cozy atmosphere, or head back out to explore Nuremberg's lively streets, where modern bars and historic buildings stand side by side, adding another layer to the city's fascinating blend of old and new.</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 6: Thursday May 1st, 2025 | Nuremberg</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">Day six begins with breakfast at the hotel, setting the stage for another exciting day in Nuremberg. In the late morning, we'll make our way to Altstadthof Brewery, nestled in the heart of Nuremberg's historic old town, for an immersive brewery tour. Founded in the early 1980s, Altstadthof is one of the pioneering breweries that helped revive traditional Franconian beer styles after decades of modern brewing trends. Known especially for their “Rotbier” or red beer, Altstadthof draws on centuries-old brewing techniques to create a unique, richly flavored beer that has become a regional specialty. During the tour, you'll get a behind-the-scenes look at their small-batch brewing process, which emphasizes quality and tradition, with each step handled meticulously to ensure every beer embodies the essence of Franconia. <br>
                        <span class="hidden-text">After the tour, we'll settle in for a leisurely lunch at the brewery's adjoining restaurant, where we'll pair Altstadthof's signature brews with delicious local dishes. The menu highlights Franconian favorites like savory pretzels, sausages, and seasonal specialties sourced from local ingredients, designed to complement the flavors of their handcrafted beers. Relax in the brewery's cozy, rustic setting, where the charm of Nuremberg's old town meets the warmth of a family-run establishment, and savor the experience of enjoying truly local flavors, straight from the source.<br /><br />
                        The afternoon is yours to explore Nuremberg at your own pace. You can visit some of the city's historic sites, such as the Imperial Castle or the Germanic National Museum, or simply relax and soak in the atmosphere of this beautiful medieval city.<br /><br />
                        In the evening, we'll gather for dinner at Zum Gulden Stern, a true Nuremberg landmark and the oldest sausage restaurant in the world. Established in 1419, this historic eatery has been serving traditional Nürnberger Rostbratwurst for over 600 years, keeping alive a culinary tradition that is as much a part of the city's heritage as its medieval architecture. Nestled within a charming half-timbered building, Zum Gulden Stern exudes an old-world warmth, with rustic wooden tables, flickering candles, and walls adorned with artifacts that tell the story of Nuremberg's storied past.<br /><br />
                        Here, you'll enjoy the restaurant's signature sausages, carefully grilled over a fragrant beechwood fire that imparts a distinct, smoky flavor. These sausages are smaller than typical bratwursts but pack a delicious punch with their unique blend of spices and finely ground pork, seasoned just as they were centuries ago. Each plate is traditionally served with sides like freshly prepared sauerkraut and warm, crusty Franconian bread, bringing a taste of authentic, local flavors right to your table. <br><br>
                        Dining at Zum Gulden Stern is more than just a meal—it's a journey back in time, savoring a recipe that has stood the test of centuries. This cozy, historic setting, filled with the aroma of sausages sizzling over open flames, is the perfect way to conclude another memorable day in Nuremberg, leaving you with a deeper connection to the city's vibrant culinary heritage and a taste of Franconian hospitality at its finest.</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 7: Friday May 2nd, 2025 | Nuremberg to Munich</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">Day seven begins with breakfast at the hotel before we depart for Munich, returning to our original hotel at Holiday Inn Munich City East. After dropping off our luggage, we'll embark on a scenic journey to the Andechs Monastery, famous for its beautiful hilltop location and centuries-old brewing tradition. <br>
                        <span class="hidden-text">Upon arrival at the Andechs Monastery, nestled atop the Holy Mountain with sweeping views of the Bavarian countryside, we'll embark on a brewery tour that delves into the centuries-old tradition of monastic brewing. Founded by Benedictine monks in the 15th century, Andechs has become one of Bavaria's most cherished breweries, known for its dedication to quality and the care with which each beer is crafted. As we explore the brewery, you'll learn about the fascinating history of this spiritual and brewing landmark, from the early days when monks brewed for sustenance to their continued commitment to traditional brewing methods that have made Andechs beers famous worldwide.<br /><br />
                        Following the tour, we'll sit down for a hearty lunch in the brewery's inviting beer hall, where the lively atmosphere is infused with Bavarian warmth. Here, you'll have the chance to savor authentic Bavarian dishes like crispy pork knuckle, savory sausages, and freshly baked pretzels, each one a delicious reminder of Bavaria's rich culinary heritage. These dishes are perfectly complemented by Andechs' celebrated beers, including their richly malty Doppelbock Dunkel and smooth, full-bodied Spezial Hell, brewed right on the monastery grounds.<br /><br />
                        Dining at Andechs, surrounded by centuries-old brewing kettles and the aroma of freshly brewed beer, offers a truly immersive Bavarian experience. The monks' brewing tradition is palpable in every sip, and their dedication to quality shines through in each dish served alongside these handcrafted beers. It's a unique chance to experience Bavarian culture, hospitality, and flavors in an unforgettable setting that combines spirituality and craftsmanship—a true highlight of our journey through Bavaria. <br><br>
                        After lunch, we'll return to Munich for the evening. Our dinner will take place at Hirschgarten Beer Garden, the largest in Munich, where you can relax in a casual setting. Dinner here will be pay-as-you-go, allowing you to sample whichever Bavarian treats or drinks catch your eye as you soak in the lively atmosphere. It's the perfect way to spend your final evening in Bavaria!</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 8: Saturday May 3rd, 2025 | Munich</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">Day eight begins with breakfast at the hotel, followed by a fun and interactive Weisswurst and Pretzel making class at Herrmannsdorfer. You'll learn the art of crafting these Bavarian specialties, from shaping the pretzels to cooking the traditional white sausages. It's a hands-on experience that will give you a true taste of Bavarian culinary tradition. <br>
                        <span class="hidden-text">Afterward, we'll head to the Oktoberfest Museum, where you'll explore the rich history of Munich's most famous festival and discover how Oktoberfest evolved into the world-renowned celebration it is today.<br /><br />
                        The afternoon is free for you to explore Munich at your leisure. You might want to take a stroll through the beautiful English Garden, one of the largest urban parks in the world, or visit any spots you may have missed earlier in the trip.<br /><br />
                        In the evening, we'll gather for a farewell dinner at Haxngrill, known for their incredible Schweinshaxen (roasted pork knuckle). It's the perfect way to celebrate our time in Bavaria with one last traditional Bavarian meal. After dinner, the night is yours to enjoy—whether you want to soak up the city's nightlife or have a quiet final evening, the choice is yours.</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<div class="constrain">
<section class="page shadow-box">
    <div class="page-content">
        <div class="row">
            <div class="col-md-7 read-more-container">
                <h3 class="tal">Day 9: Sunday May 4th, 2025 | Depart Munich</h3>
                <div class="sepsm"></div>
                <div class="read-more-container">
                    <p class="text">
                    As we head to the airport for our flights back to the U.S., there's just enough time to enjoy one last taste of Bavaria. Many of us gather at the airport bar to savor a traditional Bavarian breakfast—soft pretzels, white sausages with sweet mustard, and, for those inclined, a refreshing wheat beer. It's a perfect, simple way to wrap up our time here and soak in a final bit of Bavarian flavor. <br>
                        <span class="hidden-text">With flights usually departing in mornings, there's little time for anything else, but the memories of this past week will stay with us. From the lively beer gardens to the historic streets of Bamberg and Nuremberg, each experience has brought us closer to the heart of Germany. We hope you'll return someday to explore even more of this wonderful country. Safe travels, and we look forward to the day we can say “Willkommen zurück!”</span><br>
                        <span class="toggle-btn">
                            <button class="read-more-btn" onclick="toggleReadMore(this)">Read more...</button>
                        </span>
                    </p>
                </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/assets/images/munich-skyline.jpg" class="w100" alt="Munich Skyline">
            </div>
        </div>
    </div>
</section>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
