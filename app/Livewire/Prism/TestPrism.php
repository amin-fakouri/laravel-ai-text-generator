<?php

namespace App\Livewire\Prism;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Prism\Prism\Enums\Provider;
use Prism\Prism\Facades\Prism;

class TestPrism extends Component
{
    // Holds the user's input prompt, bound via wire:model on the textarea
    public $text;

    // Holds the AI-generated response text, displayed in the view
    public $ans;

    #[Layout('components.prism-cmp.prism-cmp')]
    public function render()
    {
        return view('livewire.prism.test-prism');
    }

    // Triggered by wire:submit="text_generate" on the form.
    // Sends the user's prompt to an LLM via Prism and stores the result.
    public function text_generate()
    {
        // Build a text-generation request using Prism's fluent API.
        // ->using() selects the provider + model (here: OpenAI's gpt-4o,
        // actually routed through the gapgpt proxy per config/prism.php).
        $response = Prism::text()
            ->using(Provider::OpenAI, 'gpt-4o')
            ->withPrompt($this->text)
            ->asText();

        // Extract the plain text output and assign it to $ans,
        // which Livewire automatically re-renders in the view.
        $this->ans = $response->text;
    }
}
