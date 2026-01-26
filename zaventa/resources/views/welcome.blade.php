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
                    <a href="{{ route('services.list') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i> Browse Services
                    </a>
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Start for Free
                        </a>
                    @endguest
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section style="background: #ffffff; padding: 5rem 2rem; margin-top: 0;">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.4rem; color: #2d3748; margin-bottom: 3.5rem; font-weight: 800; letter-spacing: -0.5px;">Why Choose Zaventa?</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-mobile-alt" style="font-size: 2.8rem; color: #6366f1; margin-bottom: 1.2rem; display: block;"></i>
                            <h3 style="font-size: 1.35rem; color: #2d3748; margin-bottom: 1rem; font-weight: 700;">Easy to Use</h3>
                            <p style="color: #6b7280; font-size: 0.95rem;">Simple, clean interface that your customers will love. No learning curve.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-clock" style="font-size: 2.8rem; color: #6366f1; margin-bottom: 1.2rem; display: block;"></i>
                            <h3 style="font-size: 1.35rem; color: #2d3748; margin-bottom: 1rem; font-weight: 700;">Save Time</h3>
                            <p style="color: #6b7280; font-size: 0.95rem;">Automate bookings, reduce no-shows, and manage your schedule effortlessly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-users" style="font-size: 2.8rem; color: #6366f1; margin-bottom: 1.2rem; display: block;"></i>
                            <h3 style="font-size: 1.35rem; color: #2d3748; margin-bottom: 1rem; font-weight: 700;">Customer Friendly</h3>
                            <p style="color: #6b7280; font-size: 0.95rem;">Customers can book anytime without creating an account. Instant confirmation.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-chart-line" style="font-size: 2.8rem; color: #6366f1; margin-bottom: 1.2rem; display: block;"></i>
                            <h3 style="font-size: 1.35rem; color: #2d3748; margin-bottom: 1rem; font-weight: 700;">Grow Your Business</h3>
                            <p style="color: #6b7280; font-size: 0.95rem;">Track bookings, manage services, and understand your customer behavior.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-lock" style="font-size: 2.8rem; color: #6366f1; margin-bottom: 1.2rem; display: block;"></i>
                            <h3 style="font-size: 1.35rem; color: #2d3748; margin-bottom: 1rem; font-weight: 700;">Secure & Reliable</h3>
                            <p style="color: #6b7280; font-size: 0.95rem;">Your data is safe with us. Built on enterprise-grade Laravel framework.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-cog" style="font-size: 2.8rem; color: #6366f1; margin-bottom: 1.2rem; display: block;"></i>
                            <h3 style="font-size: 1.35rem; color: #2d3748; margin-bottom: 1rem; font-weight: 700;">Fully Customizable</h3>
                            <p style="color: #6b7280; font-size: 0.95rem;">Add services, set your prices, and manage your bookings your way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section style="padding: 5rem 2rem; background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); color: white; margin-top: 0;">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.4rem; margin-bottom: 3.5rem; font-weight: 800; letter-spacing: -0.5px;">How Zaventa Works</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.15); width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2.2rem; font-weight: 800; color: #818cf8;">1</div>
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.8rem; font-weight: 700;">Sign Up</h3>
                        <p style="font-size: 0.95rem; opacity: 0.95;">Create your account in seconds and set up your business profile.</p>
                    </div>
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.15); width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2.2rem; font-weight: 800; color: #818cf8;">2</div>
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.8rem; font-weight: 700;">Add Services</h3>
                        <p style="font-size: 0.95rem; opacity: 0.95;">List your services with pricing and duration to make them bookable.</p>
                    </div>
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.15); width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2.2rem; font-weight: 800; color: #818cf8;">3</div>
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.8rem; font-weight: 700;">Get Bookings</h3>
                        <p style="font-size: 0.95rem; opacity: 0.95;">Customers discover and book your services instantly.</p>
                    </div>
                    <div class="col-md-6 col-lg-3" style="text-align: center;">
                        <div style="background: rgba(255, 255, 255, 0.15); width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2.2rem; font-weight: 800; color: #818cf8;">4</div>
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.8rem; font-weight: 700;">Manage & Grow</h3>
                        <p style="font-size: 0.95rem; opacity: 0.95;">View all bookings, update statuses, and scale your business.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section style="background: #f9fafb; padding: 5rem 2rem; text-align: center; margin-top: 0; border-top: 1px solid #e5e7eb;">
            <div class="container">
                <h2 style="font-size: 2.2rem; color: #2d3748; margin-bottom: 1.5rem; font-weight: 800; letter-spacing: -0.5px;">Ready to Revolutionize Your Bookings?</h2>
                <p style="font-size: 1rem; color: #6b7280; margin-bottom: 2.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                    Join service-based businesses that are already saving time and delighting customers with Zaventa.
                </p>
                <div style="display: flex; gap: 1.2rem; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="btn btn-primary" style="font-weight: 600; padding: 0.85rem 2rem; background: #6366f1; color: white; text-decoration: none; border-radius: 8px; display: inline-flex; align-items: center; gap: 0.6rem; box-shadow: 0 4px 16px rgba(99, 102, 241, 0.3);">
                        <i class="fas fa-arrow-right"></i> Get Started Free
                    </a>
                    <a href="{{ route('services.list') }}" class="btn btn-secondary" style="font-weight: 600; padding: 0.85rem 2rem; background: #6366f1; color: white; text-decoration: none; border-radius: 8px; border: none; display: inline-flex; align-items: center; gap: 0.6rem;">
                        <i class="fas fa-arrow-right"></i> Browse Bookings
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer style="background: #2d3748; color: white; padding: 2.5rem; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.1);">
            <p style="margin: 0; font-weight: 600; margin-bottom: 0.8rem;">&copy; 2026 Zaventa - Booking System. Made for Service Businesses.</p>
            <p style="margin: 0; font-size: 0.9rem; opacity: 0.9;">Simplify bookings. Delight customers. Grow your business.</p>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
