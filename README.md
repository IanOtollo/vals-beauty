# Val's Beauty - Perfected Edition ✨

A premium, fully responsive beauty artist portfolio website. This version has been "perfected" with modern mobile-first design, fluid typography, and serverless PHP deployment.

## 🌟 Key Features

### 📱 Perfect Responsiveness
- **Mobile-First Design**: Completely redesigned for mobile and tablet screens.
- **Hamburger Menu**: Clean mobile navigation system with smooth transitions.
- **Fluid Typography**: Uses CSS `clamp()` to ensure text scales beautifully across all device sizes.
- **Responsive Grids**: Optimized Gallery and Services sections that adapt to screen width (single-column on mobile, multi-column on desktop).

### ✨ UI/UX Enhancements
- **WhatsApp Integration**: High-visibility floating "Book Now" button with a subtle pulse animation.
- **Premium Aesthetics**: Refined gold and purple themes with elegant hover states and transitions.
- **Performance**: Lightweight vanilla CSS and minimal JavaScript for lightning-fast loads.

## 🛠️ Tech Stack
- **Frontend**: HTML5, Vanilla CSS3 (Custom Design System).
- **Backend**: PHP 8.2 (Serverless).
- **Deployment**: [Vercel](https://vercel.com) using the `vercel-php` community runtime.
- **Assets**: High-quality imagery retrieved from the live production site.

## 📂 Project Structure
```text
vals-beauty/
├── api/                # PHP Function folder (Vercel Requirement)
│   ├── index.php       # Homepage
│   ├── about.php       # About Page
│   ├── services.php    # Services & Pricing
│   └── gallery.php     # Project Showcase
├── images/             # Optimized site assets (logos, jpgs, etc.)
├── vercel.json         # Vercel Serverless & Routing config
├── .gitignore          # Git exclusion rules
└── README.md           # You are here!
```

## 🚀 Local Development
To run this project locally, ensure you have PHP installed:

1. Clone your repository:
   ```bash
   git clone https://github.com/IanOtollo/vals-beauty.git
   cd vals-beauty
   ```
2. Start the PHP development server:
   ```bash
   php -S localhost:8000 -t api
   ```
3. Open `http://localhost:8000` in your browser.

## ☁️ Deployment
This project is pre-configured for **Vercel**:
1. Push your code to GitHub.
2. Import the repository in your Vercel Dashboard.
3. Vercel will automatically detect the `vercel.json` and deploy it as a Serverless PHP application.

---
*Perfected by Antigravity AI*
