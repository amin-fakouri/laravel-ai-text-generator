# Laravel AI Text Generator

A simple Laravel + Livewire demo showcasing AI-powered text generation using the official [Laravel AI](https://laravel.com/docs/ai) SDK.

## What is this?

This project is a minimal AI text generation application built with Laravel and Livewire.

It demonstrates how easily Laravel applications can integrate with Large Language Models (LLMs) using Laravel AI, Laravel's official AI SDK for interacting with AI providers and building AI-powered applications.

The project is designed as a learning-focused example and provides a simple foundation for building more advanced AI features such as conversations, tools, agents, structured output, and RAG.

## Features

* AI-powered text generation
* Laravel AI Agent integration
* Livewire-based interactive interface
* Loading state while the AI request is processing
* Clean and responsive Tailwind CSS UI
* Conversation-ready architecture
* Support for configuring AI providers through Laravel AI

## Tech Stack

* Laravel 13
* Livewire 4
* Tailwind CSS
* Laravel AI
* PHP 8.3+

## AI Provider

This project uses an OpenAI-compatible API endpoint for AI text generation.

You can configure your AI provider and API credentials through your `.env` file and Laravel AI configuration.

Example:

```env
OPENAI_API_KEY=your-key-here
OPENAI_URL=your-endpoint-here
```

The exact configuration may depend on the AI provider and endpoint you are using.

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/amin-fakouri/prism-text-generator.git
cd prism-text-generator
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install frontend dependencies

```bash
npm install
```

### 4. Set up your environment

Create your `.env` file:

```bash
cp .env.example .env
```

Then generate the Laravel application key:

```bash
php artisan key:generate
```

### 5. Configure your AI provider

Add your API credentials to `.env`:

```env
OPENAI_API_KEY=your-key-here
OPENAI_URL=your-endpoint-here
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Build frontend assets

```bash
npm run build
```

### 8. Start the Laravel development server

```bash
php artisan serve
```

Visit:

```text
http://localhost:8000
```

and start generating text with the AI assistant.

## Project Structure

The main AI logic is handled by a Laravel AI Agent:

```text
app/
├── Ai/
│   └── Agents/
│       └── ChatAgent.php
│
├── Livewire/
│   └── ChatBot.php
│
└── ...
```

The `ChatAgent` is responsible for defining the AI assistant's instructions and handling AI interactions, while the Livewire component provides the interactive frontend.

## Future Improvements

This project is currently a simple foundation for learning Laravel AI.

Planned improvements include:

* Conversation memory
* Context management
* Tool Calling
* AI Agents
* Structured Output
* RAG
* Vector databases
* Streaming AI responses
* Multiple AI providers

## Demo

![Laravel AI Text Generator]
(
<img width="1918" height="908" alt="Screenshot 2026-09-06 121407" src="https://github.com/user-attachments/assets/17176e27-040c-4a9c-b2ac-34e64eeb8590" />
<img width="1913" height="910" alt="Screenshot 2026-09-06 121557" src="https://github.com/user-attachments/assets/3f3e5ce6-4487-4791-9511-d211e47611ea" />


)

![Laravel AI Text Generator](https://github.com/user-attachments/assets/f57fa7b7-05e4-4089-bce2-cfc4db7eafa0)
