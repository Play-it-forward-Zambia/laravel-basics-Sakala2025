<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zaventa - Booking & Appointment System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Instrument Sans', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
            .navbar { background: rgba(255, 255, 255, 0.95) !important; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .navbar-brand { color: #667eea !important; font-weight: 700; letter-spacing: 2px; }
            .nav-link { color: #333 !important; font-weight: 500; }
            .nav-link:hover { color: #667eea !important; }
            main { min-height: calc(100vh - 200px); padding: 2rem 0; }
            .hero { padding: 5rem 2rem; text-align: center; color: white; }
            .feature-card { padding: 2rem; background: #f8f9fa; border-radius: 1rem; transition: all 0.3s ease; }
            .feature-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2); }
            .btn-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; }
            .btn-primary:hover { background: linear-gradient(135deg, #5568d3 0%, #693a91 100%); }
            footer { background: #1a1a2e; color: white; padding: 2rem; text-align: center; margin-top: 3rem; }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light mb-0">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-calendar-check" style="color: #667eea; margin-right: 0.5rem;"></i>ZAVENTA
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
                <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1rem; line-height: 1.2;">
                    Streamline Your Bookings.
                    <br>
                    <span style="background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Grow Your Business.</span>
                </h1>
                <p style="font-size: 1.3rem; margin-bottom: 2rem; opacity: 0.95; max-width: 700px; margin-left: auto; margin-right: auto;">
                    The simple, powerful booking system for salons, clinics, tutors, photographers, and service-based businesses.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('services.list') }}" class="btn btn-light btn-lg" style="font-weight: 700;">
                        <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Browse Services
                    </a>
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-light btn-outline-light btn-lg" style="font-weight: 700; border-width: 2px;">
                            Start for Free
                        </a>
                    @endguest
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section style="background: white; padding: 5rem 2rem; margin-top: 3rem;">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 3rem; font-weight: 700;">Why Choose Zaventa?</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-mobile-alt" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Easy to Use</h3>
                            <p style="color: #666;">Simple, clean interface that your customers will love. No learning curve.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-clock" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Save Time</h3>
                            <p style="color: #666;">Automate bookings, reduce no-shows, and manage your schedule effortlessly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-users" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Customer Friendly</h3>
                            <p style="color: #666;">Customers can book anytime without creating an account. Instant confirmation.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-chart-line" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Grow Your Business</h3>
                            <p style="color: #666;">Track bookings, manage services, and understand your customer behavior.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-lock" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Secure & Reliable</h3>
                            <p style="color: #666;">Your data is safe with us. Built on enterprise-grade Laravel framework.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <i class="fas fa-cog" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem; display: block;"></i>
                            <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Fully Customizable</h3>
                            <p style="color: #666;">Add services, set your prices, and manage your bookings your way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
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
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
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
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p style="margin: 0;">&copy; 2026 Zaventa - Booking System. Made for Service Businesses.</p>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem; opacity: 0.8;">Simplify bookings. Delight customers. Grow your business.</p>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
