
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
            background: linear-gradient(135deg, #333 0%, #2c3e50 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .booking-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            animation: bookingFloat 25s linear infinite;
            pointer-events: none;
        }
        
        @keyframes bookingFloat {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .booking-section h2 {
            position: relative;
            z-index: 2;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .booking-section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 2px;
        }
        
        .booking-form {
            background: white;
            color: #333;
            padding: 3rem;
            border-radius: 20px;
            max-width: 700px;
            margin: 0 auto;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            position: relative;
            z-index: 2;
            overflow: hidden;
        }
        
        .booking-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.05), transparent);
            transition: left 0.5s;
        }
        
        .booking-form:hover::before {
            left: 100%;
        }
        
        .form-group {
            position: relative;
            margin-bottom: 2.5rem;
        }
        
        .form-group label {
            position: absolute;
            left: 0;
            top: 1rem;
            color: #999;
            font-size: 1rem;
            transition: all 0.3s ease;
            pointer-events: none;
            font-weight: 500;
            z-index: 1;
            transform-origin: left center;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1.2rem 0 0.5rem;
            border: none;
            border-bottom: 2px solid #e0e0e0;
            background: transparent;
            font-size: 1rem;
            color: #333;
            transition: all 0.3s ease;
            outline: none;
            position: relative;
            z-index: 2;
            box-sizing: border-box;
        }
        
        .form-group input[type="date"] {
            color: transparent;
            padding-right: 2rem;
        }
        
        .form-group input[type="date"]:focus,
        .form-group input[type="date"]:valid,
        .form-group input[type="date"]::-webkit-datetime-edit {
            color: #333;
        }
        
        .form-group input:focus + label,
        .form-group input:valid + label,
        .form-group input[type="date"]:focus + label,
        .form-group input[type="date"]:not([value=""]) + label,
        .form-group select:focus + label,
        .form-group select:valid + label,
        .form-group textarea:focus + label,
        .form-group textarea:valid + label {
            top: -0.5rem;
            font-size: 0.8rem;
            color: #d4af37;
            font-weight: 600;
            transform: translateY(0);
        }
        
        /* Ensure labels float properly for filled inputs */
        .form-group input:not(:placeholder-shown) + label,
        .form-group select:not([value=""]) + label,
        .form-group textarea:not(:placeholder-shown) + label {
            top: -0.5rem;
            font-size: 0.8rem;
            color: #d4af37;
            font-weight: 600;
        }
        
        /* Special handling for date inputs */
        .form-group input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            right: 0;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
        
        .form-group input[type="date"]:hover::-webkit-calendar-picker-indicator {
            opacity: 1;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-bottom-color: #d4af37;
        }
        
        .form-highlight {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            transition: width 0.3s ease;
        }
        
        .form-group input:focus ~ .form-highlight,
        .form-group select:focus ~ .form-highlight,
        .form-group textarea:focus ~ .form-highlight {
            width: 100%;
        }
        
        .form-group select {
            cursor: pointer;
        }
        
        .form-group select option {
            background: white;
            color: #333;
            padding: 0.5rem;
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        
        .booking-submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            color: white;
            border: none;
            padding: 1.2rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 2rem;
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }
        
        .booking-submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, 0.4);
        }
        
        .booking-submit-btn:active {
            transform: translateY(-1px);
        }
        
        .booking-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .booking-submit-btn:hover::before {
            left: 100%;
        }
        
        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            overflow: hidden;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.05) 0%, transparent 70%);
            animation: contactFloat 20s linear infinite;
            pointer-events: none;
        }
        
        @keyframes contactFloat {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .contact-hero {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            z-index: 2;
        }
        
        .contact-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #333;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .contact-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 2px;
        }
        
        .contact-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-top: 1.5rem;
        }
        
        .contact-container {
            position: relative;
            z-index: 2;
        }
        
        .contact-info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .contact-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .contact-card:hover::before {
            left: 100%;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            transition: transform 0.3s ease;
        }
        
        .contact-card:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .contact-card h3 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .contact-card p {
            color: #666;
            line-height: 1.6;
        }
        
        .contact-form-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 4rem;
        }
        
        .contact-form-container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .form-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #333;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .stylish-contact-form {
            position: relative;
        }
        
        .form-group-modern {
            position: relative;
            margin-bottom: 2rem;
        }
        
        .form-group-modern input,
        .form-group-modern select,
        .form-group-modern textarea {
            width: 100%;
            padding: 1rem 0 0.5rem;
            border: none;
            border-bottom: 2px solid #e0e0e0;
            background: transparent;
            font-size: 1rem;
            color: #333;
            transition: all 0.3s ease;
            outline: none;
        }
        
        .form-group-modern label {
            position: absolute;
            left: 0;
            top: 1rem;
            color: #999;
            font-size: 1rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .form-group-modern input:focus + label,
        .form-group-modern input:valid + label,
        .form-group-modern select:focus + label,
        .form-group-modern select:valid + label,
        .form-group-modern textarea:focus + label,
        .form-group-modern textarea:valid + label {
            top: -0.5rem;
            font-size: 0.8rem;
            color: #d4af37;
            font-weight: 600;
        }
        
        .form-highlight {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            transition: width 0.3s ease;
        }
        
        .form-group-modern input:focus ~ .form-highlight,
        .form-group-modern select:focus ~ .form-highlight,
        .form-group-modern textarea:focus ~ .form-highlight {
            width: 100%;
        }
        
        .form-group-modern select {
            cursor: pointer;
        }
        
        .form-group-modern select option {
            background: white;
            color: #333;
        }
        
        .textarea-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .contact-submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            color: white;
            border: none;
            padding: 1.2rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 1rem;
        }
        
        .contact-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }
        
        .contact-submit-btn:active {
            transform: translateY(0);
        }
        
        .btn-loading {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .map-container {
            display: flex;
            align-items: stretch;
        }
        
        .map-placeholder-modern {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            width: 100%;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .map-overlay {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
        }
        
        .map-overlay h4 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        
        .map-overlay p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        
        .map-pin {
            animation: mapPing 2s infinite;
        }
        
        @keyframes mapPing {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .testimonials-section {
            margin-top: 4rem;
            text-align: center;
        }
        
        .testimonials-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .testimonials-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 2px;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .testimonial-content {
            margin-bottom: 1.5rem;
        }
        
        .quote-icon {
            margin-bottom: 1rem;
            opacity: 0.3;
        }
        
        .testimonial-content p {
            font-style: italic;
            color: #666;
            line-height: 1.6;
            text-align: left;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.1rem;
        }
        
        .author-info {
            text-align: left;
        }
        
        .author-info h5 {
            margin: 0;
            color: #333;
            font-size: 1rem;
        }
        
        .author-info span {
            color: #999;
            font-size: 0.9rem;
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
            
            nav {
                padding: 0 1rem;
            }
            
            .logo {
                font-size: 1.5rem;
            }
            
            .hero {
                height: 100vh;
                background-attachment: scroll;
                padding: 0 1rem;
            }
            
            .hero-content {
                padding: 2rem 1rem;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
                line-height: 1.2;
                margin-bottom: 1rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
                letter-spacing: 1px;
                margin-bottom: 1rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
                margin-bottom: 2rem;
                line-height: 1.6;
            }
            
            .cta-buttons {
                flex-direction: column;
                gap: 1rem;
                align-items: center;
            }
            
            .cta-button {
                width: 100%;
                max-width: 280px;
                text-align: center;
                padding: 1rem 2rem;
            }
            
            .section {
                padding: 3rem 1rem;
            }
            
            .section h2 {
                font-size: 2rem;
                margin-bottom: 2rem;
            }
            
            .room-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .room-card {
                margin: 0 auto;
                max-width: 400px;
            }
            
            .about-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .contact-info-cards {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
            }
            
            .contact-form-section {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .contact-form-container {
                padding: 2rem;
            }
            
            .form-title {
                font-size: 1.8rem;
            }
            
            .contact-title {
                font-size: 2.2rem;
            }
            
            .testimonials-title {
                font-size: 2rem;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .form-group {
                margin-bottom: 2rem;
            }
            
            .form-group label {
                font-size: 0.9rem;
                top: 1.1rem;
            }
            
            .form-group input,
            .form-group select,
            .form-group textarea {
                font-size: 16px; /* Prevents zoom on iOS */
                padding: 1.3rem 0 0.6rem;
            }
            
            .form-group input[type="date"] {
                padding-right: 2.5rem;
            }
            
            .form-group input:focus + label,
            .form-group input:valid + label,
            .form-group input[type="date"]:focus + label,
            .form-group input[type="date"]:not([value=""]) + label,
            .form-group select:focus + label,
            .form-group select:valid + label,
            .form-group textarea:focus + label,
            .form-group textarea:valid + label {
                top: -0.3rem;
                font-size: 0.75rem;
            }
            
            .form-group input:not(:placeholder-shown) + label,
            .form-group select:not([value=""]) + label,
            .form-group textarea:not(:placeholder-shown) + label {
                top: -0.3rem;
                font-size: 0.75rem;
            }
            
            .booking-form {
                padding: 1.5rem;
                margin: 0 1rem;
            }
            
            .modal-content {
                width: 95%;
                margin: 5% auto;
                max-height: 85vh;
            }
            
            .modal-body {
                padding: 0 1rem 1rem;
            }
            
            .modal-room-title {
                font-size: 2rem;
            }
            
            .modal-features-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .modal-actions {
                flex-direction: column;
                gap: 1rem;
            }
            
            .modal-book-btn,
            .modal-contact-btn {
                width: 100%;
                text-align: center;
            }
            
            .floating-elements::before,
            .floating-elements::after {
                display: none;
            }
        }
        
        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 0.9rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .cta-button {
                font-size: 1rem;
                padding: 0.9rem 1.5rem;
            }
            
            .section {
                padding: 2rem 0.5rem;
            }
            
            .section h2 {
                font-size: 1.8rem;
            }
            
            .room-details h4 {
                font-size: 1.1rem;
            }
            
            .price-amount {
                font-size: 1.3rem;
            }
            
            .booking-form {
                padding: 1rem;
            }
            
            .form-group {
                margin-bottom: 1.8rem;
            }
            
            .form-group label {
                font-size: 0.85rem;
                top: 1.2rem;
            }
            
            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 1.4rem 0 0.7rem;
                font-size: 16px;
            }
            
            .form-group input[type="date"] {
                padding-right: 3rem;
            }
            
            .form-group input:focus + label,
            .form-group input:valid + label,
            .form-group input[type="date"]:focus + label,
            .form-group input[type="date"]:not([value=""]) + label,
            .form-group select:focus + label,
            .form-group select:valid + label,
            .form-group textarea:focus + label,
            .form-group textarea:valid + label {
                top: -0.2rem;
                font-size: 0.7rem;
            }
            
            .form-group input:not(:placeholder-shown) + label,
            .form-group select:not([value=""]) + label,
            .form-group textarea:not(:placeholder-shown) + label {
                top: -0.2rem;
                font-size: 0.7rem;
            }
            
            .modal-room-title {
                font-size: 1.6rem;
            }
            
            .modal-price-amount {
                font-size: 2rem;
            }
            
            .contact-info-cards {
                grid-template-columns: 1fr;
            }
            
            .contact-card {
                padding: 1.5rem;
            }
            
            .contact-form-container {
                padding: 1.5rem;
            }
            
            .contact-title {
                font-size: 2rem;
            }
            
            .testimonials-title {
                font-size: 1.8rem;
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
                        <img src="images/rooms/deluxe_room_1.jpg" alt="Deluxe Ocean View Room">
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
                        <img src="images/rooms/deluxe_room_2.jpg" alt="Deluxe Garden View Room">
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
                        <img src="images/rooms/suite_room.jpg" alt="Presidential Suite">
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
                        <img src="images/rooms/suite_room_2.jpg" alt="Honeymoon Suite">
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
                    <input type="date" id="checkin" name="checkin" required>
                    <label for="checkin">Check-in Date</label>
                    <div class="form-highlight"></div>
                </div>
                <div class="form-group">
                    <input type="date" id="checkout" name="checkout" required>
                    <label for="checkout">Check-out Date</label>
                    <div class="form-highlight"></div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <select id="guests" name="guests" required>
                        <option value="" disabled selected></option>
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                    </select>
                    <label for="guests">Number of Guests</label>
                    <div class="form-highlight"></div>
                </div>
                <div class="form-group">
                    <select id="room_type" name="room_type" required>
                        <option value="" disabled selected></option>
                        <option value="deluxe_ocean">Deluxe Ocean View</option>
                        <option value="deluxe_garden">Deluxe Garden View</option>
                        <option value="presidential">Presidential Suite</option>
                        <option value="honeymoon">Honeymoon Suite</option>
                    </select>
                    <label for="room_type">Room Type</label>
                    <div class="form-highlight"></div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name">Full Name</label>
                    <div class="form-highlight"></div>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email Address</label>
                    <div class="form-highlight"></div>
                </div>
            </div>
            
            <div class="form-group">
                <input type="tel" id="phone" name="phone" required>
                <label for="phone">Phone Number</label>
                <div class="form-highlight"></div>
            </div>
            
            <div class="form-group">
                <textarea id="special_requests" name="special_requests" rows="4" placeholder="Airport transfer, spa treatments, special dietary requirements, etc."></textarea>
                <label for="special_requests">Special Requests or Add-ons</label>
                <div class="form-highlight"></div>
            </div>
            
            <button type="submit" name="submit_booking" class="booking-submit-btn">
                Book Your Stay Now
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
            
            // Generate reference number
            $reference_number = "AK" . date('Ymd') . rand(1000, 9999);
            
            // Room type display names
            $room_names = [
                'deluxe_ocean' => 'Deluxe Ocean View',
                'deluxe_garden' => 'Deluxe Garden View',
                'presidential' => 'Presidential Suite',
                'honeymoon' => 'Honeymoon Suite'
            ];
            $room_display_name = isset($room_names[$room_type]) ? $room_names[$room_type] : $room_type;
            
            // Email content for guest
            $guest_subject = "Booking Confirmation - Aura Kovalam (Ref: $reference_number)";
            $guest_message = "
Dear " . htmlspecialchars($name) . ",

Thank you for choosing Aura Kovalam for your stay!

BOOKING CONFIRMATION
Reference Number: $reference_number

BOOKING DETAILS:
Check-in Date: " . htmlspecialchars($checkin) . "
Check-out Date: " . htmlspecialchars($checkout) . "
Number of Guests: " . htmlspecialchars($guests) . "
Room Type: $room_display_name
Phone: " . htmlspecialchars($phone) . "

SPECIAL REQUESTS:
" . (empty($special_requests) ? "None" : htmlspecialchars($special_requests)) . "

Our reservations team will contact you within 24 hours to confirm your booking and provide payment details.

If you have any questions, please don't hesitate to contact us:
Phone: +91 471 248 0101
Email: reservations@aurakovalam.com

We look forward to welcoming you to Aura Kovalam!

Best regards,
The Aura Kovalam Team
Lighthouse Beach Road, Kovalam, Kerala 695527
            ";
            
            // Email content for hotel
            $hotel_subject = "New Booking Request - $reference_number";
            $hotel_message = "
NEW BOOKING REQUEST RECEIVED

Reference Number: $reference_number
Date/Time: " . date('Y-m-d H:i:s') . "

GUEST INFORMATION:
Name: " . htmlspecialchars($name) . "
Email: " . htmlspecialchars($email) . "
Phone: " . htmlspecialchars($phone) . "

BOOKING DETAILS:
Check-in: " . htmlspecialchars($checkin) . "
Check-out: " . htmlspecialchars($checkout) . "
Guests: " . htmlspecialchars($guests) . "
Room Type: $room_display_name

SPECIAL REQUESTS:
" . (empty($special_requests) ? "None" : htmlspecialchars($special_requests)) . "

Please follow up with the guest within 24 hours.
            ";
            
            // Email headers
            $headers = "From: reservations@aurakovalam.com\r\n";
            $headers .= "Reply-To: reservations@aurakovalam.com\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            
            // Send emails
            $guest_email_sent = mail($email, $guest_subject, $guest_message, $headers);
            $hotel_email_sent = mail("reservations@aurakovalam.com", $hotel_subject, $hotel_message, $headers);
            
            // Display confirmation message
            if ($guest_email_sent) {
                echo "<div style='background: #d4edda; color: #155724; padding: 1rem; margin-top: 2rem; border-radius: 5px; text-align: center;'>";
                echo "<h3>Booking Confirmation</h3>";
                echo "<p><strong>Thank you, " . htmlspecialchars($name) . "!</strong></p>";
                echo "<p>Your booking request has been received and a confirmation email has been sent to " . htmlspecialchars($email) . ".</p>";
                echo "<p>We will contact you within 24 hours to confirm your reservation.</p>";
                echo "<p><strong>Booking Details:</strong></p>";
                echo "<p>Check-in: " . htmlspecialchars($checkin) . " | Check-out: " . htmlspecialchars($checkout) . "</p>";
                echo "<p>Guests: " . htmlspecialchars($guests) . " | Room: $room_display_name</p>";
                echo "<p><strong>Reference Number:</strong> $reference_number</p>";
                echo "<p><em>Please save this reference number for your records.</em></p>";
                echo "</div>";
            } else {
                echo "<div style='background: #f8d7da; color: #721c24; padding: 1rem; margin-top: 2rem; border-radius: 5px; text-align: center;'>";
                echo "<h3>Booking Received</h3>";
                echo "<p><strong>Thank you, " . htmlspecialchars($name) . "!</strong></p>";
                echo "<p>Your booking request has been received successfully.</p>";
                echo "<p><strong>Reference Number:</strong> $reference_number</p>";
                echo "<p><em>Note: There was an issue sending the confirmation email, but your booking has been recorded. We will contact you directly at " . htmlspecialchars($email) . " within 24 hours.</em></p>";
                echo "</div>";
            }
        }
        ?>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
        <div class="contact-hero">
            <h2 class="contact-title">Get in Touch</h2>
            <p class="contact-subtitle">We're here to make your stay exceptional</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-info-cards">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Lighthouse Beach Road<br>
                    Kovalam, Kerala 695527<br>
                    India</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <h3>Call Us</h3>
                    <p>+91 471 248 0101<br>
                    +91 9876 543 210</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <h3>Email Us</h3>
                    <p>reservations@aurakovalam.com<br>
                    info@aurakovalam.com</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                        </svg>
                    </div>
                    <h3>Check-in Times</h3>
                    <p>Check-in: 2:00 PM<br>
                    Check-out: 12:00 PM</p>
                </div>
            </div>
            
            <div class="contact-form-section">
                <div class="contact-form-container">
                    <h3 class="form-title">Send us a Message</h3>
                    <form class="stylish-contact-form">
                        <div class="form-group-modern">
                            <input type="text" id="contact_name" name="contact_name" required>
                            <label for="contact_name">Your Name</label>
                            <div class="form-highlight"></div>
                        </div>
                        
                        <div class="form-group-modern">
                            <input type="email" id="contact_email" name="contact_email" required>
                            <label for="contact_email">Email Address</label>
                            <div class="form-highlight"></div>
                        </div>
                        
                        <div class="form-group-modern">
                            <input type="tel" id="contact_phone" name="contact_phone" required>
                            <label for="contact_phone">Phone Number</label>
                            <div class="form-highlight"></div>
                        </div>
                        
                        <div class="form-group-modern">
                            <select id="contact_subject" name="contact_subject" required>
                                <option value="" disabled selected></option>
                                <option value="booking">Booking Inquiry</option>
                                <option value="information">General Information</option>
                                <option value="special_request">Special Request</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="contact_subject">Subject</label>
                            <div class="form-highlight"></div>
                        </div>
                        
                        <div class="form-group-modern textarea-group">
                            <textarea id="contact_message" name="contact_message" rows="5" required></textarea>
                            <label for="contact_message">Your Message</label>
                            <div class="form-highlight"></div>
                        </div>
                        
                        <button type="submit" class="contact-submit-btn">
                            <span class="btn-text">Send Message</span>
                            <div class="btn-loading">
                                <div class="spinner"></div>
                            </div>
                        </button>
                    </form>
                </div>
                
                <div class="map-container">
                    <div class="map-placeholder-modern">
                        <div class="map-overlay">
                            <h4>Find Us</h4>
                            <p>Lighthouse Beach, Kovalam</p>
                            <div class="map-pin">
                                <svg width="32" height="32" fill="#d4af37" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="testimonials-section">
            <h3 class="testimonials-title">What Our Guests Say</h3>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <svg width="24" height="24" fill="#d4af37" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <p>"Absolutely stunning location with exceptional service. The ocean view from our deluxe room was breathtaking!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">SJ</div>
                        <div class="author-info">
                            <h5>Sarah & John</h5>
                            <span>United Kingdom</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <svg width="24" height="24" fill="#d4af37" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <p>"Perfect honeymoon destination. The suite was luxurious and the staff made our stay unforgettable."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">PA</div>
                        <div class="author-info">
                            <h5>Priya & Arjun</h5>
                            <span>Mumbai, India</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <svg width="24" height="24" fill="#d4af37" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <p>"The attention to detail and personalized service exceeded all our expectations. Truly a 5-star experience!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">MR</div>
                        <div class="author-info">
                            <h5>Michael & Rachel</h5>
                            <span>California, USA</span>
                        </div>
                    </div>
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
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.feature-card, .room-card');
            animateElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = `all 0.8s ease ${index * 0.2}s`;
                observer.observe(el);
                
                // Fallback: show elements after 3 seconds if observer doesn't work
                setTimeout(() => {
                    if (!el.classList.contains('animated')) {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }
                }, 3000 + (index * 200));
            });
            
            // Additional fallback for mobile devices
            if (window.innerWidth <= 768) {
                setTimeout(() => {
                    animateElements.forEach(el => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    });
                }, 1000);
            }
        });

        // Set minimum date for check-in to today
        const today = new Date().toISOString().split('T')[0];
        const checkinInput = document.getElementById('checkin');
        const checkoutInput = document.getElementById('checkout');
        
        checkinInput.setAttribute('min', today);
        
        // Function to handle date input label positioning
        function handleDateInputLabel(input) {
            const label = input.nextElementSibling;
            if (input.value) {
                label.style.top = '-0.5rem';
                label.style.fontSize = '0.8rem';
                label.style.color = '#d4af37';
                label.style.fontWeight = '600';
                label.style.transform = 'translateY(0)';
            } else {
                label.style.top = '1rem';
                label.style.fontSize = '1rem';
                label.style.color = '#999';
                label.style.fontWeight = '500';
                label.style.transform = 'translateY(0)';
            }
        }
        
        // Function to handle all form inputs label positioning
        function handleFormInputLabel(input) {
            const label = input.nextElementSibling;
            if (input.value || input.type === 'date') {
                label.style.top = '-0.5rem';
                label.style.fontSize = '0.8rem';
                label.style.color = '#d4af37';
                label.style.fontWeight = '600';
            } else {
                label.style.top = '1rem';
                label.style.fontSize = '1rem';
                label.style.color = '#999';
                label.style.fontWeight = '500';
            }
        }
        
        // Handle check-in date changes
        checkinInput.addEventListener('change', function() {
            handleDateInputLabel(this);
            const checkinDate = new Date(this.value);
            checkinDate.setDate(checkinDate.getDate() + 1);
            const minCheckout = checkinDate.toISOString().split('T')[0];
            checkoutInput.setAttribute('min', minCheckout);
            
            // Clear checkout if it's before new minimum
            if (checkoutInput.value && checkoutInput.value < minCheckout) {
                checkoutInput.value = '';
                handleDateInputLabel(checkoutInput);
            }
        });
        
        // Handle check-out date changes
        checkoutInput.addEventListener('change', function() {
            handleDateInputLabel(this);
        });
        
        // Handle focus events for better label positioning
        checkinInput.addEventListener('focus', function() {
            this.style.color = '#333';
        });
        
        checkoutInput.addEventListener('focus', function() {
            this.style.color = '#333';
        });
        
        // Initialize label positions on page load
        document.addEventListener('DOMContentLoaded', function() {
            handleDateInputLabel(checkinInput);
            handleDateInputLabel(checkoutInput);
            
            // Initialize all form labels
            const allFormInputs = document.querySelectorAll('.booking-form input, .booking-form select, .booking-form textarea');
            allFormInputs.forEach(input => {
                // Set initial label position
                handleFormInputLabel(input);
                
                // Add event listeners for better label handling
                input.addEventListener('input', function() {
                    handleFormInputLabel(this);
                });
                
                input.addEventListener('change', function() {
                    handleFormInputLabel(this);
                });
                
                input.addEventListener('blur', function() {
                    handleFormInputLabel(this);
                });
            });
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
                image: 'images/rooms/deluxe_room_1.jpg',
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
                image: 'images/rooms/deluxe_room_2.jpg',
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
                image: 'images/rooms/suite_room.jpg',
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
                image: 'images/rooms/suite_room_2.jpg',
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
