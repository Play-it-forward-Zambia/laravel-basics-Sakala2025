<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zaventa - Booking & Appointment System</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light mb-0">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-calendar-check"></i>ZAVENTA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('services.list') }}">Services</a></li>
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="nav-link btn btn-link">Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <h1>
                    Streamline Your Bookings.
                    <br>
                    <span class="gradient-text">Grow Your Business.</span>
                </h1>
                <p>
                    The simple, powerful booking system for salons, clinics, tutors, photographers, and service-based businesses.
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('services.list') }}" class="btn btn-light">
                        <i class="fas fa-arrow-right"></i> Browse Services
                    </a>
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Start for Free
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </a>
                    @endguest
                </div>
            </div>
        </section>

        <!-- Features Section -->
<<<<<<< HEAD
        <section class="features-section">
            <div class="container">
                <h2>Why Choose Zaventa?</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h3>Easy to Use</h3>
                            <p>Simple, clean interface that your customers will love. No learning curve.</p>
=======
        <section style="background: white; padding: 5rem 2rem; margin-top: 3rem;">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 3rem; font-weight: 700;">Why Choose Zaventa?</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-mobile-alt" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Easy to Use</h3>
                            <p style="color: #666;">Simple, clean interface that your customers will love. No learning curve.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
<<<<<<< HEAD
                            <i class="fas fa-clock"></i>
                            <h3>Save Time</h3>
                            <p>Automate bookings, reduce no-shows, and manage your schedule effortlessly.</p>
=======
                            <i class="fas fa-clock" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Save Time</h3>
                            <p style="color: #666;">Automate bookings, reduce no-shows, and manage your schedule effortlessly.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
<<<<<<< HEAD
                            <i class="fas fa-users"></i>
                            <h3>Customer Friendly</h3>
                            <p>Customers can book anytime without creating an account. Instant confirmation.</p>
=======
                            <i class="fas fa-users" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Customer Friendly</h3>
                            <p style="color: #666;">Customers can book anytime without creating an account. Instant confirmation.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
<<<<<<< HEAD
                            <i class="fas fa-chart-line"></i>
                            <h3>Grow Your Business</h3>
                            <p>Track bookings, manage services, and understand your customer behavior.</p>
=======
                            <i class="fas fa-chart-line" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Grow Your Business</h3>
                            <p style="color: #666;">Track bookings, manage services, and understand your customer behavior.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
<<<<<<< HEAD
                            <i class="fas fa-lock"></i>
                            <h3>Secure & Reliable</h3>
                            <p>Your data is safe with us. Built on enterprise-grade Laravel framework.</p>
=======
                            <i class="fas fa-lock" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Secure & Reliable</h3>
                            <p style="color: #666;">Your data is safe with us. Built on enterprise-grade Laravel framework.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
<<<<<<< HEAD
                            <i class="fas fa-cog"></i>
                            <h3>Fully Customizable</h3>
                            <p>Add services, set your prices, and manage your bookings your way.</p>
=======
                            <i class="fas fa-cog" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Fully Customizable</h3>
                            <p style="color: #666;">Add services, set your prices, and manage your bookings your way.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
<<<<<<< HEAD
        <section class="how-it-works">
            <div class="container">
                <h2>How Zaventa Works</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <h3>Sign Up</h3>
                            <p>Create your account in seconds and set up your business profile.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <h3>Add Services</h3>
                            <p>List your services with pricing and duration to make them bookable.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <h3>Get Bookings</h3>
                            <p>Customers discover and book your services instantly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="step-item">
                            <div class="step-number">4</div>
                            <h3>Manage & Grow</h3>
                            <p>View all bookings, update statuses, and scale your business.</p>
                        </div>
=======
        <section style="padding: 5rem 2rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; margin-top: 3rem;">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; font-weight: 700;">How Zaventa Works</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.2); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; font-weight: 700;">1</div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem;">Sign Up</h3>
                        <p>Create your account in seconds and set up your business profile.</p>
                    </div>
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.2); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; font-weight: 700;">2</div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem;">Add Services</h3>
                        <p>List your services with pricing and duration to make them bookable.</p>
                    </div>
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.2); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; font-weight: 700;">3</div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem;">Get Bookings</h3>
                        <p>Customers discover and book your services instantly.</p>
                    </div>
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.2); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; font-weight: 700;">4</div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem;">Manage & Grow</h3>
                        <p>View all bookings, update statuses, and scale your business.</p>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
<<<<<<< HEAD
        <section class="cta-section">
            <div class="container">
                <h2>Ready to Revolutionize Your Bookings?</h2>
                <p>
                    Join service-based businesses that are already saving time and delighting customers with Zaventa.
                </p>
                <div class="cta-buttons">
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i> Get Started Free
                    </a>
                    <a href="{{ route('services.list') }}" class="btn btn-light">
                        <i class="fas fa-arrow-right"></i> Browse Bookings
=======
        <section style="background: white; padding: 4rem 2rem; text-align: center; margin-top: 3rem;">
            <div class="container">
                <h2 style="font-size: 2rem; color: #333; margin-bottom: 2rem; font-weight: 700;">Ready to Revolutionize Your Bookings?</h2>
                <p style="font-size: 1.1rem; color: #666; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Join service-based businesses that are already saving time and delighting customers with Zaventa.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg" style="font-weight: 700;">
                        <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Get Started Free
                    </a>
                    <a href="{{ route('services.list') }}" class="btn btn-light btn-lg" style="font-weight: 700; color: #667eea;">
                        <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Browse Bookings
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
<<<<<<< HEAD
            <p>&copy; 2026 Zaventa - Booking System. Made for Service Businesses.</p>
            <p>Simplify bookings. Delight customers. Grow your business.</p>
        </footer>

=======
            <p style="margin: 0;">&copy; 2026 Zaventa - Booking System. Made for Service Businesses.</p>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem; opacity: 0.8;">Simplify bookings. Delight customers. Grow your business.</p>
        </footer>

        <!-- Bootstrap JS -->
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
