<?php
include 'header.php';
?>
<section class="home" id="home">
    <div class="home-img">
        <img src="assets/FOTO_SAYA-Copy1.jpg" alt="">
    </div>

    <div class="home-content">
        <h1>It's <span>DzakyLuthfi</span></h1>
        <h3 class="text-animation">
            I'm a <span></span>
        </h3>
        <h1>YUHLEZ Software House</h1><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eligendi deserunt veniam modi eum
            maxime
            est eius, ea tenetur quos possimus,
            quaerat incidunt excepturi. Repellat nobis sunt voluptas nam nulla.</p>

        <div class="social-icons">
            <a href="https://www.instagram.com/m45j4i/"><i class="bi bi-instagram"></i>
                <a href="#"><i class="bi bi-whatsapp"></i>
                    <a href="https://www.facebook.com/profile.php?id=100050076496327"><i class="bi bi-facebook"></i>
        </div>

        <a href="#" class="btn">Hire Me</a>
    </div>
</section>

<section class="about" id="about">
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3 class="text-animation"> <span></span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem magni doloremque error animi est
            doloribus itaque dolor molestias,
            cumque laboriosam aliquam deserunt distinctio possimus atque, nihil fugit numquam. Commodi, doloribus!
        </p>
        <a href="#" class="btn">Read More</a>
    </div>
    <div class="about-img">
        <img src="assets/FOTO_SAYA-Copy1.jpg" alt="">
    </div>
</section>

<section class="services" id="services">
    <h2 class="heading"> Services</h2>

    <div class="services-container">
        <div class="services-box">
            <div class="services-info">
                <h4>Graphic Desain</h4>
                <p>lorem</p>
            </div>
        </div>
        <div class="services-box">
            <div class="services-info">
                <h4>Frontend Development</h4>
                <p>lorem</p>
            </div>
        </div>
        <div class="services-box">
            <div class="services-info">
                <h4>Graphic Desain</h4>
                <p>lorem</p>
            </div>
        </div>
        <div class="services-box">
            <div class="services-info">
                <h4>Graphic Desain</h4>
                <p>lorem</p>
            </div>
        </div>
        <div class="services-box">
            <div class="services-info">
                <h4>Graphic Desain</h4>
                <p>lorem</p>
            </div>
        </div>
        <div class="services-box">
            <div class="services-info">
                <h4>Graphic Desain</h4>
                <p>lorem</p>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form id="contactForm">
        <div class="input-box">

            <input type="text" placeholder="Full Name" id="name" name="name" required>
            <input type="email" placeholder="Email" id="email" name="email" required>
        </div>
        <div class="input-box">
            <input type="text" inputmode="numeric" placeholder="Phone Number" id="phone" name="phone">
            <input type="text" placeholder="Subject" id="subject" name="subject">
        </div>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>

        <input type="submit" value="Send Message" class="btn">
    </form>
    <div id="formMessage" class="notification"></div>
</section>


</section>



<!-- <script src="script.js"></script> -->

<?php
include 'footer.php';
?>