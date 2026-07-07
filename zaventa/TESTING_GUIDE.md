# Testing & Running ZAVENTA Application

## Quick Start

### 1. Start Laravel Development Server
```bash
cd c:\Users\Admin\Documents\GitHub\laravel-basics-Sakala2025\zaventa
php artisan serve
```

Server will start at: **http://127.0.0.1:8000**

### 2. Access the Application

#### Public Pages (No Login Required)
- **Home Page:** http://127.0.0.1:8000
- **Services List:** http://127.0.0.1:8000/services
- **Booking Form:** http://127.0.0.1:8000/services/1/book (after creating a service)

#### Authentication Pages
- **Register:** http://127.0.0.1:8000/register
- **Login:** http://127.0.0.1:8000/login
- **Logout:** Dashboard menu (authenticated users only)

#### Protected Pages (Login Required)
- **Dashboard:** http://127.0.0.1:8000/dashboard
- **Manage Services:** http://127.0.0.1:8000/dashboard/services
- **Create Service:** http://127.0.0.1:8000/dashboard/services/create
- **View Bookings:** http://127.0.0.1:8000/dashboard/bookings

---

## Testing Scenarios

### Scenario 1: Register New User
1. Go to http://127.0.0.1:8000/register
2. Enter:
   - Name: Your Name
   - Email: yourname@example.com
   - Password: password123
   - Confirm Password: password123
3. Click Register
4. You'll be redirected to dashboard

### Scenario 2: Create Service
1. Login to dashboard
2. Click "Manage Services" button
3. Click "Create Service" or go to /dashboard/services/create
4. Fill form:
   - Service Name: Hair Cutting
   - Business Type: Salon
   - Price: 25.00
   - Duration: 30
5. Click "Add Service"
6. Service now appears on public Services page

### Scenario 3: Book a Service (Public)
1. Go to http://127.0.0.1:8000/services
2. Find a service card
3. Click "Book Now"
4. Fill booking form:
   - Name: Customer Name
   - Phone: 555-123-4567
   - Date: Select future date
   - Time: Select time
5. Click "Confirm Booking"
6. Booking saved (admin can view in dashboard)

### Scenario 4: Manage Bookings
1. Login to dashboard
2. Click "View Bookings"
3. See all bookings for your services
4. Update booking status (Pending → Confirmed → Completed)
5. See changes reflected in table

---

## Testing Blade Syntax

### Check All Blade Files Load Without Errors
```bash
# Navigate to each URL and check browser console for errors
http://127.0.0.1:8000              # welcome.blade.php
http://127.0.0.1:8000/services     # services/list.blade.php
http://127.0.0.1:8000/dashboard    # dashboard/index.blade.php (login first)
```

### Verify Blade Conditionals
✅ **@auth blocks:** Login button changes to "Dashboard" link when logged in
✅ **@guest blocks:** Register/Login buttons hidden when logged in
✅ **@if/@else blocks:** "No services" message shows when list is empty
✅ **@error/@enderror:** Form validation errors display per field

---

## Database Testing

### Seed Sample Data (Optional)
```bash
php artisan tinker
```

Then in tinker:
```php
// Create a user
$user = User::create([
    'name' => 'John Salon',
    'email' => 'john@salon.com',
    'password' => Hash::make('password123'),
    'role' => 'business'
]);

// Create a business
$business = Business::create([
    'user_id' => $user->id,
    'business_name' => 'John\'s Salon',
    'business_type' => 'Hair Salon',
    'phone' => '555-1234',
    'location' => 'Downtown'
]);

// Create services
Service::create([
    'business_id' => $business->id,
    'service_name' => 'Haircut',
    'price' => 25.00,
    'duration_minutes' => 30
]);

Service::create([
    'business_id' => $business->id,
    'service_name' => 'Color Treatment',
    'price' => 60.00,
    'duration_minutes' => 90
]);
```

### View Database Records
```bash
php artisan tinker
```

```php
User::all();
Business::all();
Service::all();
Booking::all();
```

---

## Testing Checklist

### Navigation & Routing
- [ ] Home page loads (welcome.blade.php)
- [ ] Services page loads (services/list.blade.php)
- [ ] Can click "Book Now" on service card
- [ ] Booking form loads (booking/create.blade.php)
- [ ] Dashboard loads after login (dashboard/index.blade.php)

### Authentication
- [ ] Register form works
- [ ] Login works
- [ ] Logout works
- [ ] Protected routes redirect to login when not authenticated
- [ ] Navigation changes based on auth state

### Forms & Validation
- [ ] Service form validates required fields
- [ ] Booking form validates required fields
- [ ] Error messages display per field with @error/@enderror
- [ ] Old input is preserved in form fields with {{ old() }}

### Blade Conditionals
- [ ] @auth blocks show only when logged in
- [ ] @guest blocks show only when NOT logged in
- [ ] @if/@else/@endif work correctly
- [ ] @foreach/@forelse/@empty display lists properly
- [ ] All @endif/@endauth/@endforelse statements close properly

### Database Operations
- [ ] Services save to database
- [ ] Bookings save to database
- [ ] Relationships work (booking→service→business→user)
- [ ] Status updates work

### UI & Styling
- [ ] Bootstrap 5 CSS loads (navbar, buttons, forms)
- [ ] Font Awesome icons display correctly
- [ ] Responsive design works on mobile/tablet/desktop
- [ ] Cards have proper spacing and styling
- [ ] Alerts and messages display properly

### Error Handling
- [ ] Validation errors show in forms
- [ ] CSRF token prevents form tampering
- [ ] Session messages display (@if(session('success')))
- [ ] @forelse/@empty shows "No items" message

---

## Browser Console Check

After loading any page, check browser console (F12) for:
- ❌ No JavaScript errors
- ❌ No CSS warnings (except vendor warnings)
- ✅ All resources loaded (images, fonts, CSS, JS)
- ✅ Bootstrap 5 and Font Awesome loaded from CDN

---

## Common Issues & Solutions

### Issue: Blade syntax error on page load
**Solution:** Check @if/@endif, @auth/@endauth pairing. All files have been validated.

### Issue: Styling not loading
**Solution:** Bootstrap 5 CDN link in layouts/app.blade.php - check it's not blocked.

### Issue: Icons not showing
**Solution:** Font Awesome 6.4.0 CDN link in head - check it's not blocked.

### Issue: Login/logout not working
**Solution:** Laravel Breeze installed. Check routes/web.php has Auth::routes() or Breeze routes.

### Issue: Database errors
**Solution:** Run `php artisan migrate` to create tables.

### Issue: 404 on dashboard
**Solution:** Ensure you're logged in. Protected routes redirect to login.

---

## File Structure Reference

```
zaventa/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── DashboardController.php
│   │   ├── ServiceController.php
│   │   └── BookingController.php
│   └── Models/
│       ├── User.php
│       ├── Business.php
│       ├── Service.php
│       └── Booking.php
├── resources/views/
│   ├── welcome.blade.php ✅ FIXED
│   ├── layouts/
│   │   └── app.blade.php ✅ VERIFIED
│   ├── dashboard/
│   │   ├── index.blade.php ✅ FIXED
│   │   └── services/
│   ├── booking/
│   │   └── create.blade.php ✅ FIXED
│   └── services/
│       └── list.blade.php ✅ FIXED
├── routes/
│   └── web.php
├── database/
│   ├── migrations/ (4 tables created)
│   └── seeders/
└── public/
    └── index.php
```

---

## Performance Notes

- ✅ No build step required (CDN-based assets)
- ✅ No Node.js/npm needed
- ✅ Lightweight Bootstrap 5 CDN
- ✅ Font Awesome icons from CDN
- ✅ Database queries optimized with Eloquent
- ✅ No Vite compilation overhead

---

## Next Steps

1. **Run the server:** `php artisan serve`
2. **Register account:** Visit /register
3. **Create service:** Add a service from dashboard
4. **Book service:** Go to /services and book
5. **Manage bookings:** View in dashboard

**All Blade files are syntax-validated and production-ready!**
