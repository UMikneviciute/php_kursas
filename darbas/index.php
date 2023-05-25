<?php
    require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Playfair+Display:wght@700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../darbas/css/normalize.css">
    <link rel="stylesheet" href="../darbas/css/style.css">
</head>
<body>
    <header class="site-header flex-container">
        <div class="logo flex-container">
            <a href="#"><img src="./images/header_logo.png" alt="logo of recepies"></a>
            <h2>Recipes</h2>
        </div>
        <div class="flex-container">
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="#sign-up">Sign Up!</a></li>
                    <li><a href="#contact-us">Contact Us!</a></li>
                </ul>
            </nav>       
            <nav class="social-nav">
                <ul class="flex-container">
                    <li><a href="#" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="bi bi-instagram"></a></i></li>
                </ul>
            </nav>
        </div>
            <!--<nav class="mobile-nav">
                <ul id="mMenu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="#sign-up">Sign Up!</a></li>
                    <li><a href="#contact-us">Contact Us!</a></li>
                </ul>
            </nav> -->
    </header>
    <section class="hero">
        <div class="container flex-container">
            <div class="left">
                <p><i class="bi bi-patch-exclamation-fill"></i>Vegetable power!!!</p>
                <h1 id="home">A wellness spring with whole plant recipes</h1>
                <p>Step into our welcoming sanctuary as we celebrate the power of whole plant recipes.</p>
                <button>Let's Go!</button>
            </div>
            <div class="right">
                <div class="background-photo"></div>
                <img src="../darbas/images/main-photo.jpg" alt="photo of tomatoes">
            </div> 
        </div>
    </section>
    
    <div class="content1">
        <div class="container">
            <h3 id="recipes">Recipes</h3>
            <nav class="recipes">
                <ul class="flex-container">
                    <li><a href="#breakfast-recipes"><img src="../darbas/images/breakfast.jpg" alt="breakfast"></a> <!--nuotrauka turi nuvesti į turinio vietą-->
                        <h3>Breakfast</h3>
                        <p>Start your day with vibrant energy and nourishment. Explore our mouthwatering whole food plant-based breakfast recipes!</p></li>
                    <li><a href="#lunch-recipes"><img src="../darbas/images/lunch.jpg" alt="lunch"></a> <!--nuotrauka turi nuvesti į turinio vietą-->
                        <h3>Lunch</h3>
                        <p>Revitalize your midday with wholesome goodness. Dive into our captivating whole food plant-based lunch recipes.</p></li>
                    <li><a href="#dinner-recipes"><img src="../darbas/images/dinner.jpg" alt="dinner"></a> <!--nuotrauka turi nuvesti į turinio vietą-->
                        <h3>Dinner</h3>
                        <p>Elevate your evenings with flavorful delights. Discover our enticing whole food plant-based dinner recipes.</p></li>
                </ul>
            </nav>
        </div> 
    </div>
    <div class="content2">
        <div class="container">
            <h2 id="breakfast-recipes">Breakfast Recipes</h2>
            <div class="breakfast1 flex-container">
                <img src="../darbas/images/breakfast1.jpg" alt="chia pudding">
                <div class="instructions">
                    <h3>Chia Pudding</h3><br>
                    <ul>
                        <li>1 cup plant-based milk</li>
                        <li>3 tablespoons chia seeds</li>
                        <li>1 tablespoon maple syrup</li>
                        <li>1/2 teaspoon vanilla extract</li>
                        <li>Fresh berries for topping</li>
                    </ul><br>
                    <p>In a jar or bowl, combine the plant-based milk, chia seeds, maple syrup, and vanilla extract. Stir well and refrigerate for at least 4 hours or overnight. Once the mixture thickens to a pudding-like consistency, serve chilled, topped with fresh berries. Enjoy!</p>
                </div>
            </div>
            <div class="breakfast2 flex-container">
                <img src="../darbas/images/breakfast2.jpg" alt="oatmeal">
                <div>
                    <h3>Oatmeal</h3><br>
                    <ul>
                        <li>1/2 cup rolled oats</li>
                        <li>1 cup plant-based milk</li>
                        <li>1/2 cup blueberries</li>
                        <li>1 ripe banana, sliced</li>
                        <li>Handful of chopped walnuts</li>
                    </ul><br>
                    <p>In a saucepan, bring the oats and plant-based milk to a simmer. Cook for about 5 minutes, stirring occasionally. Transfer to a bowl and top with blueberries, sliced banana, and chopped walnuts. Enjoy your delicious and nutritious plant-based breakfast!</p>
                </div>
            </div>            
        </div> 
    </div>
    <div class="content3">
        <div class="container">
            <h2 id="lunch-recipes">Lunch Recipes</h2>
            <div class="lunch1 flex-container">
                <img src="../darbas/images/lunch1.jpg" alt="zucchini stew">
                <div class="instructions">
                    <h3>Stew with Zucchini, Broccoli, and Carrots</h3><br>
                    <ul>
                        <li>1 zucchini, diced</li>
                        <li>1 head of broccoli, florets separated</li>
                        <li>2 carrots, sliced</li>
                        <li>1 onion, diced</li>
                        <li>2 garlic cloves, minced</li>
                        <li>1 can diced tomatoes</li>
                        <li>4 cups vegetable broth</li>
                        <li>1 teaspoon dried thyme</li>
                        <li>Salt and pepper to taste</li>
                        <li>Fresh parsley for garnish</li>
                    </ul><br>
                    <p>In a large pot, sauté the onion and garlic until fragrant. Add the zucchini, broccoli, and carrots, and cook for a few minutes. Stir in the diced tomatoes, vegetable broth, dried thyme, salt, and pepper. Simmer for 20-25 minutes until the vegetables are tender. Serve hot, garnished with fresh parsley. Enjoy the comforting flavors of this plant-based stew!</p>
                </div>
            </div>
            <div class="lunch2 flex-container">
                <img src="../darbas/images/lunch2.jpg" alt="chickpea stew">
                <div>
                    <h3>Chickpea, Broccoli, and Tomato Stew</h3><br>
                    <ul>
                        <li>1 can chickpeas, drained and rinsed</li>
                        <li>1 head of broccoli, florets separated</li>
                        <li>2 tomatoes, diced</li>
                        <li>1 onion, diced</li>
                        <li>2 garlic cloves, minced</li>
                        <li>4 cups vegetable broth</li>
                        <li>1 teaspoon cumin</li>
                        <li>Salt and pepper to taste</li>
                    </ul><br>
                    <p>In a large pot, sauté the onion and garlic until translucent. Add the chickpeas, broccoli, tomatoes, vegetable broth, cumin, salt, and pepper. Bring to a boil, then reduce heat and simmer for 15-20 minutes until the broccoli is tender. Serve hot and enjoy this nourishing plant-based stew!</p>
                </div>
            </div>            
        </div> 
    </div>
    <div class="content4">
        <div class="container">
            <h2 id="dinner-recipes">Dinner Recipes</h2>
            <div class="dinner1 flex-container">
                <img src="../darbas/images/dinner1.jpg" alt="chickpea and veggie bowl">
                <div class="instructions">
                    <h3>Chickpea and Veggie Bowl</h3><br>
                    <ul>
                        <li>1 cup cooked chickpeas</li>
                        <li>1 ripe avocado, sliced</li>
                        <li>Mixed salad greens</li>
                        <li>1 medium sweet potato, roasted and cubed</li>
                        <li>Fresh sprouts</li>
                        <li>Cherry tomatoes, halved</li>
                        <li>Dressing of your choice</li>
                    </ul><br>
                    <p>In a bowl, layer mixed salad greens, cooked chickpeas, roasted sweet potato cubes, sliced avocado, fresh sprouts, and cherry tomatoes. Drizzle your preferred dressing over the bowl. Toss gently to combine all the flavors. Enjoy this nourishing and satisfying dinner bowl.</p>
                </div>
            </div>
            <div class="dinner2 flex-container">
                <img src="../darbas/images/dinner2.jpg" alt="stuffed eggplant">
                <div>
                    <h3>Stuffed Eggplant</h3><br>
                    <ul>
                        <li>2 medium-sized eggplants</li>
                        <li>1 cup cooked quinoa</li>
                        <li>1 cup diced tomatoes</li>
                        <li>1/2 cup diced bell peppers</li>
                        <li>1/2 cup diced zucchini</li>
                        <li>1/4 cup chopped fresh parsley</li>
                        <li>2 cloves garlic, minced</li>
                        <li>2 tablespoons olive oil</li>
                        <li>Salt and pepper to taste</li>
                    </ul><br>
                    <p>Preheat the oven to 200°C. Cut the eggplants in half and scoop out the flesh, leaving about 1/2-inch thick shells. Chop the scooped-out eggplant flesh. In a skillet, heat olive oil, sauté the eggplant flesh, diced tomatoes, bell peppers, zucchini, garlic, salt, and pepper until tender. Stir in the cooked quinoa and chopped parsley. Stuff the eggplant shells with the mixture and place them in a baking dish. Bake for 25-30 minutes until the eggplants are tender. You can serve this dish with a side of fresh tomatoes for a vibrant dinner experience.</p>
                </div>
            </div>            
        </div> 
    </div>
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="testimonials-heading">
                <p>Testimonials</p>
                <h2>What our readers say...</h2>
            </div>
            <div class="testimonials-content flex-container">
                <div class="testimonials-content-box">
                    <div class="top">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam unde esse, eos perferendis illum maxime enim ipsam totam quis aut. Saepe voluptate eaque dicta exercitationem laudantium ipsa velit ad mollitia.</p>
                    </div>
                    <div class="bottom flex-container">
                        <div class="flex-container">
                            <img src="../darbas/images/testimonial1.png" alt="Reader's face">
                            <div class="reader-info">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <p>James Wiliams</p>
                                <p>United States</p>
                            </div>
                        </div>
                        <img src="../darbas/images/kabutes.png" alt="quotes">
                    </div>
                </div>
                <div class="testimonials-content-box">
                    <div class="top">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam unde esse, eos perferendis illum maxime enim ipsam totam quis aut. Saepe voluptate eaque dicta exercitationem laudantium ipsa velit ad mollitia.</p>
                    </div>
                    <div class="bottom flex-container">
                        <div class="flex-container">
                            <img src="../darbas/images/testimonial2.png" alt="Reader's face">
                            <div class="reader-info">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <p>Lieo Jessica</p>
                                <p>United Kingdom</p>
                            </div>
                        </div>
                        <img src="../darbas/images/kabutes.png" alt="quotes">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container flex-container">
            <div class="section-heading">
                <h2>Get in touch with us!</h2>
                <p>Share your ideas or any feedback. We are looking forward to hear from you!</p>
            </div>
                <form id="contact-form" class="contact-form" action="index.php" method="post">
                    <input required type="text" name="name" placeholder="Name"><br>
                    <input required type="email" name="email" placeholder="Email"><br>
                    <input required type="tel" name="phone" placeholder="Phone"><br>
                    <textarea name="message" placeholder="Any note for us?" rows="8"></textarea><br>
                    <button name="submit" type="submit" class="btn btn-form">Submit</button>
                </form>
            </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="section-heading">
                <p>Our blog</p>
                <h2>Latest Updates</h2>
            </div>
            <div class="blog-content flex-container">
                <div class="blog-content-item">
                    <div class="blog-image">
                        <img src="../darbas/images/spices.jpg" alt="spices">
                    </div>
                    <div class="blog-text">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore aliquam beatae et recusandae voluptatum iusto, deserunt cumque!</p>
                    </div>
                </div>
                <div class="blog-content-item">
                    <div class="blog-image">
                        <img src="../darbas/images/mindfulness.jpg" alt="mindfulness">
                    </div>
                    <div class="blog-text">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore aliquam beatae et recusandae voluptatum iusto, deserunt cumque!</p>
                    </div>
                </div>
                <div class="blog-content-item">
                    <div class="blog-image">
                        <img src="../darbas/images/protein.jpg" alt="protein">
                    </div>
                    <div class="blog-text">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore aliquam beatae et recusandae voluptatum iusto, deserunt cumque!</p>
                    </div>
                </div>
            </div>
            <button>View more stories</button>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="footer-social flex-container">
                <div class="logo flex-container">
                    <a href="#"><img id="logo" src="./images/footer_logo.png" alt="logo of recepies"></a>
                    <h2>Recipes</h2>
                </div> 
                <nav class="social-nav">
                    <ul class="flex-container">
                        <li><a href="#" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bi bi-instagram"></a></i></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-main flex-container">
                <div>
                    <h3>Explore</h3>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Services</li>
                        <li>Appointments</li>
                        <li>Blog</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div>
                    <h3>Utility Pages</h3>
                    <ul>
                        <li>Start here</li>
                        <li>Style guide</li>
                        <li>404 not found</li>
                        <li>Password protected</li>
                        <li>Licenses</li>
                        <li>Changelog</li>
                    </ul>
                </div>
                <div>
                    <h3>Keep in Touch</h3>
                    <ul>
                        <li>Address: <span>24A Kingstone St, Los Vegas NC 28202, USA.</span></li>
                        <li>Mail: <a href="mailto:support@doctors.com">support@doctors.com</a></li>
                        <li>Phone: <a href="tel:(+22)123-4567-900">(+22)123-4567-900</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Working Hours</h3>
                    <ul>
                        <li>Mon to Fri: 7am-6pm</li>
                        <li>Sat: 9am-7pm</li>
                        <li>Sun: 9am-6pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; Copyright 2023. Drafted by Uršulė Miknevičiūtė</p>
    </footer>
</body>
</html>