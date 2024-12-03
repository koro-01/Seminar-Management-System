
# Seminar Management System

This Laravel project is designed to manage seminars, activities, members, and reservations for an events management platform.

## Features
- **CRUD Operations:** For seminars, activities, members, and reservations.
- **Search Functionality:** Search seminars by theme, description, or associated animator's name.
- **User Authentication:** Secured routes for authenticated users only.
- **Responsive Design:** Clean UI built with Tailwind CSS.

## Installation


1. **Set Up Laravel Breeze for Authentication**
   ```bash
   composer require laravel/breeze --dev
   php artisan breeze:install
   npm install && npm run build
   php artisan migrate
   ```

2. **Migrate and Seed Database**
   ```bash
   php artisan migrate --seed
   ```

3. **Run the Application**
   ```bash
   php artisan serve
   ```

## Usage

### Searching Seminars
- Search seminars by entering the theme, description, or the name of an animator in the search bar.

### Routes Overview
- **Seminars:** `/Events/seminaires`
- **Activities:** `/Events/activites`
- **Members:** `/Events/membres`
- **Reservations:** `/Events/reservations`

## Project Structure
- **Controllers:** Manage business logic.
- **Models:** Define relationships and data interactions.
- **Views:** Use Blade templates for the UI.
- **Routes:** Defined in `routes/web.php`.

## Key Code Highlights

### Search Method (SeminaireController)
```php
public function search(Request $request)
{
    $search = $request->input('search'); 

    $seminaires = Seminaire::query()
        ->when($search, function ($query, $search) {
            return $query->where('theme', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%")
                         ->orWhereHas('animateur', function ($query) use ($search) {
                             $query->where('nom', 'like', "%{$search}%");
                         });
        })
        ->with('animateur')
        ->paginate(10);

    return view('Events.seminaires.index', compact('seminaires', 'search'));
}
```

## Contribution
- Feel free to fork the repository, create a new branch, and submit a pull request with your contributions.

---
