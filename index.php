
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Kovalam - Luxury Rooms & Suites</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Header */
        header {
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        header.scrolled {
            background: rgba(0, 0, 0, 0.98);
            padding: 0.5rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
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
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #d4af37;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: #d4af37;
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #d4af37;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, rgba(0,0,0,0.5), rgba(0,0,0,0.3)), 
                        url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2340&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.2) 100%);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1.5s ease;
        }
        
        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.7);
            letter-spacing: -1px;
            line-height: 1.1;
        }
        
        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #d4af37;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0;
            animation: fadeInUp 1.5s ease 0.5s forwards;
        }
        
        .hero-content p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            max-width: 700px;
            font-weight: 300;
            line-height: 1.8;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            opacity: 0;
            animation: fadeInUp 1.5s ease 1s forwards;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeInUp 1.5s ease 1.5s forwards;
        }
        
        .cta-button {
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            color: white;
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(212, 175, 55, 0.4);
        }
        
        .cta-button.secondary {
            background: transparent;
            border: 2px solid #d4af37;
            color: #d4af37;
            box-shadow: none;
        }
        
        .cta-button.secondary:hover {
            background: #d4af37;
            color: white;
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
        }
        
        /* Floating elements */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }
        
        .floating-elements::before,
        .floating-elements::after {
            content: '';
            position: absolute;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-elements::before {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-elements::after {
            width: 200px;
            height: 200px;
            bottom: 10%;
            right: 10%;
            animation-delay: 3s;
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }
        
        .scroll-indicator span {
            display: block;
            width: 30px;
            height: 50px;
            border: 2px solid rgba(255,255,255,0.7);
            border-radius: 25px;
            position: relative;
        }
        
        .scroll-indicator span::before {
            content: '';
            position: absolute;
            top: 8px;
            left: 50%;
            width: 4px;
            height: 8px;
            background: rgba(255,255,255,0.7);
            border-radius: 2px;
            transform: translateX(-50%);
            animation: scrollDown 2s infinite;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }
        
        @keyframes scrollDown {
            0% {
                opacity: 0;
                transform: translateX(-50%) translateY(0);
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translateX(-50%) translateY(20px);
            }
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
            cursor: pointer;
        }
        
        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .room-image {
            width: 100%;
            height: 250px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
        }
        
        .room-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .room-card:hover .room-image img {
            transform: scale(1.05);
        }
        
        .room-details {
            padding: 1.5rem;
        }
        
        .room-details h4 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .room-features {
            list-style: none;
            margin: 1rem 0;
        }
        
        .room-features li {
            padding: 0.25rem 0;
            color: #666;
            font-size: 0.9rem;
        }
        
        .room-features li:before {
            content: "✓ ";
            color: #d4af37;
            font-weight: bold;
        }
        
        .room-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }
        
        .price-info {
            display: flex;
            flex-direction: column;
        }
        
        .price-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: #d4af37;
        }
        
        .price-period {
            font-size: 0.9rem;
            color: #666;
        }
        
        .view-details-btn {
            background: #333;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 0.9rem;
        }
        
        .view-details-btn:hover {
            background: #d4af37;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
        }
        
        .modal-content {
            background-color: white;
            margin: 2% auto;
            padding: 0;
            border-radius: 15px;
            width: 90%;
            max-width: 1000px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: modalSlideIn 0.3s ease;
        }
        
        @keyframes modalSlideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .modal-header {
            position: relative;
            padding: 0;
            margin-bottom: 2rem;
        }
        
        .modal-hero-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }
        
        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0,0,0,0.7);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            line-height: 1;
            transition: background 0.3s;
        }
        
        .modal-close:hover {
            background: rgba(0,0,0,0.9);
        }
        
        .modal-body {
            padding: 0 2rem 2rem;
        }
        
        .modal-room-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .modal-room-subtitle {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
        }
        
        .modal-price-section {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .modal-price-amount {
            font-size: 2.5rem;
            font-weight: bold;
            color: #d4af37;
            margin-bottom: 0.5rem;
        }
        
        .modal-price-period {
            font-size: 1rem;
            color: #666;
            margin-bottom: 1rem;
        }
        
        .modal-price-note {
            font-size: 0.9rem;
            color: #999;
            font-style: italic;
        }
        
        .modal-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .modal-features-section {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .modal-features-section h4 {
            color: #d4af37;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .modal-features-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .modal-features-list li {
            padding: 0.5rem 0;
            color: #666;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .modal-features-list li:last-child {
            border-bottom: none;
        }
        
        .modal-features-list li:before {
            content: "✓ ";
            color: #d4af37;
            font-weight: bold;
            margin-right: 0.5rem;
        }
        
        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .modal-book-btn {
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .modal-book-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
        }
        
        .modal-contact-btn {
            background: transparent;
            color: #333;
            border: 2px solid #333;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .modal-contact-btn:hover {
            background: #333;
            color: white;
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
        <div class="floating-elements"></div>
        <div class="hero-content">
            <div class="hero-subtitle">Luxury Beach Resort</div>
            <h1>Welcome to Aura Kovalam</h1>
            <p>Experience luxury and tranquility at Kerala's most beautiful coastal destination. Discover our exquisite deluxe and suite rooms with breathtaking ocean views and world-class amenities.</p>
            <div class="cta-buttons">
                <a href="#booking" class="cta-button">Book Your Stay</a>
                <a href="#rooms" class="cta-button secondary">Explore Rooms</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <span></span>
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
                <div class="room-card" onclick="openRoomModal('deluxe-ocean')">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Ocean View Room">
                    </div>
                    <div class="room-details">
                        <h4>Deluxe Ocean View</h4>
                        <p>Spacious 350 sq ft room with panoramic ocean views and modern amenities.</p>
                        <ul class="room-features">
                            <li>King-size bed with premium linens</li>
                            <li>Private balcony with ocean view</li>
                            <li>Air conditioning & ceiling fan</li>
                            <li>Mini-bar and coffee maker</li>
                        </ul>
                        <div class="room-price">
                            <div class="price-info">
                                <div class="price-amount">₹8,500</div>
                                <div class="price-period">per night</div>
                            </div>
                            <button class="view-details-btn">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="room-card" onclick="openRoomModal('deluxe-garden')">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Garden View Room">
                    </div>
                    <div class="room-details">
                        <h4>Deluxe Garden View</h4>
                        <p>Comfortable 320 sq ft room overlooking lush tropical gardens.</p>
                        <ul class="room-features">
                            <li>Queen-size bed with luxury bedding</li>
                            <li>Garden view balcony</li>
                            <li>Climate control system</li>
                            <li>In-room safe and mini-bar</li>
                        </ul>
                        <div class="room-price">
                            <div class="price-info">
                                <div class="price-amount">₹7,200</div>
                                <div class="price-period">per night</div>
                            </div>
                            <button class="view-details-btn">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Suite Rooms -->
        <div class="room-type">
            <h3>Luxury Suites</h3>
            <div class="room-grid">
                <div class="room-card" onclick="openRoomModal('presidential')">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Presidential Suite">
                    </div>
                    <div class="room-details">
                        <h4>Presidential Suite</h4>
                        <p>Magnificent 800 sq ft suite with separate living area and premium ocean views.</p>
                        <ul class="room-features">
                            <li>Master bedroom with king-size bed</li>
                            <li>Separate living room with sofa</li>
                            <li>Large private terrace</li>
                            <li>Kitchenette with dining area</li>
                        </ul>
                        <div class="room-price">
                            <div class="price-info">
                                <div class="price-amount">₹18,000</div>
                                <div class="price-period">per night</div>
                            </div>
                            <button class="view-details-btn">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="room-card" onclick="openRoomModal('honeymoon')">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Honeymoon Suite">
                    </div>
                    <div class="room-details">
                        <h4>Honeymoon Suite</h4>
                        <p>Romantic 600 sq ft suite perfect for couples with special amenities.</p>
                        <ul class="room-features">
                            <li>King-size canopy bed</li>
                            <li>Romantic decor and lighting</li>
                            <li>Private jacuzzi on balcony</li>
                            <li>Champagne and flowers on arrival</li>
                        </ul>
                        <div class="room-price">
                            <div class="price-info">
                                <div class="price-amount">₹15,500</div>
                                <div class="price-period">per night</div>
                            </div>
                            <button class="view-details-btn">View Details</button>
                        </div>
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

    <!-- Room Detail Modals -->
    <div id="roomModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <img id="modalHeroImage" class="modal-hero-image" src="" alt="">
                <button class="modal-close" onclick="closeRoomModal()">&times;</button>
            </div>
            <div class="modal-body">
                <h2 id="modalRoomTitle" class="modal-room-title"></h2>
                <p id="modalRoomSubtitle" class="modal-room-subtitle"></p>
                
                <div class="modal-price-section">
                    <div id="modalPriceAmount" class="modal-price-amount"></div>
                    <div class="modal-price-period">per night</div>
                    <div class="modal-price-note">*Prices may vary based on season and availability</div>
                </div>
                
                <div class="modal-features-grid">
                    <div class="modal-features-section">
                        <h4>Room Features</h4>
                        <ul id="modalRoomFeatures" class="modal-features-list"></ul>
                    </div>
                    <div class="modal-features-section">
                        <h4>Amenities</h4>
                        <ul id="modalAmenities" class="modal-features-list"></ul>
                    </div>
                </div>
                
                <div class="modal-actions">
                    <a href="#booking" class="modal-book-btn" onclick="closeRoomModal()">Book This Room</a>
                    <button class="modal-contact-btn" onclick="closeRoomModal(); document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Contact Us</button>
                </div>
            </div>
        </div>
    </div>

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

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero');
            const speed = scrolled * 0.5;
            if (parallax) {
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.feature-card, .room-card');
            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.8s ease';
                observer.observe(el);
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

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Room data
        const roomData = {
            'deluxe-ocean': {
                title: 'Deluxe Ocean View',
                subtitle: 'Spacious 350 sq ft room with panoramic ocean views and modern amenities',
                price: '₹8,500',
                image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                features: [
                    'King-size bed with premium linens',
                    'Private balcony with ocean view',
                    'Air conditioning & ceiling fan',
                    'Mini-bar and coffee maker',
                    'Free Wi-Fi and flat-screen TV',
                    'Marble bathroom with rain shower',
                    'Room service available 24/7',
                    'Daily housekeeping service'
                ],
                amenities: [
                    'Complimentary breakfast',
                    'Beach access',
                    'Swimming pool access',
                    'Fitness center',
                    'Concierge service',
                    'Laundry service',
                    'Airport transfer (on request)',
                    'Parking facilities'
                ]
            },
            'deluxe-garden': {
                title: 'Deluxe Garden View',
                subtitle: 'Comfortable 320 sq ft room overlooking lush tropical gardens',
                price: '₹7,200',
                image: 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                features: [
                    'Queen-size bed with luxury bedding',
                    'Garden view balcony',
                    'Climate control system',
                    'In-room safe and mini-bar',
                    'Complimentary Wi-Fi',
                    'Modern bathroom amenities',
                    'Work desk and seating area',
                    'Daily turndown service'
                ],
                amenities: [
                    'Complimentary breakfast',
                    'Garden access',
                    'Swimming pool access',
                    'Spa services',
                    'Room service',
                    'Laundry service',
                    'Business center access',
                    'Parking facilities'
                ]
            },
            'presidential': {
                title: 'Presidential Suite',
                subtitle: 'Magnificent 800 sq ft suite with separate living area and premium ocean views',
                price: '₹18,000',
                image: 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                features: [
                    'Master bedroom with king-size bed',
                    'Separate living room with sofa',
                    'Large private terrace',
                    'Kitchenette with dining area',
                    'Premium bathroom with bathtub',
                    'Personal butler service',
                    'Walk-in closet',
                    'Premium entertainment system'
                ],
                amenities: [
                    'Complimentary gourmet breakfast',
                    'Private beach access',
                    'Exclusive pool area',
                    'Personal concierge',
                    'In-room spa treatments',
                    'Private dining service',
                    'Limousine service',
                    'VIP check-in/check-out'
                ]
            },
            'honeymoon': {
                title: 'Honeymoon Suite',
                subtitle: 'Romantic 600 sq ft suite perfect for couples with special amenities',
                price: '₹15,500',
                image: 'https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                features: [
                    'King-size canopy bed',
                    'Romantic decor and lighting',
                    'Private jacuzzi on balcony',
                    'Champagne and flowers on arrival',
                    'Room service dining',
                    "Couple's spa treatments available",
                    'Romantic bathroom with dual vanity',
                    'Premium sound system'
                ],
                amenities: [
                    'Romantic candlelit dinner',
                    'Couples massage',
                    'Private sunset cruise',
                    'Champagne service',
                    'Flower arrangements',
                    'Photography session',
                    'Special honeymoon packages',
                    'Late check-out privilege'
                ]
            }
        };

        // Function to open room modal
        function openRoomModal(roomType) {
            const modal = document.getElementById('roomModal');
            const room = roomData[roomType];
            
            if (room) {
                document.getElementById('modalRoomTitle').textContent = room.title;
                document.getElementById('modalRoomSubtitle').textContent = room.subtitle;
                document.getElementById('modalPriceAmount').textContent = room.price;
                document.getElementById('modalHeroImage').src = room.image;
                document.getElementById('modalHeroImage').alt = room.title;
                
                // Populate features
                const featuresContainer = document.getElementById('modalRoomFeatures');
                featuresContainer.innerHTML = '';
                room.features.forEach(feature => {
                    const li = document.createElement('li');
                    li.textContent = feature;
                    featuresContainer.appendChild(li);
                });
                
                // Populate amenities
                const amenitiesContainer = document.getElementById('modalAmenities');
                amenitiesContainer.innerHTML = '';
                room.amenities.forEach(amenity => {
                    const li = document.createElement('li');
                    li.textContent = amenity;
                    amenitiesContainer.appendChild(li);
                });
                
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        // Function to close room modal
        function closeRoomModal() {
            const modal = document.getElementById('roomModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('roomModal');
            if (event.target == modal) {
                closeRoomModal();
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeRoomModal();
            }
        });
    </script>
</body>
</html>
