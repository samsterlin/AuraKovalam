
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Kovalam - Luxury Rooms & Suites</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Header */
        header {
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #d4af37;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #d4af37;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI4MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDgwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iODAwIiBmaWxsPSIjMDA3N2JlIi8+Cjx0ZXh0IHg9IjYwMCIgeT0iNDAwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iNDAiIGZpbGw9IndoaXRlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj5BdXJhIEtvdmFsYW0gLSBIZXJvIEltYWdlPC90ZXh0Pgo8L3N2Zz4=');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .cta-button {
            background: #d4af37;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .cta-button:hover {
            background: #b8941f;
        }
        
        /* Sections */
        .section {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }
        
        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .feature-card h3 {
            color: #d4af37;
            margin-bottom: 1rem;
        }
        
        /* Room Gallery */
        .room-gallery {
            background: #f8f9fa;
        }
        
        .room-type {
            margin-bottom: 4rem;
        }
        
        .room-type h3 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .room-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .room-card:hover {
            transform: translateY(-5px);
        }
        
        .room-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        .room-details {
            padding: 1.5rem;
        }
        
        .room-details h4 {
            color: #333;
            margin-bottom: 1rem;
        }
        
        .room-features {
            list-style: none;
            margin: 1rem 0;
        }
        
        .room-features li {
            padding: 0.25rem 0;
            color: #666;
        }
        
        .room-features li:before {
            content: "✓ ";
            color: #d4af37;
            font-weight: bold;
        }
        
        /* Booking Form */
        .booking-section {
            background: #333;
            color: white;
        }
        
        .booking-form {
            background: white;
            color: #333;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        
        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .contact-info h3 {
            color: #d4af37;
            margin-bottom: 1rem;
        }
        
        .map-placeholder {
            background: #e9ecef;
            height: 300px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }
        
        /* Footer */
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 2rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">Aura Kovalam</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#booking">Book Now</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to Aura Kovalam</h1>
            <p>Experience luxury and tranquility at Kerala's most beautiful coastal destination. Discover our exquisite deluxe and suite rooms with breathtaking ocean views.</p>
            <a href="#booking" class="cta-button">Book Your Stay</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2>Discover Aura Kovalam</h2>
        <div class="about-grid">
            <div class="feature-card">
                <h3>Prime Location</h3>
                <p>Nestled on the pristine shores of Kovalam, offering direct beach access and stunning sunset views from every room.</p>
            </div>
            <div class="feature-card">
                <h3>Luxury Ambiance</h3>
                <p>Elegantly designed interiors blend traditional Kerala architecture with modern amenities for ultimate comfort.</p>
            </div>
            <div class="feature-card">
                <h3>Exceptional Service</h3>
                <p>Our dedicated team ensures personalized attention and warm hospitality throughout your stay.</p>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section id="rooms" class="section room-gallery">
        <h2>Our Premium Accommodations</h2>
        
        <!-- Deluxe Rooms -->
        <div class="room-type">
            <h3>Deluxe Rooms</h3>
            <div class="room-grid">
                <div class="room-card">
                    <div class="room-image">Deluxe Ocean View</div>
                    <div class="room-details">
                        <h4>Deluxe Ocean View</h4>
                        <p>Spacious 350 sq ft room with panoramic ocean views and modern amenities.</p>
                        <ul class="room-features">
                            <li>King-size bed with premium linens</li>
                            <li>Private balcony with ocean view</li>
                            <li>Air conditioning & ceiling fan</li>
                            <li>Mini-bar and coffee maker</li>
                            <li>Free Wi-Fi and flat-screen TV</li>
                            <li>Marble bathroom with rain shower</li>
                        </ul>
                    </div>
                </div>
                
                <div class="room-card">
                    <div class="room-image">Deluxe Garden View</div>
                    <div class="room-details">
                        <h4>Deluxe Garden View</h4>
                        <p>Comfortable 320 sq ft room overlooking lush tropical gardens.</p>
                        <ul class="room-features">
                            <li>Queen-size bed with luxury bedding</li>
                            <li>Garden view balcony</li>
                            <li>Climate control system</li>
                            <li>In-room safe and mini-bar</li>
                            <li>Complimentary Wi-Fi</li>
                            <li>Modern bathroom amenities</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Suite Rooms -->
        <div class="room-type">
            <h3>Luxury Suites</h3>
            <div class="room-grid">
                <div class="room-card">
                    <div class="room-image">Presidential Suite</div>
                    <div class="room-details">
                        <h4>Presidential Suite</h4>
                        <p>Magnificent 800 sq ft suite with separate living area and premium ocean views.</p>
                        <ul class="room-features">
                            <li>Master bedroom with king-size bed</li>
                            <li>Separate living room with sofa</li>
                            <li>Large private terrace</li>
                            <li>Kitchenette with dining area</li>
                            <li>Premium bathroom with bathtub</li>
                            <li>Personal butler service</li>
                        </ul>
                    </div>
                </div>
                
                <div class="room-card">
                    <div class="room-image">Honeymoon Suite</div>
                    <div class="room-details">
                        <h4>Honeymoon Suite</h4>
                        <p>Romantic 600 sq ft suite perfect for couples with special amenities.</p>
                        <ul class="room-features">
                            <li>King-size canopy bed</li>
                            <li>Romantic decor and lighting</li>
                            <li>Private jacuzzi on balcony</li>
                            <li>Champagne and flowers on arrival</li>
                            <li>Room service dining</li>
                            <li>Couple's spa treatments available</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section id="booking" class="section booking-section">
        <h2>Make Your Reservation</h2>
        <form class="booking-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-row">
                <div class="form-group">
                    <label for="checkin">Check-in Date</label>
                    <input type="date" id="checkin" name="checkin" required>
                </div>
                <div class="form-group">
                    <label for="checkout">Check-out Date</label>
                    <input type="date" id="checkout" name="checkout" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="guests">Number of Guests</label>
                    <select id="guests" name="guests" required>
                        <option value="">Select guests</option>
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="room_type">Room Type</label>
                    <select id="room_type" name="room_type" required>
                        <option value="">Select room type</option>
                        <option value="deluxe_ocean">Deluxe Ocean View</option>
                        <option value="deluxe_garden">Deluxe Garden View</option>
                        <option value="presidential">Presidential Suite</option>
                        <option value="honeymoon">Honeymoon Suite</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="special_requests">Special Requests or Add-ons</label>
                <textarea id="special_requests" name="special_requests" rows="4" placeholder="Airport transfer, spa treatments, special dietary requirements, etc."></textarea>
            </div>
            
            <button type="submit" name="submit_booking" class="cta-button" style="width: 100%;">
                Book Now
            </button>
        </form>
        
        <?php
        if (isset($_POST['submit_booking'])) {
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $guests = $_POST['guests'];
            $room_type = $_POST['room_type'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $special_requests = $_POST['special_requests'];
            
            echo "<div style='background: #d4edda; color: #155724; padding: 1rem; margin-top: 2rem; border-radius: 5px; text-align: center;'>";
            echo "<h3>Booking Confirmation</h3>";
            echo "<p><strong>Thank you, " . htmlspecialchars($name) . "!</strong></p>";
            echo "<p>Your booking request has been received. We will contact you at " . htmlspecialchars($email) . " within 24 hours to confirm your reservation.</p>";
            echo "<p><strong>Booking Details:</strong></p>";
            echo "<p>Check-in: " . htmlspecialchars($checkin) . " | Check-out: " . htmlspecialchars($checkout) . "</p>";
            echo "<p>Guests: " . htmlspecialchars($guests) . " | Room: " . htmlspecialchars($room_type) . "</p>";
            echo "<p><strong>Reference Number:</strong> AK" . date('Ymd') . rand(1000, 9999) . "</p>";
            echo "</div>";
        }
        ?>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p><strong>Address:</strong><br>
                Lighthouse Beach Road<br>
                Kovalam, Kerala 695527<br>
                India</p>
                
                <p><strong>Phone:</strong><br>
                +91 471 248 0101<br>
                +91 9876 543 210</p>
                
                <p><strong>Email:</strong><br>
                reservations@aurakovalam.com<br>
                info@aurakovalam.com</p>
                
                <p><strong>Check-in:</strong> 2:00 PM<br>
                <strong>Check-out:</strong> 12:00 PM</p>
            </div>
            <div class="map-placeholder">
                <p>Interactive Map<br>Lighthouse Beach, Kovalam</p>
            </div>
        </div>
        
        <div style="margin-top: 3rem; background: #f8f9fa; padding: 2rem; border-radius: 10px;">
            <h3 style="text-align: center; color: #d4af37; margin-bottom: 2rem;">Guest Testimonials</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <p style="font-style: italic; margin-bottom: 1rem;">"Absolutely stunning location with exceptional service. The ocean view from our deluxe room was breathtaking!"</p>
                    <p style="font-weight: bold; color: #333;">- Sarah & John, UK</p>
                </div>
                <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <p style="font-style: italic; margin-bottom: 1rem;">"Perfect honeymoon destination. The suite was luxurious and the staff made our stay unforgettable."</p>
                    <p style="font-weight: bold; color: #333;">- Priya & Arjun, Mumbai</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Aura Kovalam. All rights reserved. | Experience luxury by the sea.</p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Set minimum date for check-in to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('checkin').setAttribute('min', today);
        
        // Update check-out minimum date when check-in changes
        document.getElementById('checkin').addEventListener('change', function() {
            const checkinDate = new Date(this.value);
            checkinDate.setDate(checkinDate.getDate() + 1);
            const minCheckout = checkinDate.toISOString().split('T')[0];
            document.getElementById('checkout').setAttribute('min', minCheckout);
        });
    </script>
</body>
</html>
