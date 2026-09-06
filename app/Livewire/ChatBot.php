<?php

namespace App\Livewire;

use App\Ai\Agents\ChatAgent;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ChatBot extends Component
{
    public string $prompt = '';

    public string $response = '';

    #[Layout('components.chat-bot-cmp.chat-bot-cmp')]
    public function render(): View
    {
        return view('livewire.chat-bot');
    }

    public function generate(): void
    {
        if (trim($this->prompt) === '') {
            return;
        }

        $this->response = (new ChatAgent)
            ->prompt($this->prompt)
            ->text;
    }
}
