<?php require "parts/header.php"; ?>

    <section id="contact-section">

        <div class="contact-info">
            <h1 id="contact-heading-one">Have any questions?</h1>
            <p id="contact-paragraph">Please feel free to fill out our contact form to receive more information on your
                enquiry. We look forward to hearing from you! </p>
            <img id="contact-image" src="../assets/images/contact-sherman-and-co.JPG" alt="Image of a Laptop">
        </div>

        <div class="contact-field">
            <form id="contact-form" method="POST" action="parts/server.php">
                <label for="name"> Full Name: </label><br>
                <input id="name" name="name" type="text" required><br><br><br>
                
                <label for="email"> Email Address: </label><br>
                <input id="email" type="email" name="email" required><br><br><br>
                
                <label for="message" id="enquiry-form"> Enquiry: </label><br>
                <textarea name="message" id="enquiry" required rows="10" cols="100"></textarea>

                <div id="contactFormResponse"></div>
                <button id="contact-button">Submit</button>
            </form>
        </div>

        <div class="scroll-up">
            <a href="#"> <span class="fas fa-angle-up"></span></a>
        </div>

    </section>


    <?php require "parts/footer.php"; ?>