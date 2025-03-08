<?php
namespace App\Livewire\Layout;

use Livewire\Component;
use App\Models\Category;

class NavMenu extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all(); // Fetch categories
    }

    public function render()
    {
        return view('livewire.layout.nav-menu');
    }
}
