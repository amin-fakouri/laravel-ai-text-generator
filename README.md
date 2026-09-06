# Prism Text Generator

A simple Laravel + Livewire demo showcasing AI-powered text generation using the [Prism PHP](https://prismphp.com/) package.

## What is this?

This project is a minimal, real-time text generation tool built to explore how easily Laravel apps can integrate with Large Language Models (LLMs) using Prism — a unified PHP package for working with providers like OpenAI, Gemini, Anthropic, and more, without writing custom HTTP clients for each one.

## Features

- Real-time text generation via a Livewire component
- Loading state with disabled button + spinner while the request is processing
- Clean, responsive Tailwind UI

## Tech Stack

- Laravel 13
- Livewire 3
- Tailwind CSS
- [Prism PHP](https://github.com/prism-php/prism)

## Note on API Provider

This demo uses an OpenAI-compatible endpoint due to regional API access restrictions. You can configure it to use any provider Prism supports (OpenAI, Gemini, Anthropic, etc.) by updating your `.env` and `config/prism.php`.

## Getting Started

1. Clone the repo:
```bash
   git clone https://github.com/amin-fakouri/prism-text-generator.git
   cd prism-text-generator
```

2. Install dependencies:
```bash
   composer install
   npm install
```

3. Set up your environment:
```bash
   cp .env.example .env
   php artisan key:generate
```

4. Add your API credentials to `.env`:

OPENAI_API_KEY=your-key-here
OPENAI_URL=your-endpoint-here


5. Run migrations (if needed) and start the server:
```bash
   php artisan migrate
   npm run build
   php artisan serve
```

6. Visit `http://localhost:8000` and start generating text.

## Demo

*
<img width="1797" height="798" alt="Screenshot 2026-09-06 101215" src="https://github.com/user-attachments/assets/d8e8ec1d-aee2-41e3-8e1c-09b5208d98d9" />
<img width="1810" height="777" alt="Screenshot 2026-09-06 101250" src="https://github.com/user-attachments/assets/f57fa7b7-05e4-4089-bce2-cfc4db7eafa0" />

*
