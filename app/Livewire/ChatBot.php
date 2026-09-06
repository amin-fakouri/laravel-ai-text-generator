<?php

namespace App\Livewire;

use App\Ai\Agents\ChatAgent;
use Laravel\Ai\Enums\Lab;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ChatBot extends Component
{
    public string $prompt = '';

    public string $response = '';

    #[Layout('components.chat-bot-cmp.chat-bot-cmp')]
    public function render()
    {
        return view('livewire.chat-bot');
    }

    public function generate()
    {
        if (trim($this->prompt) === '') {
            return;
        }

        $this->response = (new ChatAgent)
            ->prompt($this->prompt, provider: Lab::OpenAI, model: 'gpt-4o', timeout: 60)
            ->text;
    }
}
